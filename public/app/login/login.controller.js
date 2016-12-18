(function () {

angular.module('MyApp')
  .controller('LoginCtrl', LoginCtrl);

  LoginCtrl.$inject = ['$scope', '$location', '$auth', '$translate', 'toastr', 'user'];

  function LoginCtrl ($scope, $location, $auth, $translate, toastr, user ) {

    var vm = this;

    vm.login = login;
    vm.authenticate = authenticate;
    vm.data = {user: { login: '', password: ''} };

    function login() {
      // TODO: zresetowac

      user.setLocalStorage( 
        [
          { displayName: '' },
          { languageToLearn: ''},
          { userStatus: ''},
          { email: ''}
        ]
      );      

      $auth.login(vm.data.user)
        .then(function(results) {
          
          
          user.changeLocaleForThisAPP(results.data.locale);
          console.log('results.data!!!',results.data);
          console.log('@@@@results.data.displayName!!!', results.data.displayName);
          user.setLocalStorage( 
            [
              { displayName: results.data.displayName },
              { languageToLearn: results.data.languageToLearn },
              { userStatus: results.data.userStatus } 
            ]
          );
          // $translate.use('pl');

          toastr.success('You have successfully signed in!');
          //Account.setLanguageToLearn
          $location.path('/');
        })
        .catch(function(error) {
          toastr.error(error.data.message, error.status);
        });
    };

    function authenticate(provider) {

      $auth.authenticate(provider)
        .then(function(result_provider) {
          user.changeLocaleForThisAPP(result_provider.data.locale); 
          user.setLocalStorage( 
            [
              { displayName: result_provider.data.displayName },
              { languageToLearn: result_provider.data.languageToLearn },
              { userStatus: result_provider.data.userStatus }
            ]
          );

          toastr.success($translate.instant('LOGIN.YOU_HAVE_SUCCESSFULLY_SIGNED_IN_WITH_PROVIDER', {provider: provider}));
          $location.path('/');
        })
        .catch(function(error) {
          if (error.message) {
            // promise reject error.
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

