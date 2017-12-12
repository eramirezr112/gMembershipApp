angular.module('TypeList', [])
	.controller('TypeListController', ['$scope', '$route', 'TypeService', function ($scope, $route, TypeService) {
		
		TypeService.all().then(function (response) {			
			$scope.types = response.data;
		});

        $scope.delete = function (id) {
            if (confirm("Are you sure you want delete this type?")) {
                TypeService.remove(id).then(function (response) {
                    $route.reload();
                });
            } else {
                return false;
            }
        }

	}]);