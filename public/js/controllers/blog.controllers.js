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

ArticleListCtrl.$inject = ['Article'];
function ArticleListCtrl(Article) {
    var vm = this;
    Article.getList().success(function(res) {
        vm.articles = res;
    });

}

ArticleDetailCtrl.$inject = ['$routeParams', 'Article', 'Comment'];
function ArticleDetailCtrl($routeParams, Article, Comment) {
    var vm = this;

    Article.get($routeParams.articleId).success(function(res) {
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

ProjectListCtrl.$inject = ['Project'];
function ProjectListCtrl(Project) {
    var vm = this;
    Project.getList().success(function(res) {
        vm.projects = res;
    });
}

ProjectDetailCtrl.$inject = ['$routeParams', 'Project'];
function ProjectDetailCtrl($routeParams, Project) {
    var vm = this;
    Project.get($routeParams.projectId).success(function(res) {
        vm.project = res;
    });
}