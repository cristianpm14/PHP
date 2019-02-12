<!DOCTYPE html>
<html>
<head>
	<style>
		* {
			margin-left:20px;
		}
	</style>
</head>
<body>
	<h1>SELECT</h1>
	<?php
	$con=mysqli_connect("localhost","cristian","258456","shop"); 
	echo "<table border='1'>";
	echo "<tr><th>Codigo</th><th>Nombre</th><th>descripcion</th><th>price</th><th>categorycode</th><th>bargain</th></tr>";
	$sql="SELECT code, name, description, price, categorycode, bargain FROM article order by price desc"; 
	$rs = mysqli_query($con,$sql);
	$i=1;
	while($row=mysqli_fetch_array($rs)){
		if($row['bargain']==1) {
			echo "<tr style='background-color:red'>";
		}
		else {
		echo "<tr>";
		}
			echo "<td>".$row['code']."</td>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['description']."</td>";
			echo "<td>".$row['price']."</td>";
			echo "<td>".$row['categorycode']."</td>";
			echo "<td>".$row['bargain']."</td>";
		echo "</tr>";
		$i++;
	}
	echo "</table>";
	mysqli_close($con);
	?>
</body>
</html>