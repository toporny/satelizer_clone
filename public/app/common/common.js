(function () {
angular.module('MyApp')
  .factory('common', common);

  common.$inject = ['$http'];

  function common($http) {
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

    

  };

})();