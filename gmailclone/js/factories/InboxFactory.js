/**
 * Factory: InboxFactory
	Server-side communication via HTTP and abstracting Models to persist application state and changes across controllers
	Create reusable features and code blocks
 */

// rootscope; http; location
angular.module('EmailApp')
  .factory('InboxFactory', function InboxFactory ($q, $http, $location) {
    'use strict';
    var exports = {};

// Communicate with a RESTful API
// Create an 'exports' Object inside Factories and return it
    exports.getMessages = function () {
	// Use $http to GET request, returns a PROMISE. Do something when this HTTP request has finished. 
	// If it all goes well, do the success function
	// If it goes wrong, do catch function
      return $http.get('json/emails.json')
		.success(function(data) {
		  console.log('Successful retrieval of data!', data);   
		})
        .error(function (data) {
          console.log('There was an error!', data);
        });
    };

    return exports;
  });