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
	$con=mysqli_connect("localhost","cristian","258456","base1"); 
	echo "<table border='1'>";
	echo "<tr><th>Codigo</th><th>Nombre</th></tr>";
	$sql="SELECT codigo, nombrecurso FROM cursos"; 
	$rs = mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($rs)){
		echo "<tr>";
			echo "<td>".$row['codigo']."</td>";
			echo "<td>".$row['nombrecurso']."</td>";
		echo "</tr>";
	}
	echo "</table>";
	mysqli_close($con);
	?>
</body>
</html>