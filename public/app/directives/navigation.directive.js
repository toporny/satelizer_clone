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
            bindToController: false,
            templateUrl: templateUrl
        };
    }


    // ---------------------------------------------
    navCtrl.$inject = ['$scope', '$auth', '$state', '$location', '$ngBootbox', '$translate', 'toastr'];


    function navCtrl($scope, $auth, $state, $location, $ngBootbox, $translate, toastr) {

        var $ctrl = this;
        $ctrl.init = init;
        $ctrl.isAuthenticated = null;
        $ctrl.isActive = isActive;
        $ctrl.flag = 'en';
        $ctrl.currentLanguage = $translate.use();

        $ctrl.changeLanguage = changeLanguage;
        //$ctrl.delideli = delideli;


        function isActive (viewLocation) {
            var a = $location.path().indexOf('/', 1);
            if (a>-1) {
                var changedLocationPath = $location.path().substr(0,a);
            }
            else changedLocationPath = $location.path();

            var active = (viewLocation === changedLocationPath);
            return active;
        };


        function changeLanguage(){

            var currentLanguage  = $translate.use();
            var options = {
                message: 'Select Language',
                size: "small",
                className: 'test-class',
                buttons: {
                    Polish: {
                        label: '<span class="lang-sm" lang="pl"></span> Polski',
                        className: "btn-change-language btn-info",
                        callback: function() {
                            $ctrl.currentLanguage = 'pl';
                            $translate.use('pl');
                        }
                    },
                    English: {
                        label: '<span class="lang-sm" lang="en"></span> English',
                        className: "btn-change-language btn-info",
                        callback: function(e) {
                            $ctrl.currentLanguage = 'en';
                            $translate.use('en');
                        }
                    },
                    Spain: {
                        label: '<span class="lang-sm" lang="sp"></span> Spain',
                        className: "btn-change-language btn-info",
                        callback: function(e) {
                          toastr.warning('Not yet ready','Warning');
                        }
                    },
                    German: {
                        label: '<span class="lang-sm" lang="de"></span> German',
                        className: "btn-change-language btn-info",
                        callback: function(e) {
                          toastr.warning('Not yet ready','Warning');
                        }
                    },
                    French: {
                        label: '<span class="lang-sm" lang="fr"></span> French',
                        className: "btn-change-language btn-info",
                        callback: function(e) {
                          toastr.warning('Not yet ready','Warning');
                        }
                    },
                    cancel: {
                        label: 'Cancel',
                        className: "btn-change-language btn-warning btn-change-language-cancel",
                        callback: function(e) {

                        }
                    }
                }
            };

            $ngBootbox.customDialog(options);
        }


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
