<section class="content-header">
  <h1> <?=$meta_title; ?> </h1>
  <ol class="breadcrumb">
    <li><a href="<?=base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><?=$meta_title; ?></li>
  </ol>
</section>

<section class="content">

  <div class="row">
    <div class="col-md-7">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?=$meta_title; ?></h3>
        </div>        
        <?php echo form_open_multipart("adminpanel/manage_user/add");?>
          <div class="box-body">
            <!-- <div id="infoMessage"><?php //echo $message;?></div> -->
            <div><?php //echo validation_errors(); ?></div>
            <?php if($this->session->flashdata('success')):?>
                <div class="alert alert-success">
                    <a class="close" data-dismiss="alert">&times;</a>
                    <?php echo $this->session->flashdata('success');;?>
                </div>
            <?php endif; ?>

            <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                    <label><?php echo lang('create_user_fname_label', 'first_name');?></label>
                    <div><?php echo form_error('first_name'); ?></div>
                    <?php echo form_input($first_name);?>
                  </div>

                  <div class="form-group">
                    <label><?php echo lang('create_user_lname_label', 'last_name');?></label>
                    <div><?php echo form_error('last_name'); ?></div>
                    <?php echo form_input($last_name);?>
                  </div>

                  <?php if($identity_column!=='email') { ?>
                  <div class="form-group">
                    <label>Username</label>
                    <div><?php echo form_error('identity'); ?></div>
                    <?php echo form_input($identity);?>
                  </div>
                  <?php } ?>

                  <!-- <div class="form-group">
                    <label><?php echo lang('create_user_company_label', 'company');?></label>
                    <div><?php echo form_error('company'); ?></div>
                    <?php echo form_input($company);?>
                  </div> -->

                  <div class="form-group">
                    <label><?php echo lang('create_user_email_label', 'email');?></label>
                    <div><?php echo form_error('email'); ?></div>
                    <?php echo form_input($email);?>
                  </div>

                  <div class="form-group">
                    <label><?php echo lang('create_user_phone_label', 'phone');?></label>
                    <div><?php echo form_error('phone'); ?></div>
                    <?php echo form_input($phone);?>
                  </div>

                  <div class="form-group">
                    <label><?php echo lang('create_user_password_label', 'password');?></label>
                    <div><?php echo form_error('password'); ?></div>
                    <?php echo form_input($password);?>
                  </div>

                  <div class="form-group">
                    <label><?php echo lang('create_user_password_confirm_label', 'password_confirm');?></label>
                    <div><?php echo form_error('password_confirm'); ?></div>
                    <?php echo form_input($password_confirm);?>
                  </div>

              </div>

            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">    
            <?php //echo form_input($user_id);?>        
            <?php echo form_submit('submit', lang('create_user_submit_btn'), "class='btn btn-primary pull-right'"); ?>
          </div>
        <?php echo form_close();?>
      </div>
      <!-- /.box -->
    </div>
  </div>
  <!-- /.row -->

</section>
<!-- /.content -->
