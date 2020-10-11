<div class="row">
	<div class="col-md-12">
	<h1>Nuevo Producto</h1>
	<br>
		<form class="form-horizontal" method="post" enctype="multipart/form-data" id="addproduct" action="index.php?view=addproduct" role="form">

    <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Imagen</label>
    <div class="col-md-6">
      <input type="file" name="image" id="image" placeholder="">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">DPI*</label>
    <div class="col-md-6">
      <input type="text" name="dpi" id="dpi" class="form-control" id="dpi" placeholder="DPI del Colaborador">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre*</label>
    <div class="col-md-6">
      <input type="text" name="nombre" required class="form-control" id="nombre" placeholder="Nombre del Colaborador">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Apellido*</label>
    <div class="col-md-6">
      <input type="text" name="apellido" required class="form-control" id="apellido" placeholder="Apellido del Colaborador">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Edad*</label>
    <div class="col-md-6">
      <input type="text" name="edad" required class="form-control" id="edad" placeholder="Edad del Colaborador">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Fecha de Nacimiento*</label>
    <div class="col-md-6">
      <input type="text" name="fechaNacimiento" required class="form-control" id="fechaNacimiento" placeholder="Fecha de Nacimiento del Colaborador">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Dirección*</label>
    <div class="col-md-6">
      <input type="text" name="direccion" required class="form-control" id="direccion" placeholder="Dirección del Colaborador">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Genero*</label>
    <div class="col-md-6">
      <input type="text" name="genero" required class="form-control" id="genero" placeholder="Genero del Colaborador">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Teléfono*</label>
    <div class="col-md-6">
      <input type="text" name="telefono" required class="form-control" id="telefono" placeholder="Teléfono del Colaborador">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">E-mail*</label>
    <div class="col-md-6">
      <input type="text" name="email" required class="form-control" id="email" placeholder="E-mail del Colaborador">
    </div>
  </div>


  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-primary">Agregar Colaborador</button>
    </div>
  </div>
</form>

	</div>
</div>
