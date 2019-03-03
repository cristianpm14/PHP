<html>
<head></head>
<body>
<?php
$con=mysqli_connect("localhost","cristian","258456","base1");
$codi = $_REQUEST["curs"];
$new = $_REQUEST["nom"];
$sql1="update cursos set nombrecurso = '".$new."' where codigo = '".$codi."'";
mysqli_query($con,$sql1);
echo $sql1;
mysqli_close($con);
?>
</body>
</html>