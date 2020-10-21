<div class="row">
	<div class="col-md-12">
	<a href="index.php?view=nuevoUsuario" class="btn btn-warning pull-right"><i class='glyphicon glyphicon-user'></i> Nuevo Usuario</a>
		<h1>Lista de Usuarios</h1>
<br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">USUARIOS</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
				<thead>
            <tr>
            <th>Tipo de Usuario</th>
				  <th>Nombre Completo</th>
				  <th>Apellidos</th>
				  <th>Nombre de usuario</th>
          <th>Estado</th>
          <th>Estado</th>
          <th>Estado</th>
            </tr>
        </thead>
        <tbody>

<?php 


$conexion =Database::getCon();

$sql = "select t.tipousuario,concat(u.nombre1,' ',u.nombre2) as Nombres, concat(u.apellido1,' ',u.apellido2) as Apellidos, username, estado_idestado from Usuario as u
inner join Tipousuario as t on t.idtipousuario=u.tipousuario_idtipousuario";

$resultado= sqlsrv_query($conexion,$sql);

while($fila = sqlsrv_fetch_array($resultado)){

?>
            <tr>
                <td> <?php echo $fila['tipousuario'];?> </td>
                <td><?php echo $fila['Nombres'];?></td>
                <td><?php echo $fila['Apellidos'];?></td>
                <td><?php echo $fila['username'];?></td>
				<td><?php echo $fila['estado_idestado'];?></td>
				<td style="width:30px;"><a href="index.php?view=editarUsuario&idusuario=<?php echo $fila->idusuario;?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-pencil"></i>   Editar</a></td>
				<td style="width:30px;"><a href="index.php?view=eliminaUsuario&idusuario=<?php echo $fila->idusuario;?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>    Eliminar</a></td>
            </tr>

            <?php }; ?>          
        </tbody>
        <tfoot>
            <tr>
            <th>Tipo de Usuario</th>
				  <th>Nombre Completo</th>
				  <th>Apellidos</th>
				  <th>Nombre de usuario</th>
          <th>Estado</th>
          <th>Estado</th>
          <th>Estado</th>
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
