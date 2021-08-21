<html>
<head>
<link rel="stylesheet" href="StyleSheet.css">
</head>
<html>
<body>

	<?php

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
	<p>Hola! </p><p class="respuesta"><?php echo $_POST["usuario"]; ?></p><br>

	<p>Tu correo electrónico es: </p><p class="respuesta"><?php echo $_POST["mail"]; ?></p> <br>

	<p>Has querido hacer un comentario a modo de: </p><span class="respuesta"><?php echo $_POST["desplegable"];?></span> <br>

	<p>Y el comentario es:</p> <p class="respuesta"><?php echo $_POST["comentario"];?></p>

</body>
</html