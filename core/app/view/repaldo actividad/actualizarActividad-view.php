<?php
modificarActividad(
	$_POST["codigocolaborador"],
	$_POST["idtarea"],
	$_POST["idfinca"],
	$_POST["idplanta"],
	$_POST["fechainicial"],
	$_POST["horainicio"],
	$_POST["fechafinal"],
	$_POST["horafin"],
	$_POST["idactividad"]
);
function modificarActividad(
	$colaborador,
	$tarea,
	$finca,
	$planta,
	$fechainicio,
	$horainicio,
	$fechafinal,
	$horafinal,
	$id_actividad
	){
	$conexion=Database::getCon();
	$sql="update Actividad set 
	colaborador_codigocolaborador='".$colaborador."',
	tarea_idtarea='".$tarea."',
	finca_idfinca='".$finca."',
	planta_idplanta='".$planta."',
	fechainicio='".$fechainicio."',
	horainicio='".$horainicio."',
	fechafin='".$fechafinal."',
	horafin='".$horafinal."'
	where idactividad='".$id_actividad."'";

	$resultado= sqlsrv_query($conexion,$sql);
}

?>
<script type="text/javascript">
alert("Actividad Modificada Exitosamente");
window.location='index.php?view=actividad';
</script>
