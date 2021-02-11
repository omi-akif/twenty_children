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
          <a href="<?=base_url('admin/gallery/all')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> All Gallery</a>
          <a href="<?=base_url('admin/gallery/add')?>" class="btn btn-info btn-xs pull-right"> Add Gallery</a> 
        </div>        
        <?php echo form_open_multipart("admin/gallery/edit/".$info->id);?>
          <div class="box-body">            
            <?php if($this->session->flashdata('success')):?>
                <div class="alert alert-success">
                    <a class="close" data-dismiss="alert">&times;</a>
                    <?php echo $this->session->flashdata('success');;?>
                </div>
            <?php endif; ?>

            <div class="row">
              <div class="col-md-7">
                <!-- <div class="form-group">
                  <label>Gallery Name</label>
                  <div><?php echo form_error('name'); ?></div>
                  <input type="text" class="form-control" name="name" 
                  value="<?=set_value('name', $info->name)?>">
                </div>

                <div class="form-group">
                    <label>URL</label>
                    <div><?php echo form_error('url'); ?></div>
                    <input type="text" class="form-control" name="url" value="<?=set_value('url', $info->url)?>">
                </div> -->

                <div class="form-group">
                  <label>Select Category</label>
                  <div><?php echo form_error('category_id'); ?></div>
                  <?php 
                    $more_attr = 'class="form-control"';
                    echo form_dropdown('category_id', $category, set_value('category_id', $info->category_id), $more_attr);
                  ?>
                </div>

                <div class="form-group">
                  <label class="form-label required">Display Home</label> <br>
                  <input type="radio" name="display_home" value="1" <?=set_value('display_home', $info->display_home)=='1'?'checked':'';?>> Yes 
                  <input type="radio" name="display_home" value="0" <?=set_value('display_home', $info->display_home)=='0'?'checked':'';?>> No
                </div>

                <div class="form-group">
                  <label class="form-label required">Status</label> <br>
                  <input type="radio" name="status" value="1" <?=set_value('status', $info->status)=='1'?'checked':'';?>> Yes 
                  <input type="radio" name="status" value="0" <?=set_value('status', $info->status)=='0'?'checked':'';?>> No
                </div>

                <div class="form-group">
                  <label>Image Upload</label>
                  <div><?php echo form_error('userfile'); ?></div>
                  <input type="file" name="userfile">    
                  <label style="color:red">Image Size: Width:400px, Height: 300px</label>              
                  <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                  
                  <?php 
                  $img_path = base_url().'gallery_img/';
                  if($info->image_file != NULL){
                          $src= $img_path.$info->image_file;
                          echo "<img src='$src' height='150'>";
                      }
                  ?>
                  
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
