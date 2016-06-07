/**
 * Factory: InboxFactory
	Server-side communication via HTTP and abstracting Models to persist application state and changes across controllers
	Create "reusable features" and code blocks
 */

// rootscope; http; location
angular.module('EmailApp')
  .factory('InboxFactory', function InboxFactory ($q, $http, $location) {
    'use strict';
    var exports = {};

	exports.messages = [];

// Directives are Angular's take on custom HTML elements, reusable way to encapsulate data, templates, behaviors
	exports.goToMessage = function(id) {
       if ( angular.isNumber(id) ) {
		  console.log('inbox/email/' + id)
          $location.path('inbox/email/' + id)
       }
    }

	exports.deleteMessage = function (id, index) {
       this.messages.splice(index, 1);
    }

	// Communicate with a RESTful API
	// Create an 'exports' Object inside Factories and return it
    exports.getMessages = function () {
	// Use $http to GET request, returns a PROMISE. Do something when this HTTP request has finished. 
	// If it all goes well, do the success function
	// If it goes wrong, do catch function
		var deferred = $q.defer();
	      return $http.get('json/emails.json')
	        .success(function (data) {
			  // this callback will be called asynchronously
	    	  // when the response is available
	          exports.messages = data;
	          deferred.resolve(data);
				console.log('Successful retrieval of data!', data);   
	        })
	        .error(function (data) {
			  // called asynchronously if an error occurs
		      // or server returns response with an error status.
	          deferred.reject(data);
				console.log('There was an error!', data);
	        });
	      return deferred.promise;
	};
	
// Create an exports Object inside Factories. Help you to see which methods / variables are private or NOT
    return exports;
  });