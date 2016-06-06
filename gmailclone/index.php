<!DOCTYPE html>
<!-- Scopes - holds your Models (data), cooperate with Controllers, give Views everything they need -->
<!-- Application SCOPE -->
<html ng-app="EmailApp">
 	<head>
		<meta charset="utf-8">
	    <title>Gmail Clone</title>
		<? include 'libraries.php'; ?>
	</head>
	<body>
		<br>
		<div class="container">
			<h1>Gmail Clone</h1>	
			
			<main class="main" role="main">
		      <div class="wrapper">
				<!-- ng-view Directive, inject HTML based on the URL a user visits -->
				<!-- SINGLE PAGE APPLICATION - never get a full page refresh, all "pages" injected content via AJAX -->
				<!-- NOT "pages", they're "views" which are loaded depending on the URL a user visits or application state -->
		        <div ng-view></div>
		      </div>
			</main>
		</div>
		<hr>
		
		<? include 'footer.php'; ?>
	</body>	
</html>


<!-- **** MVC - proven organization framework *****
Model - data, business information of app
View - HTML, presentation of data, what user sees and interacts with
Controller - connector that makes different pieces work together
-->


<!-- **** Angular Dictionary *****
Directive - allows you to extend your HTML
-->
