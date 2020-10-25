<?php
eliminarDepartamento($_GET["id"]);



function eliminarDepartamento($id_departamento){
   
    $conexion=Database::getCon();
    $sql = "delete from Departamento where iddepartamento='".$id_departamento."'";
    $resultado = sqlsrv_query($conexion,$sql);  
}

?>

<script type="text/javascript">
alert("Departamento Eliminado Exitosamente");
window.location='index.php?view=departamento';
</script>
