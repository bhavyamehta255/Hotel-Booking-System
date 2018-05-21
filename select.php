<html>
<head>
<!--<link rel="stylesheet" type="text/css" href="select_style.css">-->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">
function fetch_select(val)
{
 $.ajax({
 type: 'post',
 url: 'fetch_data.php',
 data: {
  get_option:val
 },
 success: function (response) {
  document.getElementById("new_select").innerHTML=response; 
 }
 });
}

</script>

</head>
<body>
<p id="heading"></p>

<div id="select_box">
 <select name="city" onchange="fetch_select(this.value);">
  <option>Select city</option>
  <?php
  $host = 'localhost';
  $user = 'root';
  $pass = '';
  mysql_connect($host, $user, $pass);
  mysql_select_db('agro-tech');

  $select=mysql_query("select city_name from Citys group by city_name") or die(mysql_error());
  echo "city:<br>";
  while($row=mysql_fetch_array($select))
  {
   echo "<option>".$row['city_name']."</option>";
  }
 ?>
 </select>
 <br>
 <br>
 Hotel:<br><select id="new_select" name="hotel">
 </select>
	  
</div>     

</body>
</html>