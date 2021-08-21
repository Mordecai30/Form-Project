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


	//funciones para analizar datos
	function test_input($data){
		$data=trim($data);
		$data=stripslashes($data);
		return $data;
	}

	if ($_SERVER["REQUEST_METHOD"]=="POST"){
		if (empty($_POST["usuario"])){
			$nomErr= "Es necesario que pongas un nombre de usuario";
		}
	else{
		$name=test_input($_POST["usuario"]);
	}
		if (empty($_POST["correo"])){
			$corErr= "Es necesario que pongas un correo electrónico";
		
	}else{
		$correo=test_input($_POST["mail"]);
	}
	if (empty($_POST["desplegable"])){
			$despErr= "Este campo es obligatorio";
		
	}else{
		$desplegable=test_input($_POST["desplegable"]);
	}
	if (empty($_POST["comentario"])){
			$comentErr= "Es necesario que rellenes este campo";
		
	}else{
		$comentario=test_input($_POST["comentario"]);
	}
}



	if ($_SERVER["REQUEST_METHOD"]=="POST"){
		$nombre=test_input($_POST["usuario"]);
		$correo=test_input($_POST["mail"]);
		$desplegable=test_input($_POST["desplegable"]);
		$comentario=test_input($_POST["comentario"]);
	}



?>
	<p>Hola! </p><p class="respuesta"><?php echo $_POST["usuario"]; ?></p><br>

	<p>Tu correo electrónico es: </p><p class="respuesta"><?php echo $_POST["mail"]; ?></p> <br>

	<p>Has querido hacer un comentario a modo de: </p><span class="respuesta"><?php echo $_POST["desplegable"];?></span> <br>

	<p>Y el comentario que has hecho ha sido:</p> <p class="respuesta"><?php echo $_POST["comentario"];?></p>

</body>
</html