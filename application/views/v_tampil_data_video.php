<?php  $this->load->view('template/header');?>
<?php  $this->load->view('template/aside');?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data Video</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Video</li>
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
            <h3 class="card-title">Data Video</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Video</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                $no = 1;
                foreach ($datamu as $u) { 
                  ?>
                  <tr>
                    <td><?php echo $no++ ?></td>
                    <td><iframe src="<?php echo $u->filename; ?>" width="560" height="315" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
                    <td>
                      <a href=<?php echo base_url("data/hapus_video/".$u->no_id); ?> class="btn btn-danger a-btn-slide-text">
                       <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                       <span><strong>Delete</strong></span>            
                     </a>
                     <a href=<?php echo base_url("data/edit_video/".$u->no_id); ?> class="btn btn-warning a-btn-slide-text">
                       <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                       <span><strong>Edit</strong></span>            
                     </a>
                   </td>
                 </tr>
               <?php } ?>
             </tbody>
           </table>
         </div>
         <!-- /.card-body -->
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