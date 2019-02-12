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
	echo "<tr><th>Codigo</th><th>Nombre</th></tr>";
	$sql="SELECT code, name FROM category order by name asc"; 
	$rs = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($rs)){
		echo "<tr>";
			echo "<td>".$row['code']."</td>";
			echo "<td>".$row['name']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close($con);
	?>
</body>
</html>