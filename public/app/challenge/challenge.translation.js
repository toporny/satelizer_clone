(function() {

  angular
    .module('MyApp')
    .config(['$translateProvider', function ($translateProvider) {

      $translateProvider
        .translations('en', {
          CHALLENGE: {
            HEAD_TITLE: 'CHALLENGE YOURSELF OR SOMEBODY!',
            TITLE: 'CHALLENGE',
            DESCRIPTION: 'description...',
            SELECT_LANGUAGE: 'Select language:',
          } 
        });
     
  
      $translateProvider
        .translations('pl', {
          CHALLENGE: {
            HEAD_TITLE: 'WYZWANIE DLA CIEBIE LUB ZNAJOMEGO!',
            TITLE: 'WYZWANIE',
            DESCRIPTION: 'opis opis',
            SELECT_LANGUAGE: 'Wybierz język:',
          } 
        });
     
      
      //$translateProvider.preferredLanguage('en');
    }]);

})();
