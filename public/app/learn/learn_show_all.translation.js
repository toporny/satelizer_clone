(function() {

  angular
    .module('MyApp')
    .config(['$translateProvider', function ($translateProvider) {

      $translateProvider
        .translations('en', {
          LEARN_SHOW_ALL: {
            HEAD_TITLE: 'ALL WORDS',
            TITLE: 'ALL WORDS MARKED AS "UNKNOWN" ',
          } 
        });
     
  
      $translateProvider
        .translations('pl', {
          LEARN_SHOW_ALL: {
            HEAD_TITLE: 'WSZYSTKIE WYRAZY',
            TITLE: 'WSZYSTKIE WYRAZY ZAZNACZONE JAKO "NIEZNANE" ',
          } 
        });

    }]);

})();
