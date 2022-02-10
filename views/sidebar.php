<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a class="brand-link">
    <img src="<?php echo constant('URL');?>dist/img/AdminLTELogo.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="<?php echo constant('URL');?>dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
    
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <li class="nav-item">
          <a href="#" class="nav-link">
          <i class="fa-solid fa-building"></i><ion-icon name="home-outline"></ion-icon></i>
            <p>
              Sucursal
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <!-- Inicio de sub menu -->
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo constant('URL'); ?>cargar" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Agregar</p>
              </a>
            </li>
          </ul>
          <!-- Fin de sub menu -->
          <!-- Inicio de sub menu -->
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="<?php echo constant('URL'); ?>consulta" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Consultar</p>
              </a>
            </li>
          </ul>
          <!-- Fin de sub menu -->
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
