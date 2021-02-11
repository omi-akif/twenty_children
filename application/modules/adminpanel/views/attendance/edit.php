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
               <a href="<?=base_url('adminpanel/staff/all')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> All Staff</a>
            </div>        
            <?php echo form_open_multipart("adminpanel/staff/edit/".$info->id);?>
            <div class="box-body">            
               <?php if($this->session->flashdata('success')):?>
                  <div class="alert alert-success">
                     <a class="close" data-dismiss="alert">&times;</a>
                     <?php echo $this->session->flashdata('success');;?>
                  </div>
               <?php endif; ?>

               <div class="row">
                  <div class="col-md-5">
                     <div class="form-group">
                        <label>Staff Name *</label>
                        <div><?php echo form_error('child_name'); ?></div>
                        <input type="text" class="form-control" name="child_name" 
                        value="<?=set_value('child_name', $info->child_name)?>">
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label>Moible Number *</label>
                        <div><?php echo form_error('phone'); ?></div>
                        <input type="text" class="form-control" name="phone" value="<?=set_value('phone', $info->phone)?>">
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <label>Image Upload</label>
                        <div><?php echo form_error('userfile'); ?></div>
                        <input type="file" name="userfile">                  
                        <p class="help-block">File type jpg, png, jpeg, gif and maximun file size 1 MB.</p>
                        <?php 
                        $img_path = base_url().'assets/images/staff_img/';
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
