<?php

if(count($_POST)>0){
  $colaborador = new DataColaborador();
  $colaborador->dpi = $_POST["dpi"];
  $colaborador->nombre = $_POST["nombre"];
  $colaborador->apellido = $_POST["apellido"];
  $colaborador->edad = $_POST["edad"];
  $colaborador->fechaNacimiento = $_POST["fechaNacimiento"];
  $colaborador->direccion = $_POST["direccion"];
  $colaborador->genero = $_POST["genero"];
  $colaborador->telefono = $_POST["telefono"];
  $colaborador->email = $_POST["email"];
  $product->add();
print "<script>window.location='index.php?view=products';</script>";


}


?>