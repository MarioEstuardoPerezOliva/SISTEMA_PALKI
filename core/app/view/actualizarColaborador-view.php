<?php
modificarColaborador(
	$_POST["dpi"],
	$_POST["nombre1"],
	$_POST["nombre2"],
	$_POST["apellido1"],
	$_POST["apellido2"],
	$_POST["edad"],
	$_POST["direccion"],
	$_POST["genero"],
	$_POST["telefono"],
	$_POST["email"],
	$_POST["idfinca"],
	$_POST["iddepartamento"],
	$_POST["idestado"],
	$_POST["codigocolaborardor"]
);
function modificarColaborador(
	$dpi,
	$nombre1,
	$nombre2,
	$apellido1,
	$apellido2,
	$edad,
	$direccion,
	$genero,
	$telefono,
	$email,
	$finca,
	$departamento,
	$estado,
	$id_colaborador
	){
	$conexion=Database::getCon();
	$sql="update colaborador set 
	dpi='".$dpi."',
	nombre1='".$nombre1."',
	nombre2='".$nombre2."',
	apellido1='".$apellido1."',
	apellido2='".$apellido2."',
	edad='".$edad."',
	direccion='".$direccion."',
	genero='".$genero."',
	telefono='".$telefono."',
	email='".$email."',
	finca_idfinca='".$finca."',
	departamento_iddepartamento='".$departamento."',
	estado_idestado='".$estado."'
	where codigocolaborador='".$id_colaborador."'";

	$resultado= sqlsrv_query($conexion,$sql);
}

?>
<script type="text/javascript">
alert("Colaborador Modificado Exitosamente");
window.location='index.php?view=colaboradores';
</script>
