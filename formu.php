<!DOCTYPE html>
<html>
<head>
<h2>Formulario</h2>
</head>
<body>
	<h1>SELECT</h1>
	<p>selecciona curso para ver los alumnos.</p>
	<form method="request" action="ejer-19b2.php">
	<?php
		$con=mysqli_connect("localhost","cristian","258456","base1"); 
		$sql="SELECT * FROM cursos order by nombrecurso asc"; 
		$rs=mysqli_query($con,$sql);
	?>
	<select name="curso">
		<option value="0">All</option>
	<?php
		while($row=mysqli_fetch_array($rs)){
			echo "<option value='".$row['codigo']."'>".$row['nombrecurso']."</option>";
		}
	?>
	</select>
	<input type="submit">
	</form>
</body>
</html>