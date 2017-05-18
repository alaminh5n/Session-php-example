<?php


	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Showing value from session</p>


	<?php
		$value = $_SESSION['username']; 		
		//unset($_SESSION['username']);
		echo $value;
	?>
	<br>
	<a href="sample3.php">Sample3</a>
</body>
</html>