<?php
include '..\model\crud_usuarios.php';
include '..\model\usuario.php';
include '..\action\validacion.php';
	
 
$crud= new CrudUsuario();
$usuario= new Usuario();
$valida= new Valida();
 
	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {

		$valida->validaNombre($_POST['nombreUsuario']);
		$valida->validaApellidp($_POST['apellidoUsuario']);
		$valida->validaUsuario($_POST['usuario']);
		$valida->validaPassword($_POST['password']);

		$usuario->setNombreUsuario($_POST['nombreUsuario']);
		$usuario->setApellidoUsuario($_POST['apellidoUsuario']);
		$usuario->setUsuario($_POST['usuario']);
		$usuario->setPassword($_POST['password']);
		//llama a la funci�n insertar definida en el crud
		$crud->insertar($usuario);
		
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	} elseif(isset($_POST['actualizar'])){
		$usuario->setIdUsuario($_POST['id']);
		$usuario->setNombreUsuario($_POST['nombreUsuario']);
		$usuario->setApellidoUsuario($_POST['apellidoUsuario']);
		$usuario->setUsuario($_POST['usuario']);
		$usuario->setPassword($_POST['password']);
		
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}elseif(isset($_POST['eliminar'])){
		$crud->eliminar($_POST['id']);	 
	}
?>