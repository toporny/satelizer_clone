(function () {
angular.module('MyApp')
  .factory('common', common);

  common.$inject = ['$http', '$ngBootbox'];

  function common($http, $ngBootbox) {
    service = {
//      getAvailableDictionaries: getAvailableDictionaries,
      //getAvailableDictionariesAndLevels: getAvailableDictionariesAndLevels,
      // getDictionariesAlphabetically:getDictionariesAlphabetically,
      getListOfWords: getListOfWords,
      showPremiumModal: showPremiumModal
    }
    return service;


    // function getAvailableDictionaries() {
    //   return $http.get('/api/get_dictionaries/');
    // }

    // function getAvailableDictionariesAndLevels() {
    //   return $http.get('/api/get_dictionaries_and_levels/');
    // }



    // function getDictionariesAlphabetically(language) {
    //   return $http.get('/api/get_dictionaries_alphabeticaly/'+language);
    // }

    function getListOfWords(language_and_page) {
      return $http.get('/api/get_words_with_unknowns/'+language_and_page); // TODO: remove 1
    }

    function showPremiumModal() {
    
      var options = {
          message: 'This feature is available only for premium users.',
          title: 'Premium required',
          className: 'test-class',
          buttons: {
          success: {
            label: "Buy premium",
            className: "btn-success",
            callback: function() {
              $state.go('premium');
            }
          },            
          warning: {
            label: "Cancel",
            className: "btn-warning",
            callback: function() { }
          }

          }
      };

      $ngBootbox.customDialog(options);
    }


    

  };

})();