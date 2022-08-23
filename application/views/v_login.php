<?php  $this->load->view('template/header_login');?>
<!-- /.login-logo -->
<div class="card">
  <div class="card-body login-card-body">
    <p class="login-box-msg">Sign in to start your session</p>
    <form action="<?php echo base_url('login/aksi_login');?>" method="post">
      <div class="input-group mb-3">
        <input type="text" name="username" class="form-control" placeholder="Username">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="text" class="form-control" name="password" placeholder="Password">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-4">
          <button type="submit" class="btn btn-primary btn-block">Sign In</button>
        </div>
        <!-- /.col -->
      </div>
    </form>     
  </div>
  <!-- /.login-card-body -->
</div>
</div>
<!-- /.login-box -->
<?php  $this->load->view('template/footer_login');?>