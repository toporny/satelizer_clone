(function () {
  angular
    .module('MyApp')
    .controller('PickCtrl',PickCtrl);

    PickCtrl.$inject = ['$ngBootbox', '$state', 'common'];

    function PickCtrl ($ngBootbox, $state, common) {
		vm = this;
		vm.next = next;
		vm.showModal = showModal;


		vm.data = {
			// languages: languages,
			// //config: config, 
			// languageSelected: languages[0], // we need this to pick first element as selected
		};

//		common.getAvailableDictionaries()


		common.getAvailableDictionariesForLanguage()
        .then(function(response) {
			vm.data.availableDictionaries = angular.fromJson(response.data.languages);
        })
        .catch(function(response) {
          toastr.error(response.data.message, response.status);
        });




//		vm.data.selected = vm.data.languages[0];

		function next() {
			common.getAvailableDictionaries();
			$state.go('words-list');
		}

		function showModal() {

			var options = {
			    message: 'This feature is available only for premium users.',
			    title: 'Premium required',
			    className: 'test-class',
			    buttons: {
					success: {
						label: "Buy premium",
						className: "btn-success",
						callback: function() {
							$state.go('premium');
						}
					},			    	
					warning: {
						label: "Cancel",
						className: "btn-warning",
						callback: function() { }
					}

			    }
			};

			$ngBootbox.customDialog(options);

		}		


    }

})();

