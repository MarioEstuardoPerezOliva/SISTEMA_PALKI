<?php
if(!isset($_SESSION["user_id"])) {
$user = $_POST['username'];
$pass = sha1(md5($_POST['password']));

$serverName = "localhost"; //conexion
$connectionInfo = array( "Database"=>"bd_palki", "UID"=>"marioadmin", "PWD"=>"admin123");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
;

        if( $conn ) {
             echo "Conexión establecida.<br />";
        }else{
            echo "Conexión no se pudo establecer.<br />";
            die( print_r( sqlsrv_errors(), true));
        }

	$sql = "SELECT username,password FROM Usuario WHERE username = '$user' AND password = '$pass'";
    $params = array();
    $options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
    $stmt = sqlsrv_query( $conn, $sql , $params, $options );

    $row_count = sqlsrv_num_rows( $stmt );
  

        if ($row_count === false)
           echo "Error al obtener datos, verifique.";
        else
		   echo "bien";
		   print "<script>window.location='index.php?view=home';</script>";
		   header("Location:index.php?view=home");
        //echo $row_count;

        while( $row = sqlsrv_fetch_array( $stmt) ) {
              print json_encode($row);
        }

	sqlsrv_close($conn);
	
}
?>