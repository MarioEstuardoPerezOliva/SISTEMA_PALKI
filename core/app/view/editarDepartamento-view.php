<?php 
$mostrar = mostrarDepartamento($_GET["id"]);

function mostrarDepartamento($id_departamento){
  $conexion=Database::getCon();
  $sql = "select * from Departamento where iddepartamento='".$id_departamento."'";
  $resultado= sqlsrv_query($conexion,$sql) or die(sqlsrv_error());
  $fila = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC);

return [
  $fila['iddepartamento'],
  $fila['nombredepartamento']
];    
       
              
}
                
?>
<section class="content">

<div class="container-fluid">
  <div class="row">
    <div class="col-12">
      <!-- Default box -->
      <div class="card alert alert-warning">
        <div class="card-header">
          <h3 class="card-title">Modificar Departamento</h3>
        </div>
        <div class="card-body">
        <div class="row">
<!-- page content --> 
<div class="col-md-6">
      <!-- general form elements disabled -->
      <div class="card card-red">
        <div class="card-header">
        </div>
     <div class="right_col" role="main" >
      <div class="x_content">
      <form action="index.php?view=actualizarDepartamento"  method="post" id="ingresar"  role="form">
          
      <div class="field item form-group">
      <div class="col-md-6 col-sm-6">
      <input class="form-control" type="hidden" id="iddepartamento"name="iddepartamento" value="<?php echo $mostrar[0]?>" />
      </div><br><br>
      <div class="field item form-group">
      <label class="col-form-label col-md-3 col-sm-3 ">Nombre Departamento<span class="required">*</span></label>
      <div class="col-md-6 col-sm-6">
      <input class="form-control" data-validate-length-range="6" data-validate-words="2" id="nombredepartamento"name="nombredepartamento" value="<?php echo $mostrar[1]?>" />
      </div> </div>
<br><br>
                                
      <div class="ln_solid">
                <div class="form-group">
            <div class="col-md-6 offset-md-3">
          <button type='submit' class="btn btn-danger"> <i class="fa fa-refresh fa-spin"></i>          Modificar</button>
           </div>
           </div>
          </div>
          </div>
          </div>
      </form>
</div>
        </div>

      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
</section>

