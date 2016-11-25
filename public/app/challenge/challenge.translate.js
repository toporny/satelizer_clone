(function() {

  angular
    .module('MyApp')
    .config(['$translateProvider', function ($translateProvider) {

      $translateProvider
        .translations('en', {
          CHALLENGE: {
            HEAD_TITLE: 'CHALLENGE YOURSELF',
            TITLE: 'CHALLENGE',
            DESCRIPTION: 'description...',
            SELECT_LANGUAGE: 'Select language:',
          } 
        });
     
  
      $translateProvider
        .translations('pl', {
          CHALLENGE: {
            HEAD_TITLE: 'ZACZNIJ NAUKĘ',
            TITLE: 'NAUKA',
            DESCRIPTION: 'opis opis',
            SELECT_LANGUAGE: 'Wybierz język:',
          } 
        });
     
      
      //$translateProvider.preferredLanguage('en');
    }]);

})();
