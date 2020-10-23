<?php
	$codigocolaborador = $_POST["codigocolaborador"];
	$idtarea = $_POST["idtarea"];
	$idfinca = $_POST["idfinca"];
	$idplanta = $_POST["idplanta"];
	$fechainicio = $_POST["fechainicial"];
	$horainicio = $_POST["horainicio"];
	$fechafin = $_POST["fechafinal"];
	$horafin = $_POST["horafin"];

	

if( isset($codigocolaborador) && isset($idtarea) ){

	aniadir($codigocolaborador,$idtarea,$idfinca,$idplanta,$fechainicio,$horainicio,$fechafin,$horafin);   
    print "<script>window.location='index.php?view=actividad';</script>";
}

function aniadir(
$codigocolaborador,
$idtarea,
$idfinca,
$idplanta,
$fechainicio,
$horainicio,
$fechafin,
$horafin
){
   
    $conexion=Database::getCon();
    $sql = "insert into Actividad2 (
colaborador_codigocolaborador,
tarea_idtarea,
finca_idfinca,
planta_idplanta,
fechainicio,
horainicio,
fechafin,
horafin
		) 
    values (
		'".$codigocolaborador."',
		'".$idtarea."',
		'".$idfinca."',
		'".$idplanta."',
		'".$fechainicio."',
		'".$horainicio."',
		'".$fechafin."',
		'".$horafin."'
		)";
    
    $resultado = sqlsrv_query($conexion,$sql);  

    return $resultado;
}

?>