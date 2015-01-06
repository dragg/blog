/**
 * Created by Nikola on 30.12.2014.
 */

var articleServices = angular.module('articleServices', ['ngResource']);

articleServices.factory('ArticleList', ['$resource', function($resource) {
    return $resource('/article', {}, {
        query: {
            method: 'GET',
            isArray: true
        }
    })
}]);

articleServices.factory('ArticleDetail', ['$http', function($http) {
    return function(id) {
        return $http.get('/article/' + id);
    };
}]);

articleServices.factory('ProjectList', ['$resource', function($resource) {
    return $resource('/project', {}, {
        query: {
            method: 'GET',
            isArray: true
        }
    })
}]);

articleServices.factory('ProjectDetail', ['$http', function($http) {
    return function(id) {
        return $http.get('/project/' + id);
    };
}]);

articleServices.factory('Comment', ['$http', function($http) {
    return {
        add: function(article_id, author, body) {
            return $http.post('/comment', {
                article_id: article_id,
                author: author,
                body: body
            });
        }
    }
}]);