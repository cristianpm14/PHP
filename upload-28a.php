<html>
<head> <title>Cargados</title> </head>
<body>
<?php
copy($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
copy($_FILES['foto2']['tmp_name'],$_FILES['foto2']['name']);
copy($_FILES['foto3']['tmp_name'],$_FILES['foto3']['name']);
echo "Archivos cargados!.<br>";
$name=$_FILES['foto']['name'];
$name2=$_FILES['foto2']['name'];
$name3=$_FILES['foto3']['name'];
echo "<p><img src=\"$name\"></p>";
echo "<p><img src=\"$name2\"></p>";
echo "<img src=\"$name3\"></p>";
?>
</body> 
</html>