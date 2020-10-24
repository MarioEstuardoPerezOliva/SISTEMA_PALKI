<?php
eliminarColaborador($_GET["idcolaborador"]);



function eliminarColaborador($id_colaborador){
   
    $conexion=Database::getCon();
    $sql = "delete from Colaborador where codigocolaborador='".$id_colaborador."'";
    $resultado = sqlsrv_query($conexion,$sql);  
}

?>

<script type="text/javascript">
alert("Colaborador Eliminado Exitosamente");
window.location='index.php?view=colaboradores';
</script>
