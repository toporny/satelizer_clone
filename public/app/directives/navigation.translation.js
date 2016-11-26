(function() {

  angular
    .module('MyApp')
    .config(['$translateProvider', function ($translateProvider) {

      $translateProvider
        .translations('en', {
          NAVIGATION: {
            HOME: 'Home',
            PICK_WORDS: 'Pick Unknown Words',
            LEARN: 'Learn',
            TEST: 'Test',
            RESULTS: 'Results',
            CHALLENGE: 'Challenge!',
            LOGIN: 'Log in',
            SIGNUP: 'Sign up',
            PREMIUM: 'Premium',
            PROFILE: 'Profile',
            LOGOUT: 'Logout',
            FLAG: 'en',
          },
        });
     
      $translateProvider.translations('pl', {
          NAVIGATION: {
            HOME: 'Start',
            PICK_WORDS: 'Wybierz nieznane słowa',
            LEARN: 'Nauka',
            TEST: 'Testy',
            RESULTS: 'Wyniki',
            CHALLENGE: 'Wyzwanie!',
            LOGIN: 'Login',
            SIGNUP: 'Zarejestruj się',
            PREMIUM: 'Premium',
            PROFILE: 'Profil',
            LOGOUT: 'Wyloguj się',
            FLAG: 'pl',
          },
      });
     
      //$translateProvider.preferredLanguage('en');
    }]);

})();
