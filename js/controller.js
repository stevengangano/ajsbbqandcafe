var myApp=angular.module('myApp',['ngRoute'])

myApp.config(function ($routeProvider) {

	$routeProvider

	.when ('/', {
		templateUrl: 'pages/home.html'	
	})

	.when ('/about', {
		templateUrl: 'pages/about.html'
		// controller: '2015videoGameCtrl'
	})

	.when ('/catering', {
		templateUrl: 'pages/catering.html'
		// controller: '2014videoGameCtrl'
	})

	.when ('/contact', {
		templateUrl: 'pages/contact.php'
		// controller: '2015videoGameCtrl'
	})

	.when ('/email', {
		templateUrl: 'pages/email.html'
		// controller: '2015videoGameCtrl'
	})

	.when ('/home', {
		templateUrl: 'pages/home.html'
		// controller: '2015videoGameCtrl'
	})

	.when ('/menu', {
		templateUrl: 'pages/menu.html'
		// controller: '2015videoGameCtrl'
	})
})

