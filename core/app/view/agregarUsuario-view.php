<?php

if(count($_POST)>0){
	$is_admin=0;
	if(isset($_POST["is_admin"])){$is_admin=1;}
	$user = new UserData();
	$user->nombre1 = $_POST["nombre1"];
	$user->nombre2 = $_POST["nombre2"];
	$user->apellido1 = $_POST["apellido1"];
	$user->apellido2 = $_POST["apellido2"];
	$user->username = $_POST["username"];
	$user->is_admin=$is_admin;
	$user->password = sha1(md5($_POST["password"]));
	$user->add();

print "<script>window.location='index.php?view=usuario';</script>";


}


?>