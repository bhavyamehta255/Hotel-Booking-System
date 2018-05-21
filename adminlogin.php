<?php
include 'connection.php';
include 'index1.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Login Page</title>
</head>
<body>
<?php
if (!isset($_SESSION['username'])) { ?>
<h5>Login</h5>
<form method="post" action="adminlogin-action.php">
<label>Username:</label><br>
<input type="text" name="username" id="uname" /><br>
<label>Password:</label><br>
<input type="password" name="password" id="pwd" /><br>
<input type="submit" value="Login" id="adminsubmit" onSubmit="return validateForm()" />
</form>
Not a member yet? Click <a href="adminregistration.php">here</a> to register.
<?php } else if (isset($_SESSION['username'])) { ?><br>
<?php echo $_SESSION['username'] ?> | <a href="adminlogout.php">Logout</a>
<?php }
?>
<script type="text/javascript">
function validateForm() {
if (isEmpty(document.getElementById('uname').value.trim())) {
alert('username  is required!');
return false;
}
if (isEmpty(document.getElementById('pwd').value.trim())) {
alert('password is required!');
return false;
}

</script>
</body>
</html>