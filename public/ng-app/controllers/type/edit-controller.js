angular.module('TypeEdit', [])
	.controller('TypeEditController', ['$scope', '$routeParams', '$location', 'TypeService', function ($scope, $routeParams, $location, TypeService) {

		var id = $routeParams.idType;

		TypeService.get(id).then(function (response) {
			$scope.typeName = response.data.name;			
		});

		$scope.update = function () {

            var data = {
                name: $scope.typeName
            };

            TypeService.save(data, $routeParams.idType).then(function (response) {
            	console.log(response.data);
                $location.path('/types');
            });  

		}

	}]);