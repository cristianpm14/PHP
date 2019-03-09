<html>
<head> <title>Cookie</title> </head>
<body>
<?php
if (isset($_COOKIE['nom']))
    echo "Bienvenido " . $_COOKIE['nom'];
?>

<form action="ejer-29a.php" method="post">
    Inserta un nombre: <input type="text"  name="name"><br>
    <input type="submit" value="cookie">
</form>
</body>
</html>