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
            .state('words-list', {
                url: '/pick/words-list',
                templateUrl: 'app/pick-words/words-list/words-list.html',
                controller: 'WordsListCtrl as wordsList',
                authenticate: true,
            })
    }
})();
