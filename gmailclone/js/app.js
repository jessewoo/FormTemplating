// File gives us access to an additioanl module named ngRoute
angular.module('EmailApp', [
  'ngRoute'
	]).config(function ( $routeProvider ) {
  		'use strict';

// Model and View binding; small helper functions
	  $routeProvider
	    .when('/inbox', {
	      templateUrl: 'views/inbox.html',
	      controller: 'InboxCtrl'
	    })
	    .otherwise({
	      redirectTo: '/inbox'
	    });
});