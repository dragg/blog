/**
 * Created by Nikola on 02.01.2015.
 */

angular
    .module('blogApp')
    .config(config);

config.$inject = ['$routeProvider'];

function config($routeProvider) {
    $routeProvider.
        when('/', {
            templateUrl: '/angular/?id=partials.main',
            controller: 'MainCtrl',
            controllerAs: 'vm'
        }).
        when('/articles', {
            templateUrl: '/angular/?id=partials.article-list',
            controller: 'ArticleListCtrl',
            controllerAs: 'vm'
        }).
        when('/articles/:articleId', {
            templateUrl: '/angular/?id=partials.article-detail',
            controller: 'ArticleDetailCtrl',
            controllerAs: 'vm'
        }).
        when('/projects', {
            templateUrl: '/angular/?id=partials.project-list',
            controller: 'ProjectListCtrl',
            controllerAs: 'vm'
        }).
        when('/projects/:projectId', {
            templateUrl: '/angular/?id=partials.project-detail',
            controller: 'ProjectDetailCtrl',
            controllerAs: 'vm'
        }).
        when('/other', {
            templateUrl: '/angular/?id=partials.other',
            controller: 'MainCtrl',
            controllerAs: 'vm'
        })
        .otherwise({
            redirectTo: '/'
        });
};