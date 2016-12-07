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
            },
            templateUrl: 'app/pick-words/words-list/' + templateUrl,
            link: link
        }
    }



    function link(scope, elem, attrs) {
        var $ctrl = scope.$ctrl;
        elem.bind('click', function(e) {
            var i_element = angular.element(e.target.parentElement).find('i');
            if (i_element.length == 1) {
                var tr_data = i_element[0].parentElement.parentElement;
                if (angular.element(tr_data).hasClass('danger2')) {
                    angular.element(tr_data).removeClass('danger2')
                    angular.element(tr_data).addClass('success');
                    data = {
                        'action': 'remove_word_from_list',
                        'id': angular.element(tr_data).data('id')
                    }
                    $ctrl.remember({data:data});
                }
                else if (angular.element(tr_data).hasClass('success')) {
                    angular.element(tr_data).removeClass('success');
                    angular.element(tr_data).addClass('danger2');
                    data = {
                        'action': 'add_word_to_list',
                        'id': angular.element(tr_data).data('id')
                    }
                    $ctrl.remember({data:data});
                }
            }
        });
    }


 
    wordsTableController.$inject = [];

    function wordsTableController() {
        var $ctrl = this;
        $ctrl.selectAll = selectAll;
        $ctrl.selectNone = selectNone;

        function selectAll() {
            angular.forEach($ctrl.words, function(value, key) {
              value.unknown = 1;
            });
        }

        function selectNone() {
            angular.forEach($ctrl.words, function(value, key) {
              value.unknown = 0;
            });
        }
    }




})();