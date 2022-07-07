<?php
    $datos = ControladorVentas::getVentaById();
    foreach($datos as $row => $item){
      //echo $item[0];
}
?>

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><b>Detalles de Venta</b></h1>
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
                  <!-- -->
                  <img class="profile-user-img img-fluid img-circle" src="<?= $item[0] ?>" alt="" style="width: 150px; heigth: 150px;">
                </div>

                <h3 class="profile-username text-center "><b><?= $item[0] ?></b></h3></h3>

                <p class="text-muted text-center"><b>Venta Realizada Correctamente</b></p>

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>Articulo:</b> <a class="float-right"><?= $item[1]?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Fecha de venta:</b> <a class="float-right"><?= $item[3]?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Cliente:</b> <a class="float-right"><?= $item[4]?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Cantidad:</b> <a class="float-right"><?= $item[2]?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Total a Pagar:</b> <a class="float-right"><?= $item[7]?></a>
                  </li>
                  <li class="list-group-item">
                    <b>Meses A Pagar:</b> <a class="float-right"><?= $item[5]?></a>
                  </li>
                </ul>

                <a href="index.php?seccion=ventas" class="btn btn-primary btn-block"><b>Regresar</b></a>
              </div>
              <!-- /.card-body -->
            </div>

              <!-- /.card-body -->
            </div>

         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>