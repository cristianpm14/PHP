<?php
$con=mysqli_connect("localhost","cristian","258456","shop");
$nombre=$_REQUEST["nom"];
$cod=$_REQUEST["articulo"];
$descri=$_REQUEST["des"];
$pre=$_REQUEST["precio"];
$bargain=$_REQUEST["barga"];
$sql="insert into article (name,description,price,categorycode,bargain) values ('".$nombre."','".$descri."','".$pre."','".$cod."','".$bargain."')";
mysqli_query($con,$sql);
echo $sql;
mysqli_close($con);
?>