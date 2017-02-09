var myApp=angular.module('myApp',['ngRoute'])

myApp.config(function ($routeProvider) {

	$routeProvider

	.when ('/', {
		templateUrl: 'pages/home.html'	
	})

	.when ('/about', {
		templateUrl: 'pages/about.html'
	})

	.when ('/catering', {
		templateUrl: 'pages/catering.html'
	})

	.when ('/contact', {
		templateUrl: 'pages/contact.html'
	})

	.when ('/email', {
		templateUrl: 'pages/email.html'
	})

	.when ('/home', {
		templateUrl: 'pages/home.html'
	})

	.when ('/menu', {
		templateUrl: 'pages/menu.html'
	})
})

