<?php
include 'connection.php';
include 'index.php';
session_start();
?>
<?php
if (!isset($_SESSION['username'])) { ?>
<html>
<head>
    

</head>
<body>
<h5>Login</h5>
<form method="post" action="login-action.php">
<label>Username:</label><br>
<input type="text" name="username" /><br>
<label>Password:</label><br>
<input type="password" name="password" /><br>
<input type="submit" value="Login" />
</form>
Not a member yet? Click <a href="registration.php">here</a> to register.
<?php } else if (isset($_SESSION['username'])) { ?>


<form method="post" action="userform.php" onSubmit="return validateForm();">
<div style="width: 400px;">
</div><br>

<div style="padding-bottom: 18px;font-size : 21px;">Hotel Reservation for HIFI </div>
<div style="display: flex; padding-bottom: 18px;width : 450px;">
<div style=" margin-left : 0; margin-right : 1%; width : 49%;">First name<span style="color: red;"> *</span><br/>
<input type="text" id="data_2" name="data_2" style="width: 100%;" class="form-control"/>
</div>
<div style=" margin-left : 1%; margin-right : 0; width : 49%;">Last name<span style="color: red;"> *</span><br/>
<input type="text" id="data_3" name="data_3" style="width: 100%;" class="form-control"/>
</div>
</div><div style="padding-bottom: 18px;">Phone<span style="color: red;"> *</span><br/>
<input type="text" id="data_4" name="data_4" style="width : 450px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Email<span style="color: red;"> *</span><br/>
<input type="text" id="data_5" name="data_5" style="width : 450px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Arrival date<span style="color: red;"> *</span><br/>
<input type="text" id="data_6" name="data_6" style="width : 250px;" class="form-control"/>
</div>
<script src="js/pikaday.min.js" type="text/javascript"></script>
<link href="css/pikaday.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">new Pikaday({ field: document.getElementById('data_6') });</script>
<div style="padding-bottom: 18px;">Departure date<span style="color: red;"> *</span><br/>
<input type="text" id="data_7" name="data_7" style="width : 250px;" class="form-control"/>
</div>
<script src="js/pikaday.min.js" type="text/javascript"></script>
<link href="css/pikaday.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">new Pikaday({ field: document.getElementById('data_7') });</script>
<div style="padding-bottom: 18px;">Number of adults<span style="color: red;"> *</span><br/>
<input type="number" id="data_8" name="data_8" style="width : 250px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Number of children<br/>
<input type="number" id="data_9" name="data_9" style="width : 250px;" class="form-control"/>
</div>
<div style="padding-bottom: 18px;">Questions/Comments<br/>
<textarea id="data_10" false name="data_10" style="width : 450px;" rows="6" class="form-control"></textarea>
</div>
</div>
<?php
    include 'select.php';
?>
                <br>
<br>


<div style="padding-bottom: 18px;"><input name="skip_Submit" value="Submit" type="submit"/></div>
<div>

</form>

<script type="text/javascript">
function validateForm() {
if (isEmpty(document.getElementById('data_2').value.trim())) {
alert('First name is required!');
return false;
}
if (isEmpty(document.getElementById('data_3').value.trim())) {
alert('Last name is required!');
return false;
}
if (isEmpty(document.getElementById('data_4').value.trim())) {
alert('Phone is required!');
return false;
}
if (isEmpty(document.getElementById('data_5').value.trim())) {
alert('Email is required!');
return false;
}
if (!validateEmail(document.getElementById('data_5').value.trim())) {
alert('Email must be a valid email address!');
return false;
}
if (isEmpty(document.getElementById('data_6').value.trim())) {
alert('Arrival date is required!');
return false;
}
if (isEmpty(document.getElementById('data_7').value.trim())) {
alert('Departure date is required!');
return false;
}
if (isEmpty(document.getElementById('data_8').value.trim())) {
alert('Number of adults is required!');
return false;
}
return true;
}
function isEmpty(str) { return (str.length === 0 || !str.trim()); }
function validateEmail(email) {
var re = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,15}(?:\.[a-z]{2})?)$/i;
return isEmpty(email) || re.test(email);
}
</script>
<?php }
?>

<script src="js/jquery.js" type="text/javascript"></script>
<!--<script src="js/hotel.js" type="text/javascript"></script>-->

</body>
</html>