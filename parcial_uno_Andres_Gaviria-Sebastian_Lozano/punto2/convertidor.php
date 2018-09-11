<!DOCTYPE html>
<html>
	<head>
		<title>Parcial</title>
	</head>
	<body>
		<h1>Convertidor</h1>
		<form action="operaciones.php" method="post">
			Ingrese valor: <br>
			<input type="text" name="n1"><br>
			
			<select name="dato1">
				<option value="terabyte">Terabyte</option>
				<option value="gigabyte">Gigabyte</option>
				<option value="megabyte">Megabyte</option>
				<option value="kilobyte">Kilobyte</option>
				<option value="byte">Byte</option>
				<option value="bit">Bit</option>
			</select><br>
			Convertir a: <br>
			<select name="dato2">
				<option value="terabyte">Terabyte</option>
				<option value="gigabyte">Gigabyte</option>
				<option value="megabyte">Megabyte</option>
				<option value="kilobyte">Kilobyte</option>
				<option value="byte">Byte</option>
				<option value="bit">Bit</option>
			</select><br>
			<input type="submit" value="Enviar">
		</form>
	</body>
</html>