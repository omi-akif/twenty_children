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
        </div>        
        <?php echo form_open_multipart("admin/setting/edit/".$info->id);?>
          <div class="box-body">            
            <?php if($this->session->flashdata('success')):?>
                <div class="alert alert-success">
                    <a class="close" data-dismiss="alert">&times;</a>
                    <?php echo $this->session->flashdata('success');;?>
                </div>
            <?php endif; ?>
  
            <div class="row">

            <div class="col-md-9">
                  <div class="form-group">
                    <label>Contact Number</label>
                    <div><?php echo form_error('contact_number'); ?></div>
                    <input type="text" class="form-control" name="contact_number" value="<?=set_value('contact_number', $info->contact_number)?>">
                  </div>

                  <div class="form-group">
                    <label>Contact Email</label>
                    <div><?php echo form_error('contact_email'); ?></div>
                    <input type="text" class="form-control" name="contact_email" value="<?=set_value('contact_email', $info->contact_email)?>">
                  </div>

                  <div class="form-group">
                    <label>Copyright</label>
                    <div><?php echo form_error('copyright'); ?></div>
                    <input type="text" class="form-control" name="copyright" value="<?=set_value('copyright', $info->copyright)?>">
                  </div>

                  <div class="form-group">
                    <label>Google Map</label>
                    <div><?php echo form_error('google_map'); ?></div>
                    <textarea class="form-control" name="google_map" value="<?=set_value('google_map')?>"><?=$info->google_map ?></textarea>
                  </div>

                  <div class="form-group">
                    <label>Top News Headline</label>
                    <div><?php echo form_error('video_title'); ?></div>
                    <textarea class="form-control" name="video_title" value="<?=set_value('video_title')?>"><?=$info->video_title ?></textarea>
                  </div>

                 <!--  <div class="form-group">
                    <label>Video Link</label>
                    <div><?php echo form_error('video_link'); ?></div>
                    <textarea class="form-control" name="video_link" value="<?=set_value('video_link')?>"><?=$info->video_link ?></textarea>
                  </div> -->

              </div>

              <div class="col-md-3">

                <div class="form-group">
                  <label>Logo</label>
                  <div><?php echo form_error('userfile'); ?></div>
                  <input type="file" name="userfile">                  
                  <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                  <?php 
                  $img_path = base_url().'setting_img/';
                  if($info->image_file != NULL){
                          $src= $img_path.$info->image_file;
                          echo "<img src='$src' class='img-responsive' width='100'>";
                      }
                  ?>

                </div>

                <div class="form-group">
                  <label>Favicon Icon</label>
                  <div><?php echo form_error('userfile1'); ?></div>
                  <input type="file" name="userfile1">                  
                  <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                  <?php 
                  $img_path = base_url().'setting_img/';
                  if($info->image_file1 != NULL){
                          $src= $img_path.$info->image_file1;
                          echo "<img src='$src' class='img-responsive' width='100'>";
                      }
                  ?>

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
