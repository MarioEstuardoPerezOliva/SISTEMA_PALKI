
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

			  <table id="tbusuarios" class="mdl-data-table" style="width:100%">
        <thead>
            <tr>
            <th>Tipo de Usuario</th>
				  <th>Nombre Completo</th>
				  <th>Apellidos</th>
				  <th>Nombre de usuario</th>
	              <th>Estado</th>
            </tr>
        </thead>
        <tbody>

<?php 


$conexion =Database::getCon();

$sql = "select t.tipousuario,(u.nombre1+u.nombre2) as Nombres, (u.apellido1+u.apellido2) as Apellidos, username, estado_idestado from Usuario as u
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



<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<script>
  $(function () {
    $("#tbusuarios").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
