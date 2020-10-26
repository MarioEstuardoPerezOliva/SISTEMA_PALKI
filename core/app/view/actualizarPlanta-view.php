<?php
modificarPlanta($_POST["nombreplanta"],$_POST["idmedidaplanta"],$_POST["idplanta"]);


function modificarPlanta($nombreplanta,$medidadplanta,$id_planta){
	$conexion=Database::getCon();
	$sql="update Planta set nombreplanta='".$nombreplanta."',medidaplanta_idmedidaplanta='".$medidadplanta."' where idplanta='".$id_planta."'";

	$resultado= sqlsrv_query($conexion,$sql);
}

?>
<script type="text/javascript">
alert("Planta Modificada Exitosamente");
window.location='index.php?view=planta';
</script>
