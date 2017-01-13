(function() {

  angular
    .module('MyApp')
    .config(['$translateProvider', function ($translateProvider) {

      $translateProvider
        .translations('en', {
          WORDS_LIST: {
            HEAD_TITLE: 'Words list',
            TITLE: 'Pick unknown words',
            PROGRESS_BAR: 'Progress bar',
            MARK_UNKNWON_WORDS_AS_RED: 'Mark unknown words as <font color="red">red</font>',
            NEXT: 'Next »',
            WORDS: 'Words',
            STAGE_X_AND_ABOVE_ONLY_FOR_PREMIUM: 'Warning: Stage {{stage}} and next in order are only for premium users.',
            THIS_FEATURE_IS_AVAILABLE_ONLY_FOR_PREMIUM_USERS: 'This feature is available only for premium users.'
          }
        });
     
  
      $translateProvider
        .translations('pl', {
          WORDS_LIST: {
            HEAD_TITLE: 'Lista wyrazów',
            TITLE: 'Zaznacz nieznane Ci wyrazy',
            PROGRESS_BAR: 'Postęp',
            MARK_UNKNWON_WORDS_AS_RED: 'Zaznacz nieznane Ci wyrazy kolorem <font color="red">czerwonym</font>',
            NEXT: 'Następny »',
            WORDS: 'Wyrazy',
            STAGE_X_AND_ABOVE_ONLY_FOR_PREMIUM: 'Sekcja {{stage}} oraz kolejne tylko dla użytkowników premium',
            THIS_FEATURE_IS_AVAILABLE_ONLY_FOR_PREMIUM_USERS: 'Ta funkcja jest dostępna tylko dla użytkowników premium'
          } 
        });
     
      
      //$translateProvider.preferredLanguage('en');
    }]);

})();
