(function () {
  angular
    .module('MyApp')
    .controller('LearnCtrl',LearnCtrl);

    LearnCtrl.$inject = ['$scope', '$translate', 'maxWordsPerPage', 'translatePluginToISO', 'user', 'availableDictionaries'];

//				http://vt-api.com.es/vocabulary-trainer.php


    function LearnCtrl ($scope, $translate, maxWordsPerPage, translatePluginToISO, user, availableDictionaries ) {
    	vm = this;
    	vm.wordPicked = wordPicked;
    	vm.add_at_bottom = add_at_bottom;
    	vm.add_at_top = add_at_top;
    	vm.remove_at_bottom = remove_at_bottom;
    	vm.remove_at_top = remove_at_top;
    	vm.scroll_up = scroll_up;
    	vm.scroll_down = scroll_down;

			vm.data = {
				//availableDictionaries : {},
				languageToLearn  : 'en_EN',
				maxWordsPerPage: maxWordsPerPage,
				myValue: false,
				showFirst: true,
				myValue2: 30,
				slowo : 'word3',
				items: [
					{id:1, word:'word1'},
					{id:2, word:'word2'},
					{id:3, word:'word3'},
					{id:4, word:'word4'},
					{id:5, word:'word5'},
					{id:6, word:'word6'},
					{id:7, word:'word7'},
					{id:8, word:'word8'},
					{id:9, word:'word9'},
					{id:10, word:'word10'},
				]
			};

      user.setLocalStorage({languageToLearn: 'en_EN'});


        // $scope.$watchCollection(
        //     "learn.data.items",
        //     function( newValue, oldValue ) {
        //         console.log('oldValue',oldValue);
        //         console.log('newValue',newValue);

        //     }
        // );


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


			function add_at_top(){
				vm.data.items.unshift({id:6, hide: 'false', word:'word6'});
			}

			function add_at_bottom(){
				vm.data.items.push({id:6, hide: 'false', word:'word6'});
			}
			
			function remove_at_top(){
				vm.data.items.splice(0,1);
			}

			function remove_at_bottom(){
				vm.data.items.pop();
			}

 
			function scroll_up(){
				vm.data.slowo = 'word2'; 
				add_at_top();
				remove_at_bottom();
			}

			function scroll_down(){
				vm.data.slowo = 'word3'; 
				remove_at_top();
				add_at_bottom();
			}

			function wordPicked(id) {
				console.log('wordPicked', id);
			}

 

//  http://pl.123rf.com/search.php?word=professor&imgtype=0&t_word=professor&t_lang=pl&oriSearch=proffessor&srch_lang=pl&sti=n7skakul9skrk3zkjr|&mediapopup=21699403


    }



})();

