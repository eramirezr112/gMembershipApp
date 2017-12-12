angular.module('groupMembership', [
		'Routes',
		'GroupList',
		'GroupAdd',
		'GroupEdit',
		'GroupMembers',
		'GroupService',
		'MemberService',
		'TypeList',
		'TypeAdd',
		'TypeEdit',
		'TypeService',
		'IndividualList',
		'IndividualAdd',
		'IndividualEdit',
		'IndividualService'
	])

	.constant('API_URL', 'http://localhost:8000/api/')

	.filter("asDate", function () {
	    return function (input) {
	        return new Date(input);
	    }
	});