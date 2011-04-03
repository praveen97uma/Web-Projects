<?php
$con = mysql_connect("localhost","root",""); //Replace with your actual MySQL DB Username and Password
if (!$con) 
{ 
die('Could not connect: ' . mysql_error()); 
}
mysql_select_db("deqoude", $con); ?> 