<html>
<head></head>
<body>
<?php
$con=mysqli_connect("localhost","cristian","258456","shop");
$sql="SELECT * from category";
$rs=mysqli_query($con,$sql);
while($row=mysqli_fetch_array($rs)){
    $nom=$row['name'];
    if(isset($_REQUEST[$nom])){
        echo "Has elegido ".$row['name']."<br/>";
        $sql1="DELETE FROM article WHERE categorycode=".$row['code'];
        echo $sql1."<br/>";
        mysqli_query($con, $sql1);

        $sql2="DELETE FROM category WHERE code=".$row['code'];
        echo $sql2."<br/>";
        mysqli_query($con, $sql2);
    }
}
mysqli_close($con);
?>
</body>
</html>