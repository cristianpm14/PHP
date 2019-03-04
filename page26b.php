<html>
<head></head>
<body>
<?php
$cate = $_REQUEST["num"];
echo "<h1>Articulos del codigo $cate</h1>";
$con=mysqli_connect("localhost","cristian","258456","shop");
$sql="select group_concat(article.name separator ', ') as nombre from article inner join category on category.code=article.categorycode where categorycode='".$cate."'";
$rs=mysqli_query($con,$sql);
while ($row=mysqli_fetch_array($rs)){
    echo "<p>Articulos de la categoria: ".$row['nombre']."</p>";
}
?>
</body>
</html>