<?php
    $conexion =Database::getCon();
                                             
    $query = "select cout(*) from Usuario";
    $resultado = sqlsrv_query($conexion,$query);    
    echo return $resultado;
?>
      