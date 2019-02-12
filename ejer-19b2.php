<!DOCTYPE html>
<html>
<head>
<h2>select</h2>
</head>
<body>
	<h1>Alumnos del curso</h1>
	<?php
	$con=mysqli_connect("localhost","cristian","258456","base1"); 
	$codi=$_REQUEST['curso'];
	if($codi==0){
		$sql="select * from alumnos";
	}
	else{
		$sql="select * from alumnos where codigocurso=".$codi;
	}
	$rs=mysqli_query($con,$sql);
	while($row=mysqli_fetch_array($rs)){
		echo "<p>".$row['nombre']."</p>";
	}
	mysqli_close($con);
	?>
</body>
</html>