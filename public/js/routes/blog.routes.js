/**
 * Created by Nikola on 02.01.2015.
 */

(function(){
    'use strict';

    angular
        .module('blogApp')
        .config(config);

    config.$inject = ['$routeProvider'];

    function config($routeProvider) {
        $routeProvider.
            when('/', {
                templateUrl: '/angular/?id=main',
                controller: 'MainCtrl',
                controllerAs: 'vm'
            }).
            when('/articles', {
                templateUrl: '/angular/?id=article-list',
                controller: 'ArticleListCtrl',
                controllerAs: 'vm'
            }).
            when('/articles/:articleId', {
                templateUrl: '/angular/?id=article-detail',
                controller: 'ArticleDetailCtrl',
                controllerAs: 'vm'
            }).
            when('/projects', {
                templateUrl: '/angular/?id=project-list',
                controller: 'ProjectListCtrl',
                controllerAs: 'vm'
            }).
            when('/projects/:projectId', {
                templateUrl: '/angular/?id=project-detail',
                controller: 'ProjectDetailCtrl',
                controllerAs: 'vm'
            }).
            when('/other', {
                templateUrl: '/angular/?id=other',
                controller: 'MainCtrl',
                controllerAs: 'vm'
            })
            .otherwise({
                redirectTo: '/'
            });
    }
})();
