<?php

class UsuarioData{

public static function getAll(){
	$conexion =Database::getCon();
	$sql = "select count(1) from Usuario";
	$resultado = sqlsrv_query($conexion,$sql);  
	$fila = sqlsrv_fetch_array($resultado);
	return $fila[0];
}
public static function datosUsuario($id){
	$conexion =Database::getCon();
	$sql = "select concat(nombre1,' ',apellido1) as Nombres from Usuario where idusuario=$id";
	$resultado = sqlsrv_query($conexion,$sql);  
	$fila = sqlsrv_fetch_array($resultado);
	return $fila[0];
}
}
?>

