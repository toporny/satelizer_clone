
(function () {
  angular
    .module('MyApp')
    .controller('WordsListCtrl',WordsListCtrl);

    WordsListCtrl.$inject = ['$scope', '$state', '$stateParams', 'common', '$location', '$loading', 'apiUrl', 'toastr', 'availableDictionaries'];

    function WordsListCtrl ($scope, $state, $stateParams, common, $location, $loading, apiUrl, toastr, availableDictionaries) {
		vm = this;
		// vm.selectAll = selectAll; 
		// vm.selectNone = selectNone;
        vm.changePage = changePage;
        vm.remember = remember;

        // TODO: consider this <!-- http://www.memrise.com/course/250031/learn-5000-english-words/ -->
        // spinner: http://embed.plnkr.co/XLL3li/preview

        //console.log('$stateParams',$stateParams);


        vm.data = {
            totalItems : 5000,  // this is fake. After first http request totalItems takes proper value. ussualy 4500-5000
            currentPage : $location.search().level,
            removeOrAddWords : [],
        };

        changePage();

        /*
        * function remember(data)
        * data: Object {action: "remove_word_from_list", id: 12}
        * negative means remove id from the list 
        * positive means add id to the list 
        */

        function remember (data) {
            switch (data.action) {
                case 'remove_word_from_list':
                    var index = vm.data.removeOrAddWords.indexOf(data.id); 
                    // if ID exists on the list, change sign to negative
                    if(index >-1) {
                        vm.data.removeOrAddWords[index] = -data.id ;
                    }
                    else {
                        // if ID doesn't exist on the list then add new record
                        index = vm.data.removeOrAddWords.indexOf(-data.id); 
                        if(index == -1) {
                            vm.data.removeOrAddWords.push(-data.id);
                        }
                    }
                break;

                case 'add_word_to_list':
                    var index = vm.data.removeOrAddWords.indexOf(-data.id);
                    // if ID exists on the list with negative sign means
                    // record was already prepared to delete 
                    // change sign to positive (means: add to the list)
                    if(index > -1) {
                        vm.data.removeOrAddWords[index] = data.id;
                    }
                    else {
                        // if ID doesn't exist just ADD ID to the list with negative sign
                        index = vm.data.removeOrAddWords.indexOf(data.id); 
                        if(index == -1) {
                            vm.data.removeOrAddWords.push(data.id);
                        }
                    }                   
                break;
            }


            console.log('vm.data.removeOrAddWords',vm.data.removeOrAddWords);
 

            // var a = e.target.parentElement.id;
            // console.warn('----------------------');
            // console.log(' remember !!!', data  );
            // console.warn('----------------------');
        }


        function changePagePart2() {
                vm.data.removeOrAddWords = [];
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

                    // set table with "remembered unknown words"
                    angular.forEach(response.data.words.data, function(value, key) {
                        if (value.status > 0) vm.data.removeOrAddWords.push(parseInt(value.id));
                    });

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
        }

        /*
        * change page
        */

        function changePage() {

            // if there is something to remember then remember 
            if (vm.data.removeOrAddWords.length > 0) {
                var language_id = availableDictionaries[$stateParams.selected_language].id;
                $loading.start('loading-div');
                common.rememberUnknownWords(vm.data.removeOrAddWords, language_id)
                .then(function(response){
                    changePagePart2();
                    //console.log(vm.data.totalItems);
                    $loading.finish('loading-div');
                })
                .catch(function(fallback) {
                    $loading.finish('loading-div');
                    toastr.error('Problem with getting data');
                    console.log(fallback);
                });                
            }
            else {
                changePagePart2();
            }

        }
    }

})();

