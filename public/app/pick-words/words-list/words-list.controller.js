(function () {
  angular
    .module('MyApp')
    .controller('WordsListCtrl',WordsListCtrl);

    WordsListCtrl.$inject = ['$scope', '$state', '$stateParams', 'common', '$location', '$loading', 'apiUrl', 'toastr', 'availableDictionaries'];

    /*
    * Words List Controller
    */
    function WordsListCtrl ($scope, $state, $stateParams, common, $location, $loading, apiUrl, toastr, availableDictionaries) {
		vm = this;
        vm.changePage = changePage;
        vm.remember = remember;
        vm.selectNoneAllParent = selectNoneAllParent;

        // TODO: consider this <!-- http://www.memrise.com/course/250031/learn-5000-english-words/ -->

        vm.data = {
            totalItems : 5000,  // this is fake. After first http request totalItems takes proper value. ussualy 4500-5000
            currentPage : $location.search().level,
            uibPpaginationVisible: true
        };
        vm.originalViewIdList = [];
        vm.currentViewIdList = [];

        changePagePart2();


        /*
        * select None (or) All
        * @param {object} data  / data ex: { action: action,  words: $ctrl.words }
        * this function mainly updates currentViewIdList
        * currentViewIdList cares which words are selected/unselected by red color
        */
        function selectNoneAllParent (data) {

            tmp_index_help = {};
            for (var i = 0; i < vm.currentViewIdList.length; i++) {
                tmp_index_help[vm.currentViewIdList[i].id] = i;
            }

            switch(data.action) {
                case 'selectAll':
                    for (var i = 0; i < data.words.length; i++) {
                        pass = {};
                        pass.id = data.words[i].id;
                        pass.status = 3;
                        vm.currentViewIdList[tmp_index_help[data.words[i].id]] = pass;
                    }
                break;
                case 'selectNone':
                    for (var i = 0; i < data.words.length; i++) {
                        pass = {};
                        pass.id = data.words[i].id;
                        pass.status = null;
                        vm.currentViewIdList[tmp_index_help[data.words[i].id]] = pass;
                    }
                break;
            }
        }


        /*
        * Remember or forget word
        * @param {object} data  / data ex: {action: "remove_word_from_list", id: 12}
        * negative id means remove id from the list 
        * positive id means add id to the list 
        */
        function remember (data) {

            switch (data.action) {
                case 'remove_word_from_list':
                    for (var i = 0; i < vm.currentViewIdList.length; i++) {
                        if (vm.currentViewIdList[i].id == data.id) {
                            vm.currentViewIdList[i].status = null;
                            break;
                        }
                    }
                break;

                case 'add_word_to_list':
                    for (var i = 0; i < vm.currentViewIdList.length; i++) {
                        if (vm.currentViewIdList[i].id == data.id) {
                            vm.currentViewIdList[i].status = 3;
                            break;
                        }
                    }
                break;
            }
        }

        /*
        * changePagePart2
        * it takes data from common.getListOfWords(paramString)
        * and put into vm.data.words1 and vm.data.words2
        */
        function changePagePart2() {
                //vm.data.removeOrAddWords = [];
                vm.currentViewIdList = [];
                vm.originalViewIdList = [];
                var paramString = {
                    language: $stateParams.selected_language,
                    page: vm.data.currentPage
                };
                location.href = apiUrl+'#/pick/words-list/'+$stateParams.selected_language+'/?level='+vm.data.currentPage;
                $loading.start('loading-div');
                vm.data.uibPpaginationDisabled = true;
                //var paramString = $stateParams.selected_language+'?page='+vm.data.currentPage;
                var data1 = [];
                var data2 = [];
                common.pick_getAllWordsWithUnknowns(paramString)
                .then(function(response) {
                    vm.data.totalItems = response.data.words.total;

                    //set table with "remembered unknown words"
                    angular.forEach(response.data.words.data, function(value, key) {
                        vm.originalViewIdList.push({ id:parseInt(value.id), status: value.status });
                    });

                    vm.currentViewIdList = angular.copy(vm.originalViewIdList); // clone
                    // console.log('vm.originalViewIdList!!!!!',vm.originalViewIdList);

                    $loading.finish('loading-div');
                    vm.data.uibPpaginationDisabled = false;
                    var counter = response.data.words.data.length;
                    data1 = response.data.words.data.slice(0, counter>>1);
                    data2 = response.data.words.data.slice(counter>>1);
                    vm.data.words1 = data1;
                    vm.data.words2 = data2;
                })
                .catch(function(fallback) {
                    $loading.finish('loading-div');
                    vm.data.uibPpaginationDisabled = false;
                    toastr.error('Problem with getting data');
                    console.log(fallback);
                });            
        }


        /*
        * update Database with unknown words
        * TODO: make it as a promise
        */
        function updateDBwithUnknownWords(removeOrAddWordsArray) {
            var language_id = availableDictionaries[$stateParams.selected_language].id;
            $loading.start('loading-div');
            vm.data.uibPpaginationDisabled = true;
            common.rememberUnknownWords(removeOrAddWordsArray, language_id)
            .then(function(response){
                changePagePart2();
            })
            .catch(function(fallback) {
                vm.data.uibPpaginationDisabled = false;
                $loading.finish('loading-div');
                toastr.error('Problem with getting data');
                console.log(fallback);
            });
        }

        /*
        * find the difference
        */
        function findDifference() {
            // initiate empty returnArray
            var returnArray = {
                to_remove: [],
                to_add: []
            };

            angular.forEach(vm.currentViewIdList, function(value, key) {
                if (vm.originalViewIdList[key].status != vm.currentViewIdList[key].status) {
                    if (vm.currentViewIdList[key].status == null) {
                        returnArray.to_remove.push(vm.currentViewIdList[key].id);
                    }
                    if (vm.currentViewIdList[key].status == 3) {
                        returnArray.to_add.push(vm.currentViewIdList[key].id);
                    }
                }
            });

            if ((returnArray.to_remove.length > 0) || (returnArray.to_add.length > 0) ) {
                return returnArray;
            }
            else {
                return false;
            }
        }


        /*
        * change page
        */

        function changePage() {
            // if there is something to remember
            var difference = findDifference(); // vm.originalViewIdList, vm.currentViewIdList
            console.log('difference',difference);

            if (difference) {
                updateDBwithUnknownWords(difference);
            }
            else {
                changePagePart2();
            }

        }
    }

})();

