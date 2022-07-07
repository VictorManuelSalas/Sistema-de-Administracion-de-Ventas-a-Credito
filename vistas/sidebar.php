 <!-- Brand Logo -->
 <a href="https://www.youtube.com/watch?v=v0WpoQrOF20&list=RDMMv0WpoQrOF20&start_radio=1" class="brand-link" style="background-color: rgb(0, 56, 102);">
      <img src="./imagenes/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Ventas a Creditos INC.</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" style="background-color: rgb(0, 56, 102); ">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
          <?php 
            echo '
              <img src="'.$_SESSION['img_url'].'" class="img-circle elevation-2" alt="User Image" style="width:"100px"; height: "100px"; "/>
            '
          ?>
         
        </div>
        <div class="info">
          <?php
            echo '
              <a href="#" class="d-block">' .$_SESSION['nombre']. '</a> 
              <a href="index.php?seccion=logout">Salir</a>
            '
          ?>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Starter Pages
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?seccion=home" class="nav-link active">
                  <i class="fa fa-home nav-icon"></i>
                  <p>Home Page</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="index.php?seccion=inicio" class="nav-link">
                  <i class="fa fa-star nav-icon"></i>
                  <p>Inicio</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="index.php?seccion=listaUsuarios" class="nav-link">
                  <i class="fa fa-user nav-icon"></i>
                  <p>Usuarios</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="index.php?seccion=articulos" class="nav-link">
                  <i class="fa fa-desktop nav-icon"></i>
                  <p>Articulos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="index.php?seccion=clientes" class="nav-link">
                  <i class="fa fa-user nav-icon"></i>
                  <p>Clientes</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="index.php?seccion=cuentas" class="nav-link">
                  <i class="fas fa-file-invoice-dollar nav-icon"></i>
                  <p>Cuentas</p>
                  
                </a>
              </li>

              <li class="nav-item">
                <a href="index.php?seccion=pagos" class="nav-link">
                  <i class="fas fa-money-bill-wave nav-icon"></i>
                  <p>Pagos</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="index.php?seccion=proveedores" class="nav-link">
                  <i class="fa fa-truck nav-icon"></i>
                  <p>Proveedores</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="index.php?seccion=ventas" class="nav-link">
                  <i class="fas fa-clipboard-check nav-icon"></i>
                  <p>Ventas</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
                Simple Link
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>