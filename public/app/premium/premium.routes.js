(function () {
    angular
        .module('MyApp')
        .config(routes);

    routes.$inject = ['$stateProvider'];

    function routes($stateProvider) {
        $stateProvider
            .state('premium', {
                url: '/premium',
                controller: 'PremiumCtrl as premium',
                templateUrl: 'app/premium/premium.html',
                authenticate: false,
            })
    }
})();
