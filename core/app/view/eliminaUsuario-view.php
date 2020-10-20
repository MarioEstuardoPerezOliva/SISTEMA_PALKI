<?php

$user = UserData::getById($_GET["idusuario"]);
$user->del();
Core::redir("./index.php?view=usuario");

?>