<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<body>
	<form action="/Formulario1/formularios.php" method="post">
		<label for="username">Nombre de usuario:</label><br>
		<input type="text" id="usuario" name="usuario"><br>

		<label for="mail">Correo electrónico:</label><br>
		<input type="text" id="mail" name="mail"><br>

		<label for="opciones">Escoge una opción:</label>
			<select id="opciones" name="opciones">
				<option value="Duda"></option>
				<option value="Feedback"></option>
				<option value="Queja"></option>
				<option value="Otros"></option>
			</select>

		<textarea name="comentario" rows="10" cols="35"> Deja aquí tu comentario</textarea>

		<input type="submit">
	</form>
</body>
</html>
