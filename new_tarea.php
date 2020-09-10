<!--Parte Superior-->
<?php require_once "view/parte_superior.php"; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Agregar Tarea</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="plantilla.php">Inicio</a></li>
              <li class="breadcrumb-item active">Tarea</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <!-- page content --> 
           <div class="right_col" role="main" align="center">
            <div class="x_content">
            <form class="" action="" method="post" novalidate>
            <span class="section">INFORMACIÓN Tarea</span>
                                            <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nombre Tarea<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nombreTarea" placeholder="ex. Siembra" required="required" />
                                        </div>
                                        </div>
                                      
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary">Crear</button>
                                                    <button type='reset' class="btn btn-success">Cancelar</button>
                                                </div>
                                            </div>
                                        </div>
                </div>
                </div>
            </form>
</div>
            <!-- /page content -->
            <!--Parte Superior-->
<?php require_once "view/parte_inferior.php"; ?>