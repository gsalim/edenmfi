var app = angular.module('app', ['ngCart']);

app.controller ('myCtrl', ['$scope', '$http', 'ngCart', function($scope, $http, ngCart) {
    ngCart.setTaxRate(0);
    ngCart.setShipping(0);    
}]);

// <ngcart-cart></ngcart-cart>