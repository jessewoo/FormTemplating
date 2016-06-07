// File gives us access to an additioanl module named ngRoute
// Bind a Controller to the DOM, or specific view
// Use this instead of ng-controller to declare Controllers

// Use $routeProvider to setup routes inside the config callback
angular.module('EmailApp', [
  'ngRoute'
	]).config(function ( $routeProvider ) {
  		'use strict';

// Model and View binding; small helper functions
// Configure our routing, which controls which views are injected into app. 
// At /inbox, we'll want to inject the inbox.html view and assign a Controller

// Declare what view template to use when the URL is pointing to a particular path, working with ng-view attribute

// You could declare "Controller as" in-line: ng-controller="InboxCtrl as inbox"
	  $routeProvider
	    .when('/inbox', {
	      templateUrl: 'views/inbox.html',
	      controller: 'InboxCtrl'
	    })
	// Dynamically see a specific email, make a server call to get the emial that correponds with the ID
		.when('/inbox/email/:id', {
	         templateUrl: 'views/email.html',
	         controller: 'EmailCtrl',
	         controllerAs: 'email'
		})
	    .otherwise({
	      redirectTo: '/inbox'
	    });
});