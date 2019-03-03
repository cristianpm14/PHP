<?php
$con=mysqli_connect("localhost","cristian","258456","base1");
$id = $_REQUEST["btm"];
$sql="SELECT * from cursos";
$rs=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($rs)){
$sql1= 'update cursos set nombrecurso="'.$row['nombrecurso'].'2018" where codigo='.$row['codigo'];
mysqli_query($con,$sql1);
echo $sql1;
}
mysqli_close($con);
?>