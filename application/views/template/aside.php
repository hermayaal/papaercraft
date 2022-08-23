    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href=<?php echo base_url("data/index"); ?> class="brand-link">
        <img src="<?php echo base_url(); ?>assets/dist/img/logo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
        <span class="brand-text font-weight-light">3D KIDS PAPERCRAFT</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="<?php echo base_url(); ?>assets/dist/img/avatarr.png" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $this->session->userdata("nama"); ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview menu-open">
            <a href=<?php echo base_url("data/index"); ?> class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Input Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=<?php echo base_url("data/input_data_papercraft"); ?> class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Input Data Papercraft</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Input Data Galeri
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href=<?php echo base_url("data/input_data_foto"); ?> class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Data Foto</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="<?php echo base_url("data/input_data_video"); ?>" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Data Video</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href=<?php echo base_url("data/input_data_artikel"); ?> class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Input Data Artikel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=<?php echo base_url("data/input_data_admin"); ?> class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> Input Data Admin</p>
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href=<?php echo base_url("data/data_papercraft"); ?> class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Papercraft</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Galeri
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href=<?php echo base_url("data/data_foto"); ?> class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Data Foto</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href=<?php echo base_url("data/data_video"); ?> class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Data Video</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href=<?php echo base_url("page/tampil_artikel"); ?> class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Artikel</p>
                </a>
              </li>
              <li class="nav-item">
                <a href=<?php echo base_url("data/data_admin"); ?> class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Admin</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="<?php echo base_url("data/tambah_api"); ?>" class="nav-link">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                Input Client API
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>