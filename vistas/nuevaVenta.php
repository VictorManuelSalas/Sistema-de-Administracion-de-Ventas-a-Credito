<?php

    $nuevo = new ControladorVentas();
    $nuevo -> nuevaVenta();

?>

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Registro de Ventas</h1>
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
                <h3 class="card-title">Contesta el siguiente formulario:</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="POST">
                <div class="card-body">
                  
                  <div class="form-group">
                    <label for="article">Articulo</label>
                    <input name="articulo" type="text" class="form-control" id="article" placeholder="Ingresa el nombre del articulo">
                  </div>
                  <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input name="cantidad" type="number" class="form-control" id="cantidad" placeholder="Cantidad de producto">
                  </div>
                  <div class="form-group">
                    <label for="date">Fecha de Venta</label>
                    <input name="fecha" type="date" class="form-control" id="date" placeholder="Fecha de venta">
                  </div>
                  <div class="form-group">
                    <label for="cliente">Cliente</label>
                    <input name="cliente" type="text" class="form-control" id="cliente" placeholder="Nombre del cliente">
                  </div>
                  <div class="form-group">
                    <label for="meses">Cuantos Meses</label>
                    <input name="meses" type="number" class="form-control" id="meses" placeholder="Ingresa los meses a pagar">
                  </div>
                  <div class="form-group">
                    <label for="total">Total a Pagar</label>
                    <input name="total" type="number" class="form-control" id="total" placeholder="Ingresa la cantidad en pesos mexicanos">
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