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
            WHAT_LANGUAGE_YOU_WOULD_LIKE_TO_LEARN: 'what language you would like to learn?'
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
            WHAT_LANGUAGE_YOU_WOULD_LIKE_TO_LEARN: 'Którego języka chciałbyś się uczyć?'
          },
        });
     

     
      //$translateProvider.preferredLanguage('en');
    }]);

})();
