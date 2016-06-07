<!DOCTYPE html>
<html ng-app="EmailApp">
 	<head>
		<meta charset="utf-8">
	    <title>AngularJS Email App</title>
		<? include 'libraries.php'; ?>
		
		<style>
		    [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak {
		      display: none !important;
		    }
		</style>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
	</head>
	<body>
	    <header class="header" role="banner">
	      <div class="header__text">
	        <p>Gmail Clone</p>
	      </div>
	    </header>

	    <main class="main" role="main">
	      <div ng-view class="flex"></div>
	    </main>
	</body>
</html>