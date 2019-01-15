<html>
<head></head>
<body>
 <?php
	for ($i=1;$i<=10;$i++)
	{
		$re = $i * 2;
		echo "2 x ".$i." = ".$re;
		echo "<br>";
	}
 ?>
 <br>
 <?php
	$a=1;
	while ($a<=10)
	{
		$r = $a * 2;
		echo "2 x ".$a." = ".$r;
		$a++;
		echo "<br>";
	}
 ?>
 <br>
 <?php
	$e=1;
	do
	{
		$r = $e * 2;
		echo "2 x ".$e." = ".$r;
		$e++;
		echo "<br>";
	}
	while ($e<10);
 ?>
</body>
</html>