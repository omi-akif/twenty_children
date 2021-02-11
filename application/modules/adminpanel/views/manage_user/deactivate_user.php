<section class="content-header">
  <h1> <?=$meta_title; ?> </h1>
  <ol class="breadcrumb">
    <li><a href="<?=base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><?=$meta_title; ?></li>
  </ol>
</section>

<section class="content">

  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo sprintf(lang('deactivate_subheading'), $user->username);?> </h3>
        </div>        
        <?php echo form_open("admin/manage_user/deactivate/".$user->id);?>
        <div class="box-body">
        	<div class="row">
              	<div class="col-md-6">
                  	<div class="form-group">
                    	<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
					    <input type="radio" name="confirm" value="yes" checked="checked" />
					    <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
					    <input type="radio" name="confirm" value="no" />
                  	</div>

                </div>
            </div>
        </div>

        <div class="box-footer">    
              	<?php echo form_hidden($csrf); ?>
  				<?php echo form_hidden(array('id'=>$user->id)); ?>   
            <?php echo form_submit('submit', 'Deactive User', "class='btn btn-primary pull-right'"); ?>
        </div>
        <?php echo form_close();?>

      </div> <!-- /.box -->
    </div>
  </div> <!-- /.row -->

</section> <!-- /.content -->
