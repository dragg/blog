/**
 * Created by Nikola on 30.12.2014.
 */

var blogApp = angular.module('blogApp', [
    'ngRoute',
    'pagesControllers'
]);

blogApp.config(['$routeProvider', function ($routeProvider) {
    $routeProvider.
        when('/', {
            templateUrl: '/views/main.html',
            controller: 'MainCtrl'
        }).
        when('/articles', {
            templateUrl: '/views/articles.html',
            controller: 'ArticlesCtrl'
        }).
        when('/projects', {
            templateUrl: '/views/projects.html',
            controller: 'ProjectsCtrl'
        }).
        when('/other', {
            templateUrl: '/views/other.html',
            controller: 'MainCtrl'
        })
        .otherwise({
            redirectTo: '/'
        });
}]);