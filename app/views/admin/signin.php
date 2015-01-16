<!DOCTYPE html>
<html lang="en" data-ng-app="signApp">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Signin</title>

    <!-- Bootstrap core CSS -->

    <link href="/vendor/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <style type="text/css">
        body {
            padding-top: 40px;
            padding-bottom: 40px;
            background-color: #eee;
        }

        .form-signin {
            max-width: 330px;
            padding: 15px;
            margin: 0 auto;
        }
        .form-signin .form-signin-heading,
        .form-signin .checkbox {
            margin-bottom: 10px;
        }
        .form-signin .checkbox {
            font-weight: normal;
        }
        .form-signin .form-control {
            position: relative;
            height: auto;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
            padding: 10px;
            font-size: 16px;
        }
        .form-signin .form-control:focus {
            z-index: 2;
        }
        .form-signin input[type="email"] {
            margin-bottom: -1px;
            border-bottom-right-radius: 0;
            border-bottom-left-radius: 0;
        }
        .form-signin input[type="password"] {
            margin-bottom: 10px;
            border-top-left-radius: 0;
            border-top-right-radius: 0;
        }

    </style>

    <script src="/vendor/js/angular.min.js"></script>
    <script src="/vendor/js/ui-bootstrap-tpls.min.js"></script>
    <script src="/admina/js/signApp.js"></script>
    <script src="/admina/js/controllers/sign.controllers.js"></script>
    <script src="/admina/js/services/sign.services.js"></script>

</head>

<body>

<div class="container" data-ng-controller="SignCtrl as vm">


    <form class="form-signin" name="signForm" data-ng-submit="vm.submitForm(signForm.$valid)" novalidate>
        <div>
            <h2 class="form-signin-heading">Please sign in</h2>
        </div>

        <div>
            <alert data-ng-show="(vm.alert !== undefined)" type="{{vm.alert.type}}" close="vm.closeAlert()">{{vm.alert.msg}}</alert>
        </div>

        <div class="form-group" data-ng-class="{ 'has-error' : (signForm.login.$error.required) && vm.submitted }">
            <input type="text" class="form-control" placeholder="Login" name="login"
                   data-ng-model="vm.user.login" required autofocus data-ng-required="true" data-ng-change="vm.closeAlert()">

                    <span class="help-block" data-ng-show="(signForm.login.$error.required) && vm.submitted">
                        Login must be not empty
                    </span>

                    <span class="help-block" data-ng-show="(signForm.login.$invalid && !signForm.login.$error.required) && vm.submitted">
                        Login invalid
                    </span>
        </div>

        <div class="form-group" data-ng-class="{ 'has-error' : (signForm.password.$invalid) && vm.submitted }">
            <input type="password" class="form-control" placeholder="Password" name="password" required
                   data-ng-model="vm.user.password" data-minlength="4" maxlength="32" data-ng-required="true"
                   data-ng-change="closeAlert()">
            <span class="help-block" data-ng-show="(signForm.password.$error.required) && vm.submitted">
                Password must be not empty
            </span>

            <span class="help-block" data-ng-show="(signForm.password.$error.minlength) && vm.submitted">
                Password is too short.
            </span>

            <span class="help-block" data-ng-show="(signForm.password.$error.maxlength) && vm.submitted">
                Password is too long.
            </span>
        </div>

        <div class="checkbox form-group">
            <label>
                <input type="checkbox" name="remember" data-ng-true-value="1" data-ng-false-value="0" data-ng-model="vm.user.remember"> Remember me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit" ng-disabled="signForm.$invalid && vm.submitted">Sign in</button>
    </form>

</div> <!-- /container -->

</body>
</html>
