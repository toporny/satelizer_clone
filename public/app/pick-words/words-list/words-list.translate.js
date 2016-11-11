(function() {

  angular
    .module('MyApp')
    .config(['$translateProvider', function ($translateProvider) {

      $translateProvider
        .translations('en', {
          WORDS_LIST: {
            HEAD_TITLE: 'Words list'
          } 
        });
     
  
      $translateProvider
        .translations('pl', {
          WORDS_LIST: {
            HEAD_TITLE: 'Lista wyrazów'
          } 
        });
     
      
      //$translateProvider.preferredLanguage('en');
    }]);

})();
