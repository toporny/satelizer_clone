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
     * Helper auth functions
     */
    var skipIfLoggedIn = function($q, $auth) {
      var deferred = $q.defer();
      if ($auth.isAuthenticated()) {
        deferred.reject();
      } else {
        deferred.resolve();
      }
      return deferred.promise;
    };

    var loginRequired = function($q, $location, $auth) {
      var deferred = $q.defer();
      if ($auth.isAuthenticated()) {
        deferred.resolve();
      } else {
        $location.path('/login');
      }
      return deferred.promise;
    };

    /**
     * App routes
     */
    $stateProvider
      .state('home', {
        url: '/',
        controller: 'HomeCtrl as home',
        templateUrl: 'app/home/home.html'
      })
      .state('login', {
        url: '/login',
        templateUrl: 'app/login/login.html',
        controller: 'LoginCtrl as login',
        resolve: {
          skipIfLoggedIn: skipIfLoggedIn
        }
      })
      .state('signup', {
        url: '/signup',
        templateUrl: 'app/signup/signup.html',
        controller: 'SignupCtrl as signup',
        resolve: {
          skipIfLoggedIn: skipIfLoggedIn
        }
      })
      .state('learn', {
        url: '/learn',
        templateUrl: 'app/learn/learn.html',
        controller: 'LearnCtrl as learn',
        resolve: {
          loginRequired: loginRequired
        }
      })
      .state('pick', {
        url: '/pick',
        templateUrl: 'app/pick-words/pick-words.html',
        controller: 'PickCtrl as pick',
        resolve: {
          loginRequired: loginRequired
        }
      })      
      .state('tests', {
        url: '/tests',
        templateUrl: 'app/tests/tests.html',
        controller: 'TestsCtrl as test',
        resolve: {
          loginRequired: loginRequired
        }
      })
      .state('results', {
        url: '/results',
        templateUrl: 'app/results/results.html',
        controller: 'ResultsCtrl as results',
        resolve: {
          loginRequired: loginRequired
        }
      })
      .state('logout', {
        url: '/logout',
        template: null,
        controller: 'LogoutCtrl'
      })
      .state('profile', {
        url: '/profile',
        templateUrl: 'app/profile/profile.html',
        controller: 'ProfileCtrl',
        resolve: {
          loginRequired: loginRequired
        }
      });
      
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

    // $authProvider.github({
    //   clientId: 'YOUR_GITHUB_CLIENT_ID'
    // });

    // $authProvider.linkedin({
    //   clientId: 'YOUR_LINKEDIN_CLIENT_ID'
    // });

    // $authProvider.instagram({
    //   clientId: 'YOUR_INSTAGRAM_CLIENT_ID'
    // });

    // $authProvider.yahoo({
    //   clientId: 'YOUR_YAHOO_CLIENT_ID'
    // });

    // $authProvider.live({
    //   clientId: 'YOUR_MICROSOFT_CLIENT_ID'
    // });

    // $authProvider.twitch({
    //   clientId: 'YOUR_TWITCH_CLIENT_ID'
    // });

    // $authProvider.bitbucket({
    //   clientId: 'YOUR_BITBUCKET_CLIENT_ID'
    // });

    // $authProvider.spotify({
    //   clientId: 'YOUR_SPOTIFY_CLIENT_ID'
    // });

    // $authProvider.twitter({
    //   url: '/auth/twitter'
    // });

    // $authProvider.oauth2({
    //   name: 'foursquare',
    //   url: '/auth/foursquare',
    //   clientId: 'MTCEJ3NGW2PNNB31WOSBFDSAD4MTHYVAZ1UKIULXZ2CVFC2K',
    //   redirectUri: window.location.origin || window.location.protocol + '//' + window.location.host,
    //   authorizationEndpoint: 'https://foursquare.com/oauth2/authenticate'
    // });
  });
