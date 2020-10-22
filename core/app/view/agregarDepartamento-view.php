<?php

	$departamento = $_POST["nombredepartamento"];


if( isset($departamento) ){

    aniadir($departamento);   
    print "<script>window.location='index.php?view=departamento';</script>";
}

function aniadir($departamento){
   
    $conexion=Database::getCon();
    $sql = "insert into Departamento (nombredepartamento) 
    values ('".$departamento."')";
    
    $resultado = sqlsrv_query($conexion,$sql);  

    return $resultado;
}

?>