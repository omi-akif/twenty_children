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
          <a href="<?=base_url('adminpanel/event/all')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> All Event</a>
          <a href="<?=base_url('adminpanel/event/details/'.$info->id)?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> Details Event</a>
          <a href="<?=base_url('adminpanel/event/add')?>" class="btn btn-info btn-xs pull-right"> Add Event</a> 
        </div>        
<?php echo validation_errors(); ?>
        <?php 
        
        echo form_open_multipart("adminpanel/event/edit/".$info->id);?>
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
                    <label>Event Name Bangla</label>
                    <div><?php echo form_error('event_name_bn'); ?></div>
                    <input type="text" class="bangla form-control" name="event_name_bn" value="<?=set_value('event_name_bn',$info->event_name_bn)?>">
                  </div>

                  <div class="form-group">
                    <label>Event Name English</label>
                    <div><?php echo form_error('event_name_en'); ?></div>
                    <input type="text" class="form-control" name="event_name_en" value="<?=set_value('event_name_en',$info->event_name_en)?>">
                  </div>
                  
                  <div class="form-group">
                    <label>Select Event Category</label>
                    <div><?php echo form_error('event_category_id'); ?></div>
                    <?php 
                      $more_attr = 'class="form-control"';
                      echo form_dropdown('event_category_id', $category, set_value('event_category_id', $info->event_category_id), $more_attr);
                    ?>
                  </div>

                  <div class="form-group">
                    <label>Event Details Bangla</label>
                    <div><?php echo form_error('event_details_bn'); ?></div>
                    <textarea id="editor1" class="bangla form-control" name="event_details_bn" rows="5" cols="98"><?=set_value('event_details_bn',$info->event_details_bn)?></textarea>
                  </div>

                  <div class="form-group">
                    <label>Event Details English</label>
                    <div><?php echo form_error('event_details_en'); ?></div>
                    <textarea id="editor1" name="event_details_en" rows="5" cols="98"><?=set_value('event_details_en', $info->event_details_en)?></textarea>
                  </div>


                  

              </div>

              <div class="col-md-5">

                
                <div class="form-group">
                  <label>Slug URL</label>
                  <div><?php echo form_error('slug'); ?></div>
                  <input type="text" class="form-control" name="slug" value="<?=set_value('slug', $info->slug)?>">
                </div>

                <div class="form-group">
                   <label>Event Date Time</label>
                   <div><?php echo form_error('event_datetime'); ?></div>
                   <input type="text" name="event_datetime" value="<?=set_value('event_datetime',  $info->event_datetime)?>" class="form-control datepicker" autocomplete="off">
                </div> 


                <div class="form-group">
                  <label>Image Upload</label>
                  <div><?php echo form_error('userfile'); ?></div>
                  <input type="file" name="userfile">                  
                  <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                  <?php 
                  $img_path = base_url().'event_img/';
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
