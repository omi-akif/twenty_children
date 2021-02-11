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
          <h3 class="box-title">Add Category</h3>
          <a href="<?=base_url('admin/category/all')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> All Category</a>          
        </div>        
        <?php echo form_open_multipart("admin/category/add");?>
          <div class="box-body">
            <div id="infoMessage"><?php //echo $message;?></div>
            <div><?php //echo validation_errors(); ?></div>
            <?php if($this->session->flashdata('success')):?>
                <div class="alert alert-success">
                    <a class="close" data-dismiss="alert">&times;</a>
                    <?php echo $this->session->flashdata('success');;?>
                </div>
            <?php endif; ?>

            <div class="row">
              <div class="col-md-7">
                 <div class="form-group">
                    <label>Title</label>
                    <div><?php echo form_error('title'); ?></div>
                    <select class="form-control" name="title" value="<?=set_value('title')?>">
                        <option value='<?=set_value('title')?>'><?php if(set_value('title')){echo set_value('title');}else{ echo '--- Select Title ---';}?></option>
                        <!-- <option value='project'>Apartment</option>
                        <option value='event'>Land</option> -->

                        <option value='Project'>Project</option>
                        <option value='Event'>Event</option>
                        <!-- <option value='kaoser'>kaoser</option> -->
                    </select>
                  </div>

                  <div class="form-group">
                    <label>Category Name</label>
                    <div><?php echo form_error('name'); ?></div>
                    <input type="text" class="form-control" name="name" value="<?=set_value('name')?>">
                  </div>


                  <div class="box-footer">    
                      <?php //echo form_input($user_id);?>        
                      <?php echo form_submit('submit', 'Save', "class='btn btn-primary pull-right'"); ?>
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
