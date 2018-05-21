<?php
include 'index1.php';
session_start();
if (session_destroy()) {
header("Location: adminlogin.php");
}
?>