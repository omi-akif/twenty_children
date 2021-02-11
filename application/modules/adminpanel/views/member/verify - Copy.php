<section class="content-header">
   <h1> <?=$meta_title; ?> </h1>
   <ol class="breadcrumb">
      <li><a href="<?=base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active"><?=$meta_title; ?></li>
   </ol>
</section>

<section class="content">

   <div class="row">
      <div class="col-md-12">
         <div class="box box-primary">
            <div class="box-header with-border">
               <h3 class="box-title">Details Member</h3>
               <!--           <a href="<?=base_url('admin/product/edit/'.$info->id)?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> Edit Project / Event</a>      -->     
            </div>        
            <div class="box-body">
               <div id="infoMessage"><?php //echo $message;?></div>
               <div><?php //echo validation_errors(); ?></div>
               <?php if($this->session->flashdata('success')):?>
                  <div class="alert alert-success">
                     <a class="close" data-dismiss="alert">&times;</a>
                     <?php echo $this->session->flashdata('success');?>
                  </div>
               <?php endif; ?>

               <div class="row">
                  <div class="col-md-7">
                     <dl class="dl-horizontal">
                        <dt>Full Name (Bangla)</dt>
                        <dd><?=$info->name_bn?></dd>
                        <dt>Full Name (English)</dt>
                        <dd><?=$info->first_name?></dd>
                        <dt>Father Name (Bangla)</dt>
                        <dd><?=$info->father_name_bn?></dd>
                        <dt>Father Name (English)</dt>
                        <dd><?=$info->father_name_en?></dd>                    
                        <dt>Mother Name (Bangla)</dt>
                        <dd><?=$info->mother_name_bn?></dd>
                        <dt>Mother Name (English)</dt>
                        <dd><?=$info->mother_name_en?></dd>
                        <dt>Date of Birth</dt>
                        <dd><?=$info->dob?></dd>
                        <dt>Religion</dt>
                        <dd><?=$info->religion_name_en?></dd>  
                        <dt>Gender</dt>
                        <dd><?=$info->gender?></dd>
                        <dt>Blood Group</dt>
                        <dd><?=$info->bg_name_en?></dd>
                        <dt>Marital Status</dt>
                        <dd><?=$info->ms_name_en?></dd>
                        <dt>Spouse Name</dt>
                        <dd><?=$info->spouse_name?></dd>  
                        <dt>Personal Phone</dt>
                        <dd><?=$info->phone?></dd>
                        <dt>Residance Phone</dt>
                        <dd><?=$info->phone_house?></dd>
                        <dt>Office Phone</dt>
                        <dd><?=$info->phone_office?></dd>
                        <dt>Present Address</dt>
                        <dd><?=$info->present_address?></dd>  
                        <dt>Village/House No/Name</dt>
                        <dd><?=$info->per_village_house?></dd>
                        <dt>Road/Block/Sector</dt>
                        <dd><?=$info->per_road_block?></dd>
                        <dt>Division</dt>
                        <dd><?=$info->div_name_en?></dd>  
                        <dt>District</dt>
                        <dd><?=$info->dis_name_en?></dd>
                        <dt>Upazila/Thana</dt>
                        <dd><?=$info->upa_name_en?></dd>
                        <dt>Post Code</dt>
                        <dd><?=$info->per_post_code?></dd>  
                        <dt>Select Batch</dt>
                        <dd><?=$info->batch_name_en?></dd>
                        <dt>Joining Date</dt>
                        <dd><?=$info->join_date?></dd>  
                        <dt>Current Designation</dt>
                        <dd><?=$info->desig_name_en?></dd> 
                        <dt>Current Working Place</dt>
                        <dd><?=$info->curr_working_place?></dd>                     
                     </dl>                 
                  </div>

                  <div class="col-md-5">
                     <dl class="dl-horizontal">
                        <dt>Image</dt>
                        <dd>
                           <?php 
                           $img_path = base_url().'member_img/';
                           if($info->image_file != NULL){
                              $src= $img_path.$info->image_file;
                              echo "<img src='$src' class='img-responsive'>";
                           }
                           ?>
                        </dd>                 
                     </dl>

                     <?php 
                     $attributes = array('id' => 'jsvalidation');
                     echo form_open(uri_string(), $attributes);
                     ?>

                     <div class="row row-form">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Member ID <span class='required'>*</span></label>
                              <input type="number" name="member_id" id="member_id" value="<?=set_value('member_id')?>" class="form-control">
                           </div>  
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Member Serial No <span class='required'>*</span></label>
                              <input type="number" name="member_no" id="member_no" value="<?=set_value('member_no')?>" class="form-control">
                           </div>  
                        </div>

                        <div class="col-md-8">
                           <div class="form-group">
                              <label>Verified Status <span class='required'>*</span></label> <br>
                              <?php echo form_error('is_verified');?>
                              <input type="radio" name="is_verified" value="1" id="selectedV" <?=set_value('is_verified')==1?'checked':'checked';?>> Verfied
                              <input type="radio" name="is_verified" value="0" <?=set_value('is_verified')==0?'':'';?>> Not Verfied
                           </div>  
                        </div>
                        <div class="col-md-4">
                           <?php echo form_submit('submit', 'Save', "class='btn btn-primary pull-right'"); ?>
                        </div> 

                     </div>

                  </form>

               </div>
            </div>
         </div>
         <!-- /.box-body -->
         <?php echo form_close();?>
      </div>
      <!-- /.box -->
   </div>
</div>
<!-- /.row -->

</section>
<!-- /.content -->


<script type="text/javascript">

   $().ready(function() {
      // validate signup form on keyup and submit
      $("#jsvalidation").validate({
         rules: {
            is_verified: {required: true},        
            member_no: {required: "#selectedV:checked"},        
            member_id: {
               required: "#selectedV:checked", 
               number: "#selectedV:checked",                
               minlength: 4,
               remote: {
                  url: hostname +"adminpanel/ajax_exists_member_id/",
                  type: "post",
                  data: {
                     inputData: function() {
                        return $( "#member_id" ).val();
                     }
                  }
               }         
            }
         },

         messages: {
            member_id: {
               required: "Enter member ID required.",               
               number: "Please enter number only",               
               remote: "Already existes member ID"
            }
         }
      });

   });
</script>
