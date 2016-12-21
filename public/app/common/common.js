(function () {
angular.module('MyApp')
  .factory('common', common);

  common.$inject = ['$http', '$ngBootbox'];

  function common($http, $ngBootbox) {
    service = {
      // getAvailableDictionaries: getAvailableDictionaries,
      // getAvailableDictionariesAndLevels: getAvailableDictionariesAndLevels,
      // getDictionariesAlphabetically:getDictionariesAlphabetically,
      pick_getAllWordsWithUnknowns: pick_getAllWordsWithUnknowns,
//      learn_getAll: learn_getAll,

      getUnknownsWithTranslationsForUser: getUnknownsWithTranslationsForUser,
      getUnknownsForUser: getUnknownsForUser,
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

    // function learn_getAll(oParams) {
    //   params = oParams.language+'/learn_get_show_all?page='+oParams.page; // make string
    //   return $http.get('/api/get_words_with_unknowns/'+params);
    // }

    function pick_getAllWordsWithUnknowns(oParams) {
      params = oParams.language+'/pick_get_list_of_words?page='+oParams.page; // make string
      return $http.get('/api/get_words_with_unknowns/'+params);
    }

    function getUnknownsWithTranslationsForUser(oParams) {
      params = oParams.language+'/learn_get_unknowns_with_translations_for_user?page='+oParams.page; // make string
      return $http.get('/api/learn_get_unknowns_with_translations_for_user/'+params);
    }

    function getUnknownsForUser(oParams) {
      params = oParams.language+'/learn_get_unknowns_for_user?page='+oParams.page; // make string
      return $http.get('/api/learn_get_unknowns_for_user/'+params);
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