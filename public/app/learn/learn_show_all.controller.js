(function () {
  angular
    .module('MyApp')
    .controller('LearnShowAllCtrl',LearnShowAllCtrl);

    LearnShowAllCtrl.$inject = ['$scope', '$loading', 'common'];

    function LearnShowAllCtrl ($scope, $loading, common) {
    	vm = this;

    	vm.wordPicked = wordPicked;

    	vm.data = {
    		items: [],
    	}


    	showAllUnknownWords()
 
			function wordPicked(){
			}

			function showAllUnknownWords(){
				$loading.start('loading-div');

        var paramString = {
            language: 'en_EN',
            page: 1
        };

				common.getUnknownsForUser(paramString)
				.then(function(response) {
					console.log('response', response);
					  //vm.data.totalItems = response.data.words.total;
					  vm.data.items = response.data.words.data;
					  $loading.finish('loading-div');
					  //vm.data.uibPpaginationDisabled = false;
					})
					.catch(function(fallback) {
					  $loading.finish('loading-div');
					  //vm.data.uibPpaginationDisabled = false;
					  toastr.error('Problem with getting data');
					  console.log(fallback);
					});
			}
    }



})();

