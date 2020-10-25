<div class="row">
	<div class="col-md-12">
	<h1>Nuevo Colaborador</h1>
	<br>
  <form class="form-horizontal" method="post" id="addproduct" action="index.php?view=agregarColaborador" role="form">
  <div class="form-group">

    <label for="inputEmail1" class="col-lg-2 control-label">DPI*</label>
    <div class="col-md-6">
      <input type="text" name="dpi" required class="form-control" id="dpi" placeholder="DPI">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Primer Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre1" required class="form-control" id="nombre1" placeholder="Primer Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Segundo Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre2" required class="form-control" id="nombre2" placeholder="Segundo Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Primer Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellido1" required class="form-control" id="apellido1" placeholder="Primer Apellido">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Segundo Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellido2" required class="form-control" id="apellido2" placeholder="Segundo Apellido">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Edad*</label>
    <div class="col-md-6">
      <input type="text" name="edad"required class="form-control" required id="edad" placeholder="20">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Dirección*</label>
    <div class="col-md-6">
      <input type="text" name="direccion"required class="form-control" required id="direccion" placeholder="Direccion">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Género*</label>
    <div class="col-md-6">
    <select class="form-control" required id=" genero" name=" genero">
        <option selected disabled> Seleccionar de la lista </option>;
        <option value="Masculino">Masculino</option>
        <option value="Femenino">Femenino</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Teléfono*</label>
    <div class="col-md-6">
      <input type="text" name="telefono" required class="form-control" id="telefono" placeholder="32586111">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="email" name="email" required class="form-control" id="email" placeholder="ejemplo@ejemplo.com">
    </div>
  </div>
  
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Finca*</label>
    <div class="col-md-6">
    <select class="form-control" required id=" idfinca" name=" idfinca">
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
    <select class="form-control"required id=" iddepartamento" name=" iddepartamento">
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
    <select class="form-control" required id=" idestado" name=" idestado">
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
      <button type="submit" class="btn btn-danger"><i class='glyphicon glyphicon-user'></i> Agregar Colaborador</button>
    </div>
  </div>
</form>
	</div>
</div>