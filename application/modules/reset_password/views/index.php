<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url();?>"><b>Reset</b> Password</a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg">Reset your pasword</p>
    <div id="infoMessage"><?php echo $message;?></div>

    <?php echo form_open("reset_password/index/".$code);?>
    	<div class="form-group has-feedback">
	        <?php echo form_input($new_password);?>
	        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
	    </div>      
      	<div class="form-group has-feedback">      	
        	<?php echo form_input($new_password_confirm);?>      
        	<span class="glyphicon glyphicon-lock form-control-feedback"></span>
      	</div>
		<div class="row">
			<div class="col-xs-6">
			  <?php echo form_input($user_id);?>
			  <?php echo form_hidden($csrf); ?>
			  <?php echo form_submit('submit', 'Reset Password', "class='btn btn-primary btn-block btn-flat'"); ?>
			</div> <!-- /.col -->
		</div>
    <?php echo form_close();?>

  </div>
</div>