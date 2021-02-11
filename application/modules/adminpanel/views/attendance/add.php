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
               <a href="<?=base_url('adminpanel/attendance/all')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> All Attendance</a>          
            </div>        
            <?php echo form_open_multipart("adminpanel/attendance/add");?>
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
                  <div class="col-md-5">
                     <div class="form-group">
                        <label>Staff Name *</label>
                        <div><?php echo form_error('members_id'); ?></div>
                        <?php 
                        $more_attr = 'class="form-control"';
                        echo form_dropdown('members_id', $members, set_value('members_id'), $more_attr);
                        ?>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="form-group">
                        <label>Date and Time *</label>
                        <div><?php echo form_error('time'); ?></div>
                        <input type="text" class="form-control" name="time" value="<?=date('Y-m-d H:i:s')?>">
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