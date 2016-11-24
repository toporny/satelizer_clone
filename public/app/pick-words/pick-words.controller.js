(function () {
  angular
    .module('MyApp')
    .controller('PickCtrl',PickCtrl);

    PickCtrl.$inject = ['$state', '$translate', 'translatePluginToISO', '$rootScope', 'common', 'toastr', 'user', 'availableDictionaries'];

    function PickCtrl ($state,  $translate, translatePluginToISO, $rootScope, common, toastr, user, availableDictionaries) {
		vm = this;
		vm.next = next;
		vm.showPremiumModal = showPremiumModal;
		vm.showLevelButtons = showLevelButtons;

		vm.data = {
			//availableDictionaries : {},
			languageToLearn  : null
			// languages: languages,
			// //config: config, 
			// languageSelected: languages[0], // we need this to pick first element as selected
		};



		function showLeftButtons(currentLocaleISO){

			// user.getPersonalData()
			// .then(function(userData){

			// 		console.log('userData', userData);
			// 		vm.data.languageToLearn = userData.language_to_learn;
			// 		//vm.data.levels = [{"lvl_name": "lvl1ES", "available":"yes"},{"lvl_name": "lvl2ES", "available":"no"},{"lvl_name": "lvl3ES", "available":"yes"},{"lvl_name": "lvl4ES", "available":"no"},{"lvl_name": "lvl5ES", "available":"no"},{"lvl_name": "lvl6ES", "available":"yes"},{"lvl_name": "lvl7ES", "available":"no"}];
			// 		var tmp = [];
			// 		angular.forEach(availableDictionaries, function(value, key) {
			// 			// don't show the same language as current locale is
			// 			if (key != currentLocaleISO) {
			// 					tmp.push({id : key});
			// 			}
			// 		});
			// 		console.log('tmp',tmp);
			// 		vm.data.availableDictionaries = tmp;
			// });

		}



		showLeftButtons(translatePluginToISO[$translate.use()]);
 

		// if flag in navigation button was changed:
		$rootScope.$on('AppLanguageChanged', function(event, iResult){
			console.log('AppLanguageChanged', event, iResult);
			var currentLocaleISO = iResult.value;
			showLeftButtons(currentLocaleISO);
		});



		function showLevelButtons(dictionaryID) {
			console.log('showLevelButtons', dictionaryID);
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


		function next(selectedLevel) {
			//common.getAvailableDictionaries();
			//$state.go('words-list', {selected_language: 'en_EN', level: selectedLevel});
			$state.go('words-list/:selected_language/:words_counter/:level', {selected_language: 'en_EN', level: selectedLevel, words_counter: 4534});
		}

		function showPremiumModal() {
			common.showPremiumModal();
		}		


	}

})();

