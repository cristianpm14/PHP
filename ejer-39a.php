<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
if (!isset($_REQUEST["user"]) ||
    !isset($_REQUEST["email"]) ||
    !isset($_REQUEST["salary"])) {
    ?>
    <form action="ejer-39a.php" method="POST">
        User name: <input type="text" name="user"/><br/>
        E-mail: <input type="email" name="email"/><br/>
        Salary: <input type="number" name="salary"/><br/><br/>
        <input type="submit" value="Send"/>
    </form>
    <?php
} else {
    echo "User: " . $_REQUEST["user"] . "<br/>";
    echo "E-mail: " . $_REQUEST["email"] . "<br/>";
    printf("Salary is %08d euros.", $_REQUEST["salary"]);
}
?>
</body>
</html>