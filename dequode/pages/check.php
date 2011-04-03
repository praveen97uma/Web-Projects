<?php 

if(!isset($_SESSION['username'])) {
	echo '<script language="Javascript">
			alert("Please login!");
		window.location = "index.php";
		</script>
		';
		
	die();
}
?>