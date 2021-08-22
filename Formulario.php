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

	<form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>" method="post" target="_self" id="formulario">
		<label for="username">Nombre de usuario:</label><br>
		<input type="text" id="usuario" name="usuario"><br>


		<label for="mail">Correo electrónico:</label><br>
		<input type="text" id="mail" name="mail"><br>

		<label for="desplegable">Escoge una opción:</label><br>
			<select id="desplegable" name="desplegable"><br>
				<option value="Seleccionar"></option>
				<option value="Duda">duda</option>
				<option value="Feedback">feedback</option>
				<option value="Queja">queja</option>
				<option value="Otros">otros</option>
			</select><br>

		<textarea name="comentario" placeholder="Deja aquí tu comentario" rows="10" cols="35"></textarea><br>

		<input type="submit" class="botón"><br>
	</form>
 <?

	//checkea formatado del texto introducido
function check_input($data){
	$data = trim($data); //elimina espacios en blanco
	$data = stripslashes($data); //devuelve string con barras invertidas retiradas. 
	$data = htmlspecialchars($data);
	if(strlen($data)==0){
		echo '<div class="error">parece que te has dejado algo en blanco</div>' . "<br>";
	}
}
	?>

	<?
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$nombre = check_input($_POST['usuario']);
	$correo =  check_input($_POST['mail']);
	$desplegable= check_input($_POST['desplegable']);
	$comentario= check_input($_POST['comentario']);
}

//echo "Tu nombre de usuario es " . $nombre . "<br>";
//echo "Tu correo es " . $correo . "<br>";
//echo "Tu comentario está relacionado con " . $desplegable . "<br>";
//echo "Tu comentario es " . $comentario . "<br>";

//if ($problem && strlen($data)==0){
			//$data="Parece que te has dejado un espacio necesario en blanco, rellena todo por favor";
	//}return $data;}

?>
</body>
</html>
