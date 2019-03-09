<?php
if (isset($_REQUEST['pos']))
    $pri=$_REQUEST['pos'];
else $pri=0;
?>
<html>
<head></head>
<body>
<?php
$con=mysqli_connect("localhost","cristian","258456","base1");
$sql="select * from cursos limit $pri,3";
$rs=mysqli_query($con,$sql);
$print=0;
while ($row=mysqli_fetch_array($rs)){
    $print++;
    echo "Codigo: ".$row['codigo']."<br>";
    echo "Nombre: ".$row['nombrecurso']."<br>";
    echo "<hr>";
}
mysqli_close($con);
if ($pri==0)
    echo "Anterior";
else{
    $ante=$pri-3;
    echo "<a href=\"ejer-27a.php?pos=$ante\">Anterior </a>";
}
echo "<br>";
if ($print==3){
    $sigui=$pri+3;
    echo "<a href=\"ejer-27a.php?pos=$sigui\">Siguiente</a>";
}
else
    echo "Siguiente";
?>
</body>
</html>
