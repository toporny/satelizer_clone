// (function () {
//     angular
//         .module('MyApp')
//         .service('localauth', localauth);

//   // localauth.$inject = ['$stateProvider', '$http', '$q', '$location', '$auth'];
//   // function localauth($stateProvider, $http, $q, $location, $auth) {
//   localauth.$inject = ['$state', '$http', '$q', '$location', '$auth'];
//   function localauth($state, $http, $q, $location, $auth) {

//     // interface
//     var service = {
//       skipIfLoggedIn: skipIfLoggedIn,
//       loginRequired: loginRequired
//     };

//     return service;

//     function skipIfLoggedIn() {
//       var deferred = $q.defer();
//       if ($auth.isAuthenticated()) {
//         deferred.reject();
//       } else {
//         deferred.resolve();
//       }
//       return deferred.promise;
//       //return 1;
//     }

//     function loginRequired() {
//       var deferred = $q.defer();
//       if ($auth.isAuthenticated()) {
//         deferred.resolve();
//       } else {
//         $location.path('/login');
//       }
//       return deferred.promise;
//       //return 2;
//     }
//   };

// })();
