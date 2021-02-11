<section class="content-header">
  <h1> <?=$meta_title; ?> </h1>
  <ol class="breadcrumb">
    <li><a href="<?=base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><?=$meta_title; ?></li>
  </ol>
</section>

<section class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?=$meta_title?></h3>
          <a href="<?=base_url('admin/contact/all')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> All Contact</a>
          <!-- <a href="<?=base_url('admin/contact/details/'.$info->id)?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> Details Client</a> -->
          <a href="<?=base_url('admin/contact/add')?>" class="btn btn-info btn-xs pull-right"> Add Contact</a> 
        </div>        
        <?php echo form_open_multipart("admin/contact/edit/".$info->id);?>
          <div class="box-body">            
            <?php if($this->session->flashdata('success')):?>
                <div class="alert alert-success">
                    <a class="close" data-dismiss="alert">&times;</a>
                    <?php echo $this->session->flashdata('success');;?>
                </div>
            <?php endif; ?>

            <div class="row">
                <div class="col-md-7">
                    <div class="form-group">
                      <label>Contact Title</label>
                      <div><?php echo form_error('title'); ?></div>
                      <input type="text" class="form-control" name="title" value="<?=set_value('title', $info->title)?>">
                    </div>

                    <div class="form-group">
                      <label>Contact Address</label>
                      <div><?php echo form_error('address'); ?></div>
                      <textarea  class="form-control" name="address" > <?= $info->address?></textarea>
                    </div>
                </div>

                <div class="col-md-5">
                    <div class="form-group">
                      <label>Contact Phone</label>
                      <div><?php echo form_error('phone'); ?></div>
                      <input type="text" class="form-control" name="phone" value="<?=set_value('phone', $info->phone)?>">
                    </div>

                    <div class="form-group">
                      <label>Contact Email</label>
                      <div><?php echo form_error('email'); ?></div>
                      <input type="email" class="form-control" name="email" value="<?=set_value('email', $info->email)?>">
                    </div>

                    <div class="form-group">
                      <label class="form-label required">Status</label> <br>
                      <input type="radio" name="status" value="1" <?=set_value('status', $info->status)=='1'?'checked':'';?>> Yes 
                      <input type="radio" name="status" value="0" <?=set_value('status', $info->status)=='0'?'checked':'';?>> No
                    </div>

                    <div class="form-group">
                      <label class="form-label required">Display Home</label> <br>
                      <input type="radio" name="display_home" value="1" <?=set_value('display_home', $info->display_home)=='1'?'checked':'';?>> Yes 
                      <input type="radio" name="display_home" value="0" <?=set_value('display_home', $info->display_home)=='0'?'checked':'';?>> No
                    </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">    
            <?php //echo form_input($user_id);?>        
            <?php echo form_submit('submit', 'Save Update', "class='btn btn-primary pull-right'"); ?>
          </div>
        <?php echo form_close();?>
      </div>
      <!-- /.box -->
    </div>
  </div>
  <!-- /.row -->

</section>
<!-- /.content -->
