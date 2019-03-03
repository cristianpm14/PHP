<?php
$con=mysqli_connect("localhost","cristian","258456","base1");
$codigo=$_REQUEST["code"];
$sql="SELECT * from alumnos inner join cursos on alumnos.codigocurso=cursos.codigo where alumnos.codigo='".$codigo."'";
$rs=mysqli_query($con,$sql);
if ($row=mysqli_fetch_array($rs)) {
    echo "Nombre: ".$row['nombre']."<br>";
    echo "Email: ".$row['mail']."<br>";
    echo "Curso: ".$row['nombrecurso']."<br>";
}else {
    echo "This student code doesn't exist!";
}
?>

