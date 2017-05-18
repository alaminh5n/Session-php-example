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
				
		
		echo $_SESSION['username'];


	?>

		<br>
	<a href="test.php">Test</a>
</body>
</html>