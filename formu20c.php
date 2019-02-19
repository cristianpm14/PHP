<html>
<head></head>
<body>
<h1>Eliminar categorias de base1</h1>
<?php
$con=mysqli_connect("localhost","cristian","258456","shop");
$sql="SELECT * from category";
$rs=mysqli_query($con,$sql);
?>
<form action="ejer-20c.php" method="post">
    <?php
        while($row=mysqli_fetch_array($rs)){
            echo "<input type='checkbox' name='".$row['name']."' value='".$row['code']."'>".$row['name']."</input>";
        }
    ?>
    <input type="submit">
</body>
</html>