<?php
eliminarUsuario($_GET["idusuario"]);



function eliminarUsuario($id_usuario){
   
    $conexion=Database::getCon();
    $sql = "delete from Usuario where idusuario='".$id_usuario."'";
    $resultado = sqlsrv_query($conexion,$sql);  
}

?>

<script type="text/javascript">
alert("Usuario Eliminado Exitosamente");
window.location='index.php?view=usuario2';
</script>
