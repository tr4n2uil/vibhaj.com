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


$( document ).ready( function(){
	// google analytics
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-47160625-1', 'vibhaj.com');
	ga('send', 'pageview');

});
