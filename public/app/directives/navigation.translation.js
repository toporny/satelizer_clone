(function() {

  angular
    .module('MyApp')
    .config(['$translateProvider', function ($translateProvider) {

      $translateProvider
        .translations('en', {
          NAVIGATION: {
            HOME: 'Home',
            PICK_WORDS: 'Pick Words',
            LEARN: 'Learn',
            TEST: 'Test',
            RESULTS: 'Results',
            LOGIN: 'Log in',
            SIGNUP: 'Sign up',
            PREMIUM: 'Premium',
            PROFILE: 'Profile',
            LOGOUT: 'Logout',
          },
        });
     
      $translateProvider.translations('pl', {
          NAVIGATION: {
            HOME: 'Start',
            PICK_WORDS: 'Wybierz słowa',
            LEARN: 'Nauka',
            TEST: 'Testy',
            RESULTS: 'Wyniki',
            LOGIN: 'Login',
            SIGNUP: 'Zarejestruj się',
            PREMIUM: 'Premium',
            PROFILE: 'Profil',
            LOGOUT: 'Wyloguj się',
          },
      });
     
      //$translateProvider.preferredLanguage('en');
    }]);

})();
