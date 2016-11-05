(function () {
    angular
        .module('MyApp')
        .config(routes);

    routes.$inject = ['$stateProvider'];

    function routes($stateProvider) {
        $stateProvider
      .state('pick', {
        url: '/pick',
        templateUrl: 'app/pick-words/pick-words.html',
        controller: 'PickCtrl as pick',
        authenticate: true,
      })
    }
})();
