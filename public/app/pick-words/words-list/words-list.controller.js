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

    WordsListCtrl.$inject = ['$state', '$stateParams', 'common', '$location', '$loading'];

    function WordsListCtrl ($state, $stateParams, common, $location, $loading ) {
		vm = this;
		vm.selectAll = selectAll; 
		vm.selectNone = selectNone;
        vm.changePage = changePage;

        // pagination 
        // language
        //  https://blog.kettle.io/dynamic-pagination-angularjs-laravel/

        // TODO: consider this <!-- http://www.memrise.com/course/250031/learn-5000-english-words/ -->
        // spinner: http://embed.plnkr.co/XLL3li/preview

        console.log('$stateParams',$stateParams);


        vm.data = {};
        vm.data.totalItems = $stateParams.words_counter;
        vm.data.currentPage = $stateParams.level;

        var paramString = $stateParams.selected_language+'?page='+vm.data.currentPage;
        
        $loading.start('loading-div');
        common.getListOfWords(paramString)
         .then(function(response){
            //console.log(response.data.words.data);
            $loading.finish('loading-div');
            vm.data.words = response.data.words.data;
        });


        function selectAll() {
            alert('selectAll');
        }

        function selectNone() {
            alert('selectNone');
        }


        function changePage() {
            var paramString = $stateParams.selected_language+'?page='+vm.data.currentPage;
            location.href='http://localhost:3000/#/pick/words-list/4534/en_EN/?level='+vm.data.currentPage;
            $loading.start('loading-div');
            var paramString = $stateParams.selected_language+'?page='+vm.data.currentPage;            
            common.getListOfWords(paramString)
             .then(function(response){
                //console.log(response.data.words.data);
                $loading.finish('loading-div');
                vm.data.words = response.data.words.data;
            });

        }


    }

})();

