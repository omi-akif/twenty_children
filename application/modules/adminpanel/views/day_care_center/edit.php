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
          <a href="<?=base_url('adminpanel/news/all')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> All News</a>
          <a href="<?=base_url('adminpanel/news/details/'.$info->id)?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> Details News</a>
          <a href="<?=base_url('adminpanel/news/add')?>" class="btn btn-info btn-xs pull-right"> Add News</a> 
        </div>        
<?php echo validation_errors(); ?>
        <?php 
        
        echo form_open_multipart("adminpanel/news/edit/".$info->id);?>
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
                    <label>News Title Bangla</label>
                    <div><?php echo form_error('news_title_bn'); ?></div>
                    <input type="text" class="bangla form-control" name="news_title_bn" value="<?=set_value('news_title_bn',$info->news_title_bn)?>">
                  </div>

                  <div class="form-group">
                    <label>News Title English</label>
                    <div><?php echo form_error('news_title_en'); ?></div>
                    <input type="text" class="form-control" name="news_title_en" value="<?=set_value('news_title_en',$info->news_title_en)?>">
                  </div>
                  
                  <!-- <div class="form-group">
                    <label>Select Event Category</label>
                    <div><?php echo form_error('event_category_id'); ?></div>
                    <?php 
                      $more_attr = 'class="form-control"';
                      echo form_dropdown('event_category_id', $category, set_value('event_category_id', $info->event_category_id), $more_attr);
                    ?>
                  </div> -->

                  <div class="form-group">
                    <label>News Details Bangla</label>
                    <div><?php echo form_error('news_description_bn'); ?></div>
                    <textarea id="editor1" class="bangla form-control" name="news_description_bn" rows="5" cols="98"><?=set_value('news_description_bn',$info->news_description_bn)?></textarea>
                  </div>

                  <div class="form-group">
                    <label>News Details English</label>
                    <div><?php echo form_error('news_description_en'); ?></div>
                    <textarea id="editor1" name="news_description_en" rows="5" cols="98"><?=set_value('news_description_en', $info->news_description_en)?></textarea>
                  </div>
              </div>

              <div class="col-md-5">

                
                <div class="form-group">
                  <label>Slug URL</label>
                  <div><?php echo form_error('slug'); ?></div>
                  <input type="text" class="form-control" name="slug" value="<?=set_value('slug', $info->slug)?>">
                </div>

                <div class="form-group">
                   <label>News Date Time</label>
                   <div><?php echo form_error('news_datetime'); ?></div>
                   <input type="text" name="news_datetime" value="<?=set_value('news_datetime',  $info->news_datetime)?>" class="form-control datepicker" autocomplete="off">
                </div> 


                <div class="form-group">
                  <label>Upload File</label>
                  <div><?php echo form_error('userfile'); ?></div>
                  <input type="file" name="userfile">                  
                  <p class="help-block">File type jpg, png, jpeg, gif, pdf and maximun file size 10 MB.</p>
                  <?php 
                  $img_path = base_url().'news_img/';
                  if($info->image_file != NULL){
                          $src= $img_path.$info->image_file;
                          echo "<img src='$src' class='img-responsive'>";
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
