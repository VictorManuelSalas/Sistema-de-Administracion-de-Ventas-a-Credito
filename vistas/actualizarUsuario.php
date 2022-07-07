<?php
    $datos = ControladorUsuarios::getUserById();
    foreach($datos as $row => $item){
      //echo $item[0];
    }

    $editar = new ControladorUsuarios();
    $editar -> editarUsuario();
?>

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Actualizar datos del Usuario</h1>
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
                <h3 class="card-title">Complete el Formulario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="id">ID / Matricula</label>
                    <input name="id" value="<?=$item[1];?>" readonly="true" type="text" class="form-control" id="id" placeholder="Matricula">
                  </div>
                  <div class="form-group">
                    <label for="name">Nombre(s) Completo</label>
                    <input name="nombre" value="<?=$item[2];?>" type="text" class="form-control" id="name" placeholder="name">
                  </div>
                  <div class="form-group">
                    <label for="apellido_paterno">Apellido Paterno</label>
                    <input name="apellido_p" value="<?=$item[3];?>" type="text" class="form-control" id="apellido_paterno" placeholder="apellido_p">
                  </div>
                  <div class="form-group">
                    <label for="apellido_materno">Apellido Materno</label>
                    <input name="apellido_m" value="<?=$item[4];?>" type="text" class="form-control" id="apellido_materno" placeholder="apellido_m">
                  </div>
                  <div class="form-group">
                    <label for="edad">Edad</label>
                    <input name="edad" value="<?=$item[5];?>" type="number" class="form-control" id="edad" placeholder="edad">
                  </div>
                  <div class="form-group">
                    <label for="sex">Sexo</label>
                    <input name="sexo" value="<?=$item[6];?>" type="text" class="form-control" id="sex" placeholder="sexo">
                  </div>
                  <div class="form-group">
                    <label for="phone">Telefono</label>
                    <input name="telefono" value="<?=$item[7];?>" type="text" class="form-control" id="phone" placeholder="phone">
                  </div>
                  <div class="form-group">
                    <label for="tipo_usuario">Tipo de Usuario</label>
                    <input name="tipo_usuario" value="<?=$item[10];?>" type="number" class="form-control" id="tipo_usuario" max=1 min=0 >
                  </div>
                  <div class="form-group">
                    <label for="img_url">Imagen de perfil</label>
                    <input name="img_url" type="file" class="form-control" id="img_url">
                  </div>
                  
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <input name="guardar" value="Actualizar" type="submit" class="btn btn-primary" />
                </div>
              </form>
            </div>

              <!-- /.card-body -->
            </div>

         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>