<?php

$user = UserData::getById($_GET["idusuario"]);
$user->del();

?>