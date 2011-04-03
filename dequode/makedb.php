<?php
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
if (mysql_query("CREATE DATABASE dequode",$con))
  {
  echo "Database created";
  }
else
  {
  echo "Error creating database: " . mysql_error();
  }
mysql_select_db("dequode", $con);
mysql_query("CREATE TABLE userinfo
(
  id int(11) NOT NULL auto_increment,
  status varchar(20) NOT NULL,
  screen_name varchar(15) NOT NULL,
  password varchar(20) NOT NULL,
  email varchar(40) NOT NULL,
  page_name varchar(15) NOT NULL,
  level int(11),
  activationkey varchar(100) NOT NULL,
  time int(20),
  PRIMARY KEY  (`id`),
  UNIQUE KEY `email` (`email`)) ",$con);
mysql_close($con);
?>