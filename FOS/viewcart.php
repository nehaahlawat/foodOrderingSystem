<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Shopping</title>
</head>
<body>
	<div class="container">
		<center>
		<h1>SHOPPING SITE</h1>
		<a href="front.php" class="btn btn-warning col-lg-2">HOME</a>
		<a href="viewcart.php" class="btn btn-warning col-lg-2">CART</a>
		</center>
		<h2 align="center">Your Cart Products</h2>
		<table class="table">
			<thead>
				<tr>
					<th>Sno</th>
					<th>Name</th>
					<th>Price</th>
					<th>Quantity</th>
					<th>Total Price</th>
					<th>Update</th>
					<th>Delete</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$bill=0;
				$sno=1;
				foreach($_SESSION as $products){
				// print_r($products);
				$p=0;
				$q=0;
				$tolal=0;
				
				echo "<tr>";
					echo "<td>".($sno++)."</td>";
					echo "<form action='editcart.php' method='POST'>";
					foreach($products as $key => $value){
					if($key==2){
					echo "<td><input type='text' name='name$key' class='form-control' value='".$value."'</td>";
					$q=$value;

				}else if($key==1){
					echo "<input type='hidden' name='name$key' value='".$value."'>";
					echo "<td>".$value."</td>";
					$p=$value;
				}else if($key==0){
					echo "<input type='hidden' name='name$key' value='".$value."'>";
					echo "<td>".$value."</td>";
				}}
			
				$bill=($q*$p);
				echo "<td>".$bill."</td>";
				echo "<td><input type='submit' name='event' value='Update' class='btn btn-warning'></td>";
				echo "<td><input type='submit' name='event' value='Delete' class='btn btn-danger'></td>";
				echo "</form>";
				echo "</tr>";
				
				$total= $total +($p*$q);
				
			
				echo "<tr>";
					
					echo "<th align="right">".$total."</th>";
				echo "</tr>";
			}
				?>
            </tbody>
        </table>
<center>
<a href="front.php" class="btn btn-primary">Continue shopping</a>
<a href="#" class="btn btn-primary">Proceed to payment</a>
</center>
</div>
</body>
</html>
