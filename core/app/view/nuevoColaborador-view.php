<div class="row">
	<div class="col-md-12">
	<h1>Nuevo Colaborador</h1>
	<br>
  <form class="form-horizontal" method="post" id="addproduct" action="index.php?view=agregarColaborador" role="form">
  <div class="form-group">

    <label for="inputEmail1" class="col-lg-2 control-label">DPI*</label>
    <div class="col-md-6">
      <input type="text" name="dpi" class="form-control" id="dpi" placeholder="DPI">
    </div>
  </div>
		<form class="form-horizontal" method="post" id="addproduct" action="index.php?view=agregarColaborador" role="form">
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Primer Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre1" class="form-control" id="nombre1" placeholder="Primer Nombre">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Segundo Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre2" class="form-control" id="nombre2" placeholder="Segundo Nombre">
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
      <input type="text" name="edad" class="form-control" required id="edad" placeholder="20">
    </div>
  </div>

  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de Nacimiento*</label>
    <div class="col-md-6">
      <input type="text" name="fechanacimiento" class="form-control" required id="fechanacimiento" placeholder="DD-MM-AAAA">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Dirección*</label>
    <div class="col-md-6">
      <input type="text" name="direccion" class="form-control" required id="direccion" placeholder="Direccion">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Género*</label>
    <div class="col-md-6">
      <input type="text" name="genero" class="form-control" id="genero" placeholder="Masculino / Femenino">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Teléfono*</label>
    <div class="col-md-6">
      <input type="text" name="telefono" class="form-control" id="telefono" placeholder="32586111">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Email*</label>
    <div class="col-md-6">
      <input type="text" name="email" class="form-control" id="email" placeholder="ejemplo@ejemplo.com">
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