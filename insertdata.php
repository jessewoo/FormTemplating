<?php

    $host = "localhost";
    $username = "root";
    $password = "root";
    $database = "iwa";
    $port = 8889;
    $table = "commentdb";

    $connection = mysqli_connect($host, $username, $password, $database);

    if ($connection) {
        echo "connection successful to iwa database <br>";
    }

    $sql = "INSERT INTO $table (username, message, message2) VALUES ('Jesse Woo', 'Hello Sire', 'Yo buddy')";
    $query = mysqli_query($connection, $sql);

    if($query) {
        echo " Data Inserted Successfully";
    }


?>
