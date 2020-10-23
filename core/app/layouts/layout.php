<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>SISTEMA PALKI | Inicio</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.4 -->
    <link href="plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="plugins/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="plugins/dist/css/skins/skin-green.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="plugins/datatables/dataTables.bootstrap.css">
    
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.css">
  
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>

  
<script src="plugins/jquery/jquery-2.1.4.min.js"></script>
<script src="plugins/morris/raphael-min.js"></script>
<script src="plugins/morris/morris.js"></script>
<link rel="stylesheet" href="plugins/morris/morris.css">
<link rel="stylesheet" href="plugins/morris/example.css">
          <script src="plugins/jspdf/jspdf.min.js"></script>
          <script src="plugins/jspdf/jspdf.plugin.autotable.js"></script>
          <?php if(isset($_GET["view"]) && $_GET["view"]=="sell"):?>
<script type="text/javascript" src="plugins/jsqrcode/llqrcode.js"></script>
<script type="text/javascript" src="plugins/jsqrcode/webqr.js"></script>
          <?php endif;?>

  </head>

  <body class="<?php if(isset($_SESSION["user_id"]) || isset($_SESSION["client_id"])):?>  skin-green sidebar-mini <?php else:?>login-page<?php endif; ?>" >
    <div class="wrapper">
      <!-- Main Header -->
      <?php if(isset($_SESSION["user_id"]) || isset($_SESSION["client_id"])):?>
      <header class="main-header">
        <!-- Logo -->
        <a href="./" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>S</b>P</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg">SISTEMA PALKI, S.A.</span>
        </a>
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->


          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
              
          <div class="user-panel">
            <div class="pull-left image">
              <img src="core/app/img/logopalki.jpg" class="img-circle" alt="User Image" />
            </div>
  
              <!-- Control Sidebar Toggle Button -->
            </ul>
          </div>
        </nav>

      </header>




      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">




        <section class="sidebar">


 <div class="user-panel">
            <div class="pull-left image">
              <img src="core/app/img/logopalki.jpg" class="img-circle" alt="User Image" />
            </div>
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle">
                  <!-- The user image in the navbar-->
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="  "> </span>
                </a>
                <br><br>
                <a href="#"><i class="fa fa-circle text-success"></i> Online </a>
                 <a href="./logout.php"><i class="  fa fa-circle text-warning"></i>  Salir</a>
          </div>

          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header bg-red">CONTROL JORNALES</li>
            <?php if(isset($_SESSION["user_id"])):?>
                        <li><a href="./index.php?view=home"><i class='fa fa-home'></i> <span>Escritorio</span></a></li>
            <!--<li><a href="./?view=products"><i class='fa fa-database'></i> <span>Gestión</span></a></li>-->
            <li class="treeview">
              <a href="#"><i class='fa fa-users'></i> <span>Colaboradores</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="./?view=colaboradores">Colaboradores</a></li>
              </ul>
            </li>


            <li class="treeview">
              <a href="#"><i class='fa fa-area-chart'></i> <span>Tareas/Actividad</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="./?view=actividad">Actividades</a></li>

              </ul>
            </li>
                       <li class="treeview">
              <a href="#"><i class='fa fa-file-text-o'></i> <span>Reportes</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="./?view=usuarios">Actividad</a></li>

              </ul>
            </li>


            <li class="treeview">
              <a href="#"><i class='fa fa-cog'></i> <span>Administración</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                <li><a href="./?view=usuario2">Usuarios</a></li>
                <li><a href="./?view=departamento">Departamento</a></li>
                <li><a href="./?view=finca">Finca</a></li>
                <li><a href="./?view=planta">Planta</a></li>
                <li><a href="./?view=medidaPlanta">Medida Planta</a></li>
                <li><a href="./?view=tarea">Tareas</a></li>

              </ul>
            </li>
          <?php endif;?>

          </ul><!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>
    <?php endif;?>

      <!-- Content Wrapper. Contains page content -->
      <?php if(isset($_SESSION["user_id"]) || isset($_SESSION["client_id"])):?>
      <div class="content-wrapper">
      <div class="content">
        <?php View::load("index");?>
        </div>
      </div><!-- /.content-wrapper -->

        <footer class=" main-footer bg-green " >
        <div class=" pull-right hidden-xs ">
          <b>Version</b> 1.0  mperez08
        </div>
        <strong>Copyright &copy; 2020 Sistema PALKI, S.A. </strong> Todos los derechos reservados
        <div class="float-right d-none d-sm-inline-block">
      </div>
      </footer>
      <?php else:?>
<div class="login-box">
      <div class="login-logo">
      <body style="background-image: url(core/app/img/fondo4.jpg); background-size: 100% ">
        <a href="./">INGRESE SUS DATOS</a>
        <img src="core/app/img/logopalki2.jpg" height="250">
      </div><!-- /.login-logo -->
      
      <div class="login-box-body">
        <form action="./?action=processlogin" method="post">
          <div class="form-group has-feedback">
            <input type="text" name="username" required class="form-control" placeholder="Usuario"/>
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" required class="form-control" placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">

            <div class="col-xs-12">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Acceder</button>
            </div><!-- /.col -->
          </div>
        </form>
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->  
      <?php endif;?>


    </div><!-- ./wrapper -->

    <!-- REQUIRED JS SCRIPTS -->

    <!-- jQuery 2.1.4 -->
    <!-- Bootstrap 3.3.2 JS -->
    <script src="plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- AdminLTE App -->
    <script src="plugins/dist/js/app.min.js" type="text/javascript"></script>

    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>

<!-- script de tabla-->

<script src="js/jquery.dataTables.min.js"></script>
            <script src="js/dataTables.material.min.js"></script>
           
            <script>
                $(document).ready(function() {
                $('#tbusuarios').DataTable( {
                    autoWidth: true,
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
<script>
 
    <script type="text/javascript">
      $(document).ready(function(){
        $(".datatable").DataTable({
          "language": {
        "sProcessing":    "Procesando...",
        "sLengthMenu":    "Mostrar _MENU_ registros",
        "sZeroRecords":   "No se encontraron resultados",
        "sEmptyTable":    "Ningún dato disponible en esta tabla",
        "sInfo":          "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty":     "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":  "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":   "",
        "sSearch":        "Buscar:",
        "sUrl":           "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
            "sFirst":    "Primero",
            "sLast":    "Último",
            "sNext":    "Siguiente",
            "sPrevious": "Anterior"
        },
        "oAria": {
            "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
            "sSortDescending": ": Activar para ordenar la columna de manera descendente"
        }
    }
        });
      });
    </script>

<script>
  $(function () {
    $("#example11").DataTable({
      "responsive": true,
      "autoWidth": true,
    });
    $('#example23').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>

  </body>
</html>

