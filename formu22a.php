<html>
<body>
<h1>Agregar alumno</h1>
    <?php
    $con=mysqli_connect("localhost","cristian","258456","base1");
    $sql="SELECT * from cursos";
    $rs=mysqli_query($con,$sql);
    ?>
    <form action="ejer-22a.php" method="post">
        <?php
        while($row=mysqli_fetch_array($rs)){
            echo "<input name='curs' type='radio' nombrecurso='".$row['nombrecurso']."' value='".$row['codigo']."'>".$row['nombrecurso']."</input>"."<br>";
        }
        ?>
    Nombre del alumno: <input type="text" name="alum"><br>
    Correo: <input type="text" name="correo"><br>
    <input type="submit" name="btm">
</form>
</body>
</html>