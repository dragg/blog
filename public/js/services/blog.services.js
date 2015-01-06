/**
 * Created by Nikola on 30.12.2014.
 */

angular
    .module('blogApp')
    .factory('Article', Article)
    .factory('Project', Project)
    .factory('Comment', Comment);

Article.$inject = ['$http'];
function Article($http) {
    var service = {
        getList : getList,
        get     : get
    }

    return service;

    /////////////////

    function getList() {
        return $http.get('/article');
    }

    function get(id) {
        return $http.get('/article/' + id);
    }
}

Project.$inject = ['$http'];
function Project($http) {
    var service = {
        getList : getList,
        get     : get
    }

    return service;

    /////////////////

    function getList() {
        return $http.get('/project');
    }

    function get(id) {
        return $http.get('/project/' + id);
    }
}

Comment.$inject = ['$http'];
function Comment($http) {
    var service = {
        add     : add
    };

    return service;

    /////////////////

    function add(article_id, author, body) {
        return $http.post('/comment', {
            article_id: article_id,
            author: author,
            body: body
        });
    }
}