
angular.module('app').config(['$stateProvider', '$urlRouterProvider', function ($stateProvider, $urlRouterProvider) {
    $urlRouterProvider.otherwise("/");
    $stateProvider
        .state('womens', {
            url: "/womens",
            templateUrl: "pages/home/panjabi.html",
            // controller: 'myCtrl'
        });
}]);



// $stateProvider
//         // States
//      .state("main", {
//           controller:'mainController',
//           url:"/main",
//           templateUrl: "main_init.html"
//       })  
//       .state("main.1", {
//           controller:'mainController',
//           parent: 'main',
//           url:"/1",
//           templateUrl: 'form_1.html'
//       })  
//       .state("main.2", {
//           controller:'mainController',
//           parent: 'main',
//           url: "/2",
//           templateUrl: 'form_2.html'
//       })  