(function () {
    angular
        .module('MyApp')
        .config(routes);

    routes.$inject = ['$stateProvider'];

    function routes($stateProvider) {
        $stateProvider
            .state('results', {
                url: '/results',
                templateUrl: 'app/results/results.html',
                controller: 'ResultsCtrl as results',
                authenticate: false,
            })
        }
})();
