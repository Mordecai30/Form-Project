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

	<?php //variables error
$nombrErr = $corrErr = ""; 

$nombre = $correo = "" ; ?>

	<form action="<?php echo htmlspecialchars ($_SERVER["PHP_SELF"]);?>" method="post">

		<span class="error">* <?php echo $nombrErr;?></span>
		<label for="username">Nombre de usuario:</label><br>
		<input type="text" id="usuario" name="usuario"><br>
		

		<span class="error">* <?php echo $nombrErr;?></span>
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
}




//detector de problemas

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["usuario"])) {
               //$nombrErr = "El nombre es necesario";
            	echo "<span style=color:red>el nombre es necesario</span>";
            }else {
               $nombre = check_input($_POST["usuario"]);
            }
            
            if (empty($_POST["mail"])) {
               //$corrErr = "Email is required";
            	echo "<br> <span style=color:red> el correo es necesario</span>";
            }else {
            	if (filter_var($correo, FILTER_VALIDATE_EMAIL)) { 
               	  echo "El correo no es válido";
               }
            }

         }
	?>

	<?

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
