angular
.module('MyApp', [
  'ngResource',
  'ngMessages',
  'ngAnimate',
  'toastr',
  'ui.router',
  'satellizer'])

.config(function($stateProvider, $urlRouterProvider, $authProvider) {
    /**
     * App routes
     */
    $stateProvider
      .state('logout', {
        url: '/logout',
        template: null,
        controller: 'LogoutCtrl',
        authenticate: false,
      })
      
    $urlRouterProvider.otherwise('/');

    $authProvider.baseUrl = 'http://localhost:3000/';
    // $authProvider.tokenPrefix = 'satellizer';
    /**
     *  Satellizer config
     */
    $authProvider.facebook({
      clientId: '1337484279659233'
    });

    $authProvider.google({
      clientId: '908156294400-qdqgta0rukfi3el2rl8qgsjtcel3ka87.apps.googleusercontent.com'
    });

  });


angular.module('MyApp')
  .run(function ($rootScope, $state, $auth ) {
    $rootScope.$on("$stateChangeStart", function(event, toState, toParams, fromState, fromParams){
      // console.log('toState = ',toState);
      // console.log('toParams = ',toParams);
      // console.log('fromState = ',fromState);
      // console.log('fromParams = ',fromParams);
      if (toState.authenticate && !$auth.isAuthenticated()){
        // User isn’t authenticated
        $state.transitionTo("login");
        console.log('User isnt authenticated -> login');
        event.preventDefault(); 
      } else {
         // nav.setSelected(toState.url);
         // console.log('nav.getSelected();',nav.getSelected());


      }
    });
  });

