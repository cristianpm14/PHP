<html>
<head></head>
<body>
<?php
$con=mysqli_connect("localhost","cristian","258456","base1");
$id = $_REQUEST["btm"];

$sql="SELECT * from cursos";
$rs=mysqli_query($con,$sql);

if (mysqli_num_rows($rs)==0) {
    echo "No existe.";
}
else {
    mysqli_query($con,"delete from cursos");
    echo "Eliminado.";
}
mysqli_close($con);
?>
</body>
</html>
