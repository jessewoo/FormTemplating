<?php include("config.php");
$username = isset($_POST['username']);
$message = isset($_POST['message']);
if (($username && $message) && (empty($_POST['username'] === false) && empty($_POST['message']) === false)) {
    $username = $_POST['username'];
    $message = $_POST['message'];

    // insert into database
    $nowTime = getDateTime();
    $userIp = getIp();
    $sql = "INSERT INTO commentdb (id,username, message,date) VALUES ('','$username','$message', '$nowTime') ";
    $result = mysql_query($sql);

    if($result)
    {
        echo " Data Inserted Successfully";
    }else{
        echo " Data insert failed - ".mysql_error();
    }
}else{

    echo " Required fields are missing";

}
?>