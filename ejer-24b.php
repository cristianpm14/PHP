<html>
<head></head>
<body>
<h1>Informacion de cursos</h1>
<?php
$con=mysqli_connect("localhost","cristian","258456","base1");
$sql="SELECT count(codigo) from alumnos";
$sql1="select * from alumnos";
$rs=mysqli_query($con,$sql);
$row1=mysqli_fetch_array($rs);
echo "<p>Numero de alumnos: ".$row1["0"]."</p>";
$rs1=mysqli_query($con,$sql1);
while ($row=mysqli_fetch_array($rs1)){
    echo "<p>Nombre: ".$row["nombre"]."</p>";
    echo "<p>Mail: ".$row["mail"]."</p>";
    echo "<br>";
}
?>
</body>
</html>