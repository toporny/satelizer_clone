(function() {
  angular
    .module('MyApp')
    .constant('apiUrl', 'http://localhost:3000/')

    .constant('definedLanguages',{
        'FR_fr': { label: 'French',  words:4000,  free_words: 2000 },
        'GE_ge': { label: 'German',  words:3000,  free_words: 2000 },
        'SP_sp': { label: 'Spain',   words:10000, free_words: 2000 },
        'RU_ru': { label: 'Russian', words:10000, free_words: 2000 },
        'PL_pl': { label: 'Polish',  words:5000,  free_words: 2000 },
        'EN_en': { label: 'English', words:4000,  free_words: 2000 }
    });


})();

