<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url();?>"><b>Forgot</b> Password</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Put your registant email address.</p>
    <div id="infoMessage"><?php echo $message;?></div>

    <?php echo form_open("forgot_password");?>
      <div class="form-group has-feedback">
        <?php echo form_input($identity);?>        
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-4">
          <?php echo form_submit('submit', 'Submit', "class='btn btn-primary btn-block btn-flat'"); ?>
        </div>
        <!-- /.col -->
      </div>
    <?php echo form_close();?>

    <a href="<?php echo base_url('login');?>" class="text-center">I already have an account.</a><br>
    <!-- <a href="<?php echo base_url('registration');?>" class="text-center">Register a new membership</a> -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->
