<?php
session_start();

$name=$_POST['hidden_name'];
$price=$_POST['hidden_price'];
$quantity=$_POST['quantity'];
if (!$quantity){
	echo "<h1>Enter valid quantity</h1>";
	echo "<button type='submit' class='btn btn-primary'><a href='main.php'>BACK TO HOME</a></button>";
}
else{
$product=array( $name, $price, $quantity);
// print_r($product);
$_SESSION[$name]=$product;
header('location:front.php');
}
?>