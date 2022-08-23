<?php  $this->load->view('template/header');?>
<?php  $this->load->view('template/aside');?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Data Papercraft</h1>
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
          <h3 class="card-title">Data Papercraft</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form method="post" action="<?php echo base_url('file/insert/'); ?>" enctype="multipart/form-data">
          <div class="card-body">
            <div class="form-group">
              <label>Judul Paper</label>
              <input type="text" class="form-control" id="judul" name = "judul" placeholder="Masukkan Judul Paper" >
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="tingkat" value="Easy">
              <label class="form-check-label">Easy</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="tingkat" value="Medium">
              <label class="form-check-label">Medium</label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="tingkat" value="Hard">
              <label class="form-check-label">Hard</label>
            </div>            
            <div class="form-group">
              <label>Kategori Paper</label>
              <input type="text" class="form-control" id="kategori" name="kategori" placeholder="Masukkan Kategori" >
            </div>
            <div class="form-group">
              <label>Gambar Paper</label>
              <textarea class="textarea" id="gambar" name="gambar" placeholder="Place some text here"
              style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            </div>
            <div class="form-group">
              <label for="exampleInputFile">File input</label>
              <div class="input-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" id="exampleInputFile" name = "upload">
                  <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                </div>
              </div>
            </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" value="simpan" class="btn btn-primary">Submit</button>
          </div>
        </form>
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