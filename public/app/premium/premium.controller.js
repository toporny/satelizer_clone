(function() {

angular.module('MyApp')
  .controller('PremiumCtrl', PremiumCtrl);

  PremiumCtrl.$inject = ['$translate'];

  function PremiumCtrl($translate) {
  	// vm = this;
  	// console.log($translate.instant('PREMIUM.TABLE_ROWS'));
  	// console.log(angular.fromJson($translate.instant('PREMIUM.TABLE_ROWS')));

  	// vm.data = {
  	// 	premiumTable :  angular.fromJson($translate.instant('PREMIUM.TABLE_ROWS'))
  	// }

  };

})();