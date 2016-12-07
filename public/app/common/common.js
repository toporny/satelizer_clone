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
      showPremiumModal: showPremiumModal,
      rememberUnknownWords: rememberUnknownWords
    }
    return service;




    function rememberUnknownWords(list_of_IDs, selected_language) {
      var postData = {
                        list_of_ids: list_of_IDs,
                        language_id: selected_language
                     };
      return $http.post('/api/remember_unknown_words/', postData); 
    }



    function getListOfWords(language_and_page) {
      return $http.get('/api/get_words_with_unknowns/'+language_and_page);
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