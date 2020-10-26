<?php 
$mostrar = mostrarMedidaPlanta($_GET["id"]);

function mostrarMedidaPlanta($id_medidaPlanta){
  $conexion=Database::getCon();
  $sql = "select * from Medidaplanta where idmedidaplanta='".$id_medidaPlanta."'";
  $resultado= sqlsrv_query($conexion,$sql) or die(sqlsrv_error());
  $fila = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC);

return [
  $fila['medidaplanta'],
  $fila['unidadmedida']
];    
       
              
}
                
?>
<!-- Main content -->
<section class="content">

  <div class="container-fluid alert alert-warning">
    <div class="row">
      <div class="col-12">
        <!-- Default box -->
        <div class="card skin-green-light">
          <div class="card-header">
            <h3 class="card-title">Modificar Medida Planta</h3>
          </div>
          <div class="card-body">
          <div class="row">
<!-- page content --> 
<div class="row">
<div class="col-md-12">
<br>
<form class="form-horizontal" method="post" id="aggplanta" action="index.php?view=actualizarMedidaPlanta" role="form">
<div class="form-group">
<div class="col-md-6">
  <input type="hidden" name="idmedidaplanta" class="form-control" id="idmedidaplanta" value="<?php echo $_GET["id"]?>" >
</div>
</div>

<div class="form-group">
<label for="inputEmail1" class="col-lg-2 control-label">Mendida*</label>
<div class="col-md-6">
  <input type="text" name="medidaplanta" class="form-control" id="medidaplanta" value="<?php echo $mostrar[0]?>" >
</div>
</div>

<div class="form-group">
<label for="inputEmail1" class="col-lg-2 control-label">Unidad de Medida*</label>
<div class="col-md-6">
<input class="form-control" id=" unidadmedida" name=" unidadmedida" readonly="readonly"value="<?php echo $mostrar[1]?>">
<select class="form-control" id=" unidadmedida" name=" unidadmedida">
<option selected disabled> Seleccionar de la lista </option>;
    <option value="Centimetro (s)">Centimetro (s)</option>
    <option value="Pulgada (s)">Pulgada (s)</option>
    <option value="Metro (s)">Metro (s)</option>
  </select>
</div>
</div>

<div class="form-group">
<div class="col-lg-offset-2 col-lg-10">
  <button type="submit" class="btn btn-danger"><i class="fa fa-refresh fa-spin"></i>           Modificar Medida Planta</button>
</div>
</div>

</form>


</section>