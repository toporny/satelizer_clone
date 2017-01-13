(function () {
  angular
    .module('MyApp')
    .controller('PickCtrl',PickCtrl);

  PickCtrl.$inject = ['$location','$state', '$translate', 'translatePluginToISO', '$rootScope', 'common', 'toastr', 'user', 'availableDictionaries', 'maxWordsPerPage', '$ngBootbox', 'translationsSoFar'];

  function PickCtrl ($location, $state, $translate, translatePluginToISO, $rootScope, common, toastr, user, availableDictionaries, maxWordsPerPage, $ngBootbox, translationsSoFar) {
		vm = this;
		vm.next = next;
		vm.showPremiumModal = showPremiumModal;
		vm.languageSelected = languageSelected;


		vm.data = {
			//availableDictionaries : {},
			languageToLearn  : null,
			maxWordsPerPage: maxWordsPerPage

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
			var count_words = availableDictionaries[dictionaryID].count_words;
			var free_words = availableDictionaries[dictionaryID].free_words_for_not_premium_users;
			vm.data.levels = [];
			var counter = 1;
			for (i = 1; i <= count_words; i=i+maxWordsPerPage ) {
				obj = {
					i: i,
					level_name: $translate.instant('PICK_WORDS.STAGE') + ' ' + counter,
					level: counter,
					available: (i<free_words) ? 'yes' : 'no',
					counter_from_to : '('+i + '-' + (i-1+maxWordsPerPage)+ ')'
				};
				vm.data.levels.push(obj);
				counter++;
			}
		}



		/*
		*	show Stage Buttons For Logged User
		*/

		function showStageButtonsForLoggedUser(dictionaryID) {

			console.log('showStageButtonsForLoggedUser dictionaryID=',dictionaryID);
			//check very quickly if dictionaryID belong to available languages
			// var belong = false;
			// angular.forEach(availableDictionaries, function(value, key) {
			// 	if (key == dictionaryID) belong = true;
			// });
			// if (belong == false) return;
			if (dictionaryID == '') {
				vm.data.levels = [];
				vm.data.languageToLearn = '';
				return;
			}

			vm.data.languageToLearn = dictionaryID;
			var count_words = availableDictionaries[dictionaryID].count_words;
			var free_words = availableDictionaries[dictionaryID].free_words_for_not_premium_users;
			vm.data.levels = [];
			var counter = 1;
			for (i = 1; i <= count_words; i=i+maxWordsPerPage ) {
				obj = {
					i: i,
					level_name: $translate.instant('PICK_WORDS.STAGE') + ' ' + counter,
					level: counter,
					available: (i<free_words) ? 'yes' : 'no',
					counter_from_to : '('+i + '-' + (i-1+maxWordsPerPage)+ ')'
				};
				vm.data.levels.push(obj);
				counter++;
			}
 

			// if (dictionaryID == '') {
			// 	vm.data.levels = [];
			// 	vm.data.languageToLearn = '';
			// 	return;
			// }

			// vm.data.languageToLearn = dictionaryID;
			// var count_words = availableDictionaries[dictionaryID].count_words;
			// var free_words = availableDictionaries[dictionaryID].free_words_for_not_premium_users;
			// vm.data.levels = [];
			// var counter = 1;
			// for (i = 1; i <= count_words; i=i+maxWordsPerPage ) {
			// 	obj = {
			// 		i: i,
			// 		level_name: 'Stage ' + counter,
			// 		level: counter,
			// 		available: (i<free_words) ? 'yes' : 'no',
			// 		counter_from_to : '('+i + '-' + (i+maxWordsPerPage)+ ')'
			// 	};
			// 	vm.data.levels.push(obj);
			// 	counter++;

			vm.data.languageToLearn = dictionaryID; // make the right of page visible
		}

		/*
		*	show Level Buttons
		*/
		function languageSelected(dictionaryID) {

			if (angular.isUndefined(dictionaryID)) return;

			// move this to separate service
			var languageAvailable = false;
			angular.forEach(translationsSoFar, function(value, key) {
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


		function next(selectedLevel) {
			$location.url("/pick/words-list/"+user.getLanguageToLearn()+"/").search({level: selectedLevel});
		}

		function showPremiumModal() {
			common.showPremiumModal();
		}


	}

})();

