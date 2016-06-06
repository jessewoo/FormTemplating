<!DOCTYPE html>
<html>
 	<head>
	    <title>w3schools Tutorial</title>
	   	<? include 'libraries.php'; ?>
	</head>
	<body>
		<br>
		<div class="container">
			<h1>Beginning</h1>
			<p>Extends HTML attributes with <strong>Directives</strong></p>
			<ul>
				<li>The <strong>ng-app</strong> directive defines an AngularJS application.</li>
				<li>The <strong>ng-model</strong> directive binds the value of HTML controls (input, select, textarea) to application data.</li>
				<li>The <strong>ng-bind</strong> directive binds application data to the HTML view.</li>
			</ul>		
			<p>Binds data to HTML with <strong>Expressions</strong></p>
			
			<hr>
		    <div ng-app="" ng-init="firstName='John';lastName='Doe';person={firstName:'John',lastName:'Doe'};points=[1,15,19,2,40]">
		        
				<p>Your Name : <input type="text" ng-model="name"></p>
				<h1>Hello {{name}}</h1>
				<p>Yo, what sup: <span ng-bind="name"></span></p>
				<p>My first expression: {{ 5 + 5 }}</p>
				<p>The name is {{ firstName + " " + lastName }}</p>
				<p>The name is {{ person.lastName }}</p>
				<p>The third result is {{ points[2] }}</p>
		    </div>
			
		</div>
		<hr>
		
		<? include 'footer.php'; ?>
	
	</body>	
</html>