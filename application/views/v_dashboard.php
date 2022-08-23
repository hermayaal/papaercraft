<?php  $this->load->view('template/header');?>
<?php  $this->load->view('template/aside');?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
        <div class="col-md-12">
          <!-- Widget: user widget style 1 -->
          <div class="card card-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-info">
              <h3 class="widget-user-username"><?php echo $this->session->userdata("nama"); ?></h3>
              <h5 class="widget-user-desc">Admin</h5>
            </div>
            <div class="widget-user-image">
              <img class="img-circle elevation-2" src="<?php echo base_url(); ?>assets/img/avatar2.png?>" alt="User Avatar">
            </div>
            <div class="card-footer">
              <div class="row">
                <div class="col-sm-12 border-right">
                  <center>
                    <h2 class="description-header">Selamat Datang</h2>
                  </center>
                  <!-- /.description-block -->
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
            </div>
          </div>
          <!-- /.widget-user -->
        </div>
      <!-- /.col -->
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <!-- ./col -->
        <div class="col-md-12">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo $this->db->count_all('paper')?></h3>

              <p>Data Papercraft</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <div class="row">
        <div class="col-md-3">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php echo $this->db->count_all('foto')?></h3>
              <p>Data Foto</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-md-3">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo $this->db->count_all('video')?></h3>
              <p>Data Video</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-md-3">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo $this->db->count_all('artikel')?></h3>
              <p>Data Artikel</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
        <!-- ./col -->
        <div class="col-md-3">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo $this->db->count_all('user')?></h3>
              <p>Data Admin</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<?php  $this->load->view('template/footer');?>