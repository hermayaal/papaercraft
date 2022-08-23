<?php  $this->load->view('template/header');?>
<?php  $this->load->view('template/aside');?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Artikel</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Artikel</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Artikel</h3>
          </div>     
          <!-- /.card-header -->
          <?php
          foreach ($data->result() as $u) { 
            ?>
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-12">
                  <div class="card card-outline card-primary collapsed-card">
                    <div class="card-header">
                      <h3 class="card-title"><?php echo $u->judul; ?></h3>
                      <div class="card-tools">
                        <a href=<?php echo base_url("data/data_artikel2/".$u->no_id); ?> class="btn btn-tool">
                          <i class="fas fa-plus"></i>
                        </a>
                        <a href=<?php echo base_url("data/edit_artikel/".$u->no_id); ?> class="btn btn-tool">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a href=<?php echo base_url("data/hapus_artikel/".$u->no_id); ?> class="btn btn-tool">
                          <i class="fas fa-trash">
                          </i>
                        </a>                
                      </div>
                      <!-- /.card-tools -->
                    </div>
                    <!-- /.card-header -->
                    <!-- /.card-body -->
                  </div>
                  <!-- /.card -->
                </div>
              </div>
            </div>
          <?php } ?>
          <!-- /.card-body -->
        </div>
        <div class="row">
          <div class="col">
            <!--Tampilkan pagination-->
            <?php echo $pagination; ?>
          </div>
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<?php  $this->load->view('template/footer');?>