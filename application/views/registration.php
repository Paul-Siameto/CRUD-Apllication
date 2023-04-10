<?php $this->load->view('layouts/header'); ?>

<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
  </div>

  <div class="register-box-body">
    <p class="login-box-msg">Register a new membership</p>

    <form action="<?php echo base_url('registration')?>" method="post">
      <div class="form-group has-feedback">
        <label for="">First Name</label>
        <input type="text" class="form-control" placeholder="first name" name="first_name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <small><?php echo form_error('first_name');?></small>
      </div>
      <div class="form-group has-feedback">
        <label for="">Last Name</label>
        <input type="text" class="form-control" placeholder="last name" name="last_name">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        <small><?php echo form_error('last_name');?></small>

      </div>
      <div class="form-group has-feedback">
      <label for="">Email</label>
        <input type="email" class="form-control" placeholder="Email" name="Email">
        <span class="glyphibase_urlcon glyphicon-envelope form-control-feedback"></span>
        <small><?php echo form_error('Email');?></small>

      </div>
      <div class="form-group has-feedback">
      <label for="">Password</label>
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        <small><?php echo form_error('password');?></small>

      </div>
      <div class="form-group has-feedback">
      <label for="">Confirm password</label>
        <input type="password" class="form-control" placeholder="Retype password" name="cpassword">
        <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
        <small><?php echo form_error('cpassword');?></small>

      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> I agree to the <a href="#">terms</a>
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign up using
        Google+</a>
    </div>

    <a href="login.html" class="text-center">I already have a membership</a>
  </div>
  <!-- /.form-box -->
</div>
<!-- /.register-box -->

<?php $this->load->view('layouts/footer'); ?>
