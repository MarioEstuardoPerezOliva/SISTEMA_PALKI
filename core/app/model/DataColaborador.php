<?php
class DataColaborador {
	public static $tablename = "colaborador";



	public function DataColaborador(){
		$this->dpi = "";
		$this->nombre = "";
		$this->apellido = "";
		$this->edad = "";
		$this->fechaNacimiento = "";
		$this->dirección = "";
		$this->genero = "";
		$this->telefono = "";
		$this->email = "";
		$this->created_at = "NOW()";
	}

	public function add(){
		$sql = "insert into ".self::$tablename." (dpi,nombre,apellido,edad,fechaNacimiento,dirección,pregenero,telefono,email,created_at) ";
		$sql .= "value (\"$this->dpi\",\"$this->nombre\",\"$this->apellido\",\"$this->edad\",\"$this->fechaNacimiento\",$this->direccion,\"$this->genero\",\"$this->telefono\",$this->email,NOW())";
		return Executor::doit($sql);
	}

	public function add_with_image(){
		$sql = "insert into ".self::$tablename." (dpi,image,nombre,apellido,edad,fechaNacimiento,dirección,pregenero,telefono,email,created_at) ";
		$sql .= "value (\"$this->dpi\",\"$this->image\",\"$this->nombre\",\"$this->apellido\",\"$this->edad\",\"$this->fechaNacimiento\",$this->direccion,\"$this->genero\",\"$this->telefono\",$this->email)";
		return Executor::doit($sql);
	}

	public static function delById($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto DataColaborador previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set dpi=\"$this->dpi\",nombre=\"$this->nombre\",apellido=\"$this->apellido\",edad=\"$this->edad\",fechaNacimiento=\"$this->fechaNacimiento\",direccion=\"$this->direccion\",genero=$this->genero,telefono=\"$this->telefono\",email=\"$this->email\",is_active=\"$this->is_active\" where id=$this->id";
		Executor::doit($sql);
	}

	public function update_passwd(){
		$sql = "update ".self::$tablename." set password=\"$this->password\" where id=$this->id";
		Executor::doit($sql);
	}
	public function update_image(){
		$sql = "update ".self::$tablename." set image=\"$this->image\" where id=$this->id";
		Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new DataColaborador());

	}

	public static function getByMail($mail){
		$sql = "select * from ".self::$tablename." where email=\"$mail\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new DataColaborador());

	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new DataColaborador());
	}

	public static function getAllByPage($start_from,$limit){
		$sql = "select * from ".self::$tablename." where id>=$start_from limit $limit";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DataColaborador());
	}

	public static function getLike($p){
		$sql = "select * from ".self::$tablename." where dpi like '%$p%' or nombre like '%$p%' or id like '%$p%'";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DataColaborador());
	}



	public static function getAllByUserId($user_id){
		$sql = "select * from ".self::$tablename." where user_id=$user_id order by created_at desc";
		$query = Executor::doit($sql);
		return Model::many($query[0],new DataColaborador());

}

?>