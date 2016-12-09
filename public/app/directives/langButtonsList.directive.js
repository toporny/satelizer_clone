'use strict';

(function () {
  var componentName = 'langButtonsList' 

angular.module('MyApp')
  .directive(componentName, component)
  .controller(componentName, langButtonsCtrl)      

  function component() {
    return {
			restrict: "E",
			scope: { 
				availableDictionaries: '=',
				languageToLearn: '=',
				languageBtnSelected: '&'
			},
			controller: langButtonsCtrl,
			controllerAs: '$ctrl',
			bindToController: true,

			template: [
				'<div ng-repeat="dictionary in $ctrl.availableDictionaries">',
				'  <button',
				'    style = "width:100%; text-align:left; margin:4px; display:block;"',
				'    ng-class="{\'active darker_bkg\': (dictionary.id == $ctrl.languageToLearn)}"',
				'    type = "button"',
				'    class = "btn btn-info btn-lg"',
				'    ng-click="$ctrl.languageBtnLocalSelectedd( dictionary.id, dictionary.id == $ctrl.languageToLearn )">',
				'    <span class="lang-lg lang-lbl" lang="{{dictionary.id | limitTo:2}}"></span>',
				'  </button>',
				'</div>'
			].join('')
    };
  }


  langButtonsCtrl.$inject = [];

  function langButtonsCtrl(){
    var $ctrl = this;
  	$ctrl.languageBtnLocalSelectedd = languageBtnLocalSelectedd;


		function languageBtnLocalSelectedd(dictionary_id, alreadyClicked){
			console.log('languageBtnLocalSelectedd dictionary_id',dictionary_id );
			console.log('languageBtnLocalSelectedd alreadyClicked',alreadyClicked );

			if (alreadyClicked == 1) {
				$ctrl.languageToLearn = '';
				$ctrl.languageBtnSelected({dictionaryID: ''});
			} 
			else {
				$ctrl.languageToLearn = dictionary_id;
				$ctrl.languageBtnSelected({dictionaryID: dictionary_id});
			}

		}

  }


})();

