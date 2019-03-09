<?php session_start(); ?>
<html>
<head> <title>Verificar</title> </head>
<body>
<?php
if (isset($_SESSION['user'])){
    echo "Bienvenido ".$_SESSION['user'];
}
else {
    echo "Puede ver esta pagina";
}
?>
</body>
</html>