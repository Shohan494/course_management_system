<?php 
	require_once 'database.php'; 
	session_start(); 
	
	$user_name= "";
	$password="";
	
	if( $_SERVER["REQUEST_METHOD"] == "POST" ) 
	{
		if($_POST["user_name"]) {
			$user_name = mysqli_real_escape_string( $con, trim( $_POST["user_name"] ));
		}
		if($_POST["password"]) {
			$password = mysqli_real_escape_string( $con, trim( $_POST["password"] ));
		}
				
			$isValid = true;
				
			if($user_name !="" && $password != "" ) 
				{
						echo 'Your username is ' . $user_name
					. ' and password is ' . $password . '<br>';
				} 
				else
					{
						echo 'Please fill up all fields...';
						$isValid = false;
				    }
				
				if( $isValid ) 
					{
						$stid = "SELECT * FROM faculty WHERE user_name='$user_name' AND password='$password' ";
						$result = mysqli_query($con, $stid) or die("Could not process". mysqli_error() );
					
						$row = mysqli_fetch_array($result);
						$count = mysqli_num_rows($result);
						if($count!=0)
						   {
							   // creating a session variable
							$_SESSION['user'] = $user_name;
							header('Location: home.php');
						   }
						else 
						  {
							echo '<p id="failed">Login Failed !</p>';
						  }
	               }

        
            else 
			{
              echo '<p id="failed">Fill All The Information</p>';
            }
	   }
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<h1> <center>Course Management</center></h1>
	<form method="POST" action="register.php">
		
		User Name:
			<br>
				<input type="text" name="user_name" >
			<br>
			<br>
		Password:
			<br>
				<input type="password" name="password">
			<br>
			<br>
			
			<br>
				<input type="submit" value="login">
				<br>
				<br>
				<button type="button"><a href="signup.php">Sign Up</a></button>
			<br>
			<br>
		</form>
		
 </body>
</html>

</body>