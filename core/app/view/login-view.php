<?php

if(isset($_SESSION["user_id"]) && $_SESSION["user_id"]!=""){
		print "<script>window.location='index.php?view=home';</script>";
}

?>
<br><br><br><br><br>
<div class="content">
<div class="container">
<div class="row">
    	<div class="col-md-4 col-md-offset-4">
    	<?php if(isset($_COOKIE['password_updated'])):?>
    		<div class="alert alert-success">
    		<p><i class='glyphicon glyphicon-off'></i> Se ha cambiado la contraseña exitosamente !!</p>
    		<p>Pruebe iniciar sesion con su nueva contraseña.</p>

    		</div>
    	<?php setcookie("password_updated","",time()-18600);
    	 endif; ?>




<div class="card">
                              <div class="card-header" tyle="background-image: url(dist/img/fondo4.jpg); background-size: 100% ">
                                  <h4 class="title">Acceder a SISTEMA PALKI, S.A.</h4>
                              </div>
                <div class="card-content">
 
 <form accept-charset="UTF-8" role="form" method="post" action="index.php?view=processlogin">
                    <fieldset>
			    	  	<div class="form-group">
			    		    <input class="form-control" placeholder="Usuario" name="mail" type="text">
			    		</div>
			    		<div class="form-group">
			    			<input class="form-control" placeholder="Contraseña" name="password" type="password" value="">
			    		</div>
			    		<input class="btn btn-lg btn-primary btn-block" type="submit" value="Iniciar Sesion">
			    	</fieldset>
			      	</form>

                </div>
              </div>




		</div>
	</div>
	</div>
	</div>
<br><br><br><br><br><br><br><br><br><br><br><br>

body class="hold-transition login-page" style="background-image: url(dist/img/fondo4.jpg); background-size: 100% ">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>SISTEMA</b>  PALKI, S.A</a><center><img src="dist/img/logopalki.jpg" width="210" height="210"></center>
  </div>

  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">INGRESE SUS DATOS</p>

      <form action="index.php" method="post">
        <div class="input-group mb-3">
          <input type="user" require class="form-control" placeholder="Usuario" id="usuario"
          name ="usuario" pattern="[a-z]{1,8}" title="Solo letras minúsculas" maxlength="8">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" require  class="form-control" placeholder="Password" id="password" 
          name="password" pattern="[A-Z][a-z]{1,5}" title="Una letra Mayúscula y Luego Minúsculas" maxlength="5">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
      
          </div>
          <!-- /.col -->
          <center><div class="col-4">
            <button id = "ingreso" type="submit" class="btn btn-primary btn-block">INGRESAR</button>
            <br>
          </div></center>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div> 
</div>

