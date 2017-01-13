(function() {

  angular
    .module('MyApp')
    .config(['$translateProvider', function ($translateProvider) {

      $translateProvider
        .translations('en', {
          COMMON: {
            BUY_PREMIUM: 'Buy premium',
          },
        });
     
      $translateProvider
        .translations('pl', {
          COMMON: {
            BUY_PREMIUM: 'Kup premium'
           },
        });
     
    }]);

})();
