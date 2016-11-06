(function () {
angular
	.module('MyApp')
	.directive('showLevelButtons', function() {
		return {
			restrict: 'E',
			scope: {
				selcd: '@',
				free: '@'
			},
			link: function (scope, element, attrs) {
				console.log(attrs);
				scope.aha = '333..'+ attrs.selcd;
			},
			template: '<div style="border:1px solid red">{{aha}} + {{selcd}} + {{free}}</div>'
		};
		function showLevelButtonsCtrl() {

		}
	});
})();




(function () {
  angular
    .module('MyApp')
    .controller('PickCtrl',PickCtrl);

    PickCtrl.$inject = [];

    function PickCtrl ($scope, $http) {
		vm = this;
		vm.choose = choose;


		// todo: move it to config files
		var config = {
			'FR_fr': { label: 'French', words:4000, levels:4, free_levels: 2  },
			'GE_ge': { label: 'German', words:3000, levels:5, free_levels: 3},
			'SP_sp': { label: 'Spain',  words:10000, levels:5, free_levels: 3},
			'RU_ru': { label: 'Russian', words:10000, levels:5, free_levels: 3},
			'PL_pl': { label: 'Polish', words:5000, levels:5, free_levels: 2},
			'EN_en': { label: 'English', words:4000, levels:4, free_levels: 2}
		};
	

		var languages = [
			{ value: '-'     , label: '--select--'  },
			{ value: 'FR_fr', label: 'French'  },
			{ value: 'GE_ge', label: 'German' },
			{ value: 'SP_sp', label: 'Spain' },
			{ value: 'RU_ru', label: 'Russian' },
			{ value: 'PL_pl', label: 'Polish' }
		];
	
		vm.data = {
			languages: languages,
			config: config, 
			languageSelected: languages[0], // we need this to pick first element as selected
		};


		vm.data.selected = vm.data.languages[0];

		function choose( data) {
			console.log(data);
		}


    }

})();

