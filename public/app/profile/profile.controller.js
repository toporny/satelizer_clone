(function () {

angular
  .module('MyApp')
  .controller('ProfileCtrl', ProfileCtrl);

  ProfileCtrl.$inject = ['$scope', '$auth', 'toastr', 'Account', '$translate', '$state', 'common', 'translations'];

  function ProfileCtrl($scope, $auth, toastr, Account, $translate, $state, common, translations) {

    vm = this;
    vm.getProfile = getProfile;
    vm.updateProfile = updateProfile;
    vm.renewLanguageToLearn = renewLanguageToLearn;
    vm.link = link;
    vm.unlink = unlink;

    vm.availableDictionary = {};

    vm.data = {};


    /* set default value to vm.data.languageToLearnSelected */
    function renewLanguageToLearn() {
      angular.forEach(vm.availableDictionary.data.languages, function(value, key) {
        if (value.language_id == vm.data.localeSelected.id) {
          vm.data.languageToLearnArrayList = angular.fromJson(value.available_languages);
          angular.forEach(vm.data.languageToLearnArrayList, function(value, key) {
            if (value.id == $scope.user.languageToLearn) {
              vm.data.languageToLearnSelected = value;
            }
          });
        }
      });
    }


    function getProfile() {
      Account.getProfile()
        .then(function(response) {
          $scope.user = response.data;  // make scope.user to VM 
          return common.getAvailableDictionaries();
        })
        .then(function(availableDictionary) {
          vm.availableDictionary = availableDictionary;
          /* set default value to vm.data.locale */
          vm.data.localeArrayList = translations;
          vm.data.localeSelected = 'en_EN';
          angular.forEach(translations, function(value, key) {
            if (value.id == $scope.user.locale) {
              vm.data.localeSelected = {id: value.id, name: value.name};
            }
          });

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
      console.log('$scope.user', $scope.user);
      $scope.user.locale = vm.data.localeSelected;
      $scope.user.languageToLearn = vm.data.languageToLearnSelected;

      switch (vm.data.languageToLearnSelected.id) {
        case 'gb_GB' : $translate.use('en'); break;
        case 'pl_PL' : $translate.use('pl'); break;
        default : $translate.use('en'); break;
      }


      Account.updateProfile($scope.user)
        .then(function() {
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

    getProfile();
  };

})();
