(function () {
  angular
    .module('MyApp')
    .controller('PickCtrl',PickCtrl);

    PickCtrl.$inject = ['$state', '$translate', 'translatePluginToISO', '$rootScope', 'common'];

    function PickCtrl ($state,  $translate, translatePluginToISO, $rootScope, common) {
		vm = this;
		vm.next = next;
		vm.showPremiumModal = showPremiumModal;
		vm.showLevelButtons = showLevelButtons;

		vm.data = {
			availableDictionaries : {},
			languageToLearn  : null
			// languages: languages,
			// //config: config, 
			// languageSelected: languages[0], // we need this to pick first element as selected
		};



		function showLeftButtons(currentLocaleISO){
			common.getAvailableDictionariesAndLevels()
				.then(function(response) {
					vm.data.languageToLearn = response.data.language_to_learn;
					//vm.data.levels = [{"lvl_name": "lvl1ES", "available":"yes"},{"lvl_name": "lvl2ES", "available":"no"},{"lvl_name": "lvl3ES", "available":"yes"},{"lvl_name": "lvl4ES", "available":"no"},{"lvl_name": "lvl5ES", "available":"no"},{"lvl_name": "lvl6ES", "available":"yes"},{"lvl_name": "lvl7ES", "available":"no"}];
					var tmp = [];
					angular.forEach(response.data.languages, function(value, key) {
						// don't show the same language as current locale is
						if (value.language_id != currentLocaleISO) {
								tmp.push({id : value.language_id});
						}
					});
					vm.data.availableDictionaries = tmp;

					// TODO: if languageToLearn is set then set vm.data.levels !!!!!!!!!!!!
					//vm.data.availableDictionaries = response.data.languages;

					// if language_to_learn is not defined then
					// -- SHOW all buttons list 
					// -- DONT SHOW more/less buttons
					// -- show empty space on the right side

					// if language_to_learn is defined then SHOW all buttons list and DONT SHOW more/less buttons
					// set class "active" to "language_to_learn" button (mostly on the top)
				})
				.catch(function(response) {
					toastr.error(response.data.message, response.status);
				});
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

