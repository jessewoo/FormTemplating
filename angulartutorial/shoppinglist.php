<!DOCTYPE html>
<html>
 	<head>
	    <title>Shopping List</title>
	   	<? include 'libraries.php'; ?>
	</head>
	<body>
		<br>
		<div class="container">
			<h1>Shopping List</h1>
			<p>Add a text field, bind it to the application with the ng-model directive</p>
			<!-- Application - myShoppingList; add a controller = myCtrl -->
			<div ng-app="myShoppingList" ng-controller="myCtrl">
			    <ul>
					<!-- Directive to display a list using the items in the array -->
			        <li ng-repeat="x in products">
						{{x}}
						<span ng-click="removeItem($index)">&times;</span>
					</li>
			    </ul>
				<input ng-model="addMe">
				
				<!-- ng-click directive will run "addItem" function -->
				<button ng-click="addItem()">Add</button>
			
				<p>{{errortext}}</p>
			</div>
			
		</div>
		<hr>
		
		<script>
			var app = angular.module("myShoppingList", []); 
			app.controller("myCtrl", function($scope) {
			    $scope.products = ["Milk", "Bread", "Cheese"];
				
				// Use the value of the addMe input field to add an item to the product array 
				$scope.addItem = function () {
					$scope.errortext = "";
					// Validation - should not be allowed to add empty items
					if (!$scope.addMe) {return;}
					// If you try to add the same item twice, the application crashes
				    if ($scope.products.indexOf($scope.addMe) == -1) {
						$scope.products.push($scope.addMe);
					} else {
						$scope.errortext = "The item is already in your shopping list.";
					}
				}
				
				// At position x, remove 1 item
				$scope.removeItem = function (x) {
					$scope.errortext = "";
				    $scope.products.splice(x, 1);
				}
			});
		</script>
		
		<? include 'footer.php'; ?>
	
	</body>	
</html>