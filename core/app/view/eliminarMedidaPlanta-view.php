<?php
eliminarMedidaPlanta($_GET["id"]);



function eliminarMedidaPlanta($id_medida){
   
    $conexion=Database::getCon();
    $sql = "delete from Medidaplanta where idmedidaplanta='".$id_medida."'";
    $resultado = sqlsrv_query($conexion,$sql);  
}

?>

<script type="text/javascript">
alert("Medida Planta Eliminada Exitosamente");
window.location='index.php?view=medidaPlanta';
</script>
