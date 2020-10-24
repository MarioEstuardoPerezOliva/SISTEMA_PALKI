<?php
    $idactividad = $_POST["idactividad"];
	$codigocolaborador = $_POST["codigocolaborador"];
	$idtarea = $_POST["idtarea"];
	$idfinca = $_POST["idfinca"];
	$idplanta = $_POST["idplanta"];
	$fechainicio = $_POST["fechainicial"];
	$horainicio = $_POST["horainicio"];
	$fechafin = $_POST["fechafinal"];
	$horafin = $_POST["horafin"];

	

if( isset($codigocolaborador) && isset($idtarea) ){

	aniadir($idactividad,$codigocolaborador,$idtarea,$idfinca,$idplanta,$fechainicio,$horainicio,$fechafin,$horafin);   
    print "<script>window.location='index.php?view=actividad';</script>";
}

function aniadir(
$idactividad,
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
		$sql = "delete from Actividad2
		where idactividad=".$idactividad."";
		


    $resultado = sqlsrv_query($conexion,$sql);  

    return $resultado;
}

?>