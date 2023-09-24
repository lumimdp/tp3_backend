<?php
$loginCorrecto = false; 

if(isset($_COOKIE["usNick"]) && isset($_COOKIE["usPass"]))
{

$passL = $_COOKIE["usPass"];
$pass = 123456;
	
	if($passL == $pass){
		
		$loginCorrecto = true;		
		
setcookie("usNick",$_COOKIE["usNick"],time()+3600);
setcookie("usPass",$_COOKIE["usPass"],time()+3600);
		
	} else {		
		
setcookie("usNick","x",time()-3600);
setcookie("usPass","x",time()-3600);
		
	}
	
}
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
<title>TP3</title>
<link rel="stylesheet" type="text/css" href="estilos.css">	
</head>
<body>
<main>
<?php
if($loginCorrecto)
{
	
echo "<a href='salir.php' class='button'>Salir</a>";

} else {

?>
<div>
	<?php
	if(isset($_GET["error"])){
	
	if($_GET["error"] == 2){
		
		?>
	
	<div class="div-error">
	El usuario ingresado es inexistente
	</div>
	
	<?php
	} elseif ($_GET["error"] == 3){
		
		?>
	
	<div class="div-error">
	La contraseña ingresada es incorrecta
	</div>
	
	<?php
	}
	
	}
	?>

<form method="post" action="ingresar.php">
<p>Formulario de login</p>
<p><input type="text" name="usuario" placeholder="Usuario" required></p>
<p><input type="password" name="password" placeholder="Contraseña" required></p>
<p><input type="submit" value="Ingresar" class="button-login"></p>
</form>
</div>
<?php

}
?>
</main>
</body>
</html>