<html>
	<head>
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
	</head>
</html>
<?php
$con=mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("dequode",$con) or die(mysql_error());

if ($_POST['form_submitted'] == '1') 
{
##User is registering, insert data until we can activate it

$activationKey =  mt_rand() . mt_rand() . mt_rand() . mt_rand() . mt_rand();
$sname = mysql_real_escape_string($_POST[sname]);
$password = mysql_real_escape_string($_POST[password]);

$email = mysql_real_escape_string($_POST[email]);
$pname='level0';
$lvl=0;
$sql="INSERT INTO userinfo (screen_name, password, email, activationkey, status, page_name, level) VALUES ('$sname', '$password', '$email', '$activationKey', 'verify', '$pname', '$lvl')";

if (!mysql_query($sql))

  {

  die('Error: ' . mysql_error());

  }

$content="An email has been sent to $_POST[email] with an activation key. Please check your mail to complete registration.";
		include("layout.php");
##Send activation Email

$to      = $_POST[email];

$subject = " Deqoude V2 Registration";

$message = "Welcome to our Dequode V2.!\r\rYou have completed registration for our online event. Please activate your account by clicking the following link:\rhttp://www.thomso.in/dequode/verify.php?$activationKey\r\rIf this is an error, ignore this email and you will be removed from our mailing list.\r\rRegards,\ DEQUODE Team";

$headers = 'From: noreply@thomso.in' . "\r\n" .

    'Reply-To: noreply@thomso.in' . "\r\n" .

    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);

} 
else {

##User isn't registering, check verify code and change activation code to null, status to activated on success

$queryString = $_SERVER['QUERY_STRING'];

$query = "SELECT * FROM userinfo"; 

$result = mysql_query($query) or die(mysql_error());

  while($row = mysql_fetch_array($result)){

    if ($queryString == $row["activationkey"]){

       $content="You have been successfully registered.<br>Click <a href=../dequode/index.php> here </a> to login.";
		include("layout.php");

       $sql="UPDATE userinfo SET activationkey = '', status='activated' WHERE (id = $row[id])";

       if (!mysql_query($sql))

  {

        die('Error: ' . mysql_error());

  }

    }

  }

}
?>