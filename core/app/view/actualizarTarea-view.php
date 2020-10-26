<?php
modificarTarea($_POST["tarea"],$_POST["idtarea"]);


function modificarTarea($tarea,$id_tarea){
	$conexion=Database::getCon();
	$sql="update Tarea set tarea='".$tarea."' where idtarea='".$id_tarea."'";

	$resultado= sqlsrv_query($conexion,$sql);
}

?>
<script type="text/javascript">
alert("Tarea Modificada Exitosamente");
window.location='index.php?view=tarea';
</script>
