(function () {
angular.module('MyApp')
  .factory('common', common);

  common.$inject = ['$http', '$ngBootbox'];

  function common($http, $ngBootbox) {
    service = {
      // getAvailableDictionaries: getAvailableDictionaries,
      // getAvailableDictionariesAndLevels: getAvailableDictionariesAndLevels,
      // getDictionariesAlphabetically:getDictionariesAlphabetically,
      getListOfWords: getListOfWords,
      getWordsWithTranslationsForUser: getWordsWithTranslationsForUser,
      showPremiumModal: showPremiumModal,
      rememberUnknownWords: rememberUnknownWords
    }
    return service;


                // to_remove: Array(),
                // to_add: Array()

    function rememberUnknownWords(list_of_IDs, selected_language) {
      var postData = {
                        to_add: list_of_IDs.to_add,
                        to_remove: list_of_IDs.to_remove,
                        language_id: selected_language
                     };
      return $http.post('/api/remember_unknown_words/', postData); 
    }



    function getListOfWords(language_and_page) {
      return $http.get('/api/get_words_with_unknowns/'+language_and_page);
    }

    function getWordsWithTranslationsForUser(language_and_page) {
      return $http.get('/api/get_words_with_translations_for_user/'+language_and_page);
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