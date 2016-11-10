(function () {
angular.module('MyApp')
  .controller('LoginCtrl', LoginCtrl);

  LoginCtrl.$inject = ['$scope', '$location', '$auth', '$translate', 'toastr'];

  function LoginCtrl ($scope, $location, $auth, $translate, toastr ) {

    var vm = this;

    vm.login = login;
    vm.authenticate = authenticate;
    vm.data = {user: { login: '', password: ''} };

    function login() {
      $auth.login(vm.data.user)
        .then(function() {
          toastr.success('You have successfully signed in!');
          $location.path('/');
        })
        .catch(function(error) {
          toastr.error(error.data.message, error.status);
        });
    };

    function authenticate(provider) {
      $auth.authenticate(provider)
        .then(function() {
          toastr.success('You have successfully signed in with ' + provider + '!');
          $location.path('/');
        })
        .catch(function(error) {
          if (error.message) {
            // Satellizer promise reject error.
            toastr.error(error.message);
          } else if (error.data) {
            // HTTP response error from server
            toastr.error(error.data.message, error.status);
          } else {
            toastr.error(error);
          }
        });
    };
  };

})();

