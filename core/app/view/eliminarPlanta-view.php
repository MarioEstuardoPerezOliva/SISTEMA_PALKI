<?php
eliminarPlanta($_GET["id"]);



function eliminarPlanta($id_planta){
   
    $conexion=Database::getCon();
    $sql = "delete from Planta where idplanta='".$id_planta."'";
    $resultado = sqlsrv_query($conexion,$sql);  
}

?>

<script type="text/javascript">
alert("Planta Eliminada Exitosamente");
window.location='index.php?view=planta';
</script>
