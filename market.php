<?php
	include 'connection.php';
	include 'header.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title><centre>MARKET</centre></title>
</head>
<body>
<br>
<br>
<br>
<br>
<h6><center><b><font size=20>MARKET</font></b></center></h6>
<form id=form1 action="market_fetch.php" method="POST">
<?php
	include 'select.php';
?>
<br>
<input type="submit" name="submit">
</form>
</body>
</html>
