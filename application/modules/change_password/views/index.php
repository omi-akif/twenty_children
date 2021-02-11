<section class="content-header">
  <h1> <?=$page_title;?> </h1>
  <ol class="breadcrumb">
    <li><a href="<?=base_url('dashboard');?>"><i class="fa fa-dashboard"></i> Dashboard </a></li>
    <li class="active"><?=$page_title;?></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Change Your Password</h3>
        </div>
        <!-- /.box-header -->
        <!-- form start -->
        <?php echo form_open("change_password");?>
          <div class="box-body">
          <div id="infoMessage"><?php echo $message;?></div>
            <div class="form-group">
              <label for="exampleInputEmail1">Old Password</label>
              <?php echo form_input($old_password);?>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">New Password</label>
              <?php echo form_input($new_password);?>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">New Password Confirm</label>
              <?php echo form_input($new_password_confirm);?>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">    
            <?php echo form_input($user_id);?>    
            <?php echo form_submit('submit', 'Submit', "class='btn btn-primary pull-right'"); ?>
          </div>
        <?php echo form_close();?>
      </div>
      <!-- /.box -->
    </div>
  </div>
  <!-- /.row -->

</section>
<!-- /.content -->
