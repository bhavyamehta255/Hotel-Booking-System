<?php
include 'connection.php';
include 'index1.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Registration of Hotel</title>
</head>
<body>
<br>
<?php
if (!isset($_SESSION['username'])) { ?>
<?php

if (isset($_GET['adminregister_action'])) {
if ($_GET['adminregister_action'] == "success") { ?>
Successfully Registered!
<?php }
}
?>
<form method="post" action="adminregister-action.php">
<label>Username:</label><br>
<input type="text" name="username" id="username" /><br>
<label>Password:</label><br>
<input type="password" name="password" id="password" /><br>
<label>Hotel Name:</label><br>
<input type="text" name="hotel_name" id="hotel" /><br>
City:<select id="city" name="city" id="city">
        
            <?php
            
            
            
            $cdquery="SELECT city_name FROM Citys";
            $cdresult=$mysqli->query($cdquery) or die ("Query to get data from citys failed: ".mysqli_error());
            
            while ($cdrow=mysqli_fetch_array($cdresult)) {
            $cdTitle=$cdrow["city_name"];
                echo "<option>
                    $cdTitle
                </option>";
            
            }
                
            ?>
    
        </select><br>
<input type="submit" value="Register" onSubmit=return validateForm() />
</form>
Already a member? Click <a href="adminlogin.php">here</a> to login.
<?php } else { ?><br>
You already logged in <?php echo $_SESSION['username'] ?>. Click <a href="adminlogout.php">here</a> to logout.
<?php }
?><script type="text/javascript">
function validateForm() {
if (isEmpty(document.getElementById('username').value.trim())) {
alert('user name is required!');
return false;
}
if (isEmpty(document.getElementById('password').value.trim())) {
alert('password is required!');
return false;
}
if (isEmpty(document.getElementById('hotel').value.trim())) {
alert('hotel is required!');
return false;
}
return true;
}
function isEmpty(str) { return (str.length === 0 || !str.trim()); }

</script>
</body>
</html>