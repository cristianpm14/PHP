<html>
<head>
<style>
table {
	border-collapse: collapse;
}
table th {
	border: 1px solid black;
}
table td {
	border: 1px solid black;
}
</style>
</head>
<body>
 <?php
 $nom = "sergio";
 $edad = 25;
 $peso = 25.24;
 $cate = "medio";
 $cham = true;
 ?>
	<table>
		<tr>
			<th>Nombre</th>
			<th>Edad</th>
			<th>Peso</th>
			<th>Categoria</th>
			<th>Campeonato</th>
		</tr>
		<tr>
			<td><?php echo $nom; ?></td>
			<td><?php echo $edad; ?></td>
			<td><?php echo $peso; ?></td>
			<td><?php echo $cate; ?></td>
			<td><?php echo $cham; ?></td>
		</tr>
	</table>
</body>
</html>