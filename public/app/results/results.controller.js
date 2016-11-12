(function () {
  angular
    .module('MyApp')
    .controller('ResultsCtrl',ResultsCtrl);

    ResultsCtrl.$inject = ['$window','$q'];

    function ResultsCtrl ($window,$q) {

    	vm = this;
    	vm.klik = klik;
 


	function klik () {
		    FB.init({ 
		      appId: '1337484279659233',
		      status: true, 
		      cookie: true, 
		      xfbml: true,
		      version: 'v2.8'
		    });
 

            FB.ui({
                method: 'feed',
                name: 'Name you want to show',
                link: 'http://onet.pl',
                picture: 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCkQT2nXrkFUVyIYqaOQ8BqjcEc6ASulI-EpKnIrb42mD5SPMP',
                //caption: 'Caption you want to show',
                description: 'Description you want to show',
                message: 'qqqqqqqq wwwwwww won 98% w just the words'
            });
	}
// https://developers.facebook.com/tools/explorer/1337484279659233?method=GET&path=me%2Ffeed&version=v2.8

  }
})();