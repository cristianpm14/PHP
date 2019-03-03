<?php

$con=mysqli_connect("localhost","cristian","258456","shop");
$id = $_REQUEST["btm"];
$sql="SELECT * from article";
$rs=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($rs)){
$sql1= 'update article set price='.$row['price']*"0.5".' where bargain=1';
mysqli_query($con,$sql1);
echo $sql1;
}
mysqli_close($con);
?>