(function () {
angular.module('MyApp')
  .factory('common', common);

  common.$inject = ['$http', '$ngBootbox'];

  function common($http, $ngBootbox) {
    service = {
      getAvailableDictionariesForUser:getAvailableDictionariesForUser,
      getDictionariesAlphabetically:getDictionariesAlphabetically,
      getListOfWords:getListOfWords
    }
    return service;


    function getAvailableDictionariesForUser() {
      return $http.get('/api/get_dictionaries/');
    }

    function getDictionariesAlphabetically(language) {
      return $http.get('/api/get_dictionaries_alphabeticaly/'+language);
    }

    function getListOfWords(language_and_page) {
      return $http.get('/api/get_list_of_words1/'+language_and_page);
    }

    function show_premium_modal(language_and_page) {
    
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