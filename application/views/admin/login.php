<div class="login-box">
  <div class="login-logo">
    <a href="#">Myntra</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>

    <?php if (isset($error)) : ?>
      <div class="alert alert-danger"><?php echo $this->lang->line($error) ; ?></div>
    <?php endif ; ?>
    <?php echo validation_errors(); ?>
    <?php echo form_open('', 'class="form-signin" role="form"') ; ?>
      <div class="form-group has-feedback">
        <input type="email" name="usr_email" class="form-control" placeholder="<?php echo $this->lang->line('admin_login_email') ; ?>" required autofocus>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" name="usr_password" class="form-control" placeholder="<?php echo $this->lang->line('admin_login_password') ; ?>" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit"  class="btn btn-primary btn-block btn-flat" type="submit"><?php echo $this->lang->line('admin_login_signin') ; ?></button>
        </div>
        <!-- /.col -->
      </div>
    <?php echo form_close() ; ?> 

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->