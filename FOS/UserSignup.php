<?php
include "connection.php";
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="login.css">
	<title></title>
</head>
<body>
		<form action="" method="post">
		<div class="login-box">
		
		<h1>Sign UP</h1>

		
		<div class="textbox">
		<i class="fa fa-user" aria-hidden="true"></i>
		<input type="text" placeholder="Username" name="username" value="">
		</div>

		<div class="textbox">
	    <i class="fa fa-phone" aria-hidden="true"></i>
		<input type="tel" placeholder="Contact Number" name="contactnumber" value="">
		</div>
		
		<div class="textbox">
		<i class="fa fa-lock" aria-hidden="true"></i>
		<input type="password" placeholder="Password" name="password" value="">
		</div>

		<input class="button" type="submit" name="login" value="Sign Up">








  
    
</body>
</html>




<?php

if(isset($_POST['submit']))
{
	if(($_POST['username'] == "") || ($_POST['contactnumber'] == "") || ($_POST['password'] == ""))
     {
	echo "<h2>All fields are mandatory!!</h2>";
      }
    else
    {
		
		$name=strip_tags($_POST['name']);
		$contact=strip_tags($_POST['contactnumber']);
		$password=strip_tags($_POST['password']);
	    $stmt="INSERT INTO userdata(username, contactnumber, password) VALUES('$username', '$contactnumber', '$password')";
	    $conn->exec($stmt);
	    echo "<h2> Signed up successfully :)</h2>";


     }
}
 
?>

