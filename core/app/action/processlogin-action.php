<?php 
if(!isset($_SESSION["user_id"])) {
	$base = new Database();    
	$conexion = $base->getCon();

if (!$conexion){
   
  echo "error en conexion <br>";       
    die(print_r(sqlsrv_errors(), true)); 
}else{   

    echo "conexion exitosa!!";

    $user= $_POST['username'];
    $pass= $_POST['password'];

    $sql = "SELECT * FROM Usuario where username='$user' and password = '$pass'";

    $userid = null;

    if(($result = sqlsrv_query($conexion,$sql)) !== false){
       
        while( $row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC) ) {
            $userid = $row['idusuario'];
            $_SESSION['user_id']=$userid;
        
            echo $row['username'].", bienvenido!! <br />";
            print "<script>window.location='index.php?view=home';</script>";

        }
        
    }
    echo "Usuario y/o contrasenia incorrecta";
    print "<script>window.location='index.php?view=login';</script>";

}
}else{
	print "<script>window.location='index.php?view=home';</script>";
	
}

 ?>
