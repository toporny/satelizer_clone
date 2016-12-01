
(function () {
  angular
    .module('MyApp')
    .controller('WordsListCtrl',WordsListCtrl);

    WordsListCtrl.$inject = ['$scope', '$state', '$stateParams', 'common', '$location', '$loading', 'apiUrl', 'toastr'];

    function WordsListCtrl ($scope, $state, $stateParams, common, $location, $loading, apiUrl, toastr ) {
		vm = this;
		// vm.selectAll = selectAll; 
		// vm.selectNone = selectNone;
        vm.changePage = changePage;
        vm.remember = remember;

        // pagination 
        // language
        //  https://blog.kettle.io/dynamic-pagination-angularjs-laravel/

        // TODO: consider this <!-- http://www.memrise.com/course/250031/learn-5000-english-words/ -->
        // spinner: http://embed.plnkr.co/XLL3li/preview

        //console.log('$stateParams',$stateParams);


        vm.data = {
            totalItems : 5000,  // this is fake. After first http request totalItems takes proper value. ussualy 4500-5000
            currentPage : $location.search().level,
       };



        changePage();

        function remember (e) {

           // var a = e.target.parentElement.id;
            console.warn('----------------------');
            console.log(' remember !!!', e  );
            console.warn('----------------------');
        }

        function changePage() {

       //console.log('$stateParams.words_counter', $stateParams.words_counter);
        // console.log('$stateParams.selected_language', $stateParams.selected_language);
        // console.log('$stateParams.level', $stateParams.level);

//http://localhost:3000/#/pick/words-list/4533/en_EN/?level=1
//http://localhost:3000/#/pick/words-list/4533/es_ES/?level=1


            var paramString = $stateParams.selected_language+'?page='+vm.data.currentPage;
            location.href = apiUrl+'#/pick/words-list/'+$stateParams.selected_language+'/?level='+vm.data.currentPage;
            $loading.start('loading-div');
            var paramString = $stateParams.selected_language+'?page='+vm.data.currentPage;            
            var data1 = [];
            var data2 = [];
            common.getListOfWords(paramString)
            .then(function(response){
                //console.log('response:', response);
                vm.data.totalItems = response.data.words.total;
                //console.log(vm.data.totalItems);
                $loading.finish('loading-div');
                var counter = response.data.words.data.length;
                data1 = response.data.words.data.slice(0, counter>>1);
                data2 = response.data.words.data.slice(counter>>1);
                vm.data.words1 = data1;
                vm.data.words2 = data2;
            })
            .catch(function(fallback) {
                $loading.finish('loading-div');
                toastr.error('Problem with getting data');
                console.log(fallback);
            });
            ;

        }

    }

})();

