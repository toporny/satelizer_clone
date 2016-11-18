// (function () {

//   angular
//     .module('MyApp')
//     .directive('thumbnail', [function() {
//   return {
//     restrict: 'CA',
//     replace: false,
//     transclude: false,
//     scope: {
//         words: '=words',
//         // item: '=itemdata'
//     },
//     template: [

// '<table class="table table-hover">',
// '  <thead>',
// '    <tr class="">',
// '      <th>#</th>',
// '      <th>WORD</th>',
// '      <td class="text-center">',
// '        <button ng-click="wordsList.selectAll()" type="button" class="btn btn-primary btn-sm">ALL</button>',
// '        <button ng-click="wordsList.selectNone()" type="button" class="btn btn-primary btn-sm">NONE</button>',
// '      </td>',
// '    </tr>',
// '  </thead>',
// '  <tbody>',
// '    <tr class="success ahawords" ng-repeat="word in wordsList.data.words">',
// '      <td>{{word.id}}</th>',
// '      <td>tree</td>',
// '      <td class="text-center"><span style="font-size:18px" class="icon ion-android-happy"></span></td>',
// '    </tr>',
// '  </tbody>',
// '</table>'
// ].join('')

//     ,
//     link: function(scope, elem, attrs) {
//         console.log('attrs.words = ',attrs.words);

//         elem.bind('click', function(e) {
//             var aha = elem.find('tr.ahawords');
//             console.log('e',e);
//             console.log('elem.parent()', e.target.parentElement);
//             // call your SmoothZoom here
//             //angular.element(attrs.options).css({'background-image':'url('+ scope.item.src +')'});
//         });
//     }
// }
// }]);

// })();


(function () {
  angular
    .module('MyApp')
    .controller('WordsListCtrl',WordsListCtrl);

    WordsListCtrl.$inject = ['$ngBootbox', '$state', '$stateParams', 'common'];

    function WordsListCtrl ($ngBootbox, $state, $stateParams, common) {
		vm = this;
		vm.selectAll = selectAll; 
		vm.selectNone = selectNone;

        // pagination 
        // language
        //  https://blog.kettle.io/dynamic-pagination-angularjs-laravel/

        // TODO: consider this <!-- http://www.memrise.com/course/250031/learn-5000-english-words/ -->

        console.log('$stateParams',$stateParams);

        vm.data = {};
        
        var paramString = $stateParams.selected_language+'?page='+$stateParams.level;
        common.getListOfWords(paramString)
         .then(function(response){
            //console.log(response.data.words.data);
            vm.data.words = response.data.words.data;
        });


        function selectAll() {
            alert('selectAll');
        }

        function selectNone() {
            alert('selectNone');
        }

    }

})();

