
// angular.module('app').controller('CartController', CartController);
// CartController.$inject = ['$scope', 'Cart'];

// function CartController($scope, Cart) {

angular.module('app').controller('CartController', ['$scope', 'Cart', 'Data', function ($scope, Cart, Data) {
    // var carts = [];
    var found = false;

    getItem = function (code) {
        found = false;
        for (let cart of Cart.data) {
            console.log(cart.name);
            if (cart.code === code) {
                return true;
            }
        }
        return false;
    };

    $scope.addToCart = function (code, name, price) {
        
        Data.setCount(2);

        found = false;
        if (!getItem(code)) {

            // $scope.$broadcast('UPDATE_CART', { "code": code, "name": name, "price": price });

            $rootScope.broadcast('UPDATE_CART', price);

            // Cart.data.push({ "code": code, "name": name, "price": price });
            // Cart.itemCount++;
            // Cart.totalAmount += price;
            $scope.msg = Cart.totalAmount;
        }

    };
}]);
