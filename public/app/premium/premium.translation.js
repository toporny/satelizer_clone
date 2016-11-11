(function() {

  angular
    .module('MyApp')
    .config(['$translateProvider', function ($translateProvider) {

      $translateProvider
        .translations('en', {
          PREMIUM: {
            TITLE: 'Buy premium access',

            TABLE_ROW_1:  {
              DESCRIPTION: 'Access to all dictionaries',
              FREE: 'yes',
              PREMIUM: 'yes'
            },
            TABLE_ROW_2:  {
              DESCRIPTION: 'Words definitions per language',
              FREE: '2.000',
              PREMIUM: '5.000 or more'
            },
            TABLE_ROW_3:  {
              DESCRIPTION: 'Synonyms for each word',
              FREE: '2.000',
              PREMIUM: 'full access'
            },
            TABLE_ROW_4:  {
              DESCRIPTION: 'Learning stats',
              FREE: 'limited',
              PREMIUM: 'full'
            },
            TABLE_ROW_5:  {
              DESCRIPTION: 'Reminders',
              FREE: 'no',
              PREMIUM: 'yes'
            },
            TABLE_ROW_6:  {
              DESCRIPTION: 'Official certificate',
              FREE: 'tak',
              PREMIUM: 'tak'
            },


            BTN_BUY: 'Buy premium now'
          },
        });
     
      $translateProvider
        .translations('pl', {
          PREMIUM: {
            TITLE: 'Kup dostęp premium do pełnej wersji serwisu',

            TABLE_ROW_1:  {
              DESCRIPTION: 'Dostęp do wszystkich słowników',
              FREE: 'tak',
              PREMIUM: 'tak'
            },
            TABLE_ROW_2:  {
              DESCRIPTION: 'Ilość wyrazów w każdym słowniku',
              FREE: '2000',
              PREMIUM: '5000 i więcej'
            },
            TABLE_ROW_3:  {
              DESCRIPTION: 'Ilość synonimów na słowo',
              FREE: 'ograniczona',
              PREMIUM: 'bez ograniczeń'
            },
            TABLE_ROW_4:  {
              DESCRIPTION: 'Statystyki nauki',
              FREE: 'limitowane',
              PREMIUM: 'pełne'
            },
            TABLE_ROW_5:  {
              DESCRIPTION: 'Przypomnienia',
              FREE: 'nie',
              PREMIUM: 'tak'
            },
            TABLE_ROW_6:  {
              DESCRIPTION: 'Oficjalny certyfikat',
              FREE: 'tak',
              PREMIUM: 'tak'
            },

            BTN_BUY: 'Kup dostęp'
          },
        });
     

     
      //$translateProvider.preferredLanguage('en');
    }]);

})();
