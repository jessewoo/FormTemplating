/**
 * Controller: InboxCtrl
	Connecting the model and the view. Middleman. Drive the Model and the View changes.
	Controller is given some html from the route, and a JS object from dependency
	
	Need a module, sets and gets depending on how it's used
	Name of the app has to CARRY OVER
	
	// Model and View binding

	// ng-controller - where our controller can operate. We can have multiple controller within the application
	// Each controller has it's own scope.
	
 */
angular.module('EmailApp').controller('InboxCtrl',

	function InboxCtrl ( $scope, InboxFactory ) {
      'use strict';
      $scope.meta = {
        title: "My Inbox"
      };

	// Hook up data in our controller via a Factory or Service
	// Call the "getMessage" method on the factory using $http()'s success method
	/*
      InboxFactory.getMessages()
        .success(function(jsonData, statusCode){
            console.log('The request was successful!', statusCode);
            console.dir(jsonData);
            // Now add the Email messages to the controller's scope
            $scope.data = {
              emails: jsonData
            };
        });
	*/	
    
	});
