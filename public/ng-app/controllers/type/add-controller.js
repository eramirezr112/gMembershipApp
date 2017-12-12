angular.module('TypeAdd', [])
	.controller('TypeAddController', ['$scope', '$location', 'TypeService', function ($scope, $location, TypeService) {

		$scope.typeName = "";
        
		$scope.create = function () {

            var data = {
                name: $scope.typeName
            };

            TypeService.save(data, null).then(function (response) {
            	console.log(response.data);
                $location.path('/types');
            });  

		}

	}]);