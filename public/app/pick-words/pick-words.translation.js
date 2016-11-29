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
            PROGRESS_BAR_SHOWS_HOW_MANY_LEVELS_YOU_ALREADY_MAINTAINED: 'Progress bar shows in how many levels you already maintained.'
          },
        });
     
      $translateProvider.translations('pl', {
          PICK_WORDS: {
            HEAD_TITLE: 'Wybierz język i poziom',
            SELECT_LANGUAGE: 'Wybierz język',
            WORD: 'Wyraz',
            ALL: 'WSZYSTKO',
            NONE: 'ŻADEN',
            PROGRESS_BAR_SHOWS_HOW_MANY_LEVELS_YOU_ALREADY_MAINTAINED: 'Pasek postępu pokazuje ile poziomów masz za sobą.'
          },
      });
     
    }]);

})();
