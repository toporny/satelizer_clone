(function () {
  angular
    .module('MyApp')
    .controller('PickCtrl',PickCtrl);

    PickCtrl.$inject = ['$ngBootbox', '$state'];

    function PickCtrl ($ngBootbox, $state) {
		vm = this;
		vm.next = next;
		vm.showModal = showModal;

		// get this from DB
		var languages = [
			{ value: ''     , label: '--select--'  },
			{ value: 'FR_fr', label: 'French'  },
			{ value: 'GE_ge', label: 'German' },
			{ value: 'SP_sp', label: 'Spain' },
			{ value: 'RU_ru', label: 'Russian' },
			{ value: 'PL_pl', label: 'Polish' }
		];
	
		vm.data = {
			languages: languages,
			//config: config, 
			languageSelected: languages[0], // we need this to pick first element as selected
		};


		vm.data.selected = vm.data.languages[0];

		function next() {
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

