<html>
<head>
<link rel="stylesheet" href="StyleSheet.css">
</head>
<html>
<body>

<?
	//variables formulario
	 if 
	$nombre = check_input($_POST['usuario'],"Tu nombre");
	$correo = check_input($_POST['mail'],"Tu correo");
	$desplegable= check_input($_POST['desplegable']);
	$comentario= check_input($_POST['comentario']);

	//variables de error
	$nomErr = " ";
	$corErr = " ";
	$despErr= " ";
	$comentErr=" ";

	//checkea formatado del texto introducido
	function check_input($data, $problem=''){
		$data = trim($data); //elimina espacios en blanco
		$data = stripslashes($data); //devuelve string con barras invertidas retiradas. 
		$data = htmlspecialchars($data);
		if ($problem && strlen($data)==0){
			$data="Parece que te has dejado un espacio necesario en blanco, rellena todo por favor";
		}
		return $data;
	}
	?>
	<p>Hola! </p><p class="respuesta"><?php echo $nombre; ?></p><br>

	<p>Tu correo electrónico es: </p><p class="respuesta"><?php echo $correo; ?></p> <br>

	<p>Has querido hacer un comentario a modo de: </p><span class="respuesta"><?php echo $desplegable;?></span> <br>

	<p>Y el comentario es:</p> <p class="respuesta"><?php echo $comentario;?></p>

</body>
</html