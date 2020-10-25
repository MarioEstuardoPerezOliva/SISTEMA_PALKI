<?php
eliminarTarea($_GET["id"]);



function eliminarTarea($id_tarea){
   
    $conexion=Database::getCon();
    $sql = "delete from Tarea where idtarea='".$id_tarea."'";
    $resultado = sqlsrv_query($conexion,$sql);  
}

?>

<script type="text/javascript">
alert("Tarea Eliminada Exitosamente");
window.location='index.php?view=tarea';
</script>
