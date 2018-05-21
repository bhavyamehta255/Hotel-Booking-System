<?php
include 'connection.php';
include 'index1.php';
if (isset($_POST['username'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$name = $_POST['hotel_name'];
$city = $_POST['city'];
$register = $mysqli->query("INSERT INTO adminusers (adminusername, adminpassword, hotel_name,city) VALUES ('$username', '". md5($password)."', '$name', '$city')");
if ($register) {
header("Location: adminregistration.php?adminregister_action=success");
} else {
echo $mysqli->error;
}
}
?>