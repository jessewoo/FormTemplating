<?php

// Configuration and Settings for DB
$host = "localhost";
$username = "root";
$password = "root";
$database = "iwa";
$port = 8889;
$table = "ttform";

// POST Variables
    $mysqlID = $_POST['postmysqlID'];
    $firstname = $_POST['postfirstname'];
    $homeaddress = $_POST['posthomeaddress'];
    $city = $_POST['postcity'];

//  Connect to the database
    $connection = mysqli_connect($host, $username, $password, $database);

/*
    if ($connection) {
        echo "Connection successful to iwa database. ";
    }
*/

// Insert Query
    $sql = "UPDATE $table SET firstname = '$firstname',homeaddress = '$homeaddress',city = '$city' WHERE id = '$mysqlID'";
    $query = mysqli_query($connection, $sql);

    if($query) {
        echo "/success.php?id=".$mysqlID;
    } else {
        echo 0;
    }

    mysqli_close($connection);
?>
