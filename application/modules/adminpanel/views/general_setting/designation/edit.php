<section class="content-header">
   <h1> <?=$meta_title;?> </h1>
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
               <h3 class="box-title"><?=$meta_title?> Form</h3>
               <a href="<?=base_url('adminpanel/general_setting/designation')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> Designation List</a>
               <a href="<?=base_url('adminpanel/general_setting/designation_add')?>" class="btn btn-info btn-xs pull-right"> Add Designation</a> 
            </div> 
            
            <div class="box-body"> 
               <?php 
                  $attributes = array('id' => '');
                  echo form_open_multipart(uri_string(), $attributes);
               ?>           
               <?php if($this->session->flashdata('success')):?>
                  <div class="alert alert-success">
                     <a class="close" data-dismiss="alert">&times;</a>
                     <?php echo $this->session->flashdata('success');;?>
                  </div>
               <?php endif; ?>

               <div class="row">
                  <div class="col-md-7">

                     <div class="form-group">
                        <label>Designation Name(English)</label>
                        <div><?php echo form_error('desig_name_en'); ?></div>
                        <input type="text" class="form-control" name="desig_name_en" value="<?=set_value('desig_name_en', $info->desig_name_en)?>">
                     </div>

                     <div class="form-group">
                        <label>Designation Name(Bangla)</label>
                        <div><?php echo form_error('desig_name_bn'); ?></div>
                        <input type="text" class="bangla form-control" name="desig_name_bn" value="<?=set_value('desig_name_bn', $info->desig_name_bn)?>">
                     </div>

                     <div class="box-footer">    
                        <?php //echo form_input($user_id);?>        
                        <?php echo form_submit('submit', 'Save Update', "class='btn btn-primary pull-right'"); ?>
                     </div>

                  </div>
               </div>
               <!-- /.row -->

               <?php echo form_close();?>
            </div>
            <!-- /.box-body -->
            
         </div>
         <!-- /.box -->         
      </div>
      <!-- /.col-md-12 -->      
   </div>
   <!-- /.row -->

</section>
<!-- /.content -->
