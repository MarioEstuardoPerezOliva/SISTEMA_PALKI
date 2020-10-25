<?php 
$mostrar = mostrarColaborador($_GET["idcolaborador"]);

function mostrarColaborador($id_colaborador){
  $conexion=Database::getCon();
  $sql = "select * from Colaborador where codigocolaborador='".$id_colaborador."'";
  $resultado= sqlsrv_query($conexion,$sql) or die(sqlsrv_error());
  $fila = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC);

return [
  $fila['dpi'],
  $fila['nombre1'],
  $fila['nombre2'],
  $fila['apellido1'],
  $fila['apellido2'],
  $fila['edad'],
  $fila['direccion'],
  $fila['genero'],
  $fila['telefono'],
  $fila['email'],
  $fila['finca_idfinca'],
  $fila['departamento_iddepartamento'],
  $fila['estado_idestado']
];    
             
}
                
?>

<div class="row">
	<div class="col-md-12">
	<h1>Nuevo Colaborador</h1>
	<br>
  <form class="form-horizontal" method="post" id="addproduct" action="index.php?view=actualizarColaborador" role="form">
  <div class="form-group">
    
    <div class="col-md-6">
      <input type="hidden" name="codigocolaborardor" class="form-control" value="<?php echo $_GET["idcolaborador"]?>" id="codigocolaborador" >
    </div>
  </div>
 <div class="form-group">

    <label for="inputEmail1" class="col-lg-2 control-label">DPI*</label>
    <div class="col-md-6">
      <input type="text" name="dpi" class="form-control" id="dpi" value="<?php echo $mostrar[0]?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Primer Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre1" required class="form-control" id="nombre1" value="<?php echo $mostrar[1]?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Segundo Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre2" required class="form-control" id="nombre2" value="<?php echo $mostrar[2]?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Primer Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellido1"  required  required class="form-control" id="apellido1" value="<?php echo $mostrar[3]?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Segundo Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellido2" required class="form-control" id="apellido2" value="<?php echo $mostrar[4]?>">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Edad*</label>
    <div class="col-md-6">
      <input type="text" name="edad" required class="form-control" required id="edad" value="<?php echo $mostrar[5]?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Dirección*</label>
    <div class="col-md-6">
      <input type="text" name="direccion" required class="form-control" required id="direccion" value="<?php echo $mostrar[6]?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Género*</label>
    <div class="col-md-6">
    <input class="form-control"   id=" genero" name=" genero" readonly="readonly" value="<?php echo $mostrar[7]?>">
    <select class="form-control"   id=" genero" name=" genero">
        <option selected disabled> Seleccionar de la lista </option>;
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Teléfono*</label>
    <div class="col-md-6">
      <input type="text" name="telefono" required class="form-control" id="telefono" value="<?php echo $mostrar[8]?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="email" name="email" required class="form-control" id="email" value="<?php echo $mostrar[9]?>">
    </div>
  </div>
  
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Finca*</label>
    <div class="col-md-6">
    <input class="form-control"  id=" idfinca" name=" idfinca" readonly="readonly" value="<?php echo $mostrar[10]?>">
    <select class="form-control"  id=" idfinca" name=" idfinca">
   <option selected disabled> Seleccionar de la lista </option>;
<?php
    $conexion =Database::getCon();
                                             
    $query = "select * from Finca";
    $resultado = sqlsrv_query($conexion,$query);    
    while ($valores = sqlsrv_fetch_array($resultado)) {
      // En esta sección estamos llenando el select con datos extraidos de una base de datos.
      ?>      
       <option value="  <?php echo $valores['idfinca'];?>"> <?php echo $valores['idfinca']." - ".$valores['nombrefinca']." - ".$valores['direccion'];?>  </option>';
     
     <?php } ?>
  </select>
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Departamento*</label>
    <div class="col-md-6">
    <input class="form-control" id=" iddepartamento"  name=" iddepartamento" readonly="readonly" value="<?php echo $mostrar[11]?>">
    <select class="form-control" id=" iddepartamento" name=" iddepartamento" >
   <option selected disabled> Seleccionar de la lista </option>;
<?php
    $conexion =Database::getCon();
                                             
    $query = "select * from Departamento";
    $resultado = sqlsrv_query($conexion,$query);    
    while ($valores = sqlsrv_fetch_array($resultado)) {
      // En esta sección estamos llenando el select con datos extraidos de una base de datos.
      ?>      
       <option value="  <?php echo $valores['iddepartamento'];?>"> <?php echo $valores['iddepartamento']." - ".$valores['nombredepartamento'];?>  </option>';
     
     <?php } ?>
  </select>
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Estado*</label>
    <div class="col-md-6">
    <input class="form-control"  id=" idestado" name=" idestado" readonly="readonly" value="<?php echo $mostrar[12]?>">
    <select class="form-control"  id=" idestado" name=" idestado">
   <option selected disabled> Seleccionar de la lista </option>;
<?php
    $conexion =Database::getCon();
                                             
    $query = "select * from Estado";
    $resultado = sqlsrv_query($conexion,$query);    
    while ($valores = sqlsrv_fetch_array($resultado)) {
      // En esta sección estamos llenando el select con datos extraidos de una base de datos.
      ?>      
       <option value="  <?php echo $valores['idestado'];?>"> <?php echo $valores['idestado']." - ".$valores['estado'];?>  </option>';
     
     <?php } ?>
  </select>
    </div>
  </div>

  <p class="alert alert-warning">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-danger"><i class="fa fa-refresh fa-spin"></i>       Modificar Colaborador</button>
    </div>
  </div>
</form>
	</div>
</div>