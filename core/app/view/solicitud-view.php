
<?php 

$mostrar = mostrarActividad($_GET["id"]);

function mostrarActividad($id_actividad){
$conexion =Database::getCon();

$sql = "
select a.idactividad,concat(c.nombre1,' ',c.nombre2,' ',c.apellido1,' ',c.apellido2) as Nombres, tarea,nombrefinca, nombreplanta,fechainicio,horainicio,fechafin,horafin,e.estado,porcentaje,concat(u.nombre1,' ',u.nombre2,' ',u.apellido1,' ',u.apellido2) as encargado, descripcion
from Actividad as a
left join Colaborador as c on c.codigocolaborador=a.colaborador_codigocolaborador
left join Tarea as t on t.idtarea = a.tarea_idtarea
left join Finca as f on f.idfinca =a.finca_idfinca
left join EstadoActividad as e on e.idestado =a.estadoactividad_idestado
left join Usuario as u on u.idusuario =a.usuario_idusuario
left join Planta as p on p.idplanta = a.planta_idplanta where idactividad='".$id_actividad."'";
$resultado= sqlsrv_query($conexion,$sql) or die(sqlsrv_error());
$fila = sqlsrv_fetch_array($resultado,SQLSRV_FETCH_ASSOC);

return [
  $fila['Nombres'],
  $fila['tarea'],
  $fila['nombrefinca'],
  $fila['nombreplanta'],
  $fila['fechainicio'],
  $fila['horainicio'],
  $fila['fechafin'],
  $fila['horafin'],
  $fila['porcentaje'],
  $fila['estado'],
  $fila['encargado'],
  $fila['descripcion']
];    
             
}
                
?>

  
  <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card alert alert-success">
            <div class="card-header">
              <center><h3 class="card-title">Detalle Actividad</h3></center>
            </div>
           <div class="card-body">
            <form class="form-group" method="post" id="aggactividad" action="index.php?view=actualizarActividad2" role="form">
            <div class="form-group">
                <input class="form-control" readonly="readonly"id="idactividad" type="hidden" name=" idactividad" value="<?php echo $_GET["id"]?>">
              </div>
            <div class="form-group">
                <label for="inputStatus">Colaborador</label>
                <input class="form-control" readonly="readonly"id="codigocolaborador" type="text" name=" codigocolaborador" value="<?php echo $mostrar[0]?>">
              </div>
              <div class="form-group">
                <label for="inputStatus">Tarea</label>
                <input class="form-control" id="idtarea" type="text" name=" idtarea" readonly="readonly" value="<?php echo $mostrar[1]?>">
        
              </div>

              <div class="form-group">
                <label for="inputStatus">Finca</label>
                <input class="form-control"type="text" id=" idfinca" name=" idfinca" readonly="readonly" value="<?php echo $mostrar[2]?>">
                
                        </div>
  
                <div class="form-group">
                <label for="inputStatus">Planta</label>
                <input class="form-control" id=" idplanta" name=" idplanta" readonly="readonly" value="<?php echo $mostrar[3];?>">
                      </select>
              </div>
              <div class="form-group">
              <label for="inputEmail1">Fecha Fin</label>
              <input name="fechainicial" class="form-control" id="fechainicial"  readonly="readonly" value="<?php echo $mostrar[4]?>" >
            </div>
              <div class="form-group">
                <label for="inputStatus">Hora Inicio</label>
                <input class="form-control"  id="horainicio" name="horainicio" readonly="readonly" value="<?php echo $mostrar[5]?>">
                
              </div>
              <div class="form-group">
              <label for="inputEmail1">Fecha Fin</label>
              <input type="text" name="fechafinal" class="form-control" id="fechafinal" readonly="readonly" value="<?php echo $mostrar[6]?>">
              
            </div>
              <div class="form-group">
                <label for="inputStatus">Hora Fin</label>
                <input class="form-control" id="horafin" name="horafin" readonly="readonly" value="<?php echo $mostrar[7]?>">
            
              </div>

              <div class="form-group">
                <label for="inputStatus">Avance</label>
                <input class="form-control" id="avance" name="avance"  readonly="readonly" value="<?php echo $mostrar[8]?>" >
                
              </div>
              <div class="form-group">
                <label for="inputStatus">Seleccionar Estado de la Actividad</label>
                <input class="form-control"  id="idestado" name="idestado" readonly="readonly" value="<?php echo $mostrar[9]?>">
               </div>

              <div class="form-group">
                <label for="inputStatus">Encargado</label>
                <input class="form-control" readonly="readonly"id="idencargado" type="text" name="idencargado" value="<?php echo $mostrar[10]?>">
              </div>

              <div class="form-group">
              <label for="inputEmail1">Observación</label>
              <input class="form-control" readonly="readonly"id="motivo" type="text" name="motivo" value="<?php echo $mostrar[11]?>">
              </div>
            </div>
            </form>
      </div>
      </div>
 
    <!-- /.content -->
   
        <div class="col-md-6">
        <div class="card alert alert-warning">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Solicitud</h3>
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
                <label for="inputStatus">Persona que solicita</label>
                <select class="form-control" required id="idusuario" name=" idusuario">
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
              <label for="inputEmail1">Motivo</label>
              <textarea id="inputDescription" id="motivo" name="motivo" class="form-control" rows="4"></textarea>
              </div>


              <p class="alert alert-success">Todos los campos son obligatorios</p>
              <div class="form-group">
                <button type="submit" class="btn btn-success"><i class='fa fa-sign-out'></i>  Solicitar</button>
               </div>
              <div class="form-group">
              <a href="./?view=actividad"class="btn btn-danger"><i class='fa  fa-close'></i>    Cancelar</a>
              </div>
            </div>
   
            </form>

      </div>


      </div>
    </section>
    <!-- /.content -->
