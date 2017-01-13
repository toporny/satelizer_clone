(function () {

	angular
	.module('MyApp')
  .controller('LogoutCtrl', LogoutCtrl);

  LogoutCtrl.$inject = ['$location', '$auth', '$translate', '$stateParams', 'toastr', 'user' ];

  function LogoutCtrl($location, $auth, $translate, $stateParams, toastr, user ) {
    if (!$auth.isAuthenticated()) { return; }
    console.log('$stateParams.error = ', $stateParams.error);
    $auth.logout()
      .then(function() {
        toastr.success($translate.instant('LOGIN.YOU_HAVE_BEEN_LOGGED_OUT'));

        //toastr.info('You have been logged out');
        console.log('TODO: remove all storage data');
        // user.setLocal1Storage(['displayName','email','languageToLearn' ,'userStatus'],
        //   {
        //     displayName: undefined,
        //     email: undefined,
        //     languageToLearn: undefined,
        //     userStatus: 'anonymous'
        //   });
        user.setLocalStorage(
          [
            {displayName: undefined},
            {email: undefined},
            {languageToLearn: undefined},
            {userStatus: 'anonymous'}
          ]
          );
        $location.path('/');
      });
  };

})();
  