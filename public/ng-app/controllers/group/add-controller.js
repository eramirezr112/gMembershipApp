angular.module('GroupAdd', [])
	.controller('GroupAddController', ['$scope', '$location', 'TypeService', 'GroupService', function ($scope, $location, TypeService, GroupService) {

		$scope.groupName = "";
        TypeService.all().then(function (response) {          
            $scope.types = response.data;
        });

		$scope.create = function () {

            var data = {
                name: $scope.groupName,
                type: $scope.typeGroup
            };

            GroupService.save(data, null).then(function (response) {
                console.log(response.data);
                $location.path('/groups');
            })

		}

	}]);