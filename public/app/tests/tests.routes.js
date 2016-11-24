(function () {
    angular
        .module('MyApp')
        .config(routes);

    routes.$inject = ['$stateProvider'];

    function routes($stateProvider) {
        $stateProvider
            .state('tests', {
                url: '/tests',
                templateUrl: 'app/tests/tests.html',
                authenticate: false,
                controller: 'TestsCtrl as test',
            })
        }
})();
