<?php
class Database {
	public static $dbServidor;
	public static $con;
	public static $id;
	
	function Database(){		
			 
	}

	function connect(){
	
		$dbServidor = "localhost"; //Name of the server/instance, including optional port number (default is 1433)
		$dbName = "bdpalkisa"; //Name of the database
		$dbUser = "marioadmin"; //Name of the user
		$dbPassword = "admin123"; //DB Password of that user	
			
		$conn_info = array (   
			"Database" => $dbName, 
	    	"UID" => $dbUser,
	    	"PWD" => $dbPassword
		);
		$con = sqlsrv_connect($dbServidor, $conn_info);	
		return $con;
	}

	public static function getCon(){
		if(self::$con==null && self::$dbServidor==null){

			self::$dbServidor = new Database();
			self::$con = self::$dbServidor->connect();
		}
		return self::$con;
	}	
}
?>