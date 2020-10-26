<?php 
$mostrar = mostrarFinca($_GET["id"]);

function mostrarFinca($id_finca){
  $conexion=Database::getCon();
  $sql = "select * from Finca where idfinca='".$id_finca."'";
  $resultado= sqlsrv_query($conexion,$sql) or die(sqlsrv_error());
  $fila = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC);

return [
  $fila['nombrefinca'],
  $fila['direccion']
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
          <h3 class="card-title">Modificar Finca</h3>
        </div>
        <div class="card-body">
        <div class="row">

<!-- page content --> 
<div class="row">
<div class="col-md-12">
<br>
<form class="form-horizontal" method="post" id="aggfinca" action="index.php?view=actualizarFinca" role="form">
<div class="form-group">
<div class="col-md-6">
<input type="hidden" name="idfinca" class="form-control" id="idfinca"value="<?php echo $_GET["id"]?>" >
</div>
</div>
<div class="form-group">
<label for="inputEmail1" class="col-lg-2 control-label">Nombre Finca</label>
<div class="col-md-6">
<input type="text" name="nombrefinca" class="form-control" id="nombrefinca" value="<?php echo $mostrar[0]?>">
</div>
</div>

<div class="form-group">
<label for="inputEmail1" class="col-lg-2 control-label">Dirección Finca*</label>
<div class="col-md-6">
<input type="text" name="direccion" class="form-control" id="direccion" value="<?php echo $mostrar[1]?>">
</div>
</div>

<div class="form-group">
<div class="col-lg-offset-2 col-lg-10">
<button type="submit" class="btn btn-success"><i class="fa fa-refresh fa-spin"></i> Modificar Finca</button>
</div>
</div>

      </form>


</section>

