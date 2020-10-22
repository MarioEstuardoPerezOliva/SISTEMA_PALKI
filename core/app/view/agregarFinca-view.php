<?php

    $nombrefinca = $_POST["nombrefinca"];
    $direccionfinca = $_POST["direccion"];


if( isset($nombrefinca) && isset($direccionfinca) ){

    aniadir($nombrefinca,$direccionfinca);   
    print "<script>window.location='index.php?view=finca';</script>";
}

function aniadir($nombrefinca,$direccionfinca){
   
    $conexion=Database::getCon();
    $sql = "insert into Finca (nombrefinca,direccion) 
    values ('".$nombrefinca."','".$direccionfinca."')";
    
    $resultado = sqlsrv_query($conexion,$sql);  

    return $resultado;
}

?>