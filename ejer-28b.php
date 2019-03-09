<html>
<head> <title>Agregar articulo</title> </head>
<body>
<h1>Agregar articulo</h1>
<form action="upload-28b.php" method="post" enctype="multipart/form-data">
    Nombre del articulo: <input type="text" name="nom"><br>
    Descripcion del articulo: <input type="text" name="des"><br>
    Precio: <input type="double" name="pre"><br>
    Bargain: <input type="text" name="bar"><br>
    Categoria: <select name="cate">
        <?php
        $con=mysqli_connect("localhost","cristian","258456","shop");
        $sql="select * from category";
        $rs=mysqli_query($con,$sql);
        while ($row=mysqli_fetch_array($rs)) {
            echo "<option value=\"$row[code]\">$row[name]</option>";
        }
        ?>
        </select><br>
    Selecciona archivo: <input type="file" name="foto"><br>
    <input type="submit" value="Upload">
</form>
</body>
</html>
