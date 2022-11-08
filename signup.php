<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$email = $_POST['email'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name) && !empty($email)) 
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password,email) values ('$user_id','$user_name','$password','$email')";

			mysqli_query($con, $query);

			header("Location: login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="stylein.css">
	<link rel="icon" href="frontend/titlelogo.JPG" type="image/icon type">
</head>
<body>

<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3></h3>
				<div class="d-flex justify-content-end social_icon">
					
				</div>
			</div>

	
			<div id="box">
		
		<form method="post">
			<div style="font-size: 40px;margin: 30px;color: red;">Signup(◕‿◕✿)</div>

			<input id="text" type="text"  placeholder = "username"name="user_name"><br><br>
			<input id="text" type="password" placeholder="password" name="password"><br><br>
			<input id="text" type="text" placeholder="email"name="email"><br><br>

			<input id="button" type="submit" value="Signup"><br><br>

			<a href="login.php">Click to Login</a><br><br>
		</form>
	</div>
</body>
</html>