(function () {
  angular
    .module('MyApp')
    .controller('PickCtrl',PickCtrl);

    PickCtrl.$inject = ['$location','$state', '$translate', 'translatePluginToISO', '$rootScope', 'common', 'toastr', 'user', 'availableDictionaries', 'maxWordsPerPage'];

    function PickCtrl ($location, $state, $translate, translatePluginToISO, $rootScope, common, toastr, user, availableDictionaries, maxWordsPerPage) {
		vm = this;
		vm.next = next;
		vm.showPremiumModal = showPremiumModal;
		vm.showLevelButtons = showLevelButtons;


		vm.data = {
			//availableDictionaries : {},
			languageToLearn  : null,
			maxWordsPerPage: maxWordsPerPage

			// languages: languages,
			// //config: config, 
			// languageSelected: languages[0], // we need this to pick first element as selected
		};

		showLeftButtons();
		showLevelButtons(user.getLanguageToLearn());
 

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
			console.log('tmp',tmp);
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
		*	show Level Buttons For not logged User
		*/
		function showLevelButtonsForAnonymous(dictionaryID) {
			vm.data.languageToLearn = dictionaryID;
			var count_words = availableDictionaries[dictionaryID].count_words;
			var free_words = availableDictionaries[dictionaryID].free_words_for_not_premium_users;
			vm.data.levels = [];
			var counter = 1;
			for (i = 1; i <= count_words; i=i+maxWordsPerPage ) {
				obj = {
					i: i,
					level_name: 'Level ' + counter,
					level: counter,
					available: (i<free_words) ? 'yes' : 'no',
					counter_from_to : '('+i + '-' + (i+maxWordsPerPage)+ ')'
				};
				vm.data.levels.push(obj);
				counter++;
			}
		}



		/*
		*	show Level Buttons For Logged User
		*/

		function showLevelButtonsForLoggedUser(dictionaryID) {
			// LEVEL 1</b> (1-500)
			switch(dictionaryID) {
				case 'en_EN':
				 	console.log('en_EN');
					vm.data.levels = [
						{"lvl_name": "lvl1EN", "available":"yes"},
						{"lvl_name": "lvl2EN", "available":"no"},
						{"lvl_name": "lvl3EN", "available":"yes"},
						{"lvl_name": "lvl4EN", "available":"no"},
						{"lvl_name": "lvl5EN", "available":"no"},
						{"lvl_name": "lvl6EN", "available":"yes"},
						{"lvl_name": "lvl7EN", "available":"no"},
					];
				break;
				case 'es_ES':
				 	console.log('es_ES');
					vm.data.levels = [
						{"lvl_name": "lvl1ES", "available":"no"},
						{"lvl_name": "lvl2ES", "available":"no"},
						{"lvl_name": "lvl3ES", "available":"no"},
						{"lvl_name": "lvl4ES", "available":"no"},
						{"lvl_name": "lvl5ES", "available":"no"},
						{"lvl_name": "lvl6ES", "available":"no"},
						{"lvl_name": "lvl7ES", "available":"no"},
					];
				break;
			}
			vm.data.languageToLearn = dictionaryID; // make the right of page visible
		}

		/*
		*	show Level Buttons
		*/
		function showLevelButtons(dictionaryID) {

			if (angular.isUndefined(dictionaryID)) return;
			// check very quickly if dictionaryID belong to available languages
			var belong = false;
			angular.forEach(availableDictionaries, function(value, key) {
				if (key == dictionaryID) belong = true;
			});
			if (belong == false) return;

			user.setLanguageToLearn(dictionaryID);

			console.log('showLevelButtons, dictionaryID = ', dictionaryID);
			// if user is anonymous
			var userStatus = user.getUserStatus();
			
			if (userStatus == 'anonymous') {
				showLevelButtonsForAnonymous(dictionaryID);
				return;
			}

			showLevelButtonsForLoggedUser(dictionaryID);


		}


		function next(selectedLevel) {
			//common.getAvailableDictionaries();
			//$state.go('words-list', {selected_language: 'en_EN', level: selectedLevel});
			var param = {
				level: selectedLevel
			};

			 $location.url("/pick/words-list/4534/en_EN/").search(param);

			//$state.go('words-list/:words_counter/:selected_language/:level?', {level: selectedLevel, words_counter: 4534,  selected_language: 'en_EN'});
		}

		function showPremiumModal() {
			common.showPremiumModal();
		}


	}

})();

