'use strict';

(function () {
    var componentName = 'nav',
        templateUrl = 'app/directives/navigation.tpl.html';

    angular.module('MyApp')
        .directive(componentName, component)
        .controller(componentName, navCtrl)

    // for unit testing: $controller('intro') === new instance of 'navCtrl'

    function component() {
        return {
            restrict: "E",
            scope: { },
            controller: navCtrl,
            controllerAs: '$ctrl',
            //bindToController: true,
            templateUrl: templateUrl
        };
    }


    // ---------------------------------------------
    navCtrl.$inject = ['$auth', '$state', '$location'];

    function navCtrl($auth, $state, $location) {

        var $ctrl = this;
        $ctrl.init = init;
        $ctrl.isAuthenticated = null;
        $ctrl.isActive = isActive;

        function isActive (viewLocation) {
            var active = (viewLocation === $location.path());
            return active;
        };


        function init(){
          $ctrl.isAuthenticated = function() {
            return $auth.isAuthenticated();
          };
        }

        activate();

        /**
         *  initialize
         */
        function activate() {
            $ctrl.init();
        }
    }

    
    // ---------------------------------------------
// http://msurguy.github.io/ladda-bootstrap/



})();
