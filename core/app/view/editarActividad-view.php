<?php 
$mostrar = mostrarActividad($_GET["id"]);

function mostrarActividad($id_actividad){
  $conexion=Database::getCon();
  $sql = "select * from Actividad
  where idactividad='".$id_actividad."'";
  $resultado= sqlsrv_query($conexion,$sql) or die(sqlsrv_error());
  $fila = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC);

return [
  $fila['colaborador_codigocolaborador'],
  $fila['tarea_idtarea'],
  $fila['finca_idfinca'],
  $fila['planta_idplanta'],
  $fila['fechainicio'],
  $fila['horainicio'],
  $fila['fechafin'],
  $fila['horafin']
];    
             
}
                
?>

  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card alert alert-success">
            <div class="card-header">
              <center><h3 class="card-title">Asignar Actividad</h3></center>
            </div>
           <div class="card-body">
            <form class="form-group" method="post" id="aggactividad" action="index.php?view=actualizarActividad" role="form">
            <div class="form-group">
                <input class="form-control" readonly="readonly"id="idactividad" type="hidden" name=" idactividad" value="<?php echo $_GET["id"]?>">
              </div>
            <div class="form-group">
                <label for="inputStatus">Colaborador</label>
                <input class="form-control" readonly="readonly"id="codigocolaborador" type="text" name=" codigocolaborador" value="<?php echo $mostrar[0]?>">
              </div>
              <div class="form-group">
                <label for="inputStatus">Seleccionar Tarea</label>
                <input class="form-control" id="idtarea" type="text" name=" idtarea" readonly="readonly" value="<?php echo $mostrar[1]?>">
                <select class="form-control" id=" idtarea" name=" idtarea">
                  <option selected disabled> Seleccionar de la lista </option>;
                    <?php
                        $conexion =Database::getCon();
                                                                
                        $query = "select * from Tarea";
                        $resultado = sqlsrv_query($conexion,$query);    
                        while ($valores = sqlsrv_fetch_array($resultado)) {
                          // En esta sección estamos llenando el select con datos extraidos de una base de datos.
                          ?>      
                          <option value="  <?php echo $valores['idtarea'];?>"> <?php echo $valores['idtarea']." - ".$valores['tarea'];?>  </option>';
                        
                        <?php } ?>
                      </select>
              </div>

              <div class="form-group">
                <label for="inputStatus">Seleccionar Finca</label>
                <input class="form-control" id=" idfinca" name=" idfinca" readonly="readonly" value="<?php echo $mostrar[2]?>">
                <select class="form-control" id=" idfinca" name=" idfinca">
                  <option selected disabled> Seleccionar de la lista </option>;
                    <?php
                        $conexion =Database::getCon();
                                                                
                        $query = "select * from Finca";
                        $resultado = sqlsrv_query($conexion,$query);    
                        while ($valores = sqlsrv_fetch_array($resultado)) {
                          // En esta sección estamos llenando el select con datos extraidos de una base de datos.
                          ?>      
                          <option value="  <?php echo $valores['idfinca'];?>"> <?php echo $valores['idfinca']." - ".$valores['nombrefinca']." - ".$valores['direccion'];?>  </option>';
                        <?php } ?>
                      </select>
                        </div>
  
                <div class="form-group">
                <label for="inputStatus">Seleccionar Planta</label>
                <input class="form-control" id=" idplanta" name=" idplanta" readonly="readonly" value="<?php echo $mostrar[3];?>">
                <select class="form-control" id=" idplanta" name=" idplanta">
                  <option selected disabled> Seleccionar de la lista </option>;
                    <?php
                        $conexion =Database::getCon();
                                                                
                        $query = "select * from Planta";
                        $resultado = sqlsrv_query($conexion,$query);    
                        while ($valores = sqlsrv_fetch_array($resultado)) {
                          // En esta sección estamos llenando el select con datos extraidos de una base de datos.
                          ?>      
                          <option value="  <?php echo $valores['idplanta'];?>"> <?php echo $valores['idplanta']." - ".$valores['nombreplanta'];?>  </option>';
                        
                        <?php } ?>
                      </select>
              </div>
              <div class="form-group">
              <label for="inputEmail1">Fecha Fin</label>
              <input type="date" name="fechainicial" class="form-control" id="fechainicial"  value="<?php echo $mostrar[4]?>" >
              </div>
              <div class="form-group">
                <label for="inputStatus">Hora Inicio</label>
                <input class="form-control" id="horainicio" name="horainicio" readonly="readonly" value="<?php echo $mostrar[5]?>">
                <select class="form-control" id="horainicio" name="horainicio" >
                  <option selected disabled>Seleccionar Hora</option>
                  <option value="06:00 hrs">06:00 hrs</option>
                  <option value="07:00 hrs">07:00 hrs</option>
                  <option value="08:00 hrs">08:00 hrs</option>
                  <option value="09:00 hrs">09:00 hrs</option>
                  <option value="10:00 hrs">10:00 hrs</option>
                  <option value="11:00 hrs">11:00 hrs</option>
                  <option value="12:00 hrs">12:00 hrs</option>
                  <option value="13:00 hrs">13:00 hrs</option>
                  <option value="14:00 hrs">14:00 hrs</option>
                  <option value="15:00 hrs">15:00 hrs</option>
                  <option value="16:00 hrs">16:00 hrs</option>
                  <option value="17:00 hrs">17:00 hrs</option>
                  <option value="18:00 hrs">18:00 hrs</option>
                  <option value="19:00 hrs">19:00 hrs</option>
                  <option value="20:00 hrs">20:00 hrs</option>
                  <option value="21:00 hrs">21:00 hrs</option>
                </select>
              </div>
              <div class="form-group">
              <label for="inputEmail1">Fecha Fin</label>
              <input type="date" name="fechafinal" class="form-control" id="fechafinal" value="<?php echo $mostrar[6]?>">
              </div>
              <div class="form-group">
                <label for="inputStatus">Hora Fin</label>
                <input class="form-control" id="horafin" name="horafin" readonly="readonly" value="<?php echo $mostrar[7]?>">
                <select class="form-control" id="horafin" name="horafin">
                  <option selected disabled>Seleccionar Hora</option>
                  <option value="06:00 hrs">06:00 hrs</option>
                  <option value="07:00 hrs">07:00 hrs</option>
                  <option value="08:00 hrs">08:00 hrs</option>
                  <option value="09:00 hrs">09:00 hrs</option>
                  <option value="10:00 hrs">10:00 hrs</option>
                  <option value="11:00 hrs">11:00 hrs</option>
                  <option value="12:00 hrs">12:00 hrs</option>
                  <option value="13:00 hrs">13:00 hrs</option>
                  <option value="14:00 hrs">14:00 hrs</option>
                  <option value="15:00 hrs">15:00 hrs</option>
                  <option value="16:00 hrs">16:00 hrs</option>
                  <option value="17:00 hrs">17:00 hrs</option>
                  <option value="18:00 hrs">18:00 hrs</option>
                  <option value="19:00 hrs">19:00 hrs</option>
                  <option value="20:00 hrs">20:00 hrs</option>
                  <option value="21:00 hrs">21:00 hrs</option>
                </select>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-danger"><i class='glyphicon glyphicon-pencil'></i> Agregar Actividad</button>
              </div>
            </div>
   
            </form>

      </div>


      </div>
    </section>
    <!-- /.content -->