angular.module("MemberService", []).factory("MemberService", function($http, API_URL){
    
    var path = API_URL + 'member';

    return {
        allByGroup: function(idGroup){
            return $http.get(path + '/' + idGroup);            
        },
        add: function (data) {
            var config = {
                params: data,
                headers : {'Content-Type': 'application/json'}
            };

            return $http.post(path + '/add', config);
        },
        remove: function (data) {
            var config = {
                params: data,
                headers : {'Content-Type': 'application/json'}
            };

            return $http.post(path + '/remove', config);
        }
    };
});