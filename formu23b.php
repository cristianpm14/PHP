<html>
<head></head>
<body>
<h1>Informacion de articulos</h1>
<?php
$con=mysqli_connect("localhost","cristian","258456","shop");
$sql="SELECT * from category";
$rs=mysqli_query($con,$sql);
?>
<form action="ejer-23b.php" method="post">
    <select name="code">
        <?php
        while($row=mysqli_fetch_array($rs)){
            echo "<option value='".$row['code']."'>".$row['name']."</option>";
        }
        ?>
    </select><br>
    <input type="submit">
</form>
</body>
</html>