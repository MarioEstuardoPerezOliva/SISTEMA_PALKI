<?php
modificarDepartamento($_POST["nombredepartamento"],$_POST["iddepartamento"]);


function modificarDepartamento($departamento,$id_departamento){
	$conexion=Database::getCon();
	$sql="update Departamento set nombredepartamento='".$departamento."' where iddepartamento='".$id_departamento."'";

	$resultado= sqlsrv_query($conexion,$sql);
}

?>
<script type="text/javascript">
alert("Departamento Modificado Exitosamente");
window.location='index.php?view=departamento';
</script>
