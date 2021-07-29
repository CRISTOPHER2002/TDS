<!DOCTYPE HTML>
<html lang="es">
	<head>
		<meta charset="utf-8" />
		<title>Formulario en php de operaciones matematicas</title>
	</head>
	<body>
<!--                POST.- envia información mediante la url pero confidecial 
                GET.- eniva la información mediante url pero visible-->
		<h1>Formulario en php de operaciones matematicas</h1>
		<form method="POST" action="recibir.php">
			<p>
				<label for="ingrese primer numero">Numero1</label>
				<input type="text" name="Numero1" />
			</p>
			
			<p>
				<label for="ingrese segundo numero">Numero2</label>
				<input type="text" name="Numero2" />
			</p>
			
			<input type="submit" value="suma"/>
		</form>
	</body>
</html>

