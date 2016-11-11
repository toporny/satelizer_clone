(function () {

angular
  .module('MyApp')
  .controller('ProfileCtrl', ProfileCtrl);

  ProfileCtrl.$inject = ['$scope', '$auth', 'toastr', 'Account', 'languagesDefinitions'];

  function ProfileCtrl($scope, $auth, toastr, Account, languagesDefinitions) {

    vm = this;
    vm.getProfile = getProfile;
    vm.updateProfile = updateProfile;
    vm.link = link;
    vm.unlink = unlink;

    vm.data = { 
      interfaceLanguage: languagesDefinitions,
      locale : languagesDefinitions[0],

      whatToLearnLanguage: languagesDefinitions,
      languageToLearn : languagesDefinitions[1]     
    };


    function getProfile() {
      Account.getProfile()
        .then(function(response) {
          $scope.user = response.data;
          vm.data.languageToLearn = angular.fromJson(response.data.languageToLearn);
          vm.data.locale = angular.fromJson(response.data.locale);
        })
        .catch(function(response) {
          toastr.error(response.data.message, response.status);
        });
    };

    function updateProfile() {
      console.log('$scope.user', $scope.user);
      $scope.user.locale = vm.data.locale;
      $scope.user.languageToLearn = vm.data.languageToLearn;

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
