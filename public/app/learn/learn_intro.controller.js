(function () {
  angular
    .module('MyApp')
    .controller('LearnIntroCtrl',LearnIntroCtrl);

    LearnIntroCtrl.$inject = ['$translate', '$state','maxWordsPerPage', 'translatePluginToISO', 'user', 'availableDictionaries'];

    function LearnIntroCtrl ($translate, $state, maxWordsPerPage, translatePluginToISO, user, availableDictionaries ) {
    	vm = this;
			vm.languageSelected1 = languageSelected1;
			vm.start = start;

			vm.data = {
				//availableDictionaries : {},
				languageToLearn  : 'en_EN',
				maxWordsPerPage: maxWordsPerPage,
				flag: 'en'
//ngStorage-languageToLearn
				// languages: languages,
				// //config: config, 
				// languageSelected: languages[0], // we need this to pick first element as selected
			};

 

			user.setLocalStorage( { languageToLearn: 'en_EN' });


			showLeftButtons();

			// if languageSelected then go to / #/learn

			
			function start() {
				$state.go('learn');
			}


			function languageSelected1(dictionaryID) {
				$state.go('learn', dictionaryID);
			}

			/*
			* show Left Buttons
			* TODO: move it into directive
			*/
			function showLeftButtons(){
				vm.data.languageToLearn =  user.getLocalStorage( 'languageToLearn' );
				currentLocaleISO = translatePluginToISO[$translate.use()];
				var tmp = [];			
				angular.forEach(availableDictionaries, function(value, key) {
					// don't show the same language as current locale is
					if (key != currentLocaleISO) {
							tmp.push({id : key});
					}
				});
				vm.data.availableDictionaries = tmp;
			}


    }

})();

