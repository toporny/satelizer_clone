(function () {
  angular
    .module('MyApp')
    .controller('PickCtrl',PickCtrl);

    PickCtrl.$inject = ['$state', 'common'];

    function PickCtrl ($state, common) {
		vm = this;
		vm.next = next;
		vm.showPremiumModal = showPremiumModal;

		vm.data = {
			// languages: languages,
			// //config: config, 
			// languageSelected: languages[0], // we need this to pick first element as selected
		};


		common.getAvailableDictionariesForUser()
        .then(function(response) {
			vm.data.availableDictionaries = angular.fromJson(response.data.languages);
        })
        .catch(function(response) {
          toastr.error(response.data.message, response.status);
        });

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

