// (function () {
//   angular
//     .module('MyApp')
//     .config(routes);

//     routes.$inject = ['$stateProvider', '$urlRouterProvider', '$authProvider'];

//     function routes($stateProvider, $urlRouterProvider, $authProvider ) {

//     /**
//      * Helper auth functions
//      */
//     var skipIfLoggedIn = function($q, $auth, localauth) {
//       var deferred = $q.defer();
//       if ($auth.isAuthenticated()) {
//         deferred.reject();
//       } else {
//         deferred.resolve();
//       }
//       return deferred.promise;
//     };
//     /**
//      * App routes
//      */

//   };

// })();
