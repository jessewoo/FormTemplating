<? include '../config.php'; ?>
<?php

// POST Variables
    $lastid = $_POST['lastid'];

//  Connect to the database
    $connection = mysqli_connect($host, $username, $password, $database);

// GET Query
    $sql = "SELECT * FROM $table WHERE id = $lastid";
    $query = mysqli_query($connection, $sql);
    while($row = mysqli_fetch_object($query)) {
        $firstname = "$row->firstname";
        $homeaddress = "$row->homeaddress";
        $city = "$row->city";
        $array = array('firstname'=>$firstname,'homeaddress'=>$homeaddress, 'city'=>$city);

        echo json_encode($array);
    }

    mysqli_close($connection);

?>
