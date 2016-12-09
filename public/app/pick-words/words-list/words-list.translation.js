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
            WORDS: 'Words'
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
            WORDS: 'Wyrazy'

          } 
        });
     
      
      //$translateProvider.preferredLanguage('en');
    }]);

})();
