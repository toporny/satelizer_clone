(function () {
  angular
    .module('MyApp')
    .controller('PickCtrl',PickCtrl);

    PickCtrl.$inject = [];

    function PickCtrl ($scope, $http) {
		vm = this;
		vm.choose = choose;

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
			languageSelected: languages[0], // we need this to pick first element as selected
		};


		vm.data.selected = vm.data.languages[0];

		function choose( data) {
			console.log(data);
		}


    }

})();

