<?php
include "controller/Database.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema PALKI | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition login-page" style="background-image: url(dist/img/fondo4.jpg); background-size: 100% ">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><b>SISTEMA</b>  PALKI, S.A</a><center><img src="dist/img/logopalki.jpg" width="210" height="210"></center>
  </div>

  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">INGRESE SUS DATOS</p>

      <form action="index2.php" method="post">
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

