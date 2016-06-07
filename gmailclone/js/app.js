angular.module('EmailApp', [
  'ngRoute',
  'ngSanitize'
]).config(function ( $routeProvider ) {
  
  'use strict';

  // Configuring Routes in the .config callback
  // Controller is a JS object containing attributes/properties & functions
  // Controller for specific angular Directive <inbox>
  $routeProvider
    .when('/inbox', {
      templateUrl: 'views/inbox.html',
      controller: 'InboxCtrl',
      controllerAs: 'inbox'
    })
    .when('/inbox/email/:id', {
      templateUrl: 'views/email.html',
      controller: 'EmailCtrl',
      controllerAs: 'email'
    })
    .otherwise({
      redirectTo: '/inbox'
    });
}).run(function($rootScope){
  $rootScope.$on('$routeChangeError', function(event, current, previous, rejection){
    console.log(event, current, previous, rejection)
  })
});

// Controller for hte module