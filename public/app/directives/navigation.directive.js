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
    navCtrl.$inject = ['$auth', '$state', '$location', '$ngBootbox'];

    function navCtrl($auth, $state, $location, $ngBootbox) {

        var $ctrl = this;
        $ctrl.init = init;
        $ctrl.isAuthenticated = null;
        $ctrl.isActive = isActive;
        $ctrl.changeLanguage = changeLanguage;
        $ctrl.delideli = delideli;


        function isActive (viewLocation) {
            var a = $location.path().indexOf('/', 1);
            if (a>-1) {
                var changedLocationPath = $location.path().substr(0,a);
            }
            else changedLocationPath = $location.path();

            var active = (viewLocation === changedLocationPath);
            return active;
        };



function delideli(){
    console.log('deli');
}

        function changeLanguage(){
var options = {
    message: 'Select Language',
    //title: 'Select Language',
    className: 'test-class',
    buttons: {
        warning: {
            label: '<span class="lang-sm" lang="pl"></span> Polski',
            className: "btn-change-language btn-info",
            callback: function() {
                $translateProvider.preferredLanguage('en');
                $ngBootboxConfigProvider.setDefaultLocale('en');
            }
        },
        success: {
            label: '<span class="lang-sm" lang="en"></span> English',
            className: "btn-change-language btn-info",
            callback: function(e) {
                // default language
                $translateProvider.preferredLanguage('en');
                $ngBootboxConfigProvider.setDefaultLocale('en');
                console.log(e);
            }
        },
        cancel: {
            label: 'Cancel',
            className: "btn-change-language btn-change-language-cancel btn-warning",
            callback: function(e) {
                //console.log(e);
            }
        }
    }
};

$ngBootbox.customDialog(options);

//    .prompt('Enter something')
//     .then(function(result) {
//         console.log('Prompt returned: ' + result);
//     }, function() {
//         console.log('Prompt dismissed!');
//     });

//            $ngBootbox.prompt({
//             title: "This is a prompt with select!",
//             inputType: 'select',
//             inputOptions: [
//                 {
//                     text: 'English',
//                     value: 'en',
//                 },
//                 {
//                     text: 'Polish / Polski',
//                     value: 'pl',
//                 }
//             ],
//             callback: function (result) {
//                 console.log(result);
//             }
//         });


//,
//bootbox.dialog({ message: '<div class="text-center"><i class="fa fa-spin fa-spinner"></i> Loading...</div>' })
//$ngBootbox.dialog({ message: '<div class="text-center"><i class="fa fa-spin fa-spinner"></i> Loading...</div>' })
// $ngBootbox.confirm('A question?')
// .then(function() {
//     console.log('Confirmed!');
// }, function() {
//     console.log('Confirm dismissed!');
// });

            // var options = {
            //         title: 'The title!',
            //         message: 'This <b>is a</b> message!',
            //         className: 'test-class',
            //         buttons: {
            //             continue: {
            //                 label: "Ok",
            //                 className: "btn-success",
            //                 callback: function() { alert('ok');  }
            //             },
            //             cancel: {
            //                 label: "Cancel",
            //                 className: "btn-warning",
            //                 callback: function() {   }
            //             },

            //         }
            //     };

            // $ngBootbox.customDialog(options);
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
