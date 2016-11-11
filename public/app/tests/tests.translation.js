(function() {

  angular
    .module('MyApp')
    .config(['$translateProvider', function ($translateProvider) {

      $translateProvider
        .translations('en', {
          TEST: {
            HEADER: 'CHECK YOUR VOCABULARY',
            TEST: 'Test',
            DESCRIPTION: 'In this place you can test your vocabulary knowledge',
          },
        });
     

      $translateProvider.translations('pl', {
          TEST: {
            HEADER: 'SPRAWDŹ SWOJĄ ZNAJOMOŚĆ SŁOWNICTWA',
            TEST: 'Test',
            DESCRIPTION: 'W tym miejscu możesz sprawdzić jak dużo znaczeń wyrazów znasz',
          },
      });
     
      //$translateProvider.preferredLanguage('en');
    }]);

})();
