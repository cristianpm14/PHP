<html>
<body>
<?php
	if ($_REQUEST["age"]>=18)
	{
		echo $_REQUEST["fname"]." es adulto.";
	}
	else
	{
		echo $_REQUEST["fname"]." no es adulto.";
	}
?>

</body>
</html> 