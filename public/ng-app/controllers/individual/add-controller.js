angular.module('IndividualAdd', [])
	.controller('IndividualAddController', ['$scope', '$location', 'IndividualService', function ($scope, $location, IndividualService) {

		$scope.individualName     = "";
        $scope.individualLastName = "";
        $scope.individualEmail    = "";
        
		$scope.create = function () {

            var data = {
                name: $scope.individualName,
                lastName: $scope.individualLastName,
                email: $scope.individualEmail
            };

            IndividualService.save(data, null).then(function (response) {
            	console.log(response.data);
                $location.path('/individuals');
            });  

		}

	}]);