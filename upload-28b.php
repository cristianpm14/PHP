<?php
$con=mysqli_connect("localhost","cristian","258456","shop");
$nombre=$_REQUEST["nom"];
$descrip=$_REQUEST["des"];
$precio=$_REQUEST["pre"];
$bargain=$_REQUEST["bar"];
$cate=$_REQUEST["cate"];
$sql="insert into article (name,description,price,categorycode,bargain) values ('$nombre','$descrip','$precio','$cate','$bargain')";
echo "Se agrego el articulo";
echo "<br>";
if ($con->query($sql) === TRUE){
    $last_id = $con->insert_id;
    echo "Articulo añadido";
    echo "<br>";
    copy($_FILES['foto']['tmp_name'],$_FILES['foto']['name']);
    echo "Archivo añadido";
    echo "<br>";
    $name=$_FILES['foto']['name'];
    echo "<img src=\"$name\">";
    echo "<br>";

    $file_name="Foto".$last_id;
    move_uploaded_file($_FILES["foto"]["tmp_name"], "F:/wamp64/www/Ejercicios/{$file_name}.png");
    echo $file_name;
}
else {
    echo "Error: ".$sql."<br>".$con->error;
}
?>