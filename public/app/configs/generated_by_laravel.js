(function() {
    // this file is automaticaly generated everytime GET request for this url:
    // http://localhost:3000/api/generate_config_files
    angular
    .module('MyApp')
    .constant('availableDictionaries', {
      'en_EN':{'id': '1','count_words': '4586', 'free_words_for_not_premium_users': '2200', 'language_name': 'english', 'available_languages':  [{"id":"es_ES", "name":"spanish"}, {"id":"ru_RU", "name":"russian"}, {"id":"fr_FR", "name":"french"},  {"id":"de_DE", "name":"deutsch"}, {"id":"pl_PL", "name":"polish"}] },
      'es_ES':{'id': '2','count_words': '5000', 'free_words_for_not_premium_users': '2500', 'language_name': 'spanish', 'available_languages':  [{"id":"en_EN", "name":"english"}, {"id":"ru_RU", "name":"russian"}, {"id":"fr_FR", "name":"french"},  {"id":"de_DE", "name":"deutsch"}, {"id":"pl_PL", "name":"polish"}] },
      'ru_RU':{'id': '3','count_words': '5500', 'free_words_for_not_premium_users': '2600', 'language_name': 'russian', 'available_languages':  [{"id":"en_EN", "name":"english"}, {"id":"es_ES", "name":"spanish"}, {"id":"fr_FR", "name":"french"},  {"id":"de_DE", "name":"deutsch"}, {"id":"pl_PL", "name":"polish"}] },
      'fr_FR':{'id': '4','count_words': '6000', 'free_words_for_not_premium_users': '3000', 'language_name': 'french', 'available_languages':  [{"id":"en_EN", "name":"english"}, {"id":"es_ES", "name":"spanish"}, {"id":"ru_RU", "name":"russian"}, {"id":"de_DE", "name":"deutsch"}, {"id":"pl_PL", "name":"polish"}] },
      'de_DE':{'id': '5','count_words': '6500', 'free_words_for_not_premium_users': '3200', 'language_name': 'deutsch', 'available_languages':  [{"id":"en_EN", "name":"english"}, {"id":"es_ES", "name":"spanish"}, {"id":"ru_RU", "name":"russian"}, {"id":"fr_FR", "name":"french"},  {"id":"pl_PL", "name":"polish"}] },
      'pl_PL':{'id': '6','count_words': '7000', 'free_words_for_not_premium_users': '4400', 'language_name': 'polish', 'available_languages':  [{"id":"en_EN", "name":"english"}, {"id":"es_ES", "name":"spanish"}, {"id":"ru_RU", "name":"russian"}, {"id":"fr_FR", "name":"french"},  {"id":"de_DE", "name":"deutsch"}] },
    })
    .constant('maxWordsPerPage', 250)
    .constant('apiUrl', 'http://localhost:3000/');

})();