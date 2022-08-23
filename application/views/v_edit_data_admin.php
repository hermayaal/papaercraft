<?php  $this->load->view('template/header');?>
<?php  $this->load->view('template/aside');?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Admin</h1>
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
  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Data Admin</h3>
        </div>
        <!-- /.card-header -->
        <?php foreach($admin as $u){ ?>
          <form method="post" action="<?php echo base_url('data/update_admin'); ?>">
            <div class="card-body">
              <div class="form-group">
                <input type="hidden" class="form-control" name = "no_id" value="<?php echo $u->no_id ?>" >
                <label>Username</label>
                <input type="text" class="form-control" name = "username" value="<?php echo $u->username ?>" >
              </div>
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control" name = "nama" value="<?php echo $u->nama ?>" >
              </div>
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name = "password" value="<?php echo $u->password ?>" >
              </div>
              <div class="card-footer">
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>
              </div>
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