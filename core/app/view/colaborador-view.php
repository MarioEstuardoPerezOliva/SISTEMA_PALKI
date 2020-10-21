<div class="row">
	<div class="col-md-12">
<div class="btn-group pull-right">
<a href="index.php?view=nuevoColaborador" class="btn btn-danger"><i class='fa fa-user'></i> Nuevo Colaborador</a>
<div class="btn-group pull-right">
  <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
    <i class="fa fa-download"></i> Descargar <span class="caret"></span>
  </button>
  <ul class="dropdown-menu" role="menu">
    <li><a class="btn btn-success" href="report/providers-word.php">Word 2007 (.docx)</a></li>
  </ul>
</div>
<a href="index.php?view=buscarColaborador" class="btn btn-success"><i class='fa fa-user'></i> Buscar Colaborador</a>
</div>
		<h1>NÓMINA COLABORADORES</h1>
<br>
 <!-- Main content -->
 <section class="content">
   <div class="container-fluid">
	 <div class="row">
	   <div class="col-12">
		 <div class="card">
		   <div class="card-header">
			 <h3 class="card-title">Colaboradores</h3>
		   </div>
		   <!-- /.card-header -->
		   <div class="card-body">
			 <table id="tbcolaboradores" class="table table-bordered table-striped">
			 <thead>
		 <tr>
		 	   <th>DPI</th>
			   <th>Nombre Completo</th>
			   <th>Apellidos</th>
			   <th>Edad</th>
			   <th>Dirección</th>
			   <th>Género</th>
			   <th>Teléfono</th>
			   <th>Estado</th>
			   <th>Acciones</th>
		 </tr>
	 </thead>
	 <tbody>

<?php 


$conexion =Database::getCon();

$sql = "select c.dpi,concat(c.nombre1,' ',c.nombre2) as Nombres, concat(c.apellido1,' ',c.apellido2) as Apellidos, 
c.edad, c.direccion,c.genero, c.telefono, c.is_active from Colaborador as c";

$resultado= sqlsrv_query($conexion,$sql);

while($fila = sqlsrv_fetch_array($resultado)){

?>
		 <tr>
			 <td> <?php echo $fila['dpi'];?> </td>
			 <td><?php echo $fila['Nombres'];?></td>
			 <td><?php echo $fila['Apellidos'];?></td>
			 <td><?php echo $fila['edad'];?></td>
			 <td><?php echo $fila['direccion'];?></td>
			 <td><?php echo $fila['genero'];?></td>
			 <td><?php echo $fila['telefono'];?></td>
			 <td><?php echo $fila['is_active'];?></td>
			 <td style="width:30px;"><a href="index.php?view=editarUsuario&idusuario=<?php echo $fila->idusuario;?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-pencil"></i>   Editar</a></td>
			 <td style="width:30px;"><a href="index.php?view=eliminaUsuario&idusuario=<?php echo $fila->idusuario;?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>    Eliminar</a></td>
		 </tr>

		 <?php }; ?>          
	 </tbody>
	 <tfoot>
		 <tr>
		 <th>DPI</th>
			   <th>Nombre Completo</th>
			   <th>Apellidos</th>
			   <th>Edad</th>
			   <th>Dirección</th>
			   <th>Género</th>
			   <th>Teléfono</th>
			   <th>Estado</th>
			   <th>Acciones</th>
		 </tr>
		 </tr>
	 </tfoot>
 </table>
		   </div>
		   <!-- /.card-body -->
		 </div>
		 <!-- /.card -->
	   </div>
	   <!-- /.col -->
	 </div>
	 <!-- /.row -->
   </div>
   <!-- /.container-fluid -->
 </section>
 </div>
 </div>


<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</script>
</body>
</html>

<br><br><br><br><br><br><br><br><br><br>
	</div>
</div>