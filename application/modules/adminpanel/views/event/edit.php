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
            <?php echo form_open_multipart("adminpanel/event/edit/".$info->id);?>
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
                        <label>Event Title</label>
                        <div><?php echo form_error('title'); ?></div>
                        <input type="text" class="form-control" name="title" value="<?=set_value('title',$info->title)?>">
                     </div>

                     <div class="form-group">
                        <label>Event Location</label>
                        <div><?php echo form_error('location'); ?></div>
                        <input type="text" class="form-control" name="location" value="<?=set_value('location',$info->location)?>">
                     </div>

                     <div class="form-group">
                        <label>Event Details</label>
                        <div><?php echo form_error('description'); ?></div>
                        <textarea id="editor1" name="description" rows="5" cols="98"><?=set_value('description', $info->description)?></textarea>
                     </div>
                  </div>

                  <div class="col-md-5">
                     <div class="form-group">
                        <label>Event Datetime</label>
                        <div><?php echo form_error('date'); ?></div>
                        <input type="text" name="date" value="<?=set_value('date', $info->date)?>" class="form-control datepicker" autocomplete="off">
                     </div> 
                     <div class="form-group">
                        <label class="form-label required">Display Status</label> <br>
                        <input type="radio" name="status" value="1" <?=set_value('status', $info->status)=='1'?'checked':'checked';?>> Yes 
                        <input type="radio" name="status" value="0" <?=set_value('status', $info->status)=='0'?'checked':'';?>> No
                     </div>
                     <div class="form-group">
                        <label>Image Upload</label>
                        <div><?php echo form_error('userfile'); ?></div>
                        <input type="file" name="userfile">                  
                        <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                        <?php 
                        $img_path = base_url('assets/images/event_img/');
                        if($info->feature_image != NULL){
                           $src= $img_path.$info->feature_image;
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
