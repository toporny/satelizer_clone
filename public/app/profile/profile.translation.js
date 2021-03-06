(function() {

  angular
    .module('MyApp')
    .config(['$translateProvider', function ($translateProvider) {

      $translateProvider
        .translations('en', {
          PROFILE: {
            HEADER: 'Profile',
            BTN_UPDATE: 'Update Information',
            EDIT_MY_PROFILE: 'Edit My Profile',
            PROFILE_PICTURE: 'Profile Picture,',
            DISPLAY_NAME: 'Display name',
            EMAIL_ADDRESS: 'Email Address',
            LOCALE: 'Locale',
            WHAT_LANGUAGE_YOU_WOULD_LIKE_TO_LEARN: 'what language you would like to learn?',
            PROFILE_HAS_BEEN_UPDATED: 'Profile has been updated',
            SUCCESSFULLY_LOGGED_BY_PROVIDER: 'You have successfully logged by aexternal account'
          },
        });
     
      $translateProvider
        .translations('pl', {
          PROFILE: {
            HEADER: 'Profil',
            BTN_UPDATE: 'Aktualizacja',
            EDIT_MY_PROFILE: 'Edytuj profil',
            PROFILE_PICTURE: 'Zdjęcie profilowe,',
            DISPLAY_NAME: 'Nazwa użytkownika',
            EMAIL_ADDRESS: 'Email',
            LOCALE: 'Język aplikacji',
            WHAT_LANGUAGE_YOU_WOULD_LIKE_TO_LEARN: 'Którego języka chciałbyś się uczyć?',
            PROFILE_HAS_BEEN_UPDATED: 'Profil zaktualizowano.',
            SUCCESSFULLY_LOGGED_BY_PROVIDER: 'You have successfully linked a provider account'
          },
        });
     

     
      //$translateProvider.preferredLanguage('en');
    }]);

})();
