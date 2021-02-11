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
          <h3 class="box-title">Add News</h3>
          <a href="<?=base_url('adminpanel/news/all')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> All News</a>          
        </div>        
        <?php echo form_open_multipart("adminpanel/news/add");?>
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
                    <label>News Title Bangla</label>
                    <div><?php echo form_error('news_title_bn'); ?></div>
                    <input type="text" class="bangla form-control" name="news_title_bn" value="<?=set_value('news_title_bn')?>">
                  </div>

                  <div class="form-group">
                    <label>News Title English</label>
                    <div><?php echo form_error('news_title_en'); ?></div>
                    <input type="text" class="form-control" name="news_title_en" value="<?=set_value('news_title_en')?>">
                  </div>


                  <!-- <div class="form-group">
                    <label>Title</label>
                    <div><?php echo form_error('title'); ?></div>
                    <select class="form-control" name="title" value="<?=set_value('title')?>">
                        <option value='<?=set_value('title')?>'><?php if(set_value('title')){echo set_value('title');}else{ echo '--- Select Title ---';}?></option>

                        <option value='Project'>Project</option>
                        <option value='Event'>Event</option>
                    </select>
                  </div> -->

<!--                   <div class="form-group">
                      <label>Event Category</label>
                      <div><?php echo form_error('event_category_id'); ?></div>

                    <?php 
                      $more_attr = 'class="form-control"';
                      echo form_dropdown('event_category_id', $category, set_value('event_category_id'), $more_attr);
                    ?>
                  </div> -->

                  <div class="form-group">
                    <label>News Details Bangla</label>
                    <div><?php echo form_error('news_description_bn'); ?></div>
                    <textarea id="editor1" class="bangla form-control" name="news_description_bn" rows="5" cols="98"><?=set_value('news_description_bn')?></textarea>
                  </div>

                  <div class="form-group">
                    <label>News Details English</label>
                    <div><?php echo form_error('news_description_en'); ?></div>
                    <textarea id="editor1" name="news_description_en" rows="5" cols="98"><?=set_value('news_description_en')?></textarea>
                  </div>


              </div>

              <div class="col-md-5">

                <div class="form-group">
                   <label>News Date Time</label>
                   <div><?php echo form_error('news_datetime'); ?></div>
                   <input type="text" name="news_datetime" value="<?=set_value('news_datetime')?>" class="form-control datepicker" autocomplete="off">
                </div> 

                <!-- <div class="form-group">
                    <label>Fontawesome Icon</label>
                    <div><?php echo form_error('fa_icon'); ?></div>
                    <input type="text" class="form-control" name="fa_icon" value="<?=set_value('fa_icon')?>" placeholder="e.g. fa-camera-retro">
                </div> -->


                <!-- <div class="form-group">
                      <label class="form-label required">Display Home</label> <br>
                      <input type="radio" name="display_home" value="1" <?=set_value('display_home')=='1'?'checked':'checked';?>> Yes 
                      <input type="radio" name="display_home" value="0" <?=set_value('display_home')=='0'?'checked':'';?>> No
                </div> -->

                <div class="form-group">
                  <label>Upload File</label>
                  <div><?php echo form_error('userfile'); ?></div>
                  <input type="file" name="userfile">
                  <!-- <label style="color:red">Size: Width:340px, Height: 400px</label>  -->
                  <p class="help-block">File type jpg, png, jpeg, gif, pdf and maximun file size 10 MB.</p>
                </div>

                <!-- <div class="form-group">
                  <label>Meta Keywords</label>
                  <textarea class="form-control" rows="3" name="meta_keys" placeholder="tag1, tag2, tag3, tag4, tag5"><?=set_value('meta_keys')?></textarea>
                </div>
                <div class="form-group">
                  <label>Short Description</label>
                  <div><?php echo form_error('short_desc'); ?></div>
                  <textarea class="form-control" rows="3" name="short_desc" placeholder="Short Description Maximum 255 character"><?=set_value('short_desc')?></textarea>
                </div> -->
              </div>
              

            </div>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">    
            <?php //echo form_input($user_id);?>        
            <?php echo form_submit('submit', 'Save', "class='btn btn-primary pull-right'"); ?>
          </div>
        <?php echo form_close();?>
      </div>
      <!-- /.box -->
    </div>
  </div>
  <!-- /.row -->

</section>
<!-- /.content -->
