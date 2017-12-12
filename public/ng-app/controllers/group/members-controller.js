angular.module('GroupMembers', [])
	.controller('GroupMembersController', ['$scope', '$routeParams', '$route', 'MemberService', 'IndividualService', function ($scope, $routeParams, $route, MemberService, IndividualService) {

		var id = $routeParams.idGroup;
		$scope.selectedI = [];
		$scope.selectedM = [];
		$scope.allIndividualSelected = true;
		$scope.allMemberslSelected = true;

		MemberService.allByGroup(id).then(function (response) {			
			$scope.members = response.data;
			
			$scope.filterBy = [];
	        $scope.members.forEach(function(field){
	          $scope.filterBy.push(field.id);
	        });

		});

		IndividualService.all().then(function (response) {
			$scope.individuals = response.data;
		});

		$scope.addIndividuals = function () {
            var data = {
                idGroup: $routeParams.idGroup,
                list: $scope.selectedI
            };

            MemberService.add(data).then(function (response) {
            	console.log(response.data);
            	$route.reload();
            });

		};

		$scope.removeMembers = function () {
            var data = {
                idGroup: $routeParams.idGroup,
                list: $scope.selectedM
            };

            MemberService.remove(data).then(function (response) {
            	console.log(response.data);
            	$route.reload();
            });

		};

		$scope.selectNewIndividuals = function () {

			for (var i = 0; i < $scope.individuals.length; i++) {
				if (!$scope.individuals[i].isChecked) { 			     
					$scope.allIndividualSelected = false;
				} else {
					if($scope.selectedI.indexOf($scope.individuals[i]) == -1) {
						$scope.selectedI.push($scope.individuals[i]);
					}
				}

			}			
		};

		$scope.selectRemoveMembers = function () {

			for (var i = 0; i < $scope.members.length; i++) {
				if (!$scope.members[i].isChecked) { 			     
					$scope.allMemberslSelected = false;
				} else {
					if($scope.selectedM.indexOf($scope.members[i]) == -1) {
						$scope.selectedM.push($scope.members[i]);
					}
				}

			}			
		};

	    $scope.filterPerson = function(e) {	    		    	
			return $scope.filterBy.indexOf(e.id) === -1;
	    };	

	}]);