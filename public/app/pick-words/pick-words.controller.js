(function () {
angular
	.module('MyApp')
	.directive('showLevelButtons', function() {
		return {
			restrict: 'A',
			scope: {
				showLevelButtons: '@'
			},
			link: function (scope, element, attrs) {
				// scope.$watch('showLevelButtons', function(newValue, oldValue) {
				// 	if (newValue) console.log("I see a data change!");
				// });

				// console.log(attrs);
				// scope.aha = attrs.showLevelButtons ;
				// console.log('aha',scope.aha);

			},
			template: '<div style="border:1px solid red">{{showLevelButtons.value}}</div>'+ 
			'<div ng-repeat="n in [].constructor(4) track by $index"> {{$index}} </div>'
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
			'FR_fr': { label: 'French',  words:4000,  levels:3, free_levels: 1 },
			'GE_ge': { label: 'German',  words:3000,  levels:3, free_levels: 2 },
			'SP_sp': { label: 'Spain',   words:10000, levels:4, free_levels: 3 },
			'RU_ru': { label: 'Russian', words:10000, levels:5, free_levels: 3 },
			'PL_pl': { label: 'Polish',  words:5000,  levels:3, free_levels: 2 },
			'EN_en': { label: 'English', words:4000,  levels:4, free_levels: 2 }
		};
	

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
			config: config, 
			languageSelected: languages[0], // we need this to pick first element as selected
		};


		vm.data.selected = vm.data.languages[0];

		function choose( data) {
			console.log(data);
		}


    }

})();

