<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
</head>
<body>
<?php
if (checkdate($_REQUEST["month"], $_REQUEST["day"], $_REQUEST["year"])) {
    echo "La fecha es valida.";
} else {
    echo "La fecah no es valida.";
}
?>
</body>
</html>