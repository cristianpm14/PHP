<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
	$con=mysqli_connect("localhost","cristian","258456","base1");  
	if (mysqli_connect_errno($con))  {  
		echo "Failed to connect to MySQL: ".mysqli_connect_error();  
	}
	else {
		echo "<p>OK: Connected to the Database.</p>";
	}
	$nombre = $_REQUEST['nombre'];
	$sql="INSERT INTO cursos (nombrecurso) values ('$nombre')";
	if (mysqli_query($con,$sql))  {  
		echo "Inserted row successfully";  
	} else  {  
		echo "Error inserting row: " . mysqli_error($con);  
	} 
	mysqli_close($con);
	?>
</body>
</html>