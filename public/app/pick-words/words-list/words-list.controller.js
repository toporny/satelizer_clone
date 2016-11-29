
(function () {
  angular
    .module('MyApp')
    .controller('WordsListCtrl',WordsListCtrl);

    WordsListCtrl.$inject = ['$state', '$stateParams', 'common', '$location', '$loading', 'apiUrl'];

    function WordsListCtrl ($state, $stateParams, common, $location, $loading, apiUrl ) {
		vm = this;
		// vm.selectAll = selectAll; 
		// vm.selectNone = selectNone;
        vm.changePage = changePage;

        // pagination 
        // language
        //  https://blog.kettle.io/dynamic-pagination-angularjs-laravel/

        // TODO: consider this <!-- http://www.memrise.com/course/250031/learn-5000-english-words/ -->
        // spinner: http://embed.plnkr.co/XLL3li/preview

        console.log('$stateParams',$stateParams);


        vm.data = {};
        vm.data.totalItems = $stateParams.words_counter;
        vm.data.currentPage = $location.search().level;

        changePage();
        // var paramString = $stateParams.selected_language+'?page='+vm.data.currentPage;
        
        // $loading.start('loading-div');
        // common.getListOfWords(paramString)
        //  .then(function(response){
        //     //console.log(response.data.words.data);
        //     $loading.finish('loading-div');
        //     vm.data.words = response.data.words.data;
        // });


// [14, 3, 77, 12, 13, 145, 15].splice(0, 4)


        function changePage() {
            var paramString = $stateParams.selected_language+'?page='+vm.data.currentPage;
            location.href = apiUrl+'#/pick/words-list/4534/en_EN/?level='+vm.data.currentPage;
            $loading.start('loading-div');
            var paramString = $stateParams.selected_language+'?page='+vm.data.currentPage;            
            var data1 = [];
            var data2 = [];
            common.getListOfWords(paramString)
             .then(function(response){
                var counter = response.data.words.data.length;
                //console.log('counter', counter);
                data1 = response.data.words.data.slice(0, counter>>1);
                data2 = response.data.words.data.slice(counter>>1);
                $loading.finish('loading-div');
                vm.data.words1 = data1;
                vm.data.words2 = data2;
                // console.log(vm.data.words1);
                // console.log(vm.data.words2);
            });

        }


    }

})();

