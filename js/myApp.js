/**
 * Created by Amandeepsingh on 2016-02-25.
 */

var mainApp = angular.module("mainApp" , ['ngRoute']);

mainApp.config(['$routeProvider' , function($routeProvider){
    $routeProvider.

        when('/about', {
            templateUrl: 'aboutus.html',
            controller: 'AboutController'
        }).

        when('/main', {
            templateUrl: 'main.html',
            controller: 'MainController'
        }).

        when('/contact', {
            templateUrl: 'contact.html',
            controller: 'ContactController'
        }).

        when('/kids', {
            templateUrl: 'kids.html',
            controller: 'KidsController'
        }).

        when('/men', {
            templateUrl: 'men.html',
            controller: 'MenController'
        }).

        when('/women', {
            templateUrl: 'women.html',
            controller: 'WomenController'
        }).

        when('/login', {
            templateUrl: 'login.html',
            controller: 'LoginController'
        }).

        when('/registration', {
            templateUrl: 'signup.php',
            controller: 'RegistrationController'
        }).


        otherwise({
            redirectTo: '/main'
        });

}]);

mainApp.factory('Page', function() {
    var title = 'default';
    return {
        title: function() { return title; },
        setTitle: function(newTitle) { title = newTitle }
    };
});
    mainApp.controller('KidsController', ['$scope','$http',function($scope, $http , Page) {
      //  Page.setTitle( "Kids");
       $http.get('services.json').then(function(response)
       {
           $scope.kids = response.data;
       })

        $scope.message = "This page will be used to display add student form";
    }]);

    mainApp.controller('WomenController' , function($scope) {
        console.log("Women");
        $scope.message = "This page will be used to display add student form";
    });

    mainApp.controller('AboutController', function($scope) {
        console.log("About");
        console.log("it is calling");
        $scope.message = "This page will be used to display add student form";
    });

    mainApp.controller('MenController', function($scope) {
        console.log("Men");
        $scope.message = "This page will be used to display all the students";
    });

    mainApp.controller('MainController', function($scope) {
        console.log("Main");
        $scope.message = "This page will be used to display all the students";
    });

    mainApp.controller('LoginController' , function($scope) {
        console.log("Login");
        $scope.master = {email: "", password: ""};
        $scope.reset = function() {$scope.user = angular.copy($scope.master);
        };
        $scope.reset();
        $scope.message = "This page will be used to display all the students";
    });

    mainApp.controller('RegistrationController' , function($scope) {
        console.log("Registration");
        $scope.message = "This page will be used to display all the students";
    });

    //Contact controller to validate the form
    mainApp.controller('ContactController' , function($scope) {
        $scope.master = {firstName: "", lastName: "" , email:"", comments:""};
        $scope.reset = function() {
            $scope.user = angular.copy($scope.master);
        };
        $scope.reset();
    });