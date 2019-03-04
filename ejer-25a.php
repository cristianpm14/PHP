<html>
<head></head>
<body>
<h1>Informacion de cursos</h1>
<?php
$con=mysqli_connect("localhost","cristian","258456","base1");
$sql="select count(alu.codigo) as cantidad, nombrecurso,group_concat(nombre) as nom from alumnos as alu inner join cursos as cur on cur.codigo=alu.codigocurso group by alu.codigocurso";
$rs=mysqli_query($con,$sql);
while ($row=mysqli_fetch_array($rs)){
    echo "<p>Nombre curso: ".$row["nombrecurso"]."</p>";
    echo "<p>Numero de estudiantes: ".$row["cantidad"]."</p>";
    echo "<p>Estudiantes: ".$row["nom"]."</p>";
    echo "<hr>";
}
?>
</body>
</html>