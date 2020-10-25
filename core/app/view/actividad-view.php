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
  <a href="index.php?view=nuevaActividad" class="btn btn-warning pull-right"><i class='glyphicon glyphicon-file'></i> Asignar Actividad</a>
	<div class="btn-group pull-right">
</div>
		<h1>ACTIVIDADES</h1>
<br>
				<div class="demo-html">
					<table id="" class="display" style="width:100%" border="1" class="table table-responsive table-striped">
					<thead>
		 <tr>
		 	   <th>Código</th>
			   <th>Nombre Completo</th>
         <th>Tarea</th>
         <th>Planta</th>
         <th>Finca</th>
         <th>Fecha-Hora Inicio</th>
         <th>Fecha-Hora Fin</th>
			   <th>Acciones</th>
		 </tr>
	 </thead>
	 <tbody>

<?php 


$conexion =Database::getCon();

$sql = "
select a.idactividad,concat(c.nombre1,' ',c.nombre2,' ',c.apellido1,' ',c.apellido2) as Nombres, tarea,nombrefinca, nombreplanta, concat(fechainicio,' ',horainicio) as Fecha_Hora_inicio, concat(fechafin,' ',horafin) as Fecha_Hora_fin
from Actividad2 as a
left join Colaborador as c on c.codigocolaborador=a.colaborador_codigocolaborador
left join Tarea as t on t.idtarea = a.tarea_idtarea
left join Finca as f on f.idfinca =a.finca_idfinca
left join Planta as p on p.idplanta = a.planta_idplanta";

$resultado= sqlsrv_query($conexion,$sql);

while($fila = sqlsrv_fetch_array($resultado)){

?>
		 <tr>
			 <td> <?php echo $fila['idactividad'];?> </td>
			 <td><?php echo $fila['Nombres'];?></td>
			 <td><?php echo $fila['tarea'];?></td>
			 <td><?php echo $fila['nombreplanta'];?></td>
       <td><?php echo $fila['nombrefinca'];?></td>
       <td><?php echo $fila['Fecha_Hora_inicio'];?></td>
       <td><?php echo $fila['Fecha_Hora_fin'];?></td>
       <td> <a href="index.php?view=editarActividad&id=<?php echo $fila['idactividad'];?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-pencil"></i>   Editar</a>
	   <a href="index.php?view=eliminarActividad&id=<?php echo $fila['idactividad'];?>"  class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>    Eliminar</a></td>
            </tr>
		 <?php }; ?>          
	 </tbody>

 </table>
 </div>       
    </div>
    
 
</script>
</body>
</html>

<br><br><br><br><br><br><br><br><br><br>
	</div>
