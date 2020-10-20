<?php $user = UserData::getById($_GET["idusuario"]);?>
<div class="row">
	<div class="col-md-12">
	<h1>Editar Usuario</h1>
	<br>
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=actualizarUsuario" role="form">


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Primer Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre1" value="<?php echo $user->nombre1;?>" class="form-control" id="nombre1" placeholder="Primer Nombre"
      pattern="[A-Za-z]{1,50}" title="Solo letras mayúsculas o minúsculas" maxlength="50">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Segundo Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre2" value="<?php echo $user->nombre2;?>" class="form-control" id="nombre2" placeholder="Segundo Nombre"
      pattern="[A-Za-z]{1,50}" title="Solo letras mayúsculas o minúsculas" maxlength="50">
    </div>
  </div>



  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Primer Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellido1" value="<?php echo $user->apellido1;?>" required class="form-control" id="apellido1" placeholder="Primer Apellido"
      pattern="[A-Za-z]{1,50}" title="Solo letras mayúscualas o minúsculas" maxlength="50">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Segundo Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellido2" value="<?php echo $user->apellido2;?>" required class="form-control" id="apellido2" placeholder="Segundo Apellido"
      pattern="[A-Za-z]{1,50}" title="Solo letras mayúscualas o minúsculas" maxlength="50">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre de Usuario*</label>
    <div class="col-md-6">
      <input type="text" name="username" value="<?php echo $user->username;?>" class="form-control" required id="username" placeholder="Nombre de usuario"
      pattern="[a-z0-9]{1,15}" title="Solo letras minúsculas y números" maxlength="15">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Contrase&ntilde;a</label>
    <div class="col-md-6">
      <input type="password" name="password" class="form-control" id="inputEmail1" placeholder="Contrase&ntilde;a"
      pattern="(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$" title="La contraseña debe tener al menos un dígito, al menos una minúscula, al menos una mayúscula y al menos un caracter especial">
<p class="alert alert-warning">Es necesario ingresar una contrase&ntilde;a para que la modificación sea exitosa.</p>
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label" >Esta activo</label>
    <div class="col-md-6">
<div class="checkbox">
    <label>
      <input type="checkbox" name="is_active" <?php if($user->is_active){ echo "checked";}?>> 
    </label>
  </div>
    </div>
  </div>


  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label" >Es administrador</label>
    <div class="col-md-6">
<div class="checkbox">
    <label>
      <input type="checkbox" name="is_admin" <?php if($user->is_admin){ echo "checked";}?>> 
    </label>
  </div>
    </div>
  </div>

  <p class="alert alert-info">* Campos obligatorios</p>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
    <input type="hidden" name="user_id" value="<?php echo $user->idusuario;?>">
      <button type="submit" class="btn btn-danger"><i class="fa fa-refresh fa-spin"></i>      Actualizar Usuario</button>
    </div>
  </div>
</form>
	</div>
</div>