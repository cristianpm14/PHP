<html>
<head></head>
<body>
<h1>Modificar</h1>
<?php
$con=mysqli_connect("localhost","cristian","258456","base1");
$sql="SELECT * from cursos";
$rs=mysqli_query($con,$sql);
?>
<form action="ejer-21a.php" method="post">
    <select name="curs">
    <?php
    while($row=mysqli_fetch_array($rs)){
        echo "<option value='".$row['codigo']."'>".$row['nombrecurso']."</option>";
    }
    ?>
    </select><br>
   Escribe nombre nuevo: <br><input type="text" name="nom">
    <input type="submit">
</body>
</html>