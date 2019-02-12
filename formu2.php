<!DOCTYPE html>
<html>
<head>
<h2>Formulario</h2>
</head>
<body>
	<h1>SELECT</h1>
	<p>selecciona curso para ver los alumnos.</p>
	<form method="request" action="ejer-19c2.php">
	<?php
		$con=mysqli_connect("localhost","cristian","258456","shop"); 
		$sql="SELECT * FROM category order by name asc";
		$rs=mysqli_query($con,$sql);
	?>
	<select name="categoria">
	<?php
		while($row=mysqli_fetch_array($rs)){
			echo "<option value='".$row['code']."'>".$row['name']."</option>";
		}
	?>
	</select>
	<input type="submit">
	</form>
</body>
</html>