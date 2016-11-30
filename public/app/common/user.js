(function () {
angular.module('MyApp')
  .factory('user', user);

  user.$inject = ['$log','$http', '$auth', '$q', '$localStorage', '$window', '$translate', 'translationsSoFar', 'translatePluginToISO', '$state'];

  function user($log, $http, $auth, $q, $localStorage, $window, $translate, translationsSoFar,translatePluginToISO,$state ) {

    //examine browser settings. If (en,es,ru,fr,de, pl) then setup settings
    var lang = $window.navigator.language || $window.navigator.userLanguage; 

    if (angular.isUndefined(translatePluginToISO[lang])) lang="en";

    // lang = 'de'; // for testing purpose (browser locale = es_ES)
 
    var defaultUserData = {
      displayName:  '',
      locale: 'en_EN',
      userStatus: 'anonymous',
      languageToLearn: '',
      email: ''
    } 

    if (angular.isDefined($localStorage.locale)) {
      defaultUserData.locale = $localStorage.locale;
    }

    $localStorage.$default(defaultUserData);

    if (angular.isDefined(translatePluginToISO[lang])) {
      changeLocaleForThisAPP(translatePluginToISO[lang]); 
    }
    else {
      changeLocaleForThisAPP('en_EN'); 
    }

    service = {
      getProfileFromAPI:      getProfileFromAPI,
      updateProfileByAPI:     updateProfileByAPI,      
      getPersonalData:        getPersonalData,
      setPersonalData:        setPersonalData,
      getLocalStorage:        getLocalStorage,
      setLocalStorage:        setLocalStorage,
      changeLocaleForThisAPP: changeLocaleForThisAPP,
      getUserStatus:          getUserStatus,
      setLanguageToLearn:     setLanguageToLearn,
      getLanguageToLearn:     getLanguageToLearn

    }
    return service;



    function changeLocaleForThisAPP(languageToChange) {
      if (languageToChange === null) languageToChange = 'en_EN';
      console.log('languageToChange!!',languageToChange);
      var translateChanged = false;
      angular.forEach(translationsSoFar, function(value, key) {
        default_locale = languageToChange.substr(0,2) || 'en';
        // console.log('default_locale = ', default_locale);
        // console.log('languageToChange = ', languageToChange);
        // console.log(default_locale == languageToChange.substr(0,2));
        if (default_locale == value.id.substr(0,2)) {
          $translate.use(default_locale);
          translateChanged = true;
          setLocalStorage([ 'locale' ], {locale: languageToChange});
        }
      });

      if (translateChanged == false) {
        console.warn('Sorry but translation for '+languageToChange+ ' is not yet ready.');
        console.warn('Add translation strings everywhere and change to config.js/translationsSoFar and ');
        console.warn('English translation is for default now.');
        $translate.use('en');
        setLocalStorage([ 'locale' ], {locale: 'en_EN'});        
      }
      return translateChanged;
    }


    function getProfileFromAPI () {
      var deferred = $q.defer();

      $http.get('/api/me')
      .then(function(dataFromApi){
        // update localStorage
        deferred.resolve(dataFromApi);
      })
      .catch(function(response) {
        console.error('problem with getting data from API');
        deferred.reject(response);
      });
      
      return deferred.promise;
    }

    function updateProfileByAPI  (profileData) {
      return $http.put('/api/me', profileData);
    }


    /*
    * getPersonalData
    * return: promise
    */

		function getPersonalData() {

      console.log('getPersonalData');
      var deferred = $q.defer();

      if ($auth.isAuthenticated()) {
        var storageUser = $localStorage;
        
        // if (storage variable) email is defined then get data from storage
        if ( (angular.isDefined($localStorage.email)) && ($localStorage.email != '') ) {
          //console.warn('storageUser.email is defined');
          deferred.resolve($localStorage);
        } else {
          //console.warn('storageUser.email is NOT defined');
          getProfileFromAPI()
            .then(function(dataFromAPI){
              console.log('getProfileFromAPI data',dataFromAPI);
              setLocalStorage(['displayName', 'languageToLearn', 'locale', 'email'], dataFromAPI.data);
              // $localStorage.displayName = dataFromAPI.data.displayName;
              // $localStorage.languageToLearn = dataFromAPI.data.languageToLearn;
              // $localStorage.locale = dataFromAPI.data.locale;
              // $localStorage.email = dataFromAPI.data.email;
              deferred.resolve($localStorage );
            })
            .catch(function(error_response){
              console.error('getProfileFromAPI error_response', error_response);
              deferred.reject(error_response);
            })
          // deferred.reject($localStorage.user);
        }
      }
      else { // not authenticated
        console.warn('user is NOT authenticated')
        returnData = {
          email: $localStorage.email,
          displayName: $localStorage.displayName,
          locale: $localStorage.locale,
          languageToLearn: $localStorage.languageToLearn
        };
        deferred.resolve(returnData);
      }

      //deferred.resolve('Hello, ' + name + '!');
      deferred.reject(name + ' is not allowed.');

      return deferred.promise;
		}

    
    function setLocalStorage(aArray, obj) {
      if (!Array.isArray(aArray)) throw "setLocalStorage first parametr has to be array";
      if (typeof obj !== "object")  throw "setLocalStorage second parametr has to be object";

      // if user (from FB or G+) has strange locale settings 
      // try to change en_GB to en_EN, es_CA to es_ES
      if (angular.isDefined(obj.locale)) {
        var first_two = obj.locale.substr(0,2);
        if (angular.isDefined(translatePluginToISO[first_two]) ) {
          obj.locale = translatePluginToISO[first_two]
        } else obj.locale = 'en_EN';
      } 

      angular.forEach(aArray, function(el) {
        $localStorage[el] = obj[el];
      });
    }

    function getLocalStorage(str) {
      return $localStorage[str]
    }

    function setPersonalData(data) {
      alert('not yet ready');
    }

    function setLanguageToLearn(value) {
      $localStorage.languageToLearn = value;
    }
    
    function getLanguageToLearn() {
      if (angular.isDefined($localStorage.languageToLearn)) {
        return $localStorage.languageToLearn;
      } else {
        return '';
      }
    }
    

    function getUserStatus() {
      console.log('$localStorage.userStatus = ',$localStorage.userStatus);
      if (angular.isDefined($localStorage.userStatus)) {
        switch ($localStorage.userStatus) {
          case 'anonymous': return $localStorage.userStatus; break;
          case 'normal': return $localStorage.userStatus; break;
          case 'premium': return $localStorage.userStatus; break;
          default: $state.go('logout', { error: 'unknown error' } );
          break;

        }
      };
    }


		


    // function getAvailableDictionariesAndLevels() {
    //   return $http.get('/api/get_dictionaries_and_levels/');
    // }



    // function getDictionariesAlphabetically(language) {
    //   return $http.get('/api/get_dictionaries_alphabeticaly/'+language);
    // }

    function getListOfWords(language_and_page) {
      return $http.get('/api/get_words_with_unknowns1/'+language_and_page); // TODO: remove 1
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