<?php

    $nuevo = new ControladorUsuarios();
    $nuevo -> nuevoUsuario();

?>

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Nuevo Registro de Usuario</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
            
            <div class="col-lg-12" style="margin: auto;">
          
              <!-- /.card-body -->
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST">
                <div class="card-body">
                  <div class="form-group" >
                    <label for="id">ID / Matricula</label>
                    <input name="id" type="text" class="form-control" id="id" placeholder="Matricula">
                  </div>
                  <div class="form-group">
                    <label for="name">Nombre(s) Completo</label>
                    <input name="nombre" type="text" class="form-control" id="name" placeholder="name">
                  </div>
                  <div class="form-group">
                    <label for="apellido_paterno">Apellido Paterno</label>
                    <input name="apellido_p" type="text" class="form-control" id="apellido_paterno" placeholder="apellido_p">
                  </div>
                  <div class="form-group">
                    <label for="apellido_materno">Apellido Materno</label>
                    <input name="apellido_m" type="text" class="form-control" id="apellido_materno" placeholder="apellido_m">
                  </div>
                  <div class="form-group">
                    <label for="edad">Edad</label>
                    <input name="edad" type="number" class="form-control" id="edad" placeholder="edad">
                  </div>
                  <div class="form-group">
                    <label for="sex">Sexo</label>
                    <input name="sexo" type="text" class="form-control" id="sex" placeholder="sexo">
                  </div>
                  <div class="form-group">
                    <label for="phone">Telefono</label>
                    <input name="telefono" type="text" class="form-control" id="phone" placeholder="phone">
                  </div>
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input name="email" type="email" class="form-control" id="email" placeholder="usuario@gmail.com">
                  </div>
                  <div class="form-group">
                    <label for="tipo_usuario">Tipo de Usuario</label>
                    <input name="tipo_usuario" type="number" class="form-control" id="tipo_usuario" max=1 min=0 >
                  </div>
                  
                  
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <input name="guardar" value="Guardar" type="submit" class="btn btn-primary" />
                </div>
              </form>
            </div>

              <!-- /.card-body -->
            </div>

         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>