<html><head><link rel="stylesheet" href="style.css" type="text/css" media="screen" /></head></html>
<?php
session_start();
include("check.php");
$usr=$_SESSION['username'];
$lvl=$_SESSION['level'];
include("connect.php");
include("layout.php");
$sql_early=mysql_query("SELECT * FROM userinfo where email='$usr'") or die(mysql_error());
if($prevmem=mysql_fetch_array($sql_early))
{
$lastques=$prevmem['page_name'];
}
else
{
$lastques='level0';
$time=time();
$assign=mysql_query("Insert into userinfo (email,page_name,time) values ('$usr','$lastques','$time')");
$result=mysql_query($assign,$con);
}
?>
<div class="art_layout4" >
<a href="<?php echo $lastques;?>.php?<?php echo SID;?>" >PLAY</a></div>
