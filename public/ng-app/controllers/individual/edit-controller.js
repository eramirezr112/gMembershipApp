angular.module('IndividualEdit', [])
	.controller('IndividualEditController', ['$scope', '$routeParams', '$location', 'IndividualService', function ($scope, $routeParams, $location, IndividualService) {

		var id = $routeParams.idIndividual;

		IndividualService.get(id).then(function (response) {
            $scope.individualName = response.data.name;           
            $scope.individualLastName = response.data.lastName;           
			$scope.individualEmail = response.data.email;			
		});

		$scope.update = function () {

            var data = {
                name: $scope.individualName,
                lastName: $scope.individualLastName,
                email: $scope.individualEmail
            };

            IndividualService.save(data, $routeParams.idIndividual).then(function (response) {
            	console.log(response.data);
                $location.path('/individuals');
            });  

		}

	}]);