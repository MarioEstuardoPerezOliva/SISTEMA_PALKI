<!DOCTYPE html>
<html>
<head>

	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="http://www.datatables.net/rss.xml">
	<link rel="stylesheet" type="text/css" href="/media/css/site-examples.css?_=6a23f3bca2453d0655063d05483e97a4">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.7/css/fixedHeader.dataTables.min.css">
	<style type="text/css" class="init">
	
	</style>
	
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/fixedheader/3.1.7/js/dataTables.fixedHeader.min.js"></script>
	<script type="text/javascript" class="init">
	

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
<a href="index.php?view=nuevoUsuario" class="btn btn-warning pull-right"><i class='glyphicon glyphicon-user'></i> Nuevo Usuario</a>
<h1>Lista de Usuarios</h1>
<br>
<div class="demo-html">
<table id="" class="display" style="width:100%" border="1">
          <thead>
            <tr>
            <th>Tipo de Usuario</th>
				  <th>Nombre Completo</th>
				  <th>Apellidos</th>
				  <th>Nombre de usuario</th>
          <th>Estado</th>
          <th>Acciones</th>

            </tr>
        </thead>
        <tbody>

<?php 


$conexion =Database::getCon();

$sql = "select t.tipousuario,concat(u.nombre1,' ',u.nombre2) as Nombres, concat(u.apellido1,' ',u.apellido2) as Apellidos, username, estado
from Usuario as u
left join Tipousuario as t on t.idtipousuario=u.tipousuario_idtipousuario
left join Estado as e on e.idestado= u.estado_idestado";

$resultado= sqlsrv_query($conexion,$sql);

while($fila = sqlsrv_fetch_array($resultado)){

?>
            <tr>
                <td> <?php echo $fila['tipousuario'];?> </td>
                <td><?php echo $fila['Nombres'];?></td>
                <td><?php echo $fila['Apellidos'];?></td>
                <td><?php echo $fila['username'];?></td>
				        <td><?php echo $fila['estado'];?></td>
        <td> <a href="index.php?view=editarUsuario" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-pencil"></i>   Editar</a>
		<a ><a href="index.php?view=eliminaUsuario" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>    Eliminar</a></td>
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
          <th>Acciones</th>
            </tr>
        </tfoot>
    </table>
				</div>
        </div>
        </div>
	

	<script type="text/javascript">
				  var _gaq = _gaq || [];
				  _gaq.push(['_setAccount', 'UA-365466-5']);
				  _gaq.push(['_trackPageview']);

				  (function() {
					var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
					ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
					var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				  })();
	</script>
</body>
</html>