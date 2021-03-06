
<div class="right_col" role="main">
                <div class="">
                    <div class="page-title">
                        <div class="title_left">
                            <h3>Tabla de Usuarios</h3>
                        </div>                        
                    </div>
                    <div class="clearfix"></div>

                    <div class="row">
                        <div class="col-md-12 col-sm-12" align="center">
                            <div class="x_panel">

                            <script>
$(document).ready(function() {
	$('#example').DataTable( {
		scrollY:        '50vh',
		scrollCollapse: false,
		paging:         true
	} );
} );

	</script>

<body class="wide comments example">
				<div class="demo-html">
					<table id="example" class="display" style="width:100%">
		 <tr>
		 	   <th>Código</th>
				<th>DPI</th>
			   <th>Nombre Completo</th>
			   <th>Apellidos</th>
			   <th>Edad</th>
			   <th>Dirección</th>
			   <th>Género</th>
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
select c.codigocolaborador,c.dpi,concat(c.nombre1,' ',c.nombre2) as Nombres, concat(c.apellido1,' ',c.apellido2) as Apellidos, edad, c.direccion, genero, telefono,  email, nombrefinca,nombredepartamento, estado
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
			 <td><?php echo $fila['edad'];?></td>
			 <td><?php echo $fila['direccion'];?></td>
			 <td><?php echo $fila['genero'];?></td>
			 <td><?php echo $fila['telefono'];?></td>
			 <td><?php echo $fila['email'];?></td>
			 <td><?php echo $fila['nombrefinca'];?></td>
			 <td><?php echo $fila['nombredepartamento'];?></td>
			 <td><?php echo $fila['estado'];?></td>
			 <td> <a href="index.php?view=editarUsuario" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-pencil"></i>   Editar</a>
		<a ><a href="index.php?view=eliminaUsuario" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>    Eliminar</a></td>
            </tr>

		 <?php }; ?>          
	 </tbody>
	 <tfoot>
		 <tr>
		 <th>Código</th>
				<th>DPI</th>
			   <th>Nombre Completo</th>
			   <th>Apellidos</th>
			   <th>Edad</th>
			   <th>Dirección</th>
			   <th>Género</th>
			   <th>Teléfono</th>
			   <th>Email</th>
			   <th>Finca</th>
			   <th>Departamento</th>
			   <th>Estado</th>
			   <th>Acciones</th>
		 </tr>
		 </tr>
	 </tfoot>
 </table>

            <!-- script de tabla-->

            <script src="dist/jquery-3.5.1.js"></script>
            <script src="dist/js/js/jquery.dataTables.min.js"></script>
           
            <script>
                $(document).ready(function() {
                $('#tbusuario3').DataTable( {
                    autoWidth: false,
                    columnDefs: [
                        {
                            targets: ['_all'],
                            className: 'mdc-data-table__cell'
                        }
                    ]
                } );
            } );
            </script>
            <!-- cierre script de tabla-->

                           
                            </div>
                        </div>
                    </div>
                </div>
            </div>
