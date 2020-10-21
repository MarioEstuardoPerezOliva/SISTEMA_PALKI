<?php
class UserData {
	public static $tablename = "Usuario";



	public function Userdata(){
		$this->id = "";
		$this->nombre1 = "";
		$this->nombre2 = "";
		$this->apellido1 = "";
		$this->apellido2 = "";
		$this->username = "";
		$this->image = "";
		$this->password = "";
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into Usuarios (nombre1,nombre2,apellido1,apellido2,username,password,is_admin,created_at) ";
		$sql = "value (\"$this->nombre1\",\"$this->nombre2\",\"$this->apellido1\",\"$this->apellido2\",\"$this->username\",\"$this->password\",\"$this->is_admin\",$this->created_at)";
		Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$conexion =Database::getCon();
		$sql = "delete from ".self::$tablename." where idusuario=$this->idusuario";
		$resultado= sqlsrv_query($conexion,$sql);
	}

// partiendo de que ya tenemos creado un objecto UserData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set nombre=\"$this->name\",email=\"$this->email\",username=\"$this->username\",apellido=\"$this->lastname\",is_active=\"$this->is_active\",is_admin=\"$this->is_admin\" where id=$this->id";
		Executor::doit($sql);
	}

	public function update_passwd(){
		$sql = "update ".self::$tablename." set password=\"$this->password\" where id=$this->id";
		Executor::doit($sql);
	}


	public static function getById($id){
		$sql = "select * from ".self::$tablename."  where idusuario=$this->idusuario";
		$resultado= sqlsrv_query($conexion,$sql);

	}

	public static function getByMail($mail){
		$sql = "select * from ".self::$tablename." where email=\"$mail\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());

	}


	public static function getAll(){
		$conexion =Database::getCon();

		$sql = "select t.tipousuario,concat(u.nombre1,' ',u.nombre2) as Nombres, concat(u.apellido1,' ',u.apellido2) as Apellidos, username, estado_idestado from Usuario as u
		inner join Tipousuario as t on t.idtipousuario=u.tipousuario_idtipousuario";
		
		$resultado= sqlsrv_query($conexion,$sql);
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where name like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new UserData());

	}


}

?>