<?php
	$codigocolaborador = $_POST["codigocolaborador"];
	$idtarea = $_POST["idtarea"];
	$idfinca = $_POST["idfinca"];
	$idplanta = $_POST["idplanta"];
	$fechainicio = $_POST["fechainicial"];
	$horainicio = $_POST["horainicio"];
	$fechafin = $_POST["fechafinal"];
	$horafin = $_POST["horafin"];
	$avance = $_POST["avance"];
	$estado = $_POST["idestado"];
	$encargado = $_POST["idusuario"];
	$motivo = $_POST["motivo"];
	

	

if( isset($codigocolaborador) && isset($idtarea) ){

	aniadir($codigocolaborador,$idtarea,$idfinca,$idplanta,$fechainicio,$horainicio,$fechafin,$horafin,$avance,$estado,$encargado,$motivo);   
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
$horafin,
$avance,
$estado,
$encargado,
$motivo
){
   
    $conexion=Database::getCon();
    $sql = "insert into Actividad (
colaborador_codigocolaborador,
tarea_idtarea,
finca_idfinca,
planta_idplanta,
fechainicio,
horainicio,
fechafin,
horafin,
porcentaje,
estadoactividad_idestado,
usuario_idusuario,
descripcion
		) 
    values (
		'".$codigocolaborador."',
		'".$idtarea."',
		'".$idfinca."',
		'".$idplanta."',
		'".$fechainicio."',
		'".$horainicio."',
		'".$fechafin."',
		'".$horafin."',
		'".$avance."',
		'".$estado."',
		'".$encargado."',
		'".$motivo."'
		)";
    
    $resultado = sqlsrv_query($conexion,$sql);  

    return $resultado;
}

?>