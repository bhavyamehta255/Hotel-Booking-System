<?php
include 'connection.php';
include 'index1.php';
session_start();
if (isset($_POST['username'])) {
$username = $_POST['username'];
$password = $_POST['password'];
$login = $mysqli->query("SELECT * FROM users WHERE username = '$username' AND password = '".md5($password)."'");
if ($login->num_rows <= 1) {
$_SESSION['username'] = $username;
header("Location: index1.php");
} else {
echo $mysqli->error;
}
}
?>