<!DOCTYPE html>
<html>
 	<head>
	    <title>w3schools Tutorial</title>
		<? include 'libraries.php'; ?>
	</head>
	<body>
		<br>
		<div class="container">
			<h1>Modules</h1>
			<ul>
				<li>Module defines an application</li>
				<li>The module is a container for the different parts of an application and controllers</li>
				<li>Controllers always belong to a module</li>
			</ul>					
			<hr>
			<!-- CONTROLLER - handles the data, changes the view - calls the myCtrl function -->
			<div ng-app="myApp" ng-controller="myCtrl" w3-test-directive>
				<!-- MODEL - this is the data -->
				First Name: <input type="text" ng-model="firstName"><br>
				Last Name: <input type="text" ng-model="lastName"><br>
				<br>
				Full Name: {{firstName + " " + lastName}} <br>
				Full Name (add): {{fullName()}}
			</div>
		</div>
		<hr>
		
		<script>
			// Modules define applications
			var app = angular.module('myApp', []);
			
			// Controllers control applications
			app.controller('myCtrl', function($scope) {
		    	$scope.firstName= "John";
		    	$scope.lastName= "Doe";
				$scope.fullName = function() {
				        return $scope.firstName + " " + $scope.lastName;
				    };
			});
			
			/* Directive
			app.directive("w3TestDirective", function() {
			    return {
			        template : "I was made in a directive constructor!"
			    };
			});
			*/
		</script>
		<? include 'footer.php'; ?>
	
	</body>	
</html>