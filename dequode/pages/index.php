<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>DEQUODE V2</title>
<META http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link rel="stylesheet" type="text/css" href="main1.css">
<script src="../templates.js" type="text/javascript"></script>
</head>
<?php

error_reporting (0);
include("connect.php");
session_start();
if(!isset($_SESSION['username'])) 
{
?>
<body>

<table class="Global" width="100%" cellpadding="0" cellspacing="2" border="1">
<tr><td height="100" colspan="3">

<!-- ============ Header section ============== -->
<table class="Header" cellspacing="0" border="0"><tr>

<!-- ============ Logo ============== -->
<td style="background: url('temp-header-bg.gif') no-repeat;" width="90%" align="left"><div style="display: table; margin-left: 20px; margin-top: 20px;">&nbsp;</div></td>
<td width="50px" align ="center"><div style'"display: table; margin-top: 50px; margin-right: 50px;"><br/><a href="../pages/register.php">Sign Up</a></div></td>
</tr></table>

<!-- ============ Left Column ============== -->
<tr><td class="Left" width="15%" align="center">

<!-- ============ Site Menu ============== -->
<br/>
<p class="button"><a href=#>HOME</a></p>
<p class="button"><a href=#>FORUM</a></p>
<p class="button"><a href=#>THE TEAM</a></p>
<p class="button"><a href=#>THOMSO '10</a></p>

<!-- ============ Content Column (Middle) ============== -->
<td class="Content Padded" width="68%">

<!-- ============ Page Heading ============== -->
<h1 class="HeadingStyle">THE HUNT BEGINS</h1>

<!-- ============ Begin Content ============== -->

<p class="matter">Welcome to DEQUODE V2, the online puzzle hunt event of <a href="www.thomso.in">Thomso'10</a>.<br/><a href="#">Log in</a> to play or register <a href="#">here</a>.<br/>For hints, tips and fun vist our <a href="#">forums</a>.<br/>Go ahead. Good Luck!<br/><br/>The DEQUODE team.
<form style="FONT: 16px verdana,sans-serif;" action="../pages/login.php" method="POST" id="user_login">
		<font >Email</font><br/>
		<input type="text" name="email" id="login_userbox"></input><br/><br/>
			<font >Password</font><br/>
			<input type="password" name="password" id="login_userbox">
			</input><br/><br/>
			<input type="submit" value="Login">
			<input type="hidden" name="ref" id="ref"/>
</form>
<!-- ============ End Content ============== -->
</td>

<!-- ============ Right Column ============== -->
<td class="Right Padded" width="17%" align="center">

<a href="www.thomso.in/dequode/score.php" title="Check your standings" >LEADERBOARD</a>

<!-- ============ Script for Leaderboard ============== -->

</td></tr>

<!-- ============ Footer ============== -->
<tr><td colspan="3" class="Footer" style="vertical-align: middle;">

Copyright &copy; Dequode, <a href="http://www.thomso.in/" title="Opens in a new window" target="_blank">Thomso '10</a>

</td></tr></table>
</body>
<?php }
else
	{
	$usr=$_SESSION['username'];
	$data = mysql_query("SELECT * FROM dequode.userinfo where email='$usr'") 
	or die(mysql_error()); 
	$info=mysql_fetch_array($data);
	$lvl=$info['level'];
	$pname=$info['page_name'];
	echo '<script language="Javascript">
			window.location = "'.$pname.'.php?'.SID.'"</script>';
	}
?>
</html>