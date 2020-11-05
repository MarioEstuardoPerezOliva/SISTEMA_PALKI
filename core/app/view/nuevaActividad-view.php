   <!-- Main content -->
   <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card alert alert-success">
            <div class="card-header">
              <center><h3 class="card-title">Asignar Actividad</h3></center>
            </div>
           <div class="card-body">
            <form class="form-group" method="post" id="aggactividad" action="index.php?view=agregarActividad" role="form">
            <div class="form-group">
                <label for="inputStatus">Seleccionar Colaborador</label>
                <select class="form-control" required id="codigocolaborador" name=" codigocolaborador">
                  <option selected disabled> Seleccionar de la lista </option>;
                    <?php
                        $conexion =Database::getCon();
                                                                
                        $query = "select * from Colaborador";
                        $resultado = sqlsrv_query($conexion,$query);    
                        while ($valores = sqlsrv_fetch_array($resultado)) {
                          // En esta sección estamos llenando el select con datos extraidos de una base de datos.
                          ?>      
                          <option value="  <?php echo $valores['codigocolaborador'];?>"> <?php echo $valores['nombre1']."  ".$valores['nombre2']."  ".$valores['apellido1']."  ".$valores['apellido2'];?>  </option>';
                        
                        <?php } ?>
                      </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Seleccionar Tarea</label>
                <select class="form-control" required id=" idtarea" name=" idtarea">
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
                <select class="form-control" required id=" idfinca" name=" idfinca">
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
                <select class="form-control" required id=" idplanta" name=" idplanta">
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
              <input type="date" required name="fechainicial" class="form-control" id="fechainicial" >
              </div>
              <div class="form-group">
                <label for="inputStatus">Hora Inicio</label>
                <select class="form-control" id="horainicio" name="horainicio">
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
              <input type="date" required name="fechafinal" class="form-control" id="fechafinal" >
              </div>
              <div class="form-group">
                <label for="inputStatus">Hora Fin</label>
                <select class="form-control" id="horafin" required name="horafin">
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
                <label for="inputStatus">Avance</label>
                <select class="form-control" id="avance" name="avance" required >
                  <option selected disabled>Seleccionar Porcentaje</option>
                  <option value="0 %">0 %</option>
                  <option value="10 %">10 %</option>
                  <option value="20 %">20 %</option>
                  <option value="30 %">30 %</option>
                  <option value="40 %">40 %</option>
                  <option value="50 %">50 %</option>
                  <option value="60 %">60 %</option>
                  <option value="70 %">70 %</option>
                  <option value="80 %">80 %</option>
                  <option value="90 %">90 %</option>
                  <option value="100 %">100 %</option>
                </select>
              </div>

              <div class="form-group">
                <label for="inputStatus">Seleccionar Estado de la Actividad</label>
                <select class="form-control"  id="idestado" name="idestado" required>
                  <option selected disabled> Seleccionar Estado </option>;
                    <?php
                        $conexion =Database::getCon();
                                                                
                        $query = "select * from EstadoActividad";
                        $resultado = sqlsrv_query($conexion,$query);    
                        while ($valores = sqlsrv_fetch_array($resultado)) {
                          // En esta sección estamos llenando el select con datos extraidos de una base de datos.
                          ?>      
                          <option value="  <?php echo $valores['idestado'];?>"> <?php echo $valores['idestado']." - ".$valores['estado'];?>  </option>';
                        
                        <?php } ?>
                      </select>
              </div>

              <div class="form-group">
                <label for="inputStatus">Seleccionar Encargado</label>
                <select class="form-control" required id="idusuario" name="idusuario">
                  <option selected disabled> Seleccionar de la lista </option>;
                    <?php
                        $conexion =Database::getCon();
                                                                
                        $query = "select * from Usuario";
                        $resultado = sqlsrv_query($conexion,$query);    
                        while ($valores = sqlsrv_fetch_array($resultado)) {
                          // En esta sección estamos llenando el select con datos extraidos de una base de datos.
                          ?>      
                          <option value="  <?php echo $valores['idusuario'];?>"> <?php echo $valores['nombre1']."  ".$valores['nombre2']."  ".$valores['apellido1']."  ".$valores['apellido2'];?>  </option>';
                        
                        <?php } ?>
                      </select>
              </div>
              <div class="form-group">
              <label for="inputEmail1">Observación</label>
              <textarea id="inputDescription" id="motivo" name="motivo" class="form-control" rows="4"></textarea>
              </div>


              <p class="alert alert-warning">Todos los Campos son obligatorios</p>
              <div class="form-group">
                <button type="submit" class="btn btn-danger"><i class='glyphicon glyphicon-pencil'></i> Agregar Actividad</button>
              </div>
            </div>
   
            </form>

      </div>


      </div>
    </section>
    <!-- /.content -->
