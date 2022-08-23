<?php  $this->load->view('template/header');?>
<?php  $this->load->view('template/aside');?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Edit Data Papercraft</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Dashboard v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Edit Data Papercraft</h3>
        </div>
        <!-- /.card-header -->  
        <!-- form start -->
        <?php foreach($papercraft as $u){ ?>
          <form method="post" action="<?php echo base_url('data/update_papercraft'); ?>">
            <div class="card-body">
              <div class="form-group">
                <input type="hidden" name="id_paper" value="<?php echo $u->id_paper ?>">
              </div>
              <div class="form-group">
                <label>Judul Paper</label>
                <input type="text" class="form-control" id="judul" name = "judul" value="<?php echo $u->judul ?>">
              </div>
              <div class="form-group">
                <label>Tingkat Paper</label>
                <input type="text" class="form-control" name = "tingkat" value="<?php echo $u->tingkat ?>">
              </div>
              <div class="form-group">
                <label>Kategori Paper</label>
                <input type="text" class="form-control" id="kategori" name="kategori" value="<?php echo $u->kategori ?> ">
              </div>      
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          <?php } ?>
        </div>
        <!-- /.card -->
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-7 connectedSortable">
      </section>
      <!-- right col -->
    </div>
    <!-- /.row (main row) -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<?php  $this->load->view('template/footer');?>