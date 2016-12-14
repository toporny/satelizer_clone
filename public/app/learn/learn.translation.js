(function() {

  angular
    .module('MyApp')
    .config(['$translateProvider', function ($translateProvider) {

      $translateProvider
        .translations('en', {
          LEARN: {
            HEAD_TITLE: 'LEARN YOURSELF',
          } 
        });
     
  
      $translateProvider
        .translations('pl', {
          LEARN: {
            HEAD_TITLE: 'ZACZNIJ NAUKĘ',
          } 
        });
     
      
      //$translateProvider.preferredLanguage('en');
    }]);

})();
