angular.module('IndividualList', [])
	.controller('IndividualListController', ['$scope', '$route', 'IndividualService', function ($scope, $route, IndividualService) {
		
		IndividualService.all().then(function (response) {			
			$scope.individuals = response.data;
		});

        $scope.delete = function (id) {
            if (confirm("Are you sure you want delete this person?")) {
                IndividualService.remove(id).then(function (response) {
                    $route.reload();
                });
            } else {
                return false;
            }
        }		

	}]);