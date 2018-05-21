<?php
include 'connection.php';
include 'index1.php';

$result = $mysqli->query("SELECT * FROM register");

?><br>
<table border="2">
   <tr>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Phone </th>
      <th>E-mail Id </th>
      <th>Arrival Date</th>
      <th>Departure Date</th>
      <th>Adults</th>
      <th>Children</th>
      <th>comments</th>
      <th>city</th>
      <th>city_id</th>
    </tr>
    <?php 
    while ($array = mysqli_fetch_row($result));
    {
        print "<tr> <td>";
        echo $array[0]; 
        print "</td> <td>";
        echo $array[1]; 
        print "</td> <td>";
        echo $array[2]; 
        print "</td> <td>";
        echo $array[3]; 
        print "</td> </tr>";
        echo $array[4]; 
        print "</td> </tr>";
        echo $array[5]; 
        print "</td> </tr>";
        echo $array[6]; 
        print "</td> </tr>";
        echo $array[7]; 
        print "</td> </tr>";
        echo $array[8]; 
        print "</td> </tr>";
        echo $array[9]; 
        print "</td> </tr>";
        echo $array[10]; 
        print "</td> </tr>";
    }
?>