<?php

	$nombre1 = $_POST["nombre1"];
	$nombre2 = $_POST["nombre2"];
	$apellido1 = $_POST["apellido1"];
	$apellido2 = $_POST["apellido2"];
	$username = $_POST["username"];
	$password = $_POST["password"];
	$tipousuario = $_POST["idtipousuario"];

if( isset($username) && isset($password) ){

    aniadir($nombre1,$nombre2,$apellido1,$apellido2,$username,$password,$tipousuario);   
    print "<script>window.location='index.php?view=usuario2';</script>";
}

function aniadir($nombre1,$nombre2,$apellido1,$apellido2,$username,$password,$tipousuario){
   
    $conexion=Database::getCon();
    $sql = "insert into Usuario (nombre1,nombre2,apellido1,apellido2,username,password, tipousuario_idtipousuario) 
    values ('".$nombre1."','".$nombre2."','".$apellido1."','".$apellido2."','".$username."','".$password."','".$tipousuario."')";
    
    $resultado = sqlsrv_query($conexion,$sql);  

    return $resultado;
}

?>