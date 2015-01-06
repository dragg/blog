/**
 * Created by Nikola on 30.12.2014.
 */

angular
    .module('blogApp')
    .controller('CommonCtrl', CommonCtrl)
    .controller('MainCtrl', MainCtrl)
    .controller('ArticleListCtrl', ArticleListCtrl)
    .controller('ArticleDetailCtrl', ArticleDetailCtrl)
    .controller('ProjectListCtrl', ProjectListCtrl)
    .controller('ProjectDetailCtrl', ProjectDetailCtrl);

CommonCtrl.$inject = ['$location'];
function CommonCtrl($location) {
    var vm = this;
    vm.isActive = function(path) {
        return path === $location.path();
    };
}

function MainCtrl() {
}

ArticleListCtrl.$inject = ['ArticleList'];
function ArticleListCtrl(ArticleList) {
    var vm = this;
    vm.articles = ArticleList.query();
}

ArticleDetailCtrl.$inject = ['$routeParams', 'ArticleDetail', 'Comment'];
function ArticleDetailCtrl($routeParams, ArticleDetail, Comment) {
    var vm = this;

    ArticleDetail($routeParams.articleId).success(function(res) {
        vm.article = res;
    });

    vm.clearComment = clearComment;
    vm.sendComment = sendComment;

    function clearComment() {
        vm.comment = {};
    }

    function sendComment(article_id, author, body) {
        Comment.add(article_id, author, body).success(function(res) {
            console.log(res);
            vm.clearComment();
        })
    }
}

ProjectListCtrl.$inject = ['ProjectList'];
function ProjectListCtrl(ProjectList) {
    var vm = this;
    vm.projects = ProjectList.query();
}

ProjectDetailCtrl.$inject = ['$routeParams', 'ProjectDetail'];
function ProjectDetailCtrl($routeParams, ProjectDetail) {
    var vm = this;
    ProjectDetail($routeParams.projectId).success(function(res) {
        vm.project = res;
    });
}