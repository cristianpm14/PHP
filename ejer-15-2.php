<html>
<head></head>
<body>
<?php
$usuario = array (
			array('cristian','123456'),
			array('sergio','1234'),
			array('ruben','12345'),
			array('alex','1234')
			);
			
			$correcto = false;
			
			for($f=0; $f<count($usuario); $f++){
				$nombre = $usuario[$f][0];
				$password = $usuario[$f][1];
				if ($nombre==$_REQUEST["name"] && $password==$_REQUEST["pass"]){
					echo "Usuario y contraseña correcta!."; 
					$correcto=true;
					break;
				}
			}
			
			if(!$correcto) { 
					echo "No esta correcto."; 
			}
?>
</body>
</html> 