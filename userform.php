<?php
include 'connection.php';
include 'index.php';
if (isset($_POST['data_2'])) {
	$firstname=$_POST['data_2'];
	$lastname=$_POST['data_3'];
	$phone=$_POST['data_4'];
	$email=$_POST['data_5'];
	$adate=$_POST['data_6'];
	$ddate=$_POST['data_7'];
	$adults=$_POST['data_8'];
	$child=$_POST['data_9'];
	$comment=$_POST['data_10'];
	$city=$_POST['city'];
	$hotel=$_POST['hotel'];

	$register=$mysqli->query("INSERT INTO register (fname,lname,phone,email,adate,ddate,adults,children,comments,city,hotel) VALUES ('$firstname','$lastname','$phone','$email','$adate','$ddate','$adults','$child','$comment','$city','$hotel')");

	if(!$register)
	{
		echo $mysqli->error();
	}
	else 
	{
		echo "<br>successfully registerd";
	}
}
?>