angular.module("Routes", ['ngRoute'])
    .config(['$routeProvider', function($routeProvider){

        $routeProvider
            .when('/groups', {
                templateUrl: '../ng-app/views/group/list.html',
                controller: 'GroupListController'
            })
            .when('/groups/add', {
                templateUrl: '../ng-app/views/group/add.html',
                controller: 'GroupAddController'
            })
            .when('/groups/edit/:idGroup', {
                templateUrl: '../ng-app/views/group/edit.html',
                controller: 'GroupEditController'
            })
            .when('/groups/members/:idGroup', {
                templateUrl: '../ng-app/views/group/members.html',
                controller: 'GroupMembersController'
            })
            .when('/types', {
                templateUrl: '../ng-app/views/type/list.html',
                controller: 'TypeListController'
            })
            .when('/types/add', {
                templateUrl: '../ng-app/views/type/add.html',
                controller: 'TypeAddController'
            })
            .when('/types/edit/:idType', {
                templateUrl: '../ng-app/views/type/edit.html',
                controller: 'TypeEditController'
            })
            .when('/individuals', {
                templateUrl: '../ng-app/views/individual/list.html',
                controller: 'IndividualListController'
            })
            .when('/individuals/add', {
                templateUrl: '../ng-app/views/individual/add.html',
                controller: 'IndividualAddController'
            })
            .when('/individuals/edit/:idIndividual', {
                templateUrl: '../ng-app/views/individual/edit.html',
                controller: 'IndividualEditController'
            })
            .otherwise('/groups');

    }])
    .directive('activeLink', ['$location', function (location) {
        return {
          restrict: 'A',
          link: function(scope, element, attrs, controller) {
            var clazz = attrs.activeLink;            
            var path = attrs.href;            
            path = path.substring(2); //hack because path does not return including hashbang            
            scope.location = location;            
            scope.$watch('location.path()', function (newPath) {             
              if (path === newPath) {
                element.addClass(clazz);
              } else {
                element.removeClass(clazz);
              }
            });
          }
        };
      }]);