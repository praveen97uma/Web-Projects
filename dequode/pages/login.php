<?php
include("connect.php");
error_reporting (0);
$email=$_POST['email'];
$password=$_POST['password'];
$data = mysql_query("SELECT * FROM dequode.userinfo where email='$email'") 
or die(mysql_error()); 
$info=mysql_fetch_array($data);
$username = $info['email'];
$pname="level0";
if($username==$email)
{
	if($password==$info['password'])
		{
			session_start();
			$_SESSION['username']=$username;
			$_SESSION['screen_name']=$sname;
			echo '<script language="Javascript">
			window.location = "'.$pname.'.php?'.SID.'"</script>';
		}
	else
		{
			echo '<script language="Javascript">
				window.location = "index.php"</script>';
		}
}
else
{
	echo '<script language="Javascript">
			window.location = "register.php"</script>';
}
mysql_close($con);
mysql_close($con1);
?>