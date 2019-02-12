<!DOCTYPE html>
<html>
<head>
<h2>Select</h2>
</head>
<body>
	<h1>Articulos de la categoria</h1>
	<?php
	$con=mysqli_connect("localhost","cristian","258456","shop"); 
	$codi=$_REQUEST['categoria'];
	$sql="select * from article where categorycode=".$codi;
	$rs=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($rs)){
		echo "<p>".$row['name']."</p>";
		echo "<p>".$row['description']."</p>";
		echo "<p>".$row['price']." €"."</p>";
	}
	mysqli_close($con);
	?>
</body>
</html>