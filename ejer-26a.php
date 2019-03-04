<html>
<head></head>
<body>
<h1>Ver cursos en las URLs</h1>
<?php
$con=mysqli_connect("localhost","cristian","258456","base1");
$sql="select * from cursos";
$rs=mysqli_query($con,$sql);
while ($row=mysqli_fetch_array($rs)){
    echo "<a href=page26a.php?num=".$row['codigo'].">".$row['nombrecurso']."</a>";
    echo "<br>";
}
?>
</body>
</html>