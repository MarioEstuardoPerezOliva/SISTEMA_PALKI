<?php 
$mostrar = mostrarTarea($_GET["id"]);

function mostrarTarea($id_tarea){
  $conexion=Database::getCon();
  $sql = "select * from Tarea where idtarea='".$id_tarea."'";
  $resultado= sqlsrv_query($conexion,$sql) or die(sqlsrv_error());
  $fila = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC);

return [
  $fila['tarea']
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
          <h3 class="card-title">Modificar Tarea</h3>
        </div>
        <div class="card-body">
        <div class="row">

	<!-- page content --> 
  <div class="row">
	<div class="col-md-12">
	<br>
  <form class="form-horizontal" method="post" id="aggtarea" action="index.php?view=actualizarTarea" role="form">
  <div class="form-group">
<div class="col-md-6">
  <input type="hidden" name="idtarea" class="form-control" id="idtarea"  value="<?php echo $_GET["id"]?>">
</div>
</div>
  
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Tarea</label>
    <div class="col-md-6">
      <input type="text" name="tarea" class="form-control" id="tarea"  value="<?php echo $mostrar[0]?>">
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-danger"><i class="fa fa-refresh fa-spin"></i> Modificar Tarea</button>
    </div>
  </div>

            </form>

            </div>
  </div>
    </section>