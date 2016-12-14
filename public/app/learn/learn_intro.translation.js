(function() {

  angular
    .module('MyApp')
    .config(['$translateProvider', function ($translateProvider) {

      $translateProvider
        .translations('en', {
          LEARN_INTRO: {
            HEAD_TITLE: 'WELCOME ON THE LEARNING PART',
            TITLE: 'LEARN',
            SELECT_LANGUAGE: 'Select language that you want to learn:',
            DESCRIPTON_GREETINGS: 'Hello!',
            DESCRIPTON_LINE_1: 'This part of application teaches you only words that you selected as <b>unknown</b> before.',
          } 
        });
     
  
      $translateProvider
        .translations('pl', {
          LEARN_INTRO: {
            HEAD_TITLE: 'WITAJ W SEKCJI NAUKI',
            TITLE: 'NAUKA',
            SELECT_LANGUAGE: 'Wybierz język którego chcesz się uczyć',
            DESCRIPTON_GREETINGS: 'Witaj!',
            DESCRIPTON_LINE_1: 'Zaczynasz naukę tylko z wyrazami które zaznaczyłeś wcześniej jako <b>nieznane</b>.',
          } 
        });
     
      
      //$translateProvider.preferredLanguage('en');
    }]);

})();
