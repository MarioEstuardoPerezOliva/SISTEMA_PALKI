<?php

if(!isset($_SESSION["user_id"])) {
$user = $_POST['usuario'];
$pass = $_POST['password'];

$base = new Database();
$con = $base->connect();
 $sql = "select * from usuario where usuario= \"".$user."\" and password= \"".$pass."\"";
//print $sql;
$query = $con->query($sql);
$found = false;
$userid = null;
while($r = $query->fetch_array()){
	$found = true ;
	$userid = $r['idUsuario'];
}

if($found==true) {
session_start();
print $userid;
	$_SESSION['user_id']=$userid ;
setcookie('userid',$userid);
print $_SESSION['userid'];
print "Cargando ... $userid";
print "<script>window.location='view/home-view.php';</script>";
}else {
print "<script>window.location='login.php';</script>";
}

}else{
print "<script>window.location='view/home-view.php';</script>";


}
?>