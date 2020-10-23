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
	<a href="index.php?view=nuevoColaborador" class="btn btn-danger"><i class='fa fa-user'></i> Nuevo Colaborador</a>
	<div class="btn-group pull-right">
  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-download"></i> Descargar <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a class="btn btn-success" href="report/providers-word.php">Word 2007 (.docx)</a></li>
  </ul>
</div>
		<h1>Lista de Colaboradores</h1>
<br>
				<div class="demo-html">
					<table id="" class="display" style="width:100%" border="1" class="table table-responsive table-striped">
					<thead>
		 <tr>
				<th>DPI</th>
			   <th>Nombre Completo</th>
			   <th>Dirección</th>
			   <th>Teléfono</th>
			   <th>Email</th>
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
select c.dpi,concat(c.nombre1,' ',c.nombre2,' ',c.apellido1,' ',c.apellido2) as Nombres,  c.direccion, telefono,  email, nombrefinca,nombredepartamento, estado
from Colaborador as c
left join Finca as f on f.idfinca=c.finca_idfinca
left join Departamento as d on d.iddepartamento = c.departamento_iddepartamento
left join Estado as e on e.idestado = c.estado_idestado";

$resultado= sqlsrv_query($conexion,$sql);

while($fila = sqlsrv_fetch_array($resultado)){

?>
		 <tr>
			 <td> <?php echo $fila['dpi'];?> </td>
			 <td><?php echo $fila['Nombres'];?></td>
			 <td><?php echo $fila['direccion'];?></td>
			 <td><?php echo $fila['telefono'];?></td>
			 <td><?php echo $fila['email'];?></td>
			 <td><?php echo $fila['nombrefinca'];?></td>
			 <td><?php echo $fila['nombredepartamento'];?></td>
			 <td><?php echo $fila['estado'];?></td>
			 <td> <a href="index.php?view=editarUsuario" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-pencil"></i></a>
		<a ><a href="index.php?view=eliminaUsuario" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></a></td>
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
