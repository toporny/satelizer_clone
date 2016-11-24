(function () {
    angular
        .module('MyApp')
        .config(routes);

    routes.$inject = ['$stateProvider'];

    function routes($stateProvider) {
        $stateProvider
        .state('challenge', {
            url: '/challenge',
            templateUrl: 'app/challenge/challenge.html',
            controller: 'ChallengeCtrl as challenge',
            authenticate: false
        })
    }
})();
