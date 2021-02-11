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
               <a href="<?=base_url('adminpanel/doctors')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> Doctor List</a>
            </div>        
            <?php //echo validation_errors(); ?>
            <?php echo form_open_multipart("adminpanel/doctors/edit/$info->id");?>
            <div class="box-body">            
               <?php if($this->session->flashdata('success')):?>
                  <div class="alert alert-success">
                     <a class="close" data-dismiss="alert">&times;</a>
                     <?php echo $this->session->flashdata('success');;?>
                  </div>
               <?php endif; ?>

               <div class="row">
                  <div class="col-md-12">
                  <div class="row">
                        <div class="col-md-8"> 
                          <div class="form-group">
                            <label>Docotr Name</label>
                            <div><?php echo form_error('doctor_name'); ?></div>
                            <input type="text" class="form-control" name="doctor_name" value="<?=set_value('doctor_name', $info->doctor_name)?>">
                          </div>
                         </div>
                         <div class="col-md-4">  
                          <div class="form-group">
                            <label>Phone Number</label>
                            <div><?php echo form_error('phone'); ?></div>
                            <input type="text" name="phone" value="<?=set_value('phone', $info->phone)?>" class="form-control">
                          </div> 
                        </div>
                      </div>

                     <div class="form-group">
                        <label>Institute Name</label>
                        <div><?php echo form_error('institute_name'); ?></div>
                        <input type="text" class="form-control" name="institute_name" value="<?=set_value('institute_name', $info->institute_name)?>">
                     </div>

                     <div class="row">
                        <div class="col-md-4">        
                           <div class="form-group">
                              <label>Division</label>
                              <div><?php echo form_error('division_id'); ?></div>
                              <?php
                              $more_attr = 'class="form-control input-sm" id="division"';
                              echo form_dropdown('division_id', $division, set_value('division_id', $info->division_id), $more_attr);
                              ?>
                           </div>
                        </div>
                        <div class="col-md-4">        
                           <div class="form-group">
                              <label>District</label>
                              <div><?php echo form_error('district_id'); ?></div>
                              <?php
                              $more_attr = 'class="district_val form-control input-sm" id="district"';
                              echo form_dropdown('district_id', $district, set_value('district_id', $info->district_id), $more_attr);
                              ?>
                           </div> 
                        </div>
                        <div class="col-md-4">        
                           <div class="form-group">
                              <label>Upazila</label>
                              <div><?php echo form_error('upazila_id'); ?></div>
                              <?php
                              $more_attr = 'class="upazila_val form-control input-sm"';
                              echo form_dropdown('upazila_id', $upazila, set_value('upazila_id', $info->upazila_id), $more_attr);
                              ?>
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


<script type="text/javascript">
   $(document).ready(function () {
    //district dropdown
    $('#division').change(function(){
      $('.district_val').addClass('form-control input-sm');
      $(".district_val > option").remove();
      var id = $('#division').val();
      $.ajax({
          type: "POST",
          url: hostname +"common/ajax_district_by_div/" + id,
          success: function(func_data)
          {
              $.each(func_data,function(id,name)
              {
                  var opt = $('<option />');
                  opt.val(id);
                  opt.text(name);
                  $('.district_val').append(opt);
              });
          }
      });
    });

    //upazila dropdown
    $('#district').change(function(){
      $('.upazila_val').addClass('form-control input-sm');
      $(".upazila_val > option").remove();
      var dis_id = $('#district').val();
      $.ajax({
          type: "POST",
          url: hostname +"common/ajax_upazila_by_dis/" + dis_id,
          success: function(upazilaThanas)
          {
              $.each(upazilaThanas,function(id,ut_name)
              {
                  var opt = $('<option />');
                  opt.val(id);
                  opt.text(ut_name);
                  $('.upazila_val').append(opt);
              });
          }
      });
    });
});
</script>