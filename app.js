 var app = angular.module("myApp", ["ngRoute"]);
 app.config(function($routeProvider) {
     $routeProvider
     .when("/", {
         templateUrl : "main.php"
     })
     .when("/database", {
         templateUrl : "database.php"
     })
     .when("/signup", {
         templateUrl : "signup.php"
     })
     .when("/services", {
         templateUrl : "services.html"
     })
 });
