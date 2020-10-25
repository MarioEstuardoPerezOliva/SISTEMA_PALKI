<?php
modificarUsuario($_POST["nombre1"],$_POST["nombre2"],$_POST["apellido1"],$_POST["apellido2"],$_POST["username"],$_POST["password"],$_POST["idtipousuario"],$_POST["idestado"],$_POST["idusuario"]);


function modificarUsuario($nombre1,$nombre2,$apellido1,$apellido2,$username,$password,$tipousuario,$estado,$id_usuario){
	$conexion=Database::getCon();
	$sql="update Usuario set nombre1='".$nombre1."',nombre2='".$nombre2."',apellido1='".$apellido1."',apellido2='".$apellido2."',username='".$username."',password='".$password."',tipousuario_idtipousuario='".$tipousuario."',estado_idestado='".$estado."' where idusuario='".$id_usuario."'";

	$resultado= sqlsrv_query($conexion,$sql);
}

?>
<script type="text/javascript">
alert("Usuario Modificado Exitosamente");
window.location='index.php?view=usuario2';
</script>
