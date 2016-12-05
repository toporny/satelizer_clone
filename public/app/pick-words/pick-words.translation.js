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
            PROGRESS_BAR_SHOWS_HOW_MANY_LEVELS_YOU_ALREADY_MAINTAINED: 'Progress bar shows in how many levels you already maintained.',
            DO_YOU_KNOW_WHAT_YOU_DONT_KNOW: 'Do you know what you don\'t know?',
            IN_NEXT_STEP_YOU_WILL_SEE_THE_LIST: 'In next step you will see the list of at least 5000 words divided by levels. Each level has 250 words. Your task is to select unknown words in each leavels and let the proffessor know which exactly words you don\'t know. ',
            IT_SEEMS_A_LOT_TO_DO_BUT_IT_HAS_TO_BE_DONE_ONLY_ONCE: 'It seems a lot to do but it has to be done only once. From that moment proffessor will remember all list and in the next stages he starts teaching only what you don\'t know',
            PLEASE_SELECT_STAGE: 'Please select stage. (<b>Stage 1</b> means {{maxWordsPerPage}} most used words, etc..)',
          },
        });
     
      $translateProvider.translations('pl', {
        PICK_WORDS: {
          HEAD_TITLE: 'Wybierz język i poziom',
          SELECT_LANGUAGE: 'Wybierz język',
          WORD: 'Wyraz',
          ALL: 'WSZYSTKO',
          NONE: 'ŻADEN',
          PROGRESS_BAR_SHOWS_HOW_MANY_LEVELS_YOU_ALREADY_MAINTAINED: 'Pasek postępu pokazuje ile poziomów masz za sobą.',
          DO_YOU_KNOW_WHAT_YOU_DONT_KNOW: 'Czy wiesz czego nie wiesz?',
          IN_NEXT_STEP_YOU_WILL_SEE_THE_LIST: 'W następnym kroku zobaczysz listę 5000 wyrazów podzielonych na sekcje. Każda sekcja ma 250 wyrazów. Twoje zadanie to zaznaczyć nieznane Ci wyrazy w każdej sekcji.',
          IT_SEEMS_A_LOT_TO_DO_BUT_IT_HAS_TO_BE_DONE_ONLY_ONCE: 'Na pierwszy rzut oka jest to wiele pracy ale ta operacja wymagana jest tylko raz. W ten sposób dasz profesorowi znać czego dokładnie chcesz się uczyć w następnych etapach.',
          PLEASE_SELECT_STAGE: 'Wybierz sekcję. (<b>Sekcja 1</b> oznacza {{maxWordsPerPage}} najbardziej używanych słów, itd..)',
        },
      });
     
    }]);

})();
