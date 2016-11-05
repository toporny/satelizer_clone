(function () {
    angular
        .module('MyApp')
        .config(routes);

    routes.$inject = ['$stateProvider'];

    function routes($stateProvider) {
        $stateProvider
        .state('learn', {
            url: '/learn',
            templateUrl: 'app/learn/learn.html',
            controller: 'LearnCtrl as learn',
            authenticate: true
        })
    }
})();
