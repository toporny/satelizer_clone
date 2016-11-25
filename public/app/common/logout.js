(function () {

	angular
	.module('MyApp')
  .controller('LogoutCtrl', LogoutCtrl);

  LogoutCtrl.$inject = ['$location', '$auth', '$translate', 'toastr', 'user' ];

  function LogoutCtrl($location, $auth, $translate, toastr, user ) {
    if (!$auth.isAuthenticated()) { return; }
    $auth.logout()
      .then(function() {
        toastr.success($translate.instant('LOGIN.YOU_HAVE_BEEN_LOGGED_OUT'));

        //toastr.info('You have been logged out');
        console.log('TODO: remove all storage data');
        user.setLocalStorage(['displayName','email','languageToLearn' ,'userStatus'],
          {
            displayName: undefined,
            email: undefined,
            languageToLearn: undefined,
            userStatus: 'anonymous'
          });
        $location.path('/');
      });
  };

})();
  