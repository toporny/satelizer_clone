(function () {
  angular
    .module('MyApp')
    .controller('PickCtrl',PickCtrl);

    PickCtrl.$inject = [];

    function PickCtrl ($scope, $http) {
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
			console.log('startLevel!, languageSelected = ',vm.data.languageSelected);
			alert('next = ');

		}

		function showModal() {
			console.log('showModal');
			alert('showModal ');
		}		


    }

})();

