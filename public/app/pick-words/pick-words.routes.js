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
                authenticate: false,
            })
            .state('words-list/:selected_language/:words_counter/:level', {
                url: '/pick/words-list/:words_counter/:selected_language/:level',
                templateUrl: 'app/pick-words/words-list/words-list.html',
                controller: 'WordsListCtrl as wordsList',
                authenticate: false,
                params: {
                    words_counter: null // ?? check this later
                }
                //$loading
            })
    }
})();
