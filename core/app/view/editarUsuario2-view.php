<?php 
$mostrar = mostrarusuario($_GET["idusuario"]);

function mostrarusuario($id_usuario){
  $conexion=Database::getCon();
  $sql = "select * from Usuario where idusuario ='".$id_usuario."'";
  $resultado= sqlsrv_query($conexion,$sql) or die(sqlsrv_error());
  $fila = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC);

return [
  $fila['nombre1'],
  $fila['nombre2'],
  $fila['apellido1'],
  $fila['apellido2'],
  $fila['username'],
  $fila['password'],
  $fila['tipousuario_idtipousuario'],
  $fila['estado_idestado']
];    
       
              
}
                
?>
<div class="row">
	<div class="col-md-12">
	<h1>Agregar Usuario</h1>
	<br>
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=actualizarUsuario" role="form">
    <div class="form-group">
    
    <div class="col-md-6">
      <input type="hidden" name="idusuario" class="form-control" value="<?php echo $_GET["idusuario"]?>" id="idusuario" >
    </div>
  </div>
   


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Primer Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre1" class="form-control" value="<?php echo $mostrar[0]?>" id="nombre1" 
      pattern="[A-Za-z]{1,50}" title="Solo letras mayúsculas o minúsculas" maxlength="50">
    </div>
  </div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Segundo Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre2" class="form-control" id="nombre2" value="<?php echo $mostrar[1]?>"
      pattern="[A-Za-z]{1,50}" title="Solo letras mayúsculas o minúsculas" maxlength="50">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Primer Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellido1" required class="form-control" id="apellido1" value="<?php echo $mostrar[2]?>"
      pattern="[A-Za-z]{1,50}" title="Solo letras mayúscualas o minúsculas" maxlength="50">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Segundo Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellido2" required class="form-control" id="apellido2" value="<?php echo $mostrar[3]?>"
      pattern="[A-Za-z]{1,50}" title="Solo letras mayúscualas o minúsculas" maxlength="50">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre de Usuario*</label>
    <div class="col-md-6">
      <input type="text" name="username" class="form-control" required id="username" value="<?php echo $mostrar[4]?>"
      pattern="[a-z0-9]{1,15}" title="Solo letras minúsculas y números" maxlength="15">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Contrase&ntilde;a*</label>
    <div class="col-md-6">
      <input type="password" name="password" class="form-control" id="inputEmail1" value="<?php echo $mostrar[5]?>"
      pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="La contraseña debe tener al menos un dígito, al menos una minúscula, al menos una mayúscula y al menos un caracter especial" >
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Tipo de Usuario*</label>
    <div class="col-md-6">
    <select class="form-control" id=" idtipousuario" name=" idtipousuario"value="<?php echo $mostrar[6]?>">
   <option selected disabled> Seleccionar de la lista </option>;
<?php
    $conexion =Database::getCon();
                                             
    $query = "select * from Tipousuario";
    $resultado = sqlsrv_query($conexion,$query);    
    while ($valores = sqlsrv_fetch_array($resultado)) {
      // En esta sección estamos llenando el select con datos extraidos de una base de datos.
      ?>      
       <option value="  <?php echo $valores['idtipousuario'];?>"> <?php echo $valores['idtipousuario']." - ".$valores['tipousuario'];?>  </option>';
     
     <?php } ?>
  </select>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Estado*</label>
    <div class="col-md-6">
    <select class="form-control" id=" idestado" name=" idestado" value="<?php echo $mostrar[7]?>">
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
    <button type='submit' class="btn btn-danger"> <i class="fa fa-refresh fa-spin"></i>          Modificar Usuario</button>
    </div>
  </div>
</form>
	</div>
</div>


