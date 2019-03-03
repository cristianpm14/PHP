<html>
<body>
<h1>Agregar articulos</h1>
<?php
$con=mysqli_connect("localhost","cristian","258456","shop");
$sql="SELECT * from category";
$rs=mysqli_query($con,$sql);
?>
<form action="ejer-22b.php" method="post">
    <select name="articulo">
        <?php
        while($row=mysqli_fetch_array($rs)){
            echo "<option value='".$row['code']."'>".$row['name']."</option>";
        }
        ?>
    </select><br>
    Escribe articulo nuevo: <input type="text" name="nom"><br>
    Escribe descripcion: <input type="text" name="des"><br>
    Escribe precio: <input type="text" name="precio"><br>
    Escribe bargain: <input type="text" name="barga"><br>
    <input type="submit">
</body>
</html>