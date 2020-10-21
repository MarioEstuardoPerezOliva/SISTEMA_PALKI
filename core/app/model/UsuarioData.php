<?php

	$nombre1 = $_POST["nombre1"];
	$nombre2 = $_POST["nombre2"];
	$apellido1 = $_POST["apellido1"];
	$apellido2 = $_POST["apellido2"];
	$username = $_POST["username"];
	$password = sha1(md5($_POST["password"]));

if(isset ($nombre1) && isset($username) ){
	aniadir($nombre1,$nombre2,$apellido,$apellido2,$username,$password);
	print "<script>window.location='index.php?view=usuario2';</script>";
}

function aniadir($nombre1,$nombre2,$apellido,$apellido2,$username,$password);{
$conexion =Database::getCon();

$sql = "INSERT INTO Usuario(nombre1, nombre2, apellido1,apellido2, username, password) 
VALUES ('".$nombre1."','".$nombre2."', '".$apellido1."', '".$apellido2."','".$username."', '".$password."')";

$resultado= sqlsrv_query($conexion,$sql);

return $resultado;
}

?>