<!DOCTYPE html>
<html>
 	<head>
	    <title>w3schools Tutorial</title>
		<? include 'libraries.php'; ?>
	</head>
	<body>
		<br>
		<div class="container">	
			<h1>Filtering</h1>
			<p>Filter selects a subset of an array</p>
			<p>Filter can only be used on arrays, and it returns an array containing only the matching items</p>			
			<!-- CONTROLLER - handles the data, changes the view - calls the namesCtrl function -->
			<div ng-app="myApp" ng-controller="namesCtrl">
				<!-- MODEL - this is the data -->
				<p><input type="text" ng-model="test"></p>
				<ul>
				  	<li ng-repeat="x in names | filter : test">
				    	{{ x }}
				  	</li>
				</ul>
			</div>
			<hr>
		</div>
		
		<script>
		angular.module('myApp', []).controller('namesCtrl', function($scope) {
		    $scope.names = [
		        'Jani',
		        'Carl',
		        'Margareth',
		        'Hege',
		        'Joe',
		        'Gustav',
		        'Birgit',
		        'Mary',
		        'Kai'
		    ];
		});
		</script>
		
		<? include 'footer.php'; ?>
	
	</body>	
</html>