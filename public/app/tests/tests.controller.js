(function () {
  angular
    .module('MyApp')
    .controller('TestsCtrl',TestsCtrl);

    TestsCtrl.$inject = ['$translate', 'maxWordsPerPage', 'translatePluginToISO', 'user', 'availableDictionaries'];

    function TestsCtrl ($translate, maxWordsPerPage, translatePluginToISO, user, availableDictionaries ) {
        vm = this;
            vm.data = {
                //availableDictionaries : {},
                languageToLearn  : 'en_EN',
                maxWordsPerPage: maxWordsPerPage
            };
        user.setLocalStorage( 
          {
            languageToLearn: 'en_EN'
          });

            showLeftButtons();

 
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

