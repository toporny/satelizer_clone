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
            authenticate: false
        })
        .state('learn_intro', {
            url: '/learn_intro',
            templateUrl: 'app/learn/learn_intro.html',
            controller: 'LearnIntroCtrl as learnIntro',
            authenticate: false
        })
        .state('learn_show_all', {
            url: '/learn_show_all',
            templateUrl: 'app/learn/learn_show_all.html',
            controller: 'LearnShowAllCtrl as learnShowAll',
            authenticate: false
        })
    }
})();
