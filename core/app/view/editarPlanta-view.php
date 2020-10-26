<?php 
$mostrar = mostrarPlanta($_GET["id"]);

function mostrarPlanta($id_planta){
  $conexion=Database::getCon();
  $sql = "select * from Planta where idplanta='".$id_planta."'";
  $resultado= sqlsrv_query($conexion,$sql) or die(sqlsrv_error());
  $fila = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC);

return [
  $fila['nombreplanta'],
  $fila['medidaplanta_idmedidaplanta']
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
                <h3 class="card-title">Modificar Planta</h3>
              </div>
              <div class="card-body">
              <div class="row">
	<!-- page content --> 
  <div class="row">
	<div class="col-md-12">
	<br>
  <form class="form-horizontal" method="post" id="aggplanta" action="index.php?view=actualizarPlanta" role="form"border="1">
  <div class="form-group">
    <div class="col-md-6">
      <input type="hidden" name="idplanta" class="form-control" id="idplanta "value="<?php echo $_GET["id"]?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Nombre de la Planta*</label>
    <div class="col-md-6">
      <input type="text" name="nombreplanta" class="form-control" id="nombreplanta"value="<?php echo $mostrar[0]?>">
    </div>
  </div>
  <div class="form-group">
    <label for="inputEmail1" class="col-lg-2 control-label">Medida*</label>
    <div class="col-md-6">
    <input class="form-control" id=" idmedidaplanta" name=" idmedidaplanta" readonly="readonly" value="<?php echo $mostrar[1]?>">
    <select class="form-control" id=" idmedidaplanta" name=" idmedidaplanta">
   <option value="0"> Seleccionar de la lista </option>;
<?php
    $conexion =Database::getCon();
                                             
    $query = "select * from Medidaplanta";
    $resultado = sqlsrv_query($conexion,$query);    
    while ($valores = sqlsrv_fetch_array($resultado)) {
      // En esta sección estamos llenando el select con datos extraidos de una base de datos.
      ?>      
       <option value="  <?php echo $valores['idmedidaplanta'];?>"> <?php echo $valores['idmedidaplanta']." ) ".$valores['medidaplanta']." - ".$valores['unidadmedida'];?>  </option>';
     
     <?php } ?>
  </select>
    </div>
  </div>

  <div class="form-group">
    <div class="col-lg-offset-2 col-lg-10">
      <button type="submit" class="btn btn-success"><i class="fa fa-refresh fa-spin"></i>  Modificar Planta</button>
    </div>
  </div>

</form>


    </section>
