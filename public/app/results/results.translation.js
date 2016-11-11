(function() {

  angular
    .module('MyApp')
    .config(['$translateProvider', function ($translateProvider) {

      $translateProvider
        .translations('en', {
          RESULTS: {
            HEADER: 'CHECK YOU STATISTICS',
            TITLE: 'Results',
            DESCRIPTION: 'In this place you can check all your statistics from chosen language',
            BTN_SHOW_ME_MORE: 'Show me more...',
            NEXT: 'Next »',
          },
        });
     
      $translateProvider.translations('pl', {
          RESULTS: {
            HEADER: 'SPRAWDŹ SWOJE STATYSTYKI NAUKI',
            TITLE: 'WYNIKI',
            DESCRIPTION: 'W tym miejscu możesz sprawdzić swoje statystyki nauki z wybranego języka',
            BTN_SHOW_ME_MORE: 'Pokaż więcej...',
            NEXT: 'Dalej »',
          },
      });
     
      //$translateProvider.preferredLanguage('en');
    }]);

})();
