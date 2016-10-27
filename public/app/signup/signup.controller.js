(function () {
angular
  .module('MyApp')
  .controller('SignupCtrl', SignupCtrl);

  SignupCtrl.$inject = [ '$location', '$auth', 'toastr'];

  function SignupCtrl ( $location, $auth, toastr) {
    
    vm = this;
    vm.signup = signup;

    vm.data = {
      displayName: '',
      email: '',
      password: ''
    }

 
    function signup() {
      console.log('vm.data.user',vm.data);
      $auth.signup(vm.data)
        .then(function(response) {
          $auth.setToken(response);
          $location.path('/');
          toastr.info('You have successfully created a new account and have been signed-in');
        })
        .catch(function(response) {
          toastr.error(response.data.message);
        });
    };
  };

})();
