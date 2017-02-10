(function () {
  angular
    .module('MyApp')
    .controller('PickCtrl',PickCtrl);

  PickCtrl.$inject = ['$location', '$translate', 'translatePluginToISO', '$rootScope', 'common', 'toastr', 'user', 'availableDictionaries', '$ngBootbox', 'translationsSoFar'];

  function PickCtrl ($location, $translate, translatePluginToISO, $rootScope, common, toastr, user, availableDictionaries, $ngBootbox, translationsSoFar) {
		vm = this;
		vm.next = next;
		vm.showPremiumModal = showPremiumModal;
		vm.languageSelected = languageSelected;
		vm.tmp_test = tmp_test;
		vm.tmp_getLevels = tmp_getLevels;


		vm.data = {
			//availableDictionaries : {},
			languageToLearn  : null,
			//maxWordsPerPage: maxWordsPerPage

			// languages: languages,
			// //config: config, 
			// languageSelected: languages[0], // we need this to pick first element as selected
		};

		showLeftButtons();
		languageSelected(user.getLanguageToLearn());
 

    /*
    * show Left Buttons
    */
		function showLeftButtons(){
			vm.data.languageToLearn =  user.getLocalStorage( 'languageToLearn' );
			// var current_translation = $translate.use();
			currentLocaleISO = translatePluginToISO[$translate.use()];
			var tmp = [];			
			angular.forEach(availableDictionaries, function(value, key) {
				// don't show the same language as current locale is
				if (key != currentLocaleISO) {
						tmp.push({id : key});
				}
			});
			vm.data.availableDictionaries = tmp;			
		}


		// if flag in navigation button was changed:
		$rootScope.$on('AppLanguageChanged', function(event, iResult){
			//console.log('AppLanguageChanged', event, iResult);
			var currentLocaleISO = iResult.value;
			user.setLanguageToLearn('');
			showLeftButtons(currentLocaleISO);
		});




		/*
		*	show Stage Buttons For not logged User
		*/
		function showStageButtonsForAnonymous(dictionaryID) {
			if (dictionaryID == '') {
				vm.data.levels = [];
				vm.data.languageToLearn = '';
				return;
			}
			vm.data.languageToLearn = dictionaryID;
			vm.data.levels = common.getLevels(dictionaryID);
		}



		/*
		*show Stage Buttons For Logged User
		*/

		function showStageButtonsForLoggedUser(dictionaryID) {

			if (dictionaryID == '') {
				vm.data.levels = [];
				vm.data.languageToLearn = '';
				return;
			}

			vm.data.languageToLearn = dictionaryID;
			vm.data.levels = common.getLevels(dictionaryID);

			// check in database in "user_level_progress" table
			// and add to "pick.data.levels" additional properities
			// todo: do it promise

			tmp = 1;
			angular.forEach(vm.data.levels, function(obj) {
				if (obj.available == 'yes') {
					angular.extend(obj, {fixed : (tmp++) & 1});
				}
				console.log( obj);
			});

			
			console.log('vm.data.levels',vm.data.levels);


			vm.data.languageToLearn = dictionaryID; // make the right of page visible
		}

		/*
		*	show Level Buttons
		*/
		function languageSelected(dictionaryID) {

			//if (angular.isUndefined(dictionaryID)) return;
			if (dictionaryID == null) return;

			// move this to separate service
			var languageAvailable = false;

			angular.forEach(translationsSoFar, function(value, key) { // todo: move it to common functions1
				if (dictionaryID.substr(0,2) == value.id.substr(0,2)) {
					languageAvailable = true;
				}
			});

			if (languageAvailable === false) {
				toastr.warning(dictionaryID+' not yet ready', 'Warning');
				return;
			}

			//check very quickly if dictionaryID belong to available languages
			var belong = false;
			angular.forEach(availableDictionaries, function(value, key) {
				if (key == dictionaryID) belong = true;
			});
			if (belong == false) return;


			user.setLanguageToLearn(dictionaryID);

			// check if user is anonymous
			var userStatus = user.getUserStatus();
			
			if (userStatus == 'anonymous') {
				showStageButtonsForAnonymous(dictionaryID);
				return;
			}
			else {
				showStageButtonsForLoggedUser(dictionaryID);
			}
		}


		function next(selectedLevel, is_available) {
			if (is_available == 'no') {
				common.showPremiumModal();
			}
			else
			$location.url("/pick/words-list/"+user.getLanguageToLearn()+"/").search({level: selectedLevel});
		}


		function tmp_getLevels() {
			var tmp = user.API_removeUserLevelProgress(levelData);
			console.log(tmp);
		}



		// temorary function
		function tmp_test(level) {
			if (level > 0) { // add 
				tmp = user.getLanguageToLearn();
				language_id = availableDictionaries[tmp].id;
				levelData = { language_id: language_id, stage_finished: level};
				user.API_addUserLevelProgress(levelData);
			}
			if (level < 0) { //remove
				tmp = user.getLanguageToLearn();
				language_id = availableDictionaries[tmp].id;
				levelData = { language_id: language_id, stage_finished: level};
				user.API_removeUserLevelProgress(levelData);
			}
		}



		function showPremiumModal() {
			common.showPremiumModal();
		}


	}

})();

