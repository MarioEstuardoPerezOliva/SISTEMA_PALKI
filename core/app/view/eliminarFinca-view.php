<?php
eliminarFinca($_GET["id"]);



function eliminarFinca($id_finca){
   
    $conexion=Database::getCon();
    $sql = "delete from Finca where idfinca='".$id_finca."'";
    $resultado = sqlsrv_query($conexion,$sql);  
}

?>

<script type="text/javascript">
alert("Finca Eliminada Exitosamente");
window.location='index.php?view=finca';
</script>
