<?php
eliminarActividad($_GET["id"]);



function eliminarActividad($id_actividad){
   
    $conexion=Database::getCon();
    $sql = "delete from Actividad where idactividad='".$id_actividad."'";
    $resultado = sqlsrv_query($conexion,$sql);  
}

?>

<script type="text/javascript">
alert("Actividad Eliminada Exitosamente");
window.location='index.php?view=actividad';
</script>
