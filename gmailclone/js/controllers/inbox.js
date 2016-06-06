/**
 * Controller: InboxCtrl
	Connecting the model and the view. Middleman. Drive the Model and the View changes.
	Controller is given some html from the route, and a JS object from dependency
 */
angular.module('EmailApp').controller('InboxCtrl',
    // Model and View binding
	function InboxCtrl ( $scope, InboxFactory ) {
      'use strict';
      $scope.meta = {
        title: "My Inbox"
      };

	// Hook up data in our controller via a Factory or Service
      InboxFactory.getMessages()
        .success(function(jsonData, statusCode){
            console.log('The request was successful!', statusCode);
            console.dir(jsonData);
            // Now add the Email messages to the controller's scope
            $scope.data = {
              emails: jsonData
            };
        });
    });