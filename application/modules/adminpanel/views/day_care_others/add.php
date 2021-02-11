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
               <a href="<?=base_url('adminpanel/day_care_others')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> Daycare Center List</a>
            </div>        
            <?php //echo validation_errors(); ?>
            <?php echo form_open_multipart("adminpanel/day_care_others/add");?>
            <div class="box-body">            
               <?php if($this->session->flashdata('success')):?>
                  <div class="alert alert-success">
                     <a class="close" data-dismiss="alert">&times;</a>
                     <?php echo $this->session->flashdata('success');;?>
                  </div>
               <?php endif; ?>

               <div class="row">
                  <div class="col-md-8">
                     <div class="form-group">
                        <label>Organization</label>
                        <div><?php echo form_error('owner_id'); ?></div>
                        <?php
                        $more_attr = 'class="form-control input-sm"';
                        echo form_dropdown('owner_id', $organization, set_value('owner_id'), $more_attr);
                        ?>
                     </div>
                     <div class="form-group">
                        <label>Daycare Name</label>
                        <div><?php echo form_error('title'); ?></div>
                        <input type="text" class="form-control" name="title" value="<?=set_value('title')?>">
                     </div>

                     <div class="row">
                        <div class="col-md-4">        
                           <div class="form-group">
                              <label>Division</label>
                              <div><?php echo form_error('division_id'); ?></div>
                              <?php echo form_error('division_id');
                              $more_attr = 'class="form-control input-sm" id="division"';
                              echo form_dropdown('division_id', $division, set_value('division_id'), $more_attr);
                              ?>
                           </div>
                        </div>
                        <div class="col-md-4">        
                           <div class="form-group">
                              <label>District</label>
                              <div><?php echo form_error('district_id'); ?></div>
                              <select name="district_id" <?=set_value('district_id')?> class="district_val form-control input-sm" id="district">
                                <option value=""> -- District --</option>
                              </select>
                           </div> 
                        </div>
                        <div class="col-md-4">        
                           <div class="form-group">
                              <label>Upazila</label>
                              <div><?php echo form_error('upazila_id'); ?></div>
                              <select name="upazila_id" <?=set_value('upazila_id')?> class="upazila_val form-control input-sm" id="upazila">
                                <option value=""> -- Upazila --</option>
                              </select>
                           </div> 
                        </div>
                     </div>

                     <div class="form-group">
                        <label>Address</label>
                        <div><?php echo form_error('address'); ?></div>
                        <textarea class="form-control" name="address" rows="3" cols="98"><?=set_value('address')?></textarea>
                     </div>
                  </div>

                  <div class="col-md-4">  
                     <div class="form-group">
                        <label>Officer Name</label>
                        <div><?php echo form_error('officer_name'); ?></div>
                        <input type="text" class="form-control" name="officer_name" value="<?=set_value('officer_name')?>">
                     </div>
                     <div class="form-group">
                        <label>Officer Designation</label>
                        <div><?php echo form_error('officer_designation'); ?></div>
                        <input type="text" class="form-control" name="officer_designation" value="<?=set_value('officer_designation')?>">
                     </div>      
                     <div class="form-group">
                        <label>Phone Number</label>
                        <div><?php echo form_error('phone'); ?></div>
                        <input type="text" name="phone" value="<?=set_value('phone')?>" class="form-control">
                     </div> 
                     <div class="form-group">
                      <label>Daycare Type</label>
                      <div><?php echo form_error('type_id'); ?></div>
                      <?php
                      $more_attr = 'class="form-control input-sm"';
                      echo form_dropdown('type_id', $daycare_type, set_value('type_id'), $more_attr);
                      ?>
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