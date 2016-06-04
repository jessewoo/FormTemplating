<!DOCTYPE html>
<html>
 	<head>
	    <title>Sample AngularJS Controller</title>
		<script src="3rd-party/jquery-1.12.4.min.js"></script>
	    <script src="3rd-party/angular.min.js"></script>
	</head>
	<body>
	    <div ng-app>
	        <p>Your Name : <input type="text" ng-model="name"></p>
			<h1>Hello {{name}}</h1>
	    </div>
	</body>	
</html>