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

ArticleDetailCtrl.$inject = ['$routeParams', 'ArticleDetail'];
function ArticleDetailCtrl($routeParams, ArticleDetail) {
    var vm = this;
    ArticleDetail($routeParams.articleId).success(function(res) {
        vm.article = res;
    });
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