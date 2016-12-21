(function () {
  angular
    .module('MyApp')
    .controller('LearnCtrl',LearnCtrl);

    LearnCtrl.$inject = ['$scope', '$translate', '$loading', '$state', 'toastr', 'common', 'maxWordsPerPage', 'translatePluginToISO', 'user', 'availableDictionaries'];

//				http://vt-api.com.es/vocabulary-trainer.php


    function LearnCtrl ($scope, $translate, $loading, $state, toastr, common, maxWordsPerPage, translatePluginToISO, user, availableDictionaries ) {
    	vm = this;
    	vm.goToShowAll = goToShowAll;

    	vm.wordPicked = wordPicked;
    	vm.add_at_bottom = add_at_bottom;
    	vm.add_at_top = add_at_top;
    	vm.remove_at_bottom = remove_at_bottom;
    	vm.remove_at_top = remove_at_top;
    	vm.scroll_up = scroll_up;
    	vm.scroll_down = scroll_down;
    	vm.test = test;

 	

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
					// {id:3, word:'word3'},
					// {id:4, word:'word4'},
					// {id:5, word:'word5'},
					// {id:6, word:'word6'},
					{id:7, word:'word7'},
					{id:8, word:'word8'},
					{id:9, word:'word9'},
					{id:10, word:'word10'},
				]
			};

      user.setLocalStorage({languageToLearn: 'en_EN'});
      
      showLeftColumnWithWords('en_EN', 1);



			//showLeftButtons();

			// if languageSelected then go to / #/learn

			/*
			* show Left Column With Words
			*/
			function showLeftColumnWithWords(languageToLearn, page){
        var paramString = {
            language: languageToLearn,
            page: page
        };

				$loading.start('loading-div');

				common.getUnknownsWithTranslationsForUser(paramString)
				.then(function(response) {
					console.log('response',response);
					  //vm.data.totalItems = response.data.words.total;
					  vm.data.items = response.data.words.data;
					  $loading.finish('loading-div');
					  //vm.data.uibPpaginationDisabled = false;
					})
					.catch(function(fallback) {
					  $loading.finish('loading-div');
					  //vm.data.uibPpaginationDisabled = false;
					  toastr.error('Problem with getting data');
					  console.log(fallback);
					});
			}


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


			function goToShowAll() {
				$state.go('learn_show_all');
			}

			function test() {
				console.log('test');
				showLeftColumnWithWords();
				// vm.data.items = [
				// 	{id:6, word:'word6'},
				// 	{id:7, word:'word7'},
				// 	{id:8, word:'word8'},
				// 	{id:9, word:'word9'},
				// 	{id:10, word:'word10'},
				// 	{id:1, word:'word1'},
				// 	{id:2, word:'word2'},
				// 	{id:3, word:'word3'},
				// 	{id:4, word:'word4'},
				// 	{id:5, word:'word5'},
				// ];				
			}

 

//  http://pl.123rf.com/search.php?word=professor&imgtype=0&t_word=professor&t_lang=pl&oriSearch=proffessor&srch_lang=pl&sti=n7skakul9skrk3zkjr|&mediapopup=21699403


    }



})();

