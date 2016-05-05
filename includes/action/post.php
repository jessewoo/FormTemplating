<? include '../config.php'; ?>
<?php

// POST Variables
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
    $sql = "INSERT INTO $table (firstname,homeaddress,city) VALUES ('$firstname','$homeaddress','$city')";
    $query = mysqli_query($connection, $sql);

    if($query) {
        // Get the last auto-incremental ID
        $last_id = $connection->insert_id;
        echo "/success.php?id=" . $last_id;
    } else {
        echo 0;
    }

    mysqli_close($connection);

?>
