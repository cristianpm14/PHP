<html>
<head></head>
<body>
<h1>Informacion de cursos</h1>
<?php
$con=mysqli_connect("localhost","cristian","258456","base1");
$sql="SELECT count(nombrecurso) from cursos";
$sql1="select nombrecurso from cursos";
$rs=mysqli_query($con,$sql);
$row1=mysqli_fetch_array($rs);
echo "<p>Numero de cursos: ".$row1["0"]."</p>";
$rs1=mysqli_query($con,$sql1);
while ($row=mysqli_fetch_array($rs1)){
    echo "<p>Nombre curso: ".$row["nombrecurso"]."</p>";
}
?>
</body>
</html>