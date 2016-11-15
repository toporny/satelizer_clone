(function () {
angular.module('MyApp')
  .factory('common', common);

  common.$inject = ['$http'];

  function common($http) {
    return {
    	getAvailableDictionariesForLanguage:getAvailableDictionariesForLanguage
    };

    function getAvailableDictionariesForLanguage() {
      return $http.get('/api/get_dictionaries/');
	  }

  };

})();