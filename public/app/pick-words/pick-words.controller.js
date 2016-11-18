(function () {
  angular
    .module('MyApp')
    .controller('PickCtrl',PickCtrl);

    PickCtrl.$inject = ['$ngBootbox', '$state', 'common'];

    function PickCtrl ($ngBootbox, $state, common) {
		vm = this;
		vm.next = next;
		vm.show_premium_modal = show_premium_modal;


		vm.data = {
			// languages: languages,
			// //config: config, 
			// languageSelected: languages[0], // we need this to pick first element as selected
		};

//		common.getAvailableDictionaries()


		common.getAvailableDictionariesForUser()
        .then(function(response) {
			vm.data.availableDictionaries = angular.fromJson(response.data.languages);
        })
        .catch(function(response) {
          toastr.error(response.data.message, response.status);
        });




//		vm.data.selected = vm.data.languages[0];

		function next(selectedLevel) {
			//common.getAvailableDictionaries();
			//$state.go('words-list', {selected_language: 'en_EN', level: selectedLevel});
			$state.go('words-list/:selected_language/:level', {selected_language: 'en_EN', level:'2'});
		}

		function show_premium_modal() {
			console.log('show_premium_modal');
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

