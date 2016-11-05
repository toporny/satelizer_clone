(function () {
    angular
        .module('MyApp')
        .config(routes);

    routes.$inject = ['$stateProvider'];

    function routes($stateProvider) {
        $stateProvider
            .state('profile', {
                url: '/profile',
                templateUrl: 'app/profile/profile.html',
                controller: 'ProfileCtrl',
                authenticate: true
            });
        }
})();
