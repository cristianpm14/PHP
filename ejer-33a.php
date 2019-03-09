<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>header</title>
</head>
<body>
<?php
if ($_REQUEST["password"] === "1234") {
    echo "Bienvenido!";
} else {
    header("Location: formu33a.php?error=1");
}
?>
</body>
</html>