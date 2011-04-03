<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<html>

<head>

<title>TITLE</title>

<META http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">

<link rel="stylesheet" type="text/css" href="main1.css">
<script src="../templates.js" type="text/javascript"></script>

</head>

<body>

<table class="Global" width="100%" cellpadding="0" cellspacing="2" border="1">
<tr><td height="100" colspan="3">

<!-- ============ Header section ============== -->
<table class="Header" cellspacing="0" border="0"><tr>

<!-- ============ Logo ============== -->
<td style="background: url('temp-header-bg.gif') no-repeat;" width="90%" align="left"><div style="display: table; margin-left: 20px; margin-top: 20px;">&nbsp;</div></td>
<td width="50px" align ="center"><div style'"display: table; margin-top: 50px; margin-right: 50px;"><br/><a href=#>Login</a> / <a href=#>Sign Up</a></div></td>
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

<p class="matter"><?php echo $content?></p>

<!-- ============ End Content ============== -->
</td>

<!-- ============ Right Column ============== -->
<td class="Right Padded" width="17%" align="center">

<a href="www.thomso.in/dequode/score.php" title="Check your standings" >LEADERBOARD</a><br><br><br>
<?php
include("connect.php");
$result=mysql_query("SELECT * FROM dequode.userinfo ORDER BY level desc ")
or die(mysql_error());
Print "<table class="."ldr"." ><tr><th>NAME</th><th>LEVEL</th></tr>"; 
$i=1;
while($info = mysql_fetch_array( $result)) 
{ 
if($i>10)
{break;}
Print "<tr>"; 
Print " <td>".$info['screen_name'] . "</td> "; 
Print " <td>".$info['level'] . " </td></tr>"; 
$i++;
} 
Print "</table>"; 
mysql_close($con);
?></a>
<!-- ============ Script for Leaderboard ============== -->

</td></tr>

<!-- ============ Footer ============== -->
<tr><td colspan="3" class="Footer" style="vertical-align: middle;">

Copyright &copy; Dequode, <a href="http://www.thomso.in/" title="Opens in a new window" target="_blank">Thomso '10</a>

</td></tr></table>
</body>

</html>
