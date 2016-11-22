angular
.module('MyApp', [
  'ngResource',
  'ngMessages',
  'pascalprecht.translate',
  'ngAnimate',
  'toastr',
  'ui.router',
  'ngBootbox',
  'satellizer',
  'ui.bootstrap',
  'ngStorage'
  ])

.config(function($translateProvider, $stateProvider, $urlRouterProvider, $authProvider, $ngBootboxConfigProvider, apiUrl) {
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

    $authProvider.baseUrl = apiUrl;
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

    // default language
    $translateProvider.preferredLanguage('en');
    // Enable escaping of HTML
    $translateProvider.useSanitizeValueStrategy('escapeParameters');

    $ngBootboxConfigProvider.setDefaultLocale('en');

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

