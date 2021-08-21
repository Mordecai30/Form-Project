<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="StyleSheet.css">
</head>

<title>HTML Tutorial</title>
<header>
	<h1>Formulario de ayuda</h1>
	<p>¿Tienes una duda sobre nuestros servicios?<br>¿Tienes interés en ayudarnos a mejorar nuestros productos?<br>Ponte en contacto con nosotros a través de este formulario y nosotros nos encargamos del resto.
</header>
<body>
	<?
	//variables formulario
	$nombre = "";
	$correo = "";
	$desplegable= "";
	$comentario="";

	//variables de error
	$nomErr = " ";
	$corErr = " ";
	$despErr= " ";
	$comentErr=" ";
	?>

	<form action="/Formulario1/formularios.php" method="post">
		<label for="username">Nombre de usuario:</label>
		<input type="text" id="usuario" name="usuario"><br>


		<label for="mail">Correo electrónico:</label><br>
		<input type="text" id="mail" name="mail"><br>

		<label for="desplegable">Escoge una opción:</label><br>
			<select id="desplegable" name="desplegable"><br>
				<option value="Duda">Duda</option>
				<option value="Feedback">Feedback</option>
				<option value="Queja">Queja</option>
				<option value="Otros">Otros</option>
			</select><br>

		<textarea name="comentario" placeholder="Deja aquí tu comentario" rows="10" cols="35"></textarea><br>

		<input type="submit" class="botón"><br>
	</form>
</body>
</html>
