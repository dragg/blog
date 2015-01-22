<?php
    $login = trans('admin/sign_in.login');
    $password = trans('admin/sign_in.password');
?>
<!DOCTYPE html>
<html lang="en" data-ng-app="signApp">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title><% trans('admin\sign_in.title_page') %></title>

    <link href="/vendor/css/bootstrap.min.css" rel="stylesheet">
    <link href="/admin/css/sign.css" rel="stylesheet">


    <script src="/vendor/js/angular.min.js"></script>
    <script src="/vendor/js/ui-bootstrap-tpls.min.js"></script>
    <script src="/admin/js/signApp.js"></script>
    <script src="/admin/js/controllers/sign.controllers.js"></script>
    <script src="/admin/js/services/sign.services.js"></script>

</head>

<body>

<div class="container" data-ng-controller="SignCtrl as vm">


    <form class="form-signin" name="signForm" data-ng-submit="vm.submitForm(signForm.$valid)" novalidate>
        <div>
            <h2 class="form-signin-heading">
                <% trans('admin\sign_in.title_form') %>
            </h2>
        </div>

        <div>
            <alert data-ng-show="(vm.alert !== undefined)" type="{{vm.alert.type}}" close="vm.closeAlert()">{{vm.alert.msg}}</alert>
        </div>

        <div class="form-group" data-ng-class="{ 'has-error' : (signForm.login.$error.required) && vm.submitted }">
            <input type="text" class="form-control"
                   placeholder="<% trans('admin/sign_in.placeholder_login') %>" name="login"
                   data-ng-model="vm.user.login" required autofocus data-ng-required="true"
                   data-ng-change="vm.closeAlert()">

                    <span class="help-block" data-ng-show="(signForm.login.$error.required) && vm.submitted">
                        <% trans('admin/sign_in.help_block_empty', ['Some' => $login]) %>
                    </span>
        </div>

        <div class="form-group" data-ng-class="{ 'has-error' : (signForm.password.$invalid) && vm.submitted }">
            <input type="password" class="form-control" placeholder="<% trans('admin/sign_in.placeholder_password') %>"
                   name="password" required
                   data-ng-model="vm.user.password" data-minlength="4" data-maxlength="32" data-ng-required="true"
                   data-ng-change="vm.closeAlert()">
            <span class="help-block" data-ng-show="(signForm.password.$error.required) && vm.submitted">
                <% trans('admin/sign_in.help_block_empty', ['Some' => $password]) %>
            </span>

            <span class="help-block" data-ng-show="(signForm.password.$error.minlength) && vm.submitted">
                <% trans('admin/sign_in.help_block_short', ['Some' => $password]) %>
            </span>

            <span class="help-block" data-ng-show="(signForm.password.$error.maxlength) && vm.submitted">
                <% trans('admin/sign_in.help_block_long', ['Some' => $password]) %>
            </span>
        </div>

        <div class="checkbox form-group">
            <label>
                <input type="checkbox" name="remember" data-ng-true-value="1" data-ng-false-value="0" data-ng-model="vm.user.remember">
                <% trans('admin/sign_in.button_remember_me') %>
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" ng-disabled="signForm.$invalid && vm.submitted">
            <% trans('admin/sign_in.button_enter') %>
        </button>
    </form>

</div> <!-- /container -->

</body>
</html>
