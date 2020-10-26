<?php
modificarFinca($_POST["nombrefinca"],$_POST["direccion"],$_POST["idfinca"]);


function modificarFinca($nombrefinca,$direccion,$id_finca){
	$conexion=Database::getCon();
	$sql="update Finca set nombrefinca='".$nombrefinca."',direccion='".$direccion."' where idfinca='".$id_finca."'";

	$resultado= sqlsrv_query($conexion,$sql);
}

?>
<script type="text/javascript">
alert("Finca Modificada Exitosamente");
window.location='index.php?view=finca';
</script>