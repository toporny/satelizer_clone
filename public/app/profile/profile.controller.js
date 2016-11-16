(function () {

angular
  .module('MyApp')
  .controller('ProfileCtrl', ProfileCtrl);

  ProfileCtrl.$inject = ['$scope', '$auth', 'toastr', 'Account', '$translate', '$state', 'common', 'translations'];

  function ProfileCtrl($scope, $auth, toastr, Account, $translate, $state, common, translations) {

    vm = this;
    vm.getProfile = getProfile;
    vm.updateProfile = updateProfile;
    vm.link = link;
    vm.unlink = unlink;

    vm.data = {};

    //   whatToLearnLanguage: languagesDefinitions,
    //   languageToLearn : languagesDefinitions[1]     
    // };
    // .constant('languagesDefinitions',[
    //     {id: 'en_EN', name: 'english'},
    //     {id: 'es_ES', name: 'spanish'},
    //     {id: 'ru_RU', name: 'russian'},
    //     {id: 'fr_FR', name: 'french'},
    //     {id: 'de_DE', name: 'deutsch'},
    //     {id: 'pl_PL', name: 'polish'}
    // ])

    function getProfile() {

      // common.getAvailableDictionariesForLanguage()
      // .then(Account.getProfile())


      Account.getProfile()
        .then(function(response) {
          console.log('response', response);
          $scope.user = response.data;
          return common.getAvailableDictionariesForLanguage();
        })
        .then(function(response_data) {
          console.log('response_data', response_data );
          // prepare languagesDefinitions TODO: (use cache later!)
          vm.data.whatToLearnLanguage = response_data.data.languages;
          vm.data.interfaceLanguage = translations;

          angular.forEach(translations, function(value, key) {
            if (value.id == $scope.user.locale) {
              vm.data.locale = {id: value.id, name: value.name};
            }
          });

          angular.forEach(response_data.data.languages, function(value, key) {
            console.log(value);
            if (value.id == $scope.user.languageToLearn) {
               vm.data.languageToLearn = {id: value.id, name: value.name};
            }
          });
        })
        .catch(function(response) {
          toastr.error(response.data.message, response.status);
          console.log('logout');
          $state.go('logout');          
        });
    };

    function updateProfile() {
      console.log('$scope.user', $scope.user);
      $scope.user.locale = vm.data.locale;
      $scope.user.languageToLearn = vm.data.languageToLearn;

      switch (vm.data.locale.id) {
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
