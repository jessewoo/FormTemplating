<!DOCTYPE html>
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
		        <div ng-view></div>
		      </div>
			</main>
		</div>
		<hr>
		
		<? include 'footer.php'; ?>
	</body>	
</html>