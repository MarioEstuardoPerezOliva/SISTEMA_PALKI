<?php

    $nombreplanta = $_POST["nombreplanta"];
    $idmedidaplanta = $_POST["idmedidaplanta"];


if( isset($nombreplanta) && isset($idmedidaplanta) ){

    aniadir($nombreplanta,$idmedidaplanta);   
    print "<script>window.location='index.php?view=planta';</script>";
}

function aniadir($nombreplanta,$idmedidaplanta){
   
    $conexion=Database::getCon();
    $sql = "insert into Planta (nombreplanta,medidaplanta_idmedidaplanta) 
    values ('".$nombreplanta."','".$idmedidaplanta."')";
    
    $resultado = sqlsrv_query($conexion,$sql);  

    return $resultado;
}

?>