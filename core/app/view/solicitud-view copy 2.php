
<?php 

$mostrar = mostrarActividad($_GET["id"]);

function mostrarActividad($id_actividad){
$conexion =Database::getCon();

$sql = "
select a.idactividad,concat(c.nombre1,' ',c.nombre2,' ',c.apellido1,' ',c.apellido2) as Nombres, tarea,nombrefinca, nombreplanta,fechainicio,horainicio,fechafin,horafin,e.estado,porcentaje,concat(c.nombre1,' ',c.nombre2,' ',c.apellido1,' ',c.apellido2) as encargado
from Actividad2 as a
left join Colaborador as c on c.codigocolaborador=a.colaborador_codigocolaborador
left join Tarea as t on t.idtarea = a.tarea_idtarea
left join Finca as f on f.idfinca =a.finca_idfinca
left join EstadoActividad as e on e.idestado =a.estadoactividad_idestado
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
  $fila['encargado']
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
              <div class="form-group">
                <label for="inputEstimatedBudget">Estimated budget</label>
                <input type="number" id="inputEstimatedBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Total amount spent</label>
                <input type="number" id="inputSpentBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Estimated project duration</label>
                <input type="number" id="inputEstimatedDuration" class="form-control">
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Create new Porject" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    <!-- /.content -->
  <!-- /.content-wrapper -->
