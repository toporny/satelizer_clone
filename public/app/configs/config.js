(function() {
  angular
    .module('MyApp')
    .constant('apiUrl', 'http://localhost:3000/')
    .constant('translationsSoFar',[  // it has to be array for PROFIL/LOCALE
        {id: 'en_EN', name: 'english'},
        // {id: 'es_ES', name: 'spanish'},
        // {id: 'ru_RU', name: 'russian'},
        // {id: 'fr_FR', name: 'french'},
        // {id: 'de_DE', name: 'deutsch'},
        {id: 'pl_PL', name: 'polish'}
    ])
    .constant('translatePluginToISO', {
        en: 'en_EN',
        es: 'es_ES',
        ru: 'ru_RU',
        fr: 'fr_FR',
        de: 'de_DE',
        pl: 'pl_PL',
    })
    .constant('maxWordsPerPage', 500)    

})();

