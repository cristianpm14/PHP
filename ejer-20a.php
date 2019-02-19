<html>
<head></head>
<body>

<?php
$con=mysqli_connect("localhost","cristian","258456","base1");
$id = $_REQUEST["curso"];

$sql="SELECT nombrecurso from cursos where nombrecurso='".$id."'";
$rs=mysqli_query($con,$sql);

if (mysqli_num_rows($rs)==0) {
	echo "El nombre del curso no existe.";
} 
else {
	mysqli_query($con,"delete from cursos where nombrecurso='".$id."'");
	echo "Curso Eliminado.";
}
mysqli_close($con);
?>

</body>
</html>