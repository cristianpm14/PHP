<?php
if (isset($_REQUEST['pos']))
    $pri=$_REQUEST['pos'];
else $pri=0;
?>
<html>
<head></head>
<body>
<?php
$con=mysqli_connect("localhost","cristian","258456","shop");
$sql="select * from article limit $pri,5";
$rs=mysqli_query($con,$sql);
$print=0;
while ($row=mysqli_fetch_array($rs)){
    $print++;
    echo "Codigo: ".$row['code']."<br>";
    echo "Nombre: ".$row['name']."<br>";
    echo "descripcion: ".$row['description']."<br>";
    echo "Precio: ".$row['price']."<br>";
    echo "<hr>";
}
mysqli_close($con);
if ($pri==0)
    echo "Anterior";
else{
    $ante=$pri-5;
    echo "<a href=\"ejer-27b.php?pos=$ante\">Anterior </a>";
}
echo "<br>";
if ($print==5){
    $sigui=$pri+5;
    echo "<a href=\"ejer-27b.php?pos=$sigui\">Siguiente</a>";
}
else
    echo "Siguiente";
?>
</body>
</html>
