(function () {

angular
  .module('MyApp')
  .controller('ProfileCtrl', ProfileCtrl);

  ProfileCtrl.$inject = ['$scope', '$auth', 'toastr', 'user', '$translate', '$state', 'common', 'translationsSoFar', 'availableDictionaries', 'user'];

  function ProfileCtrl($scope, $auth, toastr, user, $translate, $state, common, translationsSoFar, availableDictionaries, user) {

    vm = this;
    vm.getProfile = getProfile;
    vm.updateProfile = updateProfile;
    vm.renewLanguageToLearn = renewLanguageToLearn;
    vm.link = link;
    vm.unlink = unlink;

    vm.availableDictionary = {};

    vm.data = {};

    getProfile();

    // -------------------------------------------------------------------

    /* set default value to vm.data.languageToLearnSelected */
    function renewLanguageToLearn() {
      angular.forEach(vm.availableDictionary, function(value, key) {
        if (key == vm.data.localeSelected.id) {
          vm.data.languageToLearnArrayList = angular.fromJson(value.available_languages);
          angular.forEach(vm.data.languageToLearnArrayList, function(value, key) {
            if (value.id == $scope.user.languageToLearn) {
              vm.data.languageToLearnSelected = value;
            }
          });
        }
      });
    }


    /*
    * getProfile from API
    */
    function getProfile() {
      user.getProfileFromAPI()
        .then(function(response) {
          $scope.user = response.data; 
          vm.availableDictionary = availableDictionaries;
          /* set default value to vm.data.locale */
          vm.data.localeArrayList = translationsSoFar;
          vm.data.localeSelected = 'en_EN';

          angular.forEach(translationsSoFar, function(el){
           if (el.id.substr(0,2) == $translate.use()) vm.data.localeSelected = el;
          })

          /* set default value to vm.data.languageToLearnSelected */
          renewLanguageToLearn();

        })
        .catch(function(response) {
          toastr.error(response.data.message, response.status);
          $state.go('logout');          
        });
    };


    /*
    *   Update profile
    */
    function updateProfile() {
      $scope.user.locale = vm.data.localeSelected;
      $scope.user.languageToLearn = vm.data.languageToLearnSelected;
     
      switch (vm.data.localeSelected.id) {
        case 'gb_GB' : user.changeLocaleForThisAPP('en_EN'); break;
        case 'en_EN' : user.changeLocaleForThisAPP('en_EN'); break;
        case 'pl_PL' : user.changeLocaleForThisAPP('pl_PL'); break;
        default : user.changeLocaleForThisAPP('en_EN'); break;
      }

      user.updateProfileByAPI($scope.user)
        .then(function() {

          // reset variable 'languageToLearn' in storage
          if ( vm.data.languageToLearnSelected !== undefined ) {
            console.log('vm.data.languageToLearnSelected',vm.data.languageToLearnSelected);
            user.setLocalStorage(['languageToLearn'], {
              'languageToLearn' :  vm.data.languageToLearnSelected.id
            });
          } else {
            user.setLocalStorage(['languageToLearn'], {
              'languageToLearn' : null
            });
          }

          toastr.success('Profile has been updated');
        })
        .catch(function(response) {
          toastr.error(response.data.message, response.status);
        });
    };


    function link(provider) {
      $auth.link(provider)
        .then(function() {
          toastr.success('You have successfully linked a ' + provider + ' account');
          $scope.getProfile();
        })
        .catch(function(response) {
          toastr.error(response.data.message, response.status);
        });
    };


    function unlink(provider) {
      alert(provider);
      $auth.unlink(provider)
        .then(function() {
          toastr.info('You have unlinked a ' + provider + ' account');
          $scope.getProfile();
        })
        .catch(function(response) {
          toastr.error(response.data ? response.data.message : 'Could not unlink ' + provider + ' account', response.status);
        });
    };

  };

})();
