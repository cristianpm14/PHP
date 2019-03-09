<html>
<head> <title>Page 1</title> </head>
<body>
<?php
if (isset($_COOKIE['cookie']) && $_COOKIE['cookie']=="poli")
    echo "NOTICIAS POLITICAS";
elseif (isset($_COOKIE['cookie']) && $_COOKIE['cookie']=="eco")
    echo "NOTICIAS ECONOMICAS";
elseif (isset($_COOKIE['cookie']) && $_COOKIE['cookie']=="depo")
    echo "NOTICIAS DEPORTIVAS";
elseif (isset($_COOKIE['cookie']) && $_COOKIE['cookie']=="todo") {
    echo "NOTICIAS DEPORTIVAS"."<br>";
    echo "NOTICIAS ECONOMICAS"."<br>";
    echo "NOTICIAS POLITICAS"."<br>";
}
?>

<form action="ejer-30a.php" method="post">
    <input type="radio"  name="cookie" value="poli">Politica<br>
    <input type="radio"  name="cookie" value="eco">Economia<br>
    <input type="radio"  name="cookie" value="depo">deportes<br>
    <input type="radio"  name="cookie" value="todo">todo<br>
    <input type="submit">
</form>
</body>
</html>