<?php

    $nombretarea = $_POST["tarea"];


if( isset($nombretarea) ){

    aniadir($nombretarea);   
    print "<script>window.location='index.php?view=tarea';</script>";
}

function aniadir($nombretarea){
   
    $conexion=Database::getCon();
    $sql = "insert into Tarea (tarea) 
    values ('".$nombretarea."')";
    
    $resultado = sqlsrv_query($conexion,$sql);  

    return $resultado;
}

?>