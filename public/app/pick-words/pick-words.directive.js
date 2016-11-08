(function () {

angular
	.module('MyApp')
	.directive('showLevelButtons', function(definedLanguages) {
		return {
			restrict: 'A',
			scope: {
				languageSelected: '=languageSele',
				showModal: '&',
				next: '&' 
			},
			//controller: showLevelButtonsContorller,
			//controllerAs: $ctrl,
			// bindTo
			link: link,


			template: [
				'<div ng-repeat="n in aWords track by $index">',
				'	<span ng-if="n.free != 1" >',
				'	  <button ng-click="next()" type="button" class="btn btn-success" style="margin:4px; width:110px">',
				'	  <i class="ion-locked"></i>',
				'	Level {{ n.level }}</button>({{ n.from }}-{{ n.to }} most used words)',
				'	</span>',
				'	<span ng-if="n.free == 1" >',
				'	  <button ng-click="showModal()" type="button" class="btn btn-danger" style="margin:4px; width:110px">',
				'	  <i class="ion-play"></i>',
				'	Level {{ n.level }}</button>({{ n.from }}-{{ n.to }} most used words)',
				'	</span>',
				'</div>'
			].join('')
		};

		function link (scope, element, attrs) {
			// element.bind('click', function() {
			// 	var aaa = element.find('button') ;
			// 	console.log('aaa',aaa);

			// 	// // call your SmoothZoom here
			// 	// angular.element(attrs.options).css({'background-image':'url('+ scope.item.src +')'});
			// });
			// scope.directiveClick = function(){
			// 	alert("directive method");
			// }
			// 500 is hardcoded;
			scope.$watch('languageSelected', function(newValue, oldValue) {
				if (newValue) console.log("I see a data change!", newValue.value);
				//console.log( definedLanguages[newValue.value].label);
				if (angular.isDefined(newValue.value) && newValue.value ) {

					var freeWords = definedLanguages[newValue.value].free_words;
					var words = definedLanguages[newValue.value].words;

					scope.aWords = [];
					var free=0;
					for (i=0; i<words/500; i++) {
						if ((i*500) >= freeWords) free = 1; else free = 0;
						scope.aWords.push({level: i+1, from:500*i, to: 500*i+500, free:free});
					}
					//scope.languageSelected2 = definedLanguages[newValue.value].free_levels;
				} 
				else scope.aWords = [];
			});
		}


		// function showLevelButtonsContorller() {

		// }


	});
})();