<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Welcome to our homepage</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@300;400;600&display=swap">
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Source+Serif+Pro:wght@300;400;600&display=swap">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="icon" href="frontend/titlelogo.JPG" type="image/icon type">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
p {
  margin-top: 100px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 80px;

}
body {
 background-image: url("pictures/howzstream2.jpg");
 background-color: #000000;
}


</style>
</head>
<body>
    
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-opacity 1 w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-black" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">Hello, <?php echo $user_data['user_name']; ?></a>
   
    
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Sign up</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Sign in</a>
   
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-black w3-center w3-opacity 0" style="padding:50px 10px">
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
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h2 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h2>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h3>Howzstream is a video streaming site where you allegedly will be able to stream movies from our server. Basically it is an overhyped video player with extra steps.</h3>
   <h3> This site is built on html, css, some java script for the front end and php and sql for backend.</h3>
   <h3>It is made strictly for the educational purposes only. Commercial use of such is illegal.</h3>
   <h3>We do not promote piracy and illegal streaming sites.</h3>
   <h3>All the materials used to display the content of the site is open source and available with no copyright infringement issues.</h3>
  

  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h2 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h2>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
  <h1 class="w3-margin w3-jumbo w3-text-red w3-center w3-container"></h1>
 
  <a href="main.html"><button class="w3-button w3-text-black w3-red w3-padding-large w3-large w3-margin-top w3-opacity 1">Go to homepage</button></a>
  <style>
    
  </style>
  
</header>



<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-black">  
  <div class="w3-xlarge w3-padding-32">
  <a href="https://www.facebook.com/howzthat16" target="_blank"> <i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="https://www.instagram.com/howzthat16/" target="_blank"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    
    <a href="https://www.reddit.com/user/howzthat16" target="_blank"> <i class="fa fa-reddit w3-hover-opacity"></i></a>
    <a href="https://steamcommunity.com/id/howz_that/" target="_blank">  <i class="fa fa-steam w3-hover-opacity"></i></a>
   
 </div>
 <p>Made by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">prasanna/kiran</a></p>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>
