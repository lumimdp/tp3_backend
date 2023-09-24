<?php       

if(trim($_POST["usuario"]) != "" && trim($_POST["password"]) != "")
{

$nickN = $_POST["usuario"];
$passN = $_POST["password"];
$nickR = "usuario";
$passR = 123456;
      

if($nickN == $nickR)
{
	
if($passR == $passN)
{
	
setcookie("usNick",$nickN,time()+3600);
setcookie("usPass",$passN,time()+3600);

	
header("Location: index.php");

} else { 	

	
header("Location: index.php?error=3");
	
}

} else {	

	
header("Location: index.php?error=2");
	
}
} else {
	
header("Location: index.php?error=1");
	
}
?>