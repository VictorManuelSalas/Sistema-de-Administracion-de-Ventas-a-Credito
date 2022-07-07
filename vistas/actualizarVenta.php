<?php
    $datos = ControladorVentas::getVentaById();
    foreach($datos as $row => $item){
      //echo $item[0];
    }

    $editar = new ControladorVentas();
    $editar -> editarVenta();
?>

<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Actualizar datos de la Venta</h1>
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
                    <label for="article">ID</label>
                    <input name="id" value="<?=$item[0];?>" type="text" class="form-control" id="article" placeholder="Ingresa el nombre del articulo" readonly="true">
                  </div> 
                  <div class="form-group">
                    <label for="article">Articulo</label>
                    <input name="articulo" value="<?=$item[1];?>" type="text" class="form-control" id="article" placeholder="Ingresa el nombre del articulo">
                  </div>
                  <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input name="cantidad" value="<?=$item[2];?>" type="number" class="form-control" id="cantidad" placeholder="Cantidad de producto">
                  </div>
                  <div class="form-group">
                    <label for="date">Fecha de Venta</label>
                    <input name="fecha" value="<?=$item[3];?>" type="date" class="form-control" id="date" placeholder="Fecha de venta">
                  </div>
                  <div class="form-group">
                    <label for="cliente">Cliente</label>
                    <input name="cliente" value="<?=$item[4];?>" type="text" class="form-control" id="cliente" placeholder="Nombre del cliente">
                  </div>
                  <div class="form-group">
                    <label for="meses">Cuantos Meses</label>
                    <input name="meses" value="<?=$item[5];?>" type="number" class="form-control" id="meses" placeholder="Ingresa los meses a pagar">
                  </div>
                  <div class="form-group">
                    <label for="total">Total a Pagar</label>
                    <input name="total" value="<?=$item[7];?>" type="number" class="form-control" id="total" placeholder="Ingresa la cantidad a pagar en pesos mexicanos">
                  </div>
                  <div class="form-group">
                    <label for="img_url">Imagen de Producto</label>
                    <input name="img_url" type="file" class="form-control" id="img_url">
                  </div>
               
                  
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <input name="guardar" value="Actualizar" type="submit" class="btn btn-primary" />
                  <a href="index.php?seccion=ventas" class="btn btn-primary ">Regresar</a>
                </div>
              </form>
            </div>

              <!-- /.card-body -->
            </div>

         
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>