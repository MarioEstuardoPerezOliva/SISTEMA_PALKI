<?php 
class Database {
	public static $db;
	public static $con;
	public static $id;
	
	function conexion()
	{
		$conexion=mysqli_connect("127.0.0.1:33065","root","","sistemacoffee");
		return $con;
	}
}



?>






