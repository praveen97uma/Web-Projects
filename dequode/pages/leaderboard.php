<html><head><link rel="stylesheet" href="style.css" type="text/css" media="screen" /></head></html>
<?php
include("connect.php");
$result=mysql_query("SELECT * FROM userinfo ORDER BY level desc, time ");
$title = mysql_fetch_array( $result);
include("layout.php");
?>