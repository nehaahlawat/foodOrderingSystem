<?php
include "connection.php";
error_reporting(0);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<title></title>
</head>
<body>
	<div class="container">
	<div align="center" >
	<form action="" method="POST">
       <b>NAME</b><input type="text" name="name" id="name" value="" placeholder="Enter the name" /><br><br>
       <b>PASSWORD</b><input type="password" name="password" id="password" value="" placeholder="Enter the password"/><br><br>
        <button type="submit" class= "btn btn-primary" name="submit">SUBMIT</button>
    </form>
    </div>
    </div>
    
</body>
</html>

<?php

if ( isset( $_POST['submit'] ) ) {


$name = strip_tags($_POST["name"]);
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

$stmt = $conn->prepare("SELECT * FROM ADMIN WHERE name=?");
$stmt->execute([$name]); //[$username]
$result = $stmt->fetchAll();


foreach ($result as $r) {
if($name == $r["name"] && $password == $r["password"])
 {
	echo 'You are successfully logged in.' ;
}
else {
	echo 'Invalid Username and Password';
}
}





}


?>



