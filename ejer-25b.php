<html>
<head></head>
<body>
<h1>Informacion de categorias</h1>
<?php
$con=mysqli_connect("localhost","cristian","258456","shop");
$sql="select  count(art.code) as cantidad, car.NAME as namec, group_concat(art.name, ' - ' ,price, '€' separator ' / ' ) as articu from article as art inner join category as car on car.CODE=art.CATEGORYCODE group by car.code";
$rs=mysqli_query($con,$sql);
while ($row=mysqli_fetch_array($rs)){
    echo "<p>Nombre categoria: ".$row["namec"]."</p>";
    echo "<p>Numero de articulos: ".$row["cantidad"]."</p>";
    echo "<p>Articulos: ".$row["articu"]."</p>";
    echo "<hr>";
}
?>
</body>
</html>