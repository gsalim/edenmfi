
// angular.module('app').controller('HomeController', HomeController);
// HomeController.$inject = ['$scope', 'Cart'];

// function HomeController($scope, Cart) {

// https://stackoverflow.com/questions/21919962/share-data-between-angularjs-controllers
// https://stackoverflow.com/questions/27696612/how-do-i-share-scope-data-between-states-in-angularjs-ui-router
// https://github.com/dbtek/angular-aside
// https://www.codeproject.com/Articles/576246/A-Shopping-Cart-Application-Built-with-AngularJS
// http://angulardecor.review/angular-ui-modal/3273

angular.module('app').controller('HomeController', ['$scope', 'Cart', function ($scope, Cart) {
    $scope.itemCount = Cart.itemCount;
    $scope.totalAmount = Cart.totalAmount;

    // $scope.$on('UPDATE_CART', function (response) {
    //     $scope.totalAmount = Cart.totalAmount + 100;
    // });

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

        $scope.msg = { "code": code, "name": name, "price": price };
        found = false;
        if (!getItem(code)) {
            // Cart.data.push({ "code": code, "name": name, "price": price });
            Cart.itemCount++;
            Cart.totalAmount += price;

            $scope.itemCount = Cart.itemCount;
            $scope.totalAmount = price;
        }
    };


    // var carts = [];
    // var found = false;

    // getItem = function (code) {
    //     found = false;
    //     for (let cart of carts) {
    //         console.log(cart.name);
    //         if (cart.code === code) {
    //             return true;
    //         }
    //     }
    //     return false;
    // };

    // $scope.addToCart = function (code, name, price) {

    //     found = false;
    //     if (!getItem(code)) {
    //         carts.push({ "code": code, "name": name, "price": price });
    //         $scope.item = carts.length;
    //         $scope.total += price;
    //     }
    // };
}]);