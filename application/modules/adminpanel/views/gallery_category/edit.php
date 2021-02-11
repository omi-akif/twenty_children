<section class="content-header">
  <h1> <?=$meta_title; ?> </h1>
  <ol class="breadcrumb">
    <li><a href="<?=base_url('adminpanel/dashboard');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><?=$meta_title; ?></li>
  </ol>
</section>

<section class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?=$meta_title?></h3>
          <a href="<?=base_url('adminpanel/gallerycategory/all')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> All Gallery Category</a>
          <a href="<?=base_url('adminpanel/gallerycategory/add')?>" class="btn btn-info btn-xs pull-right"> Add Gallery Category</a> 
        </div>        
        <?php echo form_open_multipart("adminpanel/gallerycategory/edit/".$info->id);?>
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
                      <label>Category Name</label>
                      <div><?php echo form_error('title'); ?></div>
                      <input type="text" class="form-control" name="name" value="<?=set_value('name', $info->cat_name)?>">
                    </div>

                    <div class="form-group">
                      <div><?php echo form_error('slug'); ?></div>
                      <input type="hidden" class="form-control" name="slug" value="<?=set_value('slug', $info->slug)?>">
                    </div>
                    <div class="form-group">
                      <label class="form-label required">Status</label> <br>
                      <input type="radio" name="status" value="1" <?=set_value('status', $info->status)=='1'?'checked':'';?>> Yes 
                      <input type="radio" name="status" value="0" <?=set_value('status', $info->status)=='0'?'checked':'';?>> No
                    </div>

                    <div class="box-footer">    
                           
                        <?php echo form_submit('submit', 'Save Update', "class='btn btn-primary pull-right'"); ?>
                    </div>
                </div>
              </div>
            </div>
          </div>
          <!-- /.box-body -->

        <?php echo form_close();?>
      </div>
      <!-- /.box -->
    </div>
  </div>
  <!-- /.row -->

</section>
<!-- /.content -->
