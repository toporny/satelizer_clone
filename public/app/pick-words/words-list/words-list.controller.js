(function () {
  angular
    .module('MyApp')
    .controller('WordsListCtrl',WordsListCtrl);

    WordsListCtrl.$inject = ['$ngBootbox', '$state'];

    function WordsListCtrl ($ngBootbox, $state) {
		vm = this;

		vm.data = {
		};


    }

})();

