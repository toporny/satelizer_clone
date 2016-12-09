(function() {

  angular
    .module('MyApp')
    .config(['$translateProvider', function ($translateProvider) {

      $translateProvider
        .translations('en', {
          LEARN: {
            HEAD_TITLE: 'LEARN YOURSELF',
            TITLE: 'LEARN',
            DESCRIPTION: 'This part of application teaches you only words that you selected as <b>unknown</b> before.',
            SELECT_LANGUAGE: 'Select language that you want to learn:',
          } 
        });
     
  
      $translateProvider
        .translations('pl', {
          LEARN: {
            HEAD_TITLE: 'ZACZNIJ NAUKĘ',
            TITLE: 'NAUKA',
            DESCRIPTION: 'Zaczynasz naukę tylko z wyrazami które zaznaczyłeś wcześniej jako <b>nieznane</b>',
            SELECT_LANGUAGE: 'Wybierz język którego chcesz się uczyć',
          } 
        });
     
      
      //$translateProvider.preferredLanguage('en');
    }]);

})();
