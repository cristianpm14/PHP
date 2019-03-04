<html>
<head></head>
<body>
<?php
$curso = $_REQUEST["num"];
echo "<h1>Curso del codigo $curso</h1>";
$con=mysqli_connect("localhost","cristian","258456","base1");
$sql="select group_concat(nombre separator ', ') as nombre from alumnos inner join cursos on cursos.codigo=alumnos.codigocurso where codigocurso='".$curso."'";
$rs=mysqli_query($con,$sql);
while ($row=mysqli_fetch_array($rs)){
    echo "<p>Alumnos del curso: ".$row['nombre']."</p>";
}
?>
</body>
</html>