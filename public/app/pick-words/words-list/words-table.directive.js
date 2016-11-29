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
                words: '=words',
                // item: '=itemdata'
            },
            templateUrl: 'app/pick-words/words-list/' + templateUrl,
            link: link
        }
    }

    function link(scope, elem, attrs) {
        console.log('attrs.words = ',attrs.words);
        elem.bind('click', function(e) {
            console.log('e.target.parentElement', e.target.parentElement);

            var stateThumbUp = angular.element(e.target.parentElement).find('i.fa-thumbs-o-down');
            var stateThumbDown = angular.element(e.target.parentElement).find('i.fa-thumbs-o-up');
  
            if (stateThumbUp.length == 1) {
                stateThumbUp.parent().parent().addClass('success');
                stateThumbUp.parent().parent().removeClass('danger2');
                angular.element(stateThumbUp).addClass('fa-thumbs-o-up');
                angular.element(stateThumbUp).removeClass('fa-thumbs-o-down');
                console.log('stateThumbUp',stateThumbUp.length);
            }
            if (stateThumbDown.length == 1) {
                stateThumbDown.parent().parent().removeClass('success');
                stateThumbDown.parent().parent().addClass('danger2');
                angular.element(stateThumbDown).removeClass('fa-thumbs-o-up');
                angular.element(stateThumbDown).addClass('fa-thumbs-o-down');
                console.log('stateThumbDown',stateThumbDown.length);
            }
        });
    }


    wordsTableController.$inject = [];

    function wordsTableController() {
        var $ctrl = this;
        $ctrl.selectAll = selectAll;
        $ctrl.selectNone = selectNone;

        function selectAll() {
            console.log('selectAll()');
            console.log($ctrl.words);
        }

        function selectNone() {
            console.log('selectNone()');
            console.log($ctrl.words);
        }
    }




})();