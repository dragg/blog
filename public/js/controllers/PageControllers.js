/**
 * Created by Nikola on 30.12.2014.
 */

var pagesControllers = angular.module('pagesControllers', []);

pagesControllers.controller('CommonCtrl', ['$scope', '$location', function($scope, $location) {

    $scope.isActive = function(path){
        return path === $location.path();
    };
}]);

pagesControllers.controller('MainCtrl', ['$scope', function($scope) {

}]);
