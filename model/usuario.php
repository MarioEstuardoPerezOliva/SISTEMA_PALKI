<?php
	class Usuario{
		private $idUsuario;
		private $nombreUsuario;
		private $apellidoUsuario;
		private $usuario;
		private $password;
 
		function __construct(){}
 //nombre
		public function getNombreUsuario(){
		return $this->nombreUsuario;
		}
 
		public function setNombreUsuario($nombreUsuario){
			$this->nombreUsuario = $nombreUsuario;
		}
//apellido
		public function getApellidoUsuario(){
			return $this->apellidoUsuario;
			}
	 
			public function setApellidoUsuario($apellidoUsuario){
				$this->apellidoUsuario = $apellidoUsuario;
			}
//user
			public function getUsuario(){
				return $this->usuario;
				}
		 
				public function setUsuario($usuario){
					$this->usuario = $usuario;
				}
	
//password
public function getPassword(){
	return $this->password;
	}

	public function setPassword($password){
		$this->password = $password;
	}

//idUser
	
		public function getIdUsuario(){
			return $this->idUsuario;
		}
 
		public function setIdUsuario($idUsuario){
			$this->idUsuario= $idUsuario;
		}
	}
?>