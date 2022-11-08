<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
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
				
				
			</div>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 50px;margin: 40px;color: red;">Login⁽(◍˃̵͈̑ᴗ˂̵͈̑)⁽</div>
			<h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h2 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h2>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h2 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h2>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>

			<input id="text" type="text" placeholder="username" name="user_name"><br><br>
			<input id="text" type="password"placeholder="password" name="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>

			<a href="signup.php">Click to Signup</a><br><br>
		</form>
	</div>
</body>
</html>