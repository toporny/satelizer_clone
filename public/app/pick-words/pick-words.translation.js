(function() {


  angular
    .module('MyApp')
    .config(['$translateProvider', function ($translateProvider) {

      $translateProvider
        .translations('en', {
          PICK_WORDS: {
            HEAD_TITLE: 'Please select language and level',
            SELECT_LANGUAGE: 'Select language'
          },
        });
     
      $translateProvider.translations('pl', {
          PICK_WORDS: {
            HEAD_TITLE: 'Wybierz język i poziom',
            SELECT_LANGUAGE: 'Wybierz język'

          },
      });
     
    }]);

})();
