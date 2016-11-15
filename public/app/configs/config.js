(function() {
  angular
    .module('MyApp')
    .constant('apiUrl', 'http://localhost:3000/')
    .constant('languagesDefinitions',[
        {id: 'en_EN', name: 'english'},
        {id: 'es_ES', name: 'spanish'},
        {id: 'ru_RU', name: 'russian'},
        {id: 'fr_FR', name: 'french'},
        {id: 'de_DE', name: 'deutsch'},
        {id: 'pl_PL', name: 'polish'}
    ])
    .constant('definedLanguages',{ // todo: remove this
        'en_EN': { label: 'english', words:4000,  free_words: 2000 },
        'es_ES': { label: 'spanish',   words:10000, free_words: 2000 },
        'ru_RU': { label: 'russian', words:10000, free_words: 2000 },
        'fr_FR': { label: 'french',  words:4000,  free_words: 2000 },
        'de_DE': { label: 'deutsch',  words:3000,  free_words: 2000 },
        'pl_PL': { label: 'polish',  words:5000,  free_words: 2000 },
    });


})();

