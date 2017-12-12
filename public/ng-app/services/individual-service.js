angular.module("IndividualService", []).factory("IndividualService", function($http, API_URL){
    
    var path = API_URL + 'individual';

    return {
        all: function(){
            return $http.get(path);            
        },
        save: function (data, id) {

            var config = {
                params: data,
                headers : {'Content-Type': 'application/json'}
            };

            var resource = "";
            if ( id != null) {
                resource = '/' + id; 
            }

            return $http.post(path + resource, config);
        },
        get: function (id) {
            return $http.get(path + '/' + id);
        },
        remove: function (id) {
            return $http.delete(path + '/' + id);
        }
    };
});