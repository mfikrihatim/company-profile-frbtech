<div class="login-box">
  <div class="login-logo"><b>FRB TECHNOLOGY</b></div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <h1 class="login-box-msg mb-4">Login</h1>

      <form action="<?php echo base_url('login/aksi_login'); ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" id="username" name="username" placeholder="Username" value="<?= set_value('username'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
            <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <?= form_error('username', '<small class="text-danger">', '</small>') ?>
        <div class="input-group mt-3">
          <input type="password" class="form-control" id="password" name="password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
            <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?= form_error('password', '<small class="text-danger">', '</small>') ?>
        <div class="row mt-4">
          <div class="col-4 mb-4">
            <button type="submit" class="btn btn-primary btn-block" value="login">Login</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mb-0">
        <a href="#">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="<?= base_url('auth/register'); ?>" class="text-center">Register</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

