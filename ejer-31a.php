<?php
$con=mysqli_connect("localhost","cristian","258456","base1");
$correo=$_REQUEST["user"];
$sql="SELECT * from alumnos";
$rs=mysqli_query($con,$sql);
while ($row=mysqli_fetch_array($rs)) {
    if ($row['mail']==$correo){
        $guard=$row['nombre'];
        session_start();
        $_SESSION['user']=$guard;
        echo "Sesion creada";
        echo "<br>";
    }
}
mysqli_close($con);
?>
<html>
<head> <title>Sesion</title> </head>
<body>
<a href="sesion31a.php">Ir a la siguiente pagina</a>
</body>
</html>