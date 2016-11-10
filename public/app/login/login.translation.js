(function() {
  // angular
  //   .module('MyApp')
  //   .config(english);

  // english.$inject = ['$translateProvider'];

  // function english($translateProvider) {
  //   $translateProvider
  //     .translations('en', {
  //       LOGIN: {
  //         H2_LOGIN: 'Log in',
  //       }
  //     })
  //     .translations('pl', {
  //       LOGIN: {
  //         H2_LOGIN: 'logowanie',
  //       }
  //     });
  // }

  angular
    .module('MyApp')
    .config(['$translateProvider', function ($translateProvider) {

      $translateProvider
        .translations('en', {
          LOGIN: {
            h2_LOGIN: 'Log in',
            PLC_EMAIL: 'Email',
            PLC_PASSWORD: 'Password',
            BTN_LOG_IN: 'Log in',
            MSG_DONT_HAVE_AN_ACCOUNT_YET: 'Don\'t have an account yet?',
            BTN_SIGN_UP: 'Sign up',
            BTN_SIGN_IN_WITH_FACEBOOK: 'Sign in with Facebook',
            BTN_SIGN_IN_WITH_GOOGLE: 'Sign in with Google'
          },
        });
     
      $translateProvider.translations('pl', {
          LOGIN: {
            h2_LOGIN: 'Zaloguj się',
            PLC_EMAIL: 'Email',
            PLC_PASSWORD: 'Hasło',
            BTN_LOG_IN: 'Zaloguj',
            MSG_DONT_HAVE_AN_ACCOUNT_YET: 'Nie masz jeszcze konta?',
            BTN_SIGN_UP: 'Załóż konto',
            BTN_SIGN_IN_WITH_FACEBOOK: 'Zaloguj przez Facebook',
            BTN_SIGN_IN_WITH_GOOGLE: 'Zaloguj przez Google'
          },
      });
     
      //$translateProvider.preferredLanguage('en');
    }]);

})();
