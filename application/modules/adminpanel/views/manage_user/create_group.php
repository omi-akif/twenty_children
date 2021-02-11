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
        <?php echo form_open_multipart("admin/manage_user/create_group");?>
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
                    <label><?php echo lang('create_group_name_label', 'group_name');?></label>
                    <div><?php echo form_error('group_name'); ?></div>
                    <?php echo form_input($group_name);?>
                  </div>

                  <div class="form-group">
                    <label><?php echo lang('create_group_desc_label', 'description');?></label>
                    <div><?php echo form_error('description'); ?></div>
                    <?php echo form_input($description);?>
                  </div>

              </div>

            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">    
            <?php //echo form_input($user_id);?>        
            <?php echo form_submit('submit', lang('create_group_submit_btn'), "class='btn btn-primary pull-right'"); ?>
          </div>
        <?php echo form_close();?>
      </div>
      <!-- /.box -->
    </div>
  </div>
  <!-- /.row -->

</section>
<!-- /.content -->
