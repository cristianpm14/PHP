<html>
<head></head>
<body>
<?php
function contra()
{
	if ($_REQUEST["pass"]===$_REQUEST["pass2"])
	{
		echo "Las contraseñas son iguales";
	}
	else
	{
		echo "Las contraseñas no son iguales";
	}
}
contra();
?>
</body>
</html> 