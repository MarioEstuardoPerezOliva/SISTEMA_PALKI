<?php
modificarModificarMedida($_POST["medidaplanta"],$_POST["unidadmedida"],$_POST["idmedidaplanta"]);


function modificarModificarMedida($medida,$unidad,$id_medidaPlanta){
	$conexion=Database::getCon();
	$sql="update Medidaplanta set medidaplanta='".$medida."',unidadmedida='".$unidad."' where idmedidaplanta='".$id_medidaPlanta."'";

	$resultado= sqlsrv_query($conexion,$sql);
}

?>
<script type="text/javascript">
alert("Medida de la Planta Modificada Exitosamente");
window.location='index.php?view=medidaplanta';
</script>
