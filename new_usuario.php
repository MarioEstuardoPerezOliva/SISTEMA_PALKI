
<?php require_once "model/conexion.php";
echo "correcto" ?>
<!--Parte Superior-->
<?php require_once "view/parte_superior.php"; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Agregar Usuario</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="plantilla.php">Inicio</a></li>
              <li class="breadcrumb-item active">Usuario</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- page content --> 
   <center> <div class="col-md-6">
            <!-- general form elements disabled -->
            <div class="card card-warning">
              <div class="card-header">
                <h3 class="card-title">INFORMACIÓN PERSONAL</h3>
              </div>
           <div class="right_col" role="main" >
            <div class="x_content">
            <form action="plantilla.php"  method="post" id="ingresar"  role="form">
                                            <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nombres<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text" class="form-control" id="nombreUsuario" name="nombreUsuario" placeholder="ex. Sergio Manuel" required="required" />
                                        </div>
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Apellidos<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                            <input type="text"class="form-control"  id="apellidoUsuario" name="apellidoUsuario" placeholder="ex. Ramos Rosales" required="required" />
                                        </div>
                                        <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Usuario<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input type="text"class="form-control" id ="usuario" name="usuario" class='usuario' required="required"  /></div>
                                        </div>
                                        
                                        <div class="field item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3  label-align">Password<span class="required">*</span></label>
                                        <div class="col-md-6 col-sm-6">
                                          <input  class="form-control" type="password" id="password" name="password"  required ="required"/>
												
             
												<span style="position: absolute;right:15px;top:7px;" onclick="hideshow()" >
													<i id="slash" class="fa fa-eye-slash"></i>
													<i id="eye" class="fa fa-eye"></i>
												</span>
											</div>
										</div>
                                        
                    <input type='hidden' name='insertar' value='insertar'>              
                                       
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button id = "insertar" type='submit' class="btn btn-primary">Crear</button>
                                                    <button type='reset' class="btn btn-success">Cancelar</button>
                                                </div>
                                            </div>
                                        </div>
                </div>
                </div>
            </form>
            <center></div>

            <!-- /page content -->
            <!--Parte Inferior-->
<?php require_once "view/parte_inferior.php"; ?>