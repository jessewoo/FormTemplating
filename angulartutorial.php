<!doctype html>
<html ng-app>
 	<head>
	    <title>Sample AngularJS Controller</title>
	</head>
	<body>
	    <div ng-controller="TestCtrl">
	        <h1>{{title}}</h1>
	        <input type="text" ng-model="title">
	    </div>

	    <script src="3rd-party/jquery-1.12.4.min.js"></script>
	    <script src="3rd-party/angular.min.js"></script>

	    <script>
	      function TestCtrl($scope) {
	        $scope.title = 'Write a title here...';
	      };
	    </script>
	</body>	
</html>