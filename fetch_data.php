<?php
if(isset($_POST['get_option']))
{
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 mysql_connect($host, $user, $pass);
 mysql_select_db('oyorooms');

 $city_name = $_POST['get_option'];
 $find=mysql_query("select hotel_name from adminusers where city='$city_name'") or die(mysql_error());
 while($row=mysql_fetch_array($find))
 {
  echo "<option>".$row['hotel_name']."</option>";
 }
 exit;
}
?>
