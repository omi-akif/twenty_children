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
               <a href="<?=base_url('adminpanel/day_care/my_day_care_center')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> My Day Care Center</a>
            </div>        
            <?php //echo validation_errors(); ?>
            <?php echo form_open_multipart("adminpanel/day_care/edit/".$info->id);?>
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
                        <label>Day Care Title</label>
                        <h4><?=$info->title?></h4>
                     </div>

                     <div class="form-group">
                        <label>Day Care Area</label>
                        <h4><?=$info->area?></h4>
                     </div>

                     <div class="form-group">
                        <label>Day Care Details</label>
                        <div><?php echo form_error('description'); ?></div>
                        <textarea class="form-control" name="description" rows="5" cols="98"><?=set_value('description', $info->description)?></textarea>
                     </div>
                  </div>

                  <div class="col-md-5">  
                     <div class="form-group">
                        <label>Officer Name *</label>
                        <div><?php echo form_error('officer_name'); ?></div>
                        <input type="text" class="form-control" name="officer_name" value="<?=set_value('officer_name', $info->officer_name)?>">
                     </div>
                     <div class="form-group">
                        <label>Address *</label>
                        <div><?php echo form_error('address'); ?></div>
                        <input type="text" class="form-control" name="address" value="<?=set_value('address', $info->address)?>">
                     </div>  

                     <div class="row">
                        <div class="col-md-6">        
                           <div class="form-group">
                              <label>Mobile Number *</label>
                              <div><?php echo form_error('mobile_no'); ?></div>
                              <input type="text" class="form-control" name="mobile_no" value="<?=set_value('mobile_no', $info->mobile_no)?>">
                           </div>
                        </div>
                        <div class="col-md-6">        
                           <div class="form-group">
                              <label>Phone Number</label>
                              <div><?php echo form_error('phone'); ?></div>
                              <input type="text" name="phone" value="<?=set_value('phone',  $info->phone)?>" class="form-control">
                           </div> 
                        </div>
                     </div>

                     <div class="form-group">
                        <label>Email Address *</label>
                        <div><?php echo form_error('email'); ?></div>
                        <input type="text" name="email" value="<?=set_value('email',  $info->email)?>" class="form-control">
                     </div>

                     <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Latitude</label>
                              <div><?php echo form_error('latitude'); ?></div>
                              <input type="text" name="latitude" value="<?=set_value('latitude',  $info->latitude)?>" class="form-control">
                           </div>  
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Longitude</label>
                              <div><?php echo form_error('longitude'); ?></div>
                              <input type="text" name="longitude" value="<?=set_value('longitude',  $info->longitude)?>" class="form-control">
                           </div>    
                        </div>
                     </div> 

                  </div>
               </div>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">    
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