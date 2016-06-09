<!DOCTYPE html>
<html lang="en">

<head>
    <title>Promise fun</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.0-beta.5/angular.min.js"></script>
    <script src="js/filter.js"></script>
</head>

<body ng-app="FilterInControllerModule" class="ng-scope">
    <div ng-controller="FilterController as ctrl">
        <div>
            All entries:
            <span ng-repeat="entry in ctrl.array">{{entry.name}} </span>
        </div>
        <div>
            Entries that contain an "a":
            <span ng-repeat="entry in ctrl.filteredArray">{{entry.name}} </span>
        </div>
    </div>
</body>


</html>
