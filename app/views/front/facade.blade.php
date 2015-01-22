<!DOCTYPE html>
<html lang="en" data-ng-app="blogApp">
<head>
	<meta charset="UTF-8">
	<title>Blog</title>

    <link rel="stylesheet" href="./vendor/css/bootstrap.min.css">

    <!--<link rel="stylesheet" href="./build/styles/bundle.css"/>-->
    <link rel="stylesheet" href="./css/custom-style.css"/>

    <script type="text/javascript" src="./vendor/js/angular.min.js"></script>
    <script type="text/javascript" src="./vendor/js/angular-route.min.js"></script>
    <script type="text/javascript" src="./vendor/js/angular-resource.min.js"></script>


    <!--<script type="text/javascript" src="./build/js/bundle.js"></script>-->
    <script type="text/javascript" src="./js/app.js"></script>
    <script type="text/javascript" src="./js/routes/blog.routes.js"></script>
    <script type="text/javascript" src="./js/services/blog.services.js"></script>
    <script type="text/javascript" src="./js/controllers/blog.controllers.js"></script>


</head>
<body data-ng-controller="CommonCtrl">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                    <a class="navbar-brand"><% trans('front\layout.title') %></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li data-ng-class="{'active' : isActive('/')}"><a href="#/">
                            <% trans('front/layout.main') %>
                        </a></li>
                    <li data-ng-class="{'active' : isActive('/articles')}"><a href="#/articles">
                            <% trans('front/layout.articles') %>
                        </a></li>
                    <li data-ng-class="{'active' : isActive('/projects')}"><a href="#/projects">
                            <% trans('front/layout.projects') %>
                        </a></li>
                    <li data-ng-class="{'active' : isActive('/other')}"><a href="#/other">
                            <% trans('front/layout.other') %>
                        </a></li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <form class="navbar-form navbar-left" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control"
                                   placeholder="<% trans('front/layout.placeholder_search') %>">
                        </div>
                        <button type="submit" class="btn btn-default">
                            <% trans('front/layout.button_search') %>
                        </button>
                    </form>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class="container-fluid">
        <!-- Stack the columns on mobile by making one full-width and the other half-width -->
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6 view" ng-view></div>
            <div class="col-md-3"></div>
        </div>

    </div>
</body>
</html>