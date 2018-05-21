<?php
include 'connection.php';
include 'index.php';
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
<form method="post" action="login-action.php">
<label>Username:</label><br>
<input type="text" name="username" /><br>
<label>Password:</label><br>
<input type="password" name="password" /><br>
<input type="submit" value="Login" />
</form>
Not a member yet? Click <a href="registration.php">here</a> to register.
<?php } else if (isset($_SESSION['username'])) { ?><br>
<?php echo $_SESSION['username'] ?> | <a href="logout.php">Logout</a>
<?php }
?>
</body>
</html>