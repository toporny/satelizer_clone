(function () {
    var componentName = 'wordsTable',
        templateUrl = 'words-table-directive.html';

    angular
        .module('MyApp')
        .directive(componentName, wordsTable)
        .controller(componentName, wordsTableController);

    function wordsTable() {
        return {
            restrict: 'CA',
            replace: false,
            transclude: false,
            controllerAs: '$ctrl',
            bindToController: true,
            controller: wordsTableController,
            scope: {
                words: '=',
                remember: '&',
                selectNoneAllParent: '&',
            },
            templateUrl: 'app/pick-words/words-list/' + templateUrl
        }
    }

// http://stackoverflow.com/questions/13965627/angular-ng-click-event-delegation
 
    wordsTableController.$inject = [];

    function wordsTableController() {
        var $ctrl = this;
        $ctrl.selectNoneAll = selectNoneAll;
        $ctrl.rowClick = rowClick;

        function rowClick(idx) {
            data = {
                'id': $ctrl.words[idx].id
            }
            if ($ctrl.words[idx].status > 0) {
                $ctrl.words[idx].status = null;
                data.action = 'remove_word_from_list';
            }
            else {
                $ctrl.words[idx].status = 3;
                data.action = 'add_word_to_list';
            }
            $ctrl.remember({data:data});
        }


        /*
        * select none/all
        * @param {string} action;   action ex: selectAll/selectNone
        * function returns array with positive and negative IDs
        * positive means add ID to DB
        * negative means remove
        */
        function selectNoneAll(action) {
            switch(action) {
                case 'selectAll':
                    angular.forEach($ctrl.words, function(value, key) {
                        value.status = 3 ;
                    });
                break;
                case 'selectNone':
                    angular.forEach($ctrl.words, function(value, key) {
                        value.status = 0 ;
                    });
                break;
                default: return;
            }

            var data = {
                action: action,
                words: $ctrl.words
            };
            $ctrl.selectNoneAllParent({data:data});
        }
    }


})();