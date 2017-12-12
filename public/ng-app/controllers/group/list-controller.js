angular.module('GroupList', [])
    .controller('GroupListController', ['$scope', '$route', 'GroupService', function ($scope, $route, GroupService) {

        GroupService.all().then(function (response) {
            $scope.groups = response.data;
        });

        $scope.delete = function (id) {
            if (confirm("Are you sure you want delete this group?")) {

                GroupService.remove(id).then(function (response) {
                    $route.reload();
                });

            } else {
                return false;
            }
        }

    }]);