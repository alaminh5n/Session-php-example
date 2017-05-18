<?php
    
    $con=mysqli_connect("localhost","root","","gol");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>

	<form method="POST" action="login_session.php">
		Username: <input type="text" name="username"><br>
		Password: <input type="text" name="password"><br>
		<input type="submit" name="Submit">
	</form>

	<?php
		if(isset($_POST['Submit'])) {
			$username = $_POST['username'];
			$password = $_POST['password'];
            
            $sql="SELECT username,password FROM user WHERE userid='$username' and password='$password'";
            $res=mysqli_query($con,$sql);
            $row=mysqli_num_rows($res);
			
			if($rows!=1) {
				$_SESSION['username'] = $username;
				header("Location: profile.php");
                session_start();
                $_SESSION['username']=$username;
			}else{
				echo "Invalid login attempt. Please try again";
			}

		}
	?>



	
</body>
</html>