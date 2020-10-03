<?php
// incluye la clase Db
include "..\controller\Database.php";
include "..\controller\Executor.php";


	class CrudUsuario{
		// constructor de la clase
		public function __construct(){}
 
		// m�todo para insertar, recibe como par�metro un objeto de tipo usuario
		public function insertar($usuario){
		    $nombreUsuario = $usuario->getNombreUsuario();
			$apellidoUsuario = $usuario->getApellidoUsuario();
			$usuario = $usuario->getUsuario();
			$password = $usuario->getPassword();
			$db=Database::getCon();
		
			//print_r($libro->getNombre());
			$sql = "insert into usuario (nombreUsuario, apellidoUsuario, usuario, password) ";
		    $sql .= "values ('$nombreUsuario', '$apellidoUsuario','$usuario','$password')";
			//print_r($sql);
			return Executor::doit($db,$sql);
		
			
	}
 
		
 
		// m�todo para mostrar todos los usuarios
		public function mostrar(){
			$db=Database::getCon();
			$listaUsuario=[];
			$select=$db->query("SELECT idUsuario, nombreUsuario, apellidoUsuario, usuario FROM usuario");
 
			foreach($select as $usuario){
				$myUsuario= new Usuario();
				$myUsuario->setIdUsuario($usuario['idUsuario']);
				$myUsuario->setNombreUsuario($usuario['nombreUsuario']);
				$myUsuario->setApellidoUsuario($usuario['apellidoUsuario']);
				$myUsuario->setUsuario($usuario['usuario']);
				
				$listaUsuario[]=$myUsuario;
			}
			return $listaUsuario;
		}
 
		// m�todo para eliminar un libro, recibe como par�metro el id del libro
		//public function eliminar($id){
		//	$db=Database::getCon();
		//	$sql = "DELETE FROM libros WHERE ID=$id";
		//	//print_r($sql);
		//	return Executor::doit($db,$sql);
//
//		}
/* 
		// m�todo para buscar un libro, recibe como par�metro el id del libro
		public function obtenerLibro($id){
			$db=Database::getCon();
			$libroSel=[];
			$select=$db->query("SELECT * FROM libros WHERE ID=$id");
			foreach($select as $libro){
				$myLibro= new Libro();
				$myLibro->setId($libro['id']);
				$myLibro->setNombre($libro['nombre']);
				$myLibro->setAutor($libro['autor']);
				$myLibro->setAnio_edicion($libro['anio_edicion']);
				$libroSel[]=$myLibro;
			//print_r($myLibro);
			
		   }	
		   return $libroSel;
		}
 
		// m�todo para actualizar un libro, recibe como par�metro el libro
		public function actualizar($libro){
		    $id = $libro->getId();
		    $nombre = $libro->getNombre();
			$autor = $libro->getAutor();
			$anio = $libro->getAnio_edicion();
			$db=Database::getCon();
			
			$sql = "UPDATE libros SET nombre='$nombre', autor='$autor', anio_edicion='$anio' WHERE ID=$id";
			//print_r($sql);
			
			return Executor::doit($db,$sql);
			
			*/
		}
	}
?>