<?php
if (isset($_COOKIE['cookie'])) {
    setcookie("cookie", "poli", time() - 3600);
    setcookie("cookie", "eco", time() - 3600);
    setcookie("cookie", "depo", time() - 3600);
    setcookie("cookie", "todo", time() - 3600);
    echo "Cookie Borrada"."<br>";
}
if ($_REQUEST['cookie']=="poli"){
    setcookie("cookie","poli",time()+(60*60*24*365),"/");
    echo "Cookie Politicas Creada";
}
elseif ($_REQUEST['cookie']=="eco"){
    setcookie("cookie","eco",time()+(60*60*24*365),"/");
    echo "Cookie Economicas Creada";
}
elseif ($_REQUEST['cookie']=="depo") {
    setcookie("cookie", "depo", time() + (60 * 60 * 24 * 365), "/");
    echo "Cookie deportes Creada";
}
elseif ($_REQUEST['cookie']=="todo") {
    setcookie("cookie", "todo", time() + (60 * 60 * 24 * 365), "/");
    echo "Cookie TODO Creada";
}
?>

<html>
<head> <title>Pagina cookie</title> </head>
<body>

<br>
<a href="formu30a.php">Volver</a>
</body>
</html>