(function () {
angular.module('MyApp')
  .factory('user', user);

  user.$inject = ['$log','$http', '$auth', '$q', '$localStorage', '$window', '$translate', 'translationsSoFar', 'translatePluginToISO', '$state', '$ngBootbox'];

  function user($log, $http, $auth, $q, $localStorage, $window, $translate, translationsSoFar, translatePluginToISO, $state, $ngBootbox ) {

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
      getProfileFromAPI:            getProfileFromAPI,
      updateProfileByAPI:           updateProfileByAPI,      
      getPersonalData:              getPersonalData,
      setPersonalData:              setPersonalData,
      getLocalStorage:              getLocalStorage,
      setLocalStorage:              setLocalStorage,
      changeLocaleForThisAPP:       changeLocaleForThisAPP,
      getUserStatus:                getUserStatus,
      setLanguageToLearn:           setLanguageToLearn,
      getLanguageToLearn:           getLanguageToLearn,
      showPremiumModal:             showPremiumModal,

      API_addUserLevelProgress:     API_addUserLevelProgress,
      API_removeUserLevelProgress:  API_removeUserLevelProgress,
      API_getUserLevelProgress:     API_getUserLevelProgress
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
          setLocalStorage({locale: languageToChange});
        }
      });

      if (translateChanged == false) {
        console.warn('Sorry but translation for '+languageToChange+ ' is not yet ready.');
        console.warn('Add translation strings everywhere and change to config.js/translationsSoFar and ');
        console.warn('English translation is set for default now.');
        $translate.use('en');
        setLocalStorage({locale: 'en_EN'});        
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

    function API_addUserLevelProgress  (levelData) {
      return $http.post('api/add_level_progress/', levelData);
    }

    function API_getUserLevelProgress  (language_id) {
      return $http.get('api/get_level_progress/', language_id);
    }

    function API_removeUserLevelProgress (levelData) {
      return $http.post('api/remove_level_progress/', levelData);
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
              //console.log('getProfileFromAPI data',dataFromAPI);

              setLocalStorage(
              [
                { displayName: dataFromAPI.data.displayName },
                { languageToLearn: dataFromAPI.data.languageToLearn },
                { locale: dataFromAPI.data.locale },
                { email: dataFromAPI.data.email }
              ]
              );
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


    // this function is not yet used
    // it has to check what browser locale user has
    // if not suppoerted then set en_EN
    // function checkIfLocaleIsSupported(lang) {
    //   if (key == 'locale') {
    //     var first_two = data.locale.substr(0,2);
    //       if (angular.isDefined(translatePluginToISO[first_two]) ) {
    //         obj.locale = translatePluginToISO[first_two]
    //       } else obj.locale = 'en_EN';
    //   }      
    // }


    // check if param it is only object or array of objects
    function setLocalStorage(data) {
      


      switch (Object.prototype.toString.call(data)) {
        
        case "[object Object]":
          var keys = Object.keys(data)
          $localStorage[keys[0]] = data[keys[0]];
        break;

        case "[object Array]":
          angular.forEach(data, function(obj) {
            var keys = Object.keys(obj)
            $localStorage[keys[0]] = obj[keys[0]];
          });          
        break;

        default:
          console.error('setLocalStorage param has to be object or array');
        break;
      }
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
      //console.log('$localStorage.userStatus = ',$localStorage.userStatus);
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

    // function getListOfWords(language_and_page) {
    //   return $http.get('/api/get_words_with_unknowns1/'+language_and_page); // TODO: remove 1
    // }



    // TODO: do translation
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