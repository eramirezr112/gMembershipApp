angular.module('GroupEdit', [])
	.controller('GroupEditController', ['$scope', '$routeParams', '$location', 'TypeService', 'GroupService', function ($scope, $routeParams, $location, TypeService, GroupService) {

		var id = $routeParams.idGroup;

        TypeService.all().then(function (response) {          
            $scope.types = response.data;
        });

		GroupService.get(id).then(function (response) {
			$scope.groupName = response.data.name;
			$scope.typeGroup = response.data.type;
		})        

		$scope.update = function () {

            var data = {
                name: $scope.groupName,
                type: $scope.typeGroup
            };

            GroupService.save(data, $routeParams.idGroup).then(function (response) {
            	console.log(response.data);
            	$location.path('/groups');
            });
		}

	}]);