<!DOCTYPE html>
<html>
<body>
<?php
	$count=0;
		echo "Nombre: ".$name=$_REQUEST['fname'];
		echo "<br>";
		echo "<br>";
		echo "deportes seleccionados:<br>";
		if (isset($_REQUEST['check1'])) {
			echo "-futbol";
			echo "<br>";
			$count++;
		};
		if (isset($_REQUEST['check2'])) {
			echo "-tennis";
			echo "<br>";
			$count++;
		};
		if (isset($_REQUEST['check3'])) {
			echo "-baloncesto";
			echo "<br>";
			$count++;
		};
		if (isset($_REQUEST['check4'])) {
			echo "-Golf";
			echo "<br>";
			$count++;
		};
		echo "<br>";
		echo "Numeros de deportes: ".$count;
?>
</body>
</html>