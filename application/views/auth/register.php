<div class="register-box">
  <div class="register-logo"><b>FRB TECHNOLOGY</b></div>

  <div class="card">
    <div class="card-body register-card-body">
      <h5 class="login-box-msg mb-4">Create an Account!</h5>

      <form class="user" method="post" action="<?= base_url('auth/register') ?>">
        <div class="input-group mb-2">
          <input type="text" class="form-control" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <?= form_error('email', '<small class="text-danger">', '</small>') ?>
        <div class="input-group mb-2">
          <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?= form_error('password1', '<small class="text-danger">', '</small>'); ?>
        <div class="input-group mb-2">
          <input type="password" class="form-control" id="password2" name="password2" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-4 mt-3">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mt-3">
        <a href="<?= base_url('auth'); ?>" class="text-center">Login</a>
      </p>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->