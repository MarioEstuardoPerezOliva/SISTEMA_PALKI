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
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
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
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());

	}

	public static function getByMail($mail){
		$sql = "select * from ".self::$tablename." where email=\"$mail\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());

	}


	public static function getAll(){
		$con = Database::getCon();
		if($con !== false ){
			$sql = "select * from ".self::$tablename;
			$query = sqlsrv_query($con,$sql);		
		}
		return $query;
	}


	public static function getLike($q){
		$sql = "select * from ".self::$tablename." where name like '%$q%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new UserData());

	}


}

?>