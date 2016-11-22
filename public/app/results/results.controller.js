// (function () {
//   angular
//     .module('MyApp')
// .directive('slideable', function () {
//     return {
//         restrict:'C',
//         compile: function (element, attr) {
//             // wrap tag
//             var contents = element.html();
//             element.html('<div class="slideable_content" style="margin:0 !important; padding:0 !important" >' + contents + '</div>');

//             return function postLink(scope, element, attrs) {
//                 // default properties
//                 attrs.duration = (!attrs.duration) ? '0.5s' : attrs.duration;
//                 attrs.easing = (!attrs.easing) ? 'ease-in-out' : attrs.easing;
//                 element.css({
//                     'overflow': 'hidden',
//                     'height': '0px',
//                     'transitionProperty': 'height',
//                     'transitionDuration': attrs.duration,
//                     'transitionTimingFunction': attrs.easing
//                 });
//             };
//         }
//     };
// })
// .directive('slideToggle', function() {
//     return {
//         restrict: 'A',
//         scope: false,
//         template: '{{more_less}}',
//         link: function($scope, element, attrs) {
//             var target = document.querySelector(attrs.slideToggle);
//             attrs.expanded = false;
// 			//$scope.more_less = 'more..';
//             $scope.more_less = 'more..';
            

//             element.bind('click', function() {
//                 var content = target.querySelector('.slideable_content');
//                 if(!attrs.expanded) {
//                     content.style.border = '1px solid rgba(0,0,0,0)';
//                     var y = content.clientHeight;
//                     content.style.border = 0;
//                     target.style.height = y + 'px';
// 					$scope.$apply(function(){
// 						$scope.more_less = 'less..';
// 					});
//                 } else {
//                     target.style.height = '0px';
// 					$scope.$apply(function(){
// 						$scope.more_less = 'more..';
// 					});
//                 }
//                 attrs.expanded = !attrs.expanded;
//             });
//         }
//     }
// });

// })();


(function () {
  angular
    .module('MyApp')
    .controller('ResultsCtrl',ResultsCtrl);

    ResultsCtrl.$inject = ['$window','$q'];

    function ResultsCtrl ($window,$q) {

    	vm = this;
    	vm.klik = klik;
    	vm.buttonsVisible = false;
    	vm.showMoreButtons = showMoreButtons;

    function showMoreButtons() {
    	vm.buttonsVisible = !vm.buttonsVisible;
    }

	function klik () {
		    FB.init({ 
		      appId: '1337484279659233',
		      status: true, 
		      cookie: true, 
		      xfbml: true,
		      version: 'v2.8'
		    });
 

            FB.ui({
                method: 'feed',
                name: 'Name you want to show',
                link: 'http://onet.pl',
                picture: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCkQT2nXrkFUVyIYqaOQ8BqjcEc6ASulI-EpKnIrb42mD5SPMP',
                //caption: 'Caption you want to show',
                description: 'Description you want to show',
                message: 'qqqqqqqq wwwwwww won 98% w just the words'
            });
	}		
// https://developers.facebook.com/tools/explorer/1337484279659233?method=GET&path=me%2Ffeed&version=v2.8

  }
})();