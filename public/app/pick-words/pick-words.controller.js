(function () {
  angular
    .module('MyApp')
    .controller('PickCtrl',PickCtrl);

    PickCtrl.$inject = ['$state', 'common'];

    function PickCtrl ($state, common) {
		vm = this;
		vm.next = next;
		vm.showPremiumModal = showPremiumModal;
		vm.showLevelButtons = showLevelButtons;

		vm.data = {
			availableDictionaries : {}
			// languages: languages,
			// //config: config, 
			// languageSelected: languages[0], // we need this to pick first element as selected
		};

		common.getAvailableDictionaries()
			.then(function(response) {

				console.log(response);
				// response.data.languages

			  	var tmp = [];
				angular.forEach(response.data.languages, function(value, key) {
					if (value.language_id != response.data.user_locale){
						tmp.push({id : value.language_id});
					}
				});
				vm.data.availableDictionaries = tmp;
			})
			.catch(function(response) {
				toastr.error(response.data.message, response.status);
			});


        function showLevelButtons(dictionaryID) {
        	console.log('showLevelButtons', dictionaryID);
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

