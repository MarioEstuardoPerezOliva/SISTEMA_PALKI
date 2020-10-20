<?php

if(count($_POST)>0){
	$is_admin=0;
	if(isset($_POST["is_admin"])){$is_admin=1;}
	$is_active=0;
	if(isset($_POST["is_active"])){$is_active=1;}
	$user = UserData::getById($_POST["user_id"]);
	$user->nombre1 = $_POST["nombre1"];
	$user->nombre2 = $_POST["nombre2"];
	$user->apellido1 = $_POST["apellido1"];
	$user->apellido2 = $_POST["apellido2"];
	$user->username = $_POST["username"];
	$user->is_admin=$is_admin;
	$user->is_active=$is_active;
	$user->update();

	if($_POST["password"]!=""){
		$user->password = sha1(md5($_POST["password"]));
		$user->update_passwd();
print "<script>alert('Se ha actualizado el password correctamente');</script>";

	}

print "<script>window.location='index.php?view=usuario';</script>";


}


?>