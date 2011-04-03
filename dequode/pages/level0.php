<?php
session_start();
error_reporting (0);
if(!isset($_SESSION['username'])) 
{
	echo '<script language="Javascript">
		window.location = "index.php";
		</script>
		';
		
	die();
}
else
{
$usr=$_SESSION['username'];
$content="Use the key to unlock the door.<br>
<img src="."../images/door.jpg".">
<a href="."../pages/key.php?".'<?=SID?>'."<img src="."../images/key.jpg".">";
include("layoutques.php");
$con = mysql_connect("localhost","root","");
mysql_select_db("deqoude", $con);
$data = mysql_query("SELECT * FROM dequode.userinfo WHERE email='$usr'") 
or die(mysql_error()); 
$info=mysql_fetch_array($data);
$lvl=$info['level'];
$pname=$info['page_name'];
$result=mysql_query("UPDATE dequode.userinfo SET level='0', page_name='level1' WHERE email='$usr'")
or die(mysql_error());
if($lvl<0)
{
echo '<script language="Javascript">
alert("You are not at this level");
			window.location = "'.$pname.'.php?'.SID.'"</script>';
die("Not at this level.");
}
}
?>