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
			header: true,
			footer: true
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
	<h1>Nómina de Colaboradores</h1>
<br>
<div class="demo-html">
<table id="" class="display" style="width:100%">
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
			 <td style="width:30px;"><a href="index.php?view=editarUsuario&idusuario=<?php echo $fila->idusuario;?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-pencil"></i>   Editar</a>
			 <a style="width:30px;"><a href="index.php?view=eliminaUsuario&idusuario=<?php echo $fila->idusuario;?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>    Eliminar</a></td>
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