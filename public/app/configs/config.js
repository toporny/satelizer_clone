(function() {
  angular
    .module('MyApp')
    .constant('apiUrl', 'http://localhost:3000/')
    .constant('languagesDefinitions',[
        {id: 'gb_GB', name: 'english'},
        {id: 'es_ES', name: 'spanish'},
        {id: 'ru_RU', name: 'russian'},
        {id: 'fr_FR', name: 'french'},
        {id: 'de_DE', name: 'german'},
        {id: 'pl_PL', name: 'polish'}
    ])
    .constant('definedLanguages',{ // todo: remove this
        'FR_fr': { label: 'French',  words:4000,  free_words: 2000 },
        'GE_ge': { label: 'German',  words:3000,  free_words: 2000 },
        'es_ES': { label: 'Spain',   words:10000, free_words: 2000 },
        'RU_ru': { label: 'Russian', words:10000, free_words: 2000 },
        'PL_pl': { label: 'Polish',  words:5000,  free_words: 2000 },
        'EN_en': { label: 'English', words:4000,  free_words: 2000 }
    });


})();

