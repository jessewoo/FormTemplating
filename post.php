<?php
// Configuration and Settings for DB
    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "iwa";
    $port = 8889;
    $table = "ttform";

// POST Variables
    $firstname = $_POST['firstname'];
    $homeaddress = $_POST['homeaddress'];
    $city = $_POST['city'];

//  Connect to the database
    $connection = mysqli_connect($host, $username, $password, $database);

    if ($connection) {
        echo "connection successful to iwa database <br>";
    }

    $sql = "INSERT INTO $table (firstname,homeaddress,city) VALUES ($firstname,$homeaddress,$city)";
    $query = mysqli_query($connection, $sql);

    if($query) {
        echo " Data Inserted Successfully";
    }
?>
