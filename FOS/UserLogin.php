<?php
include "connection.php";
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="login.css">
	<title></title>
</head>
<body>
	
       
<form action="" method="post">
<div class="login-box">
 
 <h1>Login</h1>

 
 <div class="textbox">
 <i class="fa fa-user" aria-hidden="true"></i>
 <input type="text" placeholder="Username" name="username" value="">
 </div>
 
 <div class="textbox">
 <i class="fa fa-lock" aria-hidden="true"></i>
 <input type="password" placeholder="Password" name="password" value="">
 </div>

 <input class="button" type="submit" name="login" value="Log In">
 <input class="button" type="submit" name="login" value="Sign Up">

 </div>
 </form>
    
</body>
</html>

<?php

if ( isset( $_POST['submit'] ) ) {


$contact = strip_tags($_POST["contact"]);
$password = strip_tags($_POST["password"]);


// $stmt = $conn->prepare("SELECT * FROM data ");
// $stmt->execute(); //[$username]
// $result = $stmt->fetchAll(PDO::FETCH_OBJ);


// foreach ($result as $r) {
// if($username == $r->UserId && $password == $r->password)
//  {
// 	echo 'You are successfully logged in.' ;
// }
// else {
// 	echo 'Invalid Username and Password';
// }
// }

$stmt = $conn->prepare("SELECT * FROM USERDATA WHERE contact=?");
$stmt->execute([$contact]); //[$username]
$result = $stmt->fetchAll();


foreach ($result as $r) {
if($contact == $r["contact"] && $password == $r["password"])
 {
	echo 'You are successfully logged in.' ;
}
else {
	echo 'Invalid Username and Password';
}
}





}


?>



