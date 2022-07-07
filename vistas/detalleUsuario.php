<?php
    $datos = ControladorUsuarios::getUserById();
    foreach($datos as $row => $item){
      //echo $item[0];
}

?>

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Perfil de Usuario</h1>
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
            
            <div class="col-lg-6" style="margin: auto;">
          

            <div class="card card-primary card-outline" style="margin: auto;">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle" src=" <?= $item[8] ?>" alt="User profile picture">
                </div>

                <h3 class="profile-username text-center "><b><?= $item[2], " " ,$item[3]," ", $item[ 4]  ?></b></h3></h3>

                <p class="text-muted text-center"><?= $item[1]?></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Followers</b> <a class="float-right">1,322</a>
                  </li>
                  <li class="list-group-item">
                    <b>Following</b> <a class="float-right">543</a>
                  </li>
                  <li class="list-group-item">
                    <b>Friends</b> <a class="float-right">13,287</a>
                  </li>
                </ul>

                <a href="index.php?seccion=listaUsuarios" class="btn btn-primary btn-block"><b>Regresar</b></a>
              </div>
              <!-- /.card-body -->
            </div>

              <!-- /.card-body -->
            </div>

         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>