
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
 
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

    <!-- Main content -->
    <section class="content">

      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <!-- Default box -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Agregar Departamento</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                    <i class="fas fa-minus"></i></button>
                </div>
              </div>
              <div class="card-body">
              <div class="row">
	<!-- page content --> 
 <div class="col-md-6">
            <!-- general form elements disabled -->
            <div class="card card-red">
              <div class="card-header">
                <h3 class="card-title">DEPARTAMENTO</h3>
              </div>
           <div class="right_col" role="main" >
            <div class="x_content">
            <form action="plantilla.php"  method="post" id="ingresar"  role="form">
            <div class="field item form-group">
                                            <label class="col-form-label col-md-3 col-sm-3  label-align">Nombre Departamento<span class="required">*</span></label>
                                            <div class="col-md-6 col-sm-6">
                                                <input class="form-control" data-validate-length-range="6" data-validate-words="2" id="iddepartamento"name="iddepartamento" placeholder="ex. Producción" required="required" />
                                        </div>
<br><br>
                                      
                                        <div class="ln_solid">
                                            <div class="form-group">
                                                <div class="col-md-6 offset-md-3">
                                                    <button type='submit' class="btn btn-primary">Crear</button>
                                                    <button type='reset' class="btn btn-success">Cancelar</button>
                                                </div>
                                            </div>
                                        </div>
                </div>
                </div>
            </form>
</div>
              </div>

            </div>
            <!-- /.card -->
          </div>
        </div>
      </div>
    </section>
 
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
  <h1>Lista Departamentos</h1>
<br>
      <div class="demo-html">
        <table id="" class="display" style="width:100%">
        <thead>
          <tr>
          <th>Código</th>
        <th>Nombre Departamento</th>
        <th>Acciones</th>

          </tr>
      </thead>
      <tbody>

<?php 


$conexion =Database::getCon();

$sql = "select iddepartamento as codigo, nombredepartamento as departamento from Departamento";

$resultado= sqlsrv_query($conexion,$sql);

while($fila = sqlsrv_fetch_array($resultado)){

?>
          <tr>
              <td> <?php echo $fila['codigo'];?> </td>
              <td><?php echo $fila['departamento'];?></td>
      <td style="width:30px;"><a href="index.php?view=editarUsuario&idusuario=<?php echo $fila->idusuario;?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-pencil"></i>   Editar</a><a style="width:30px;"><a href="index.php?view=eliminaUsuario&idusuario=<?php echo $fila->idusuario;?>" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i>    Eliminar</a></td>
          </tr>

          <?php }; ?>          
      </tbody>
      <tfoot>
          <tr>
        <th>Código</th>
        <th>Nombre Departamento</th>
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

      </div>
      <!-- /.card -->
    </div>
  </div>
</div>
</section>


<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
