<?php

	session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Value being stored into session</p>


	<?php
		echo $_SESSION['username'].'<br>' ;
	?>

	<a href="output.php">Output</a>
</body>
</html>