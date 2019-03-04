<html>
<head></head>
<body>
<h1>Ver cursos en las URLs</h1>
<?php
$con=mysqli_connect("localhost","cristian","258456","shop");
$sql="select * from category";
$rs=mysqli_query($con,$sql);
while ($row=mysqli_fetch_array($rs)){
    echo "<a href=page26b.php?num=".$row['code'].">".$row['name']."</a>";
    echo "<br>";
}
?>
</body>
</html>