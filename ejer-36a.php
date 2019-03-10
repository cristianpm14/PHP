<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
</head>
<body>
<?php
$fileName = date("Y-m-d_H-i-s").".txt";
$f=fopen($fileName, "a") or die("File error");
fputs($f, $_REQUEST['user']);
fputs($f, "\n");
fputs($f, $_REQUEST['desc']);
fclose($f);
echo "Click <a href='archi36a.php?fileName=" . $fileName . "'>aqui</a> ver el archivo.";
?>
</body>
</html>