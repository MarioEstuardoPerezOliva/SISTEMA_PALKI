<?php
	$dpi = $_POST["dpi"];
	$nombre1 = $_POST["nombre1"];
	$nombre2 = $_POST["nombre2"];
	$apellido1 = $_POST["apellido1"];
	$apellido2 = $_POST["apellido2"];
	$edad = $_POST["edad"];
	$direccion = $_POST["direccion"];
	$genero = $_POST["genero"];
	$telefono = $_POST["telefono"];
	$email = $_POST["email"];
	$idfinca = $_POST["idfinca"];
	$iddepartamento = $_POST["iddepartamento"];
	$idestado = $_POST["idestado"];
	

if( isset($dpi) && isset($nombre1) ){

	aniadir($dpi,$nombre1,$nombre2,$apellido1,$apellido2,$edad,$direccion,$genero,$telefono,$email,$idfinca,$iddepartamento,$idestado);   
    print "<script>window.location='index.php?view=colaboradores';</script>";
}

function aniadir(	$dpi,
$nombre1,
$nombre2,
$apellido1,
$apellido2,
$edad,
$direccion,
$genero,
$telefono,
$email,
$idfinca,
$iddepartamento,
$idestado){
   
    $conexion=Database::getCon();
    $sql = "insert into Colaborador (
		dpi,
		nombre1,
		nombre2,
		apellido1,
		apellido2,
		edad,
		direccion, 
		genero,
		telefono,
		email,
		finca_idfinca,
		departamento_iddepartamento,
		estado_idestado
		) 
    values (
		'".$dpi."',
		'".$nombre1."',
		'".$nombre2."',
		'".$apellido1."',
		'".$apellido2."',
		'".$edad."',
		'".$direccion."',
		'".$genero."',
		'".$telefono."',
		'".$email."',
		'".$idfinca."',
		'".$iddepartamento."',
		'".$idestado."'
		)";
    
    $resultado = sqlsrv_query($conexion,$sql);  

    return $resultado;
}

?>