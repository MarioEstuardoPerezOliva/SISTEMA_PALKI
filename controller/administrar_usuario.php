<?php
//incluye la clase Libro y CrudLibro
//include "c:\xampp\htdocs\bibliotecadb\model\crud_libro.php";
//include "c:\xampp\htdocs\bibliotecadb\model\libro.php";
require_once "model/crud_usuarios.php";
require_once "model/usuario.php";	
 
$crud= new Crud_Usuario();
$usuario= new Usuario();
 
	// si el elemento insertar no viene nulo llama al crud e inserta un libro
	if (isset($_POST['insertar'])) {
		$usuario->getNombreUsuario($_POST['nombreUsuario']);
		$usuario->getApellidoUsuario($_POST['apellidoUsuario']);
		$usuario->getUsuario($_POST['usuario']);
		$usuario->getPassword($_POST['password']);
		//llama a la funci�n insertar definida en el crud
		$crud->insertar($usuario);
		
	// si el elemento de la vista con nombre actualizar no viene nulo, llama al crud y actualiza el libro
	} elseif(isset($_POST['actualizar'])){
		$usuario->setId($_POST['id']);
		$usuario->setNombre($_POST['nombre']);
		$usuario->setAutor($_POST['autor']);
		$usuario->setAnio_edicion($_POST['sd']);
		$usuario->actualizar($libro);
		
	// si la variable accion enviada por GET es == 'e' llama al crud y elimina un libro
	}elseif(isset($_POST['eliminar'])){
		$crud->eliminar($_POST['id']);	 
	}
?>