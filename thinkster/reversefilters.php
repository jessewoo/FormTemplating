<!DOCTYPE html>
<html lang="en">

<head>
    <title>Promise fun</title>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.0-beta.5/angular.min.js"></script>
    <script src="js/reversefilter.js"></script>
</head>

<body ng-app="myReverseFilterApp" class="ng-scope">
    <div ng-controller="MyController" class="ng-scope ng-binding">
        <input ng-model="greeting" type="text" class="ng-pristine ng-untouched ng-valid ng-not-empty"><br>
        No filter: hello<br>
        Reverse: olleh<br>
        Reverse + uppercase: OLLEH<br>
        Reverse, filtered in controller: olleh<br>
    </div>
</body>


</html>
