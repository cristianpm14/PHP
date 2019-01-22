<html>
<meta charset="utf-8">
<body>
	<?php
		echo "Nombre: ".$name=$_REQUEST['fname'];
		echo "<br>";
		echo "Salario:<br>";
		if ($_REQUEST['sala']=="1k") {
			echo "Entre 1€ y 1000€";
		}
		elseif ($_REQUEST['sala']=="2k") {
			echo "Entre 1001€ y 3000€";
		}
		else {
			echo "Mas de 3000€<br>";
			echo "Debes pagar impuesto cobras mas de 3000€";
		}
	?>
</body>
</html>