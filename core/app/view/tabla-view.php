<!DOCTYPE html>
<html>
<head>
<script>
$(document).ready(function() {
	$('table.display').DataTable( {
		fixedHeader: {
			header: false,
			footer: false
		}
	} );
} );


	</script>
</head>
<body class="wide comments example">
<div class="row">
	<div class="col-md-12">
	<div class="btn-group pull-right">
</div>
		<h1>Nómina Colaboradores</h1>
<br>
				<div class="demo-html">
					<table id="" class="display" style="width:100%" border="1" class="table table-responsive table-striped">
					<thead>
		 <tr>
		 	   <th>Código</th>
				<th>DPI</th>
			   <th>Nombre Completo</th>
			   <th>Apellidos</th>
			   <th>Finca</th>
			   <th>Departamento</th>
			   <th>Estado</th>
			   <th>Acciones</th>
		 </tr>
	 </thead>
	 <tbody>

<?php 


$conexion =Database::getCon();

$sql = "

select c.codigocolaborador,c.dpi,concat(c.nombre1,' ',c.nombre2) as Nombres, concat(c.apellido1,' ',c.apellido2) as Apellidos,  nombrefinca,nombredepartamento, estado
from Colaborador as c
left join Finca as f on f.idfinca=c.finca_idfinca
left join Departamento as d on d.iddepartamento = c.departamento_iddepartamento
left join Estado as e on e.idestado = c.estado_idestado";

$resultado= sqlsrv_query($conexion,$sql);

while($fila = sqlsrv_fetch_array($resultado)){

?>
		 <tr>
			 <td> <?php echo $fila['codigocolaborador'];?> </td>
			 <td> <?php echo $fila['dpi'];?> </td>
			 <td><?php echo $fila['Nombres'];?></td>
			 <td><?php echo $fila['Apellidos'];?></td>
			 <td><?php echo $fila['nombrefinca'];?></td>
			 <td><?php echo $fila['nombredepartamento'];?></td>
			 <td><?php echo $fila['estado'];?></td>
			 <td> <a href="index.php?view=editarUsuario" class=" btn-xs"></a>
		<a href="index.php?view=eliminaUsuario" class="btn btn-xs btn-success">Seleccionar</a></td>
            </tr>

		 <?php }; ?>          
	 </tbody>

 </table>

    <!-- Main content -->
  <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card alert alert-success">
            <div class="card-header">
              <center><h3 class="card-title">Asignar Actividad</h3></center>
            </div>
           <div class="card-body">
            <form class="form-group" method="post" id="aggfinca" action="index.php?view=agregarFinca" role="form">
            <div class="form-group">
                <label for="inputStatus">Seleccionar Colaborador</label>
                <select class="form-control" id="codigocolaborador" name=" codigocolaborador">
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
                <select class="form-control" id=" tarea" name=" tarea">
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
                <label for="inputName">Fecha Inicio</label>
                <input type="date" id="fechainicio" class="form-control">
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
                <label for="inputName">Fecha Fin</label>
                <input type="date" id="fechafin" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputStatus">Hora Fin</label>
                <select class="form-control" id="horafin" name="horainico">
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
    </div>
      </div>

      </div>
    </section>
    <!-- /.content -->

</script>
</body>
</html>

<br><br><br><br><br><br><br><br><br><br>
	</div>
