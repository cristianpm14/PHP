<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>form</title>
</head>
<body>
<?php
if (isset($_REQUEST["error"])) {
    echo "Contraseña incorrecta";
}
?>
<form action="ejer-33a.php" method="POST">
    Password: <input type="password" name="password" /><br/><br/>
    <input type="submit"/>
</form>
</body>
</html>