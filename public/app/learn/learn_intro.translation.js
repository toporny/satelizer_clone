(function() {

  angular
    .module('MyApp')
    .config(['$translateProvider', function ($translateProvider) {

      $translateProvider
        .translations('en', {
          LEARN_INTRO: {
            HEAD_TITLE: 'WELCOME ON THE LEARNING PART',
            SELECT_LANGUAGE: 'Select language',
            DESCRIPTON_GREETINGS: 'descripton, greetings, etc..',
            DESCRIPTON_LINE_1: 'descripton line 1',
            TITLE: 'LEARN',
          } 
        });

      $translateProvider
        .translations('pl', {
          LEARN_INTRO: {
            HEAD_TITLE: 'WITAJ W SEKCJI NAUKI',
            SELECT_LANGUAGE: 'Wybierz język',
            DESCRIPTON_GREETINGS: 'pozdrowienia, opis, itd..',
            DESCRIPTON_LINE_1: 'descripton line 1',
            TITLE: 'NAUKA',
          } 
        });

    }]);

})();
