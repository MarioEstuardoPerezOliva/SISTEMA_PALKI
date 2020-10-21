<link rel="stylesheet" href="css/material-components-web.min.css">
 <link rel="stylesheet"  href="css/dataTables.material.min.css">
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

            <!-- script de tabla-->

            <script src="js/jquery.dataTables.min.js"></script>
            <script src="js/dataTables.material.min.js"></script>
           
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
