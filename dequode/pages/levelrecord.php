<?php
include("connect.php");
$data = mysql_query("SELECT * FROM userinfo") 
or die(mysql_error()); 
Print "<table border cellpadding=3>"; 
while($info = mysql_fetch_array( $data )) 
{ 
Print "<tr>"; 
Print "<th>Name:</th> <td>".$info['screen_name'] . "</td> "; 
Print "<th>level:</th> <td>".$info['level'] . " </td></tr>"; 
} 
Print "</table>"; 
?>