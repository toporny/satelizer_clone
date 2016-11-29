(function() {


  angular
    .module('MyApp')
    .config(['$translateProvider', function ($translateProvider) {

      $translateProvider
        .translations('en', {
          PICK_WORDS: {
            HEAD_TITLE: 'Please select language and level',
            SELECT_LANGUAGE: 'Select language',
            WORD: 'Word',
            ALL: 'ALL',
            NONE: 'NONE',
            PROGRESS_BAR_SHOWS_HOW_MANY_WORDS_YOU_HAVE_ALREADY_REVIEWED: 'Progress bar shows in how many levels you set up unknown words.'
          },
        });
     
      $translateProvider.translations('pl', {
          PICK_WORDS: {
            HEAD_TITLE: 'Wybierz język i poziom',
            SELECT_LANGUAGE: 'Wybierz język',
            WORD: 'Wyraz',
            ALL: 'WSZYSTKO',
            NONE: 'ŻADEN',
            PROGRESS_BAR_SHOWS_HOW_MANY_WORDS_YOU_HAVE_ALREADY_REVIEWED: 'Pasek postępu pokazuje w ilu poziomach pozaznaczałeś nieznane wyrazy.'
          },
      });
     
    }]);

})();
