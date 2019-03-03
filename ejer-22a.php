<?php
$con=mysqli_connect("localhost","cristian","258456","base1");
$alumno=$_REQUEST["alum"];
$clase=$_REQUEST["curs"];
$corre=$_REQUEST["correo"];
$sql="insert into alumnos (nombre,mail,codigocurso) values ('".$alumno."','".$corre."','".$clase."')";
mysqli_query($con,$sql);
echo $sql;
mysqli_close($con);
?>