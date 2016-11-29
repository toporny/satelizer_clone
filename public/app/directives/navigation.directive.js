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
    navCtrl.$inject = ['$scope', '$auth', '$state', '$location', '$ngBootbox', '$translate', '$rootScope', 'toastr', 'user'];


    function navCtrl($scope, $auth, $state, $location, $ngBootbox, $translate, $rootScope, toastr, user) {

        var $ctrl = this;
        $ctrl.init = init;
        $ctrl.isAuthenticated = null;
        $ctrl.isActive = isActive;
        $ctrl.flag = 'en';

        $ctrl.changeLanguage = changeLanguage;
        $ctrl.isAuthenticated = isAuthenticated;

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

            var options = {
                message: 'Select Language',
                size: "small",
                className: 'test-class',
                buttons: {
                    Polish: {
                        label: '<span class="lang-sm" lang="pl"></span> Polski',
                        className: "btn-change-language btn-info",
                        callback: function() {
                            user.changeLocaleForThisAPP('pl_PL');
                            $rootScope.$emit('AppLanguageChanged', {  value: 'pl_PL' });
                            // TODO: change this in database also!
                        }
                    },
                    English: {
                        label: '<span class="lang-sm" lang="en"></span> English',
                        className: "btn-change-language btn-info",
                        callback: function(e) {
                            user.changeLocaleForThisAPP('en_EN');
                            $rootScope.$emit('AppLanguageChanged', {  value: 'en_EN' });
                            // TODO: change this in database also!
                        }
                    },
                    Spain: {
                        label: '<span class="lang-sm" lang="es"></span> Spain',
                        className: "btn-change-language btn-info",
                        callback: function(e) {
                            toastr.warning('Not yet ready', 'Warning');
                            //$rootScope.$emit('AppLanguageChanged', {  value: 'es_ES' });
                            //user.changeLocaleForThisAPP('es_ES');
                        }
                    },
                    German: {
                        label: '<span class="lang-sm" lang="de"></span> German',
                        className: "btn-change-language btn-info",
                        callback: function(e) {
                            //$rootScope.$emit('AppLanguageChanged', {  value: 'de_DE' });
                            //user.changeLocaleForThisAPP('de_DE');
                            toastr.warning('Not yet ready', 'Warning');
                        }
                    },
                    French: {
                        label: '<span class="lang-sm" lang="fr"></span> French',
                        className: "btn-change-language btn-info",
                        callback: function(e) {
                          //$rootScope.$emit('AppLanguageChanged', {  value: 'fr_FR' });
                            //$rootScope.$emit('AppLanguageChanged', {  value: 'fr_FR' });
                            //user.changeLocaleForThisAPP('fr_FR');
                            toastr.warning('Not yet ready', 'Warning');
                        }
                    },
                    Russian: {
                        label: '<span class="lang-sm" lang="ru"></span> Russian',
                        className: "btn-change-language btn-info",
                        callback: function(e) {
                          //$rootScope.$emit('AppLanguageChanged', {  value: 'fr_FR' });
                            //$rootScope.$emit('AppLanguageChanged', {  value: 'fr_FR' });
                            //user.changeLocaleForThisAPP('fr_FR');
                            toastr.warning('Not yet ready', 'Warning');
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


        

        function isAuthenticated(){
            return $auth.isAuthenticated();
        }

        function init() {
            user.getPersonalData()
            .then(function(userData){
                console.log(userData);
                var locale = user.getLocalStorage('locale');
                $translate.use(locale.substr(0, 2));
            });
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
