var APP = angular.module('APP', ['ngRoute', 'ngSanitize'])

	.config(['$routeProvider', '$httpProvider', function($routeProvider, $httpProvider){

		$routeProvider
			.when('/', {templateUrl: 'ui/tpl/home.html', controller: "init"});
		
		$httpProvider.defaults.headers.post['Content-Type'] = 'application/json';
		$httpProvider.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

	}])

	.controller('init', ['$scope', '$timeout', '$location',

		function($scope,$resource,API,$timeout,$location) {
			$scope.minHeight=$(window).height()-3;
			$scope.headerURL = 'ui/tpl/header.html';
		}

	]);
