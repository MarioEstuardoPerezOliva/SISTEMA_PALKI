<?php

class PlantaData{

public static function getAll(){
	$conexion =Database::getCon();
	$sql = "select count(1) from Planta";
	$resultado = sqlsrv_query($conexion,$sql);  
	$fila = sqlsrv_fetch_array($resultado);
	return $fila[0];
}}
?>

