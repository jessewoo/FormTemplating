<!DOCTYPE html>
<html>
 	<head>
	    <title>w3schools Tutorial</title>
		<? include 'libraries.php'; ?>
	</head>
	<body>
		<br>
		<div class="container">
			<h1>Directive</h1>
			<ul>
				<li>Built-in directives which offer functionality</li>
				<li>The <strong>ng-init</strong> directive defines initial values</li>
			</ul>					
			<hr>
			<!-- Directive clones HTML elements -->
			<div ng-app="" ng-init="names=[{name:'Jesse',job:'FE'},{name:'Cole',job:'Manager'},{name:'Chris',job:'IT'}]">
				<ul>
				    <li ng-repeat="x in names">
						{{ x.name + ', ' + x.job }}
					</li>
				</ul>
			</div>
		</div>
		<hr>
		
		<? include 'footer.php'; ?>
	
	</body>	
</html>