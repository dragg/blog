/**
 * Created by Nikola on 14.01.2015.
 */

angular
    .module('signApp')
    .controller('SignCtrl', SignCtrl);

SignCtrl.$inject = ['$window', 'Sign'];
function SignCtrl($window, Sign) {
    var vm = this;

    vm.alert = undefined;

    vm.closeAlert = function() {
        vm.alert = undefined;
    };

    vm.submitted = false;

    vm.submitForm = function (isValid) {
        vm.submitted = true;
        if(isValid) {
            var success = function(res) {
                console.log(res);
                if(res[0] === 1){
                    vm.alert = { msg: res[1], type: 'success'};
                    window.location.reload();
                } else {
                    vm.alert = { msg: res[1], type: 'danger'};
                }

            };

            var error = function(res) {
                console.log(res);
                //vm.alert = { msg: 'Sorry! We don\'t know that happened :(', type: 'info'};
            };

            Sign.signIn(vm.user)
                .success(success)
                .error(error);
        }
    }
}