/**
 * Created by Nikola on 14.01.2015.
 */

angular
    .module('signApp')
    .factory('Sign', Sign);

Sign.$inject = ['$http'];
function Sign($http) {
    var service = {
        signIn : signIn
    }

    return service;

    /////////////////

    function signIn(user) {
        return $http.post('/adm/auth', {
            login: user.login,
            password: user.password,
            remember: user.remember
        });
    }
}
