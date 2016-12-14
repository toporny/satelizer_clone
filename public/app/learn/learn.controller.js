(function () {
  angular
    .module('MyApp')
    .controller('LearnCtrl',LearnCtrl);

    LearnCtrl.$inject = ['$translate', 'maxWordsPerPage', 'translatePluginToISO', 'user', 'availableDictionaries'];

//				http://vt-api.com.es/vocabulary-trainer.php


    function LearnCtrl ($translate, maxWordsPerPage, translatePluginToISO, user, availableDictionaries ) {
    	vm = this;
			vm.data = {
				//availableDictionaries : {},
				languageToLearn  : 'en_EN',
				maxWordsPerPage: maxWordsPerPage
//ngStorage-languageToLearn
				// languages: languages,
				// //config: config, 
				// languageSelected: languages[0], // we need this to pick first element as selected
			};
			//user.setLocalStorage([ 'languageToLearn' ], {locale: 'en_EN'}); 
        user.setLocalStorage(['languageToLearn'],
          {
            languageToLearn: 'en_EN'
          });

			//showLeftButtons();

			// if languageSelected then go to / #/learn

			/*
			* show Left Buttons
			*/
			// function showLeftButtons(){
			// 	vm.data.languageToLearn =  user.getLocalStorage( 'languageToLearn' );
			// 	currentLocaleISO = translatePluginToISO[$translate.use()];
			// 	var tmp = [];			
			// 	angular.forEach(availableDictionaries, function(value, key) {
			// 		// don't show the same language as current locale is
			// 		if (key != currentLocaleISO) {
			// 				tmp.push({id : key});
			// 		}
			// 	});
			// 	vm.data.availableDictionaries = tmp;
			// }


    }

})();

