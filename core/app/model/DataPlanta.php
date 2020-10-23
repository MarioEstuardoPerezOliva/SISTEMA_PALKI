<?php
class DataPlanta {
	public static $tablename = "Planta";



	public static function DataPlanta(){
		$this->idplanta = "";
		$this->nombreplanta = "";
        $this->idmedidaplanta = "";
        
	}

	public static function add(){
	   
        $conexion=Database::getCon();
        $sql = "insert into Planta (nombreplanta,medidaplanta_idmedidaplanta) 
        values ('".$planta->nombreplanta."','".$planta->idmedidaplanta ."')";
        
        $resultado = sqlsrv_query($conexion,$sql);  
    
        return $resultado;
	}



}

?>