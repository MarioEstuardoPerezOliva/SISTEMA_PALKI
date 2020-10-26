<?php

class ActividadData{

public static function getAll(){
	$conexion =Database::getCon();
	$sql = "select count(1) from Actividad2";
	$resultado = sqlsrv_query($conexion,$sql);  
	$fila = sqlsrv_fetch_array($resultado);
	return $fila[0];
}}
?>

