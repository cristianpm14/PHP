<?php
$con=mysqli_connect("localhost","cristian","258456","shop");
$codigo=$_REQUEST["code"];
$sql="SELECT article.name, description, price, bargain from article inner join category on article.categorycode=category.code where category.code='".$codigo."'";
$rs=mysqli_query($con,$sql);
while ($row=mysqli_fetch_array($rs)){
    echo "Nombre: ".$row["name"]."<br>";
    echo "Descripcion: ".$row["description"]."<br>";
    echo "Precio: ".$row["price"]."<br>";
    echo "Bargain: ".$row["bargain"]."<br>";
    echo "<br>";
}
?>