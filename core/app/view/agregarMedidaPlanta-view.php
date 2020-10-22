<?php

    $medidaplanta = $_POST["medidaplanta"];
    $unidadmedida = $_POST["unidadmedida"];


if( isset($medidaplanta) && isset($unidadmedida) ){

    aniadir($medidaplanta,$unidadmedida);   
    print "<script>window.location='index.php?view=medidaPlanta';</script>";
}

function aniadir($medidaplanta,$unidadmedida){
   
    $conexion=Database::getCon();
    $sql = "insert into Medidaplanta (medidaplanta,unidadmedida) 
    values ('".$medidaplanta."','".$unidadmedida."')";
    
    $resultado = sqlsrv_query($conexion,$sql);  

    return $resultado;
}

?>