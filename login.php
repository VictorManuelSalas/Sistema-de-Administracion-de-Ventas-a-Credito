<?php 
include "Controlador/ControladorUsuarios.php";
include "modelo/modeloVentas.php";
  $entrar = new ControladorUsuarios();
  $entrar -> login();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Administracion de Creditos | Log in</title>
  <link rel="icon" href="./imagenes/icono.png">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="./AdminPlantilla/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="./AdminPlantilla/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="./AdminPlantilla/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="background-image: url(./imagenes/fondo-login.jpg); background-size: cover; background-repite: no-repet;">
<div class="login-box">
 
  <!-- /.login-logo -->
  <div class="card" style="border-radius: 8%;">
    
  <div class="login-logo">
    <a href="./index.php"><b>Adminsitracion De Creditos</b></a> <br>
    <img src="./imagenes/logo.png" alt="AdminLTE Logo" class="brand-image img-circle" style="opacity: .8; width: 150px; height: 150px;">
  </div>
    <div class="card-body login-card-body" style="border-radius: 8%;">
      <p class="login-box-msg">Sign in to start your session company</p>

      <form method="GET">
        <div class="input-group mb-3">
          <input type="text" name="id" class="form-control" placeholder="Ingrese el ID/Matricula de empleado">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="email" class="form-control" placeholder="Ingrese su email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="row">
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="submit" name="login" value="Entrar" class="btn btn-primary btn-block" />
          </div>
          <!-- /.col -->
        </div>
      </form>

     <?php 
      if(isset($_SESSION['tipo_usuario']) && $_SESSION['tipo_usuario'] == 1){
        echo '
        <p>Eres un administrador</p>
        ';
      }
     ?>
      <!-- /.social-auth-links -->

      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="./AdminPlantilla/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="./AdminPlantilla/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="./AdminPlantilla/dist/js/adminlte.min.js"></script>
</body>
</html>
