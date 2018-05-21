<?php
include "config.php";

$city = $_POST['city'];   // department id

$sql = "SELECT hotel_name FROM adminusers WHERE city=".$city;

$result = mysql_query($sql);

$users_arr = array();

while( $row = mysql_fetch_array($result) ){
    //$userid = $row['id'];
    $hotel_name = $row['hotel_name'];

    $users_arr[] = array("hotel_name" => $hotel_name);
}

// encoding array to json format
echo json_encode($users_arr);
?>