<style type="text/css">
 .required {color: red;}
 .hide {
   display: none;
}
</style>

<section class="content-header">
   <h1> <?=$meta_title;?> </h1>
   <ol class="breadcrumb">
      <li><a href="<?=base_url('adminpanel/dashboard');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li class="active"><?=$meta_title;?></li>
   </ol>
</section>

<section class="content">

   <div class="row">
      <div class="col-md-12">
         <div class="box box-primary">
            <div class="box-header with-border">
               <h3 class="box-title"><?=$meta_title;?></h3>
               <a href="<?=base_url('adminpanel/member')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> Member List</a>          
            </div>        
            <?php 
            $attributes = array('id' => 'jsvalidation');
            echo form_open_multipart(uri_string(), $attributes);
            ?>
            <div class="box-body">
               <div><?php echo validation_errors(); ?></div>
               <?php if($this->session->flashdata('success')):?>
                  <div class="alert alert-success">
                     <a class="close" data-dismiss="alert">&times;</a>
                     <?php echo $this->session->flashdata('success');;?>
                  </div>
               <?php endif; ?>

               <div class="row">
                  <div class="col-md-7">

                     <fieldset class="col-md-12">      
                        <legend>Basic Information</legend>
                        <div class="row row-form">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Full Name (Bangla) <span class='required'>*</span></label>
                                 <div><?php echo form_error('name_bn'); ?></div>
                                 <input type="text" name="name_bn" value="<?=set_value('name_bn', $info->name_bn)?>" class="bangla form-control">
                              </div>   
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Full Name (English) <span class='required'>*</span></label>
                                 <div><?php echo form_error('first_name'); ?></div>
                                 <input type="text" name="first_name" value="<?=set_value('first_name', $info->first_name)?>" class="form-control">
                              </div>   
                           </div>
                        </div>
                        <div class="row row-form">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Father Name (Bangla) <span class='required'>*</span></label>
                                 <div><?php echo form_error('father_name_bn'); ?></div>
                                 <input type="text" name="father_name_bn" value="<?=set_value('father_name_bn', $info->father_name_bn)?>" class="bangla form-control">
                              </div>   
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Father Name (English)</label>
                                 <div><?php echo form_error('father_name_en'); ?></div>
                                 <input type="text" name="father_name_en" value="<?=set_value('father_name_en', $info->father_name_en)?>" class="form-control">
                              </div>   
                           </div>
                        </div>
                        <div class="row row-form">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Mother Name (Bangla)</label>
                                 <div><?php echo form_error('mother_name_bn'); ?></div>
                                 <input type="text" name="mother_name_bn" value="<?=set_value('mother_name_bn', $info->mother_name_bn)?>" class="bangla form-control">
                              </div>   
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>Mother Name (English)</label>
                                 <div><?php echo form_error('mother_name_en'); ?></div>
                                 <input type="text" name="mother_name_en" value="<?=set_value('mother_name_en', $info->mother_name_en)?>" class="form-control">
                              </div>   
                           </div>
                        </div>
                        <div class="row row-form">
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Date of Birth</label>
                                 <div><?php echo form_error('dob'); ?></div>
                                 <input type="text" name="dob" value="<?=set_value('dob', date_browse_format($info->dob))?>" class="form-control datepicker" autocomplete="off">
                              </div>   
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                 <label>Religion </label>
                                 <?php echo form_error('religion_id');
                                 $more_attr = 'class="form-control input-sm" ';
                                 echo form_dropdown('religion_id', $religions, set_value('religion_id', $info->religion_id), $more_attr);
                                 ?>
                              </div>   
                           </div>
                           <div class="col-md-4">
                              <div class="form-group">
                                <label class="form-label">Gender</label> <br>
                                <div><?php echo form_error('gender'); ?></div>
                                <input type="radio" name="gender" value="Male" <?=set_value('gender')=='Male'?'checked':'checked';?>> Male 
                                <input type="radio" name="gender" value="Female" <?=set_value('gender')=='Female'?'':'';?>> Female
                             </div>
                          </div>
                       </div>
                       <div class="row row-form">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>Blood Group</label>
                              <?php echo form_error('bg_id');
                              $more_attr = 'class="form-control input-sm" ';
                              echo form_dropdown('bg_id', $blood_group, set_value('bg_id', $info->bg_id), $more_attr);
                              ?>               
                           </div>   
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>Marital Status</label>
                              <?php echo form_error('ms_id');
                              $more_attr = 'class="form-control input-sm" ';
                              echo form_dropdown('ms_id', $marital_status, set_value('ms_id', $info->ms_id), $more_attr);
                              ?>                           
                           </div>   
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="form-label">Spouse Name</label>                              
                              <div><?php echo form_error('spouse_name'); ?></div>
                              <input type="text" name="spouse_name" value="<?=set_value('spouse_name', $info->spouse_name)?>" class="form-control">
                           </div>
                        </div>
                     </div>
                     <div class="row row-form">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Mobile Number<span class="required"> *</span></label>
                              <div><?php echo form_error('phone'); ?></div>
                              <input type="number" name="phone" value="<?=set_value('phone', $info->phone)?>" class="form-control">
                           </div>   
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="form-label">Email</label>
                              <div><?php echo form_error('email'); ?></div>
                              <input type="text" name="email" value="<?=set_value('email', $info->email)?>" class="form-control">
                           </div>
                        </div>


                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Residance Phone</label>                              
                              <input type="number" name="phone_house" value="<?=set_value('phone_house', $info->phone_house)?>" class="form-control">
                           </div>   
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="form-label">Office Phone</label>
                              <div><?php echo form_error('phone_office'); ?></div>
                              <input type="number" name="phone_office" value="<?=set_value('phone_office', $info->phone_office)?>" class="form-control">
                           </div>
                        </div>
                     </div>


                     <div class="row row-form">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label class="form-label">Present Address</label>
                              <div><?php echo form_error('present_address'); ?></div>
                              <textarea name="present_address" class="form-control"><?=set_value('present_address', $info->present_address)?></textarea>
                           </div>
                        </div>

                        <h4 style="margin-left: 15px; font-weight: bold;">Permanant Address</h4>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Address Line 1</label>
                              <input type="text" name="per_village_house" value="<?=set_value('per_village_house', $info->per_village_house)?>" class="form-control">
                           </div>   
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Address Line 2</label>
                              <input type="text" name="per_road_block" value="<?=set_value('per_road_block', $info->per_road_block)?>" class="form-control">
                           </div>   
                        </div>                        
                     </div>

                     <div class="row row-form">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="form-label">Division</label>
                              <?php echo form_error('per_division_id');
                              $more_attr = 'class="form-control" id="division"';
                              echo form_dropdown('per_division_id', $divisions, set_value('per_division_id', $info->per_division_id), $more_attr);
                              ?>    
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="form-label">District</label>                              
                              <?php echo form_error('per_district_id');
                              $more_attr = 'class="distirict_val form-control" id="district"';
                              echo form_dropdown('per_district_id', $districts, set_value('per_district_id', $info->per_district_id), $more_attr);
                              ?>  
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="form-group">
                              <label class="form-label">Upazila/Thana</label>
                              <?php echo form_error('per_upa_tha_id');
                              $more_attr = 'class="upazila_thana_val form-control"';
                              echo form_dropdown('per_upa_tha_id', $upazilas, set_value('per_upa_tha_id', $info->per_upa_tha_id), $more_attr);
                              ?>
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">                           
                              <label>Post Code</label>
                              <input type="number" name="per_post_code" value="<?=set_value('per_post_code', $info->per_post_code)?>" class="form-control">
                           </div>   
                        </div>
                     </div> 
                   <div class="col-md-6">
                     <div class="form-group">
                        <label>Image Upload</label>
                        <div><?php echo form_error('userfile'); ?></div>
                        <input type="file" name="userfile">
                        <p class="help-block">File type jpg, png, jpeg are allowed.</p>

                        <?php 
                        $img_path = base_url().'member_img/';
                        if($info->image_file != NULL){
                         $src= $img_path.$info->image_file;
                         echo "<img src='$src' height='150'>";
                      }
                      ?>
                     </div>
                   </div>
                   <div class="col-md-6">
                     <div class="form-group">
                        <label>Signiture Upload</label>
                        <div><?php echo form_error('userfile1'); ?></div>
                        <input type="file" name="userfile1">
                        <p class="help-block">File type jpg, png, jpeg are allowed.</p>

                        <?php 
                        $img_path = base_url().'signature_img/';
                        if($info->signiture_file != NULL){
                         $src= $img_path.$info->signiture_file;
                         echo "<img src='$src' height='150'>";
                      }
                      ?>
                     </div>
                   </div>
                   


                </fieldset>                               
                <div class="clearfix"></div>

                 <!--  <div class="form-group">
                     <label>Overview</label>
                     <div><?php echo form_error('overview'); ?></div>
                     <textarea class="textarea" name="overview" rows="10" cols="80"><?=set_value('overview')?></textarea>
                  </div> -->
               </div> 
               <!-- /col-md-7 -->

               <div class="col-md-5">
                  <fieldset class="col-md-12">      
                     <legend>Official Information</legend>

                     <div class="row row-form">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Member ID </label>
                              <h4><strong><?=$info->member_id?></strong></h4>
                           </div>  
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Member Service ID <span class='required'>*</span></label>
                              <input type="text" name="member_no" value="<?=set_value('member_no', $info->member_no)?>" class="form-control">
                           </div>   
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Select Batch <span class='required'>*</span></label>
                              <?php echo form_error('batch_id');
                              $more_attr = 'class="form-control input-sm" ';
                              echo form_dropdown('batch_id', $batch, set_value('batch_id', $info->batch_id), $more_attr);
                              ?>
                           </div>  
                        </div>                        
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Joining Date</label>
                              <input type="text" name="join_date" value="<?=set_value('join_date', date_browse_format($info->join_date))?>" class="form-control datepicker" autocomplete="off">
                           </div>  
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Current Designation</label>
                              <?php echo form_error('curr_designation_id');
                              $more_attr = 'class="form-control input-sm" ';
                              echo form_dropdown('curr_designation_id', $designations, set_value('curr_designation_id', $info->curr_designation_id), $more_attr);
                              ?>
                           </div>  
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Current Working Place</label>
                              <input type="text" name="curr_working_place" value="<?=set_value('curr_working_place', $info->curr_working_place)?>" class="form-control">
                           </div>  
                        </div>
                     </div>

                     <div class="row row-form">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label class="form-label">Spouse Service Info </label> <br>
                              <input type="radio" name="govt_emp" value="0" onclick="show1();" <?=set_value('govt_emp')=='0'?'checked':'checked';?>> No 
                              <input type="radio" name="govt_emp" value="1" onclick="show2();" <?=set_value('govt_emp')=='1'?'checked':'';?>> Yes
                           </div>  
                        </div>

                     </div>
                     <div id="div1" class="row row-form">
                        <!-- <div class="col-md-6">
                           <div class="form-group">
                              <label>Govt. Designation</label>
                              <div><?php echo form_error('govt_designation'); ?></div>
                              <input type="text" name="govt_designation" value="<?=set_value('govt_designation', $info->govt_designation)?>" class="form-control">
                           </div>   
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Govt. Organization Name</label>
                              <div><?php echo form_error('govt_organization'); ?></div>
                              <input type="text" name="govt_organization" value="<?=set_value('govt_organization', $info->govt_organization)?>" class="form-control">
                           </div>   
                        </div> -->

                        <div class="col-md-12">
                           <div class="form-group">
                              <!-- <label class="form-label">Present Address</label> -->
                              <div><?php echo form_error('spouse_service_info'); ?></div>
                              <textarea name="spouse_service_info" class="form-control"><?=set_value('spouse_service_info', $info->spouse_service_info)?></textarea>
                           </div>
                        </div>
                     </div>

                     <div class="row row-form">
                         <h4 style="margin-left: 15px; font-weight: bold;">Attachment Document Information</h4>

                         <!-- <div class="col-md-6">
                           <div class="form-group">
                              <label>Birth Certificate No:</label>
                              <div><?php echo form_error('birth_certificate_no'); ?></div>
                              <input type="text" name="birth_certificate_no" value="<?=set_value('birth_certificate_no', $info->birth_certificate_no)?>" class="form-control">
                           </div>   
                        </div> -->

                        <div class="col-md-6">
                           <div class="form-group">
                              <label>National ID No:</label>
                              <div><?php echo form_error('national_id'); ?></div>
                              <input type="text" name="national_id" value="<?=set_value('national_id', $info->national_id)?>" class="form-control">
                           </div>   
                        </div>


                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Passport No:</label>
                              <div><?php echo form_error('passport_no'); ?></div>
                              <input type="text" name="passport_no" value="<?=set_value('passport_no', $info->passport_no)?>" class="form-control">
                           </div>   
                        </div>

                        <!-- <div class="col-md-6">
                           <div class="form-group">
                              <label>Tin No:</label>
                              <div><?php echo form_error('tin_no'); ?></div>
                              <input type="text" name="tin_no" value="<?=set_value('tin_no', $info->tin_no)?>" class="form-control">
                           </div>   
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Driving License No:</label>
                              <div><?php echo form_error('driving_license_no'); ?></div>
                              <input type="text" name="driving_license_no" value="<?=set_value('driving_license_no', $info->driving_license_no)?>" class="form-control">
                           </div>   
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="form-label">Other Information </label>
                              <div><?php echo form_error('attach_other_info'); ?></div>
                              <textarea name="attach_other_info" class="form-control" rows="1"><?=set_value('attach_other_info', $info->attach_other_info)?></textarea>
                           </div>
                        </div> -->


                                                
                     </div> 
                     
                     <div class="row row-form">
                        <h4 style="margin-left: 15px; font-weight: bold;">Financial Information</h4>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Member Fee</label>
                              <input type="number" name="pay_member_fee" value="<?=set_value('pay_member_fee', $info->pay_member_fee)?>" class="form-control">
                           </div>  
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Payment Date</label>
                              <input type="text" name="pay_date" value="<?=set_value('pay_date' , date_browse_format($info->pay_date))?>" class="form-control datepicker" autocomplete="off">
                           </div>  
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Payment Method</label>
                              <?php echo form_error('pay_method_id');
                              $more_attr = 'class="form-control input-sm"';
                              echo form_dropdown('pay_method_id', $payment_methods, set_value('pay_method_id' , $info->pay_method_id), $more_attr);
                              ?>              
                           </div>  
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>Pay Order/ Bank DD Name</label>
                              <input type="text" name="pay_receipt_no" value="<?=set_value('pay_receipt_no' , $info->pay_receipt_no)?>" class="form-control">
                           </div>  
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label class="form-label">Bank Name / Other Info </label>
                              <div><?php echo form_error('pay_other_info'); ?></div>
                              <textarea name="pay_other_info" class="form-control"><?=set_value('pay_other_info' , $info->pay_other_info)?></textarea>
                           </div>
                        </div>
                     </div>

                     <div class="row row-form">
                        <h4 style="margin-left: 15px; font-weight: bold;">Emergency Contact Information</h4>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>Contact Name</label>
                              <input type="text" name="emg_contact_name" value="<?=set_value('emg_contact_name' , $info->emg_contact_name)?>" class="form-control">
                           </div>   
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>Contact Number</label>
                              <input type="text" name="emg_contact_no" value="<?=set_value('emg_contact_no'  , $info->emg_contact_no)?>" class="form-control">
                           </div>   
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label class="form-label">Contact Email</label>
                              <div><?php echo form_error('emg_contact_email'); ?></div>
                              <input type="text" name="emg_contact_email" value="<?=set_value('emg_contact_email' , $info->emg_contact_email)?>" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-12">
                           <div class="form-group">
                              <label class="form-label">Contact Address</label>
                              <div><?php echo form_error('emg_contact_address'); ?></div>
                              <textarea name="emg_contact_address"  class="form-control"><?=set_value('emg_contact_address', $info->emg_contact_address)?></textarea>
                              <!-- <textarea name="emg_contact_address"  class="form-control">  </textarea> -->
                           </div>
                        </div>
                     </div>

                  </fieldset>                               
                  <div class="clearfix"></div>

               </div>
               <!-- /col-md-5 -->

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

<script type="text/javascript">
   // $.validator.setDefaults({
   //    submitHandler: function() {
   //       //alert("submitted!");
            // form.submit(); 
   //    }
   // });

   document.getElementById('div1').style.display ='none';
   function show1(){
      document.getElementById('div1').style.display ='none';
   }
   function show2(){
      document.getElementById('div1').style.display ='block';
   }


   $().ready(function() {
      // validate the comment form when it is submitted
      //$("#commentForm").validate();

      // Jquery custome validate
      $.validator.addMethod("noSpace", function(value, element) { 
         return value.indexOf(" ") < 0 && value != ""; 
      }, "No space allowed use underscore symbol like ' _ '");

      // validate signup form on keyup and submit
      $("#jsvalidation").validate({
         rules: {
            name_bn: "required",
            first_name: "required",
            father_name_bn: "required",
            // father_name_en: "required",
            member_no: "required",
            // mother_name_bn: "required",
            // mother_name_en: "required",
            // dob: "required",
            // religion_id: "required",
            // bg_id: "required",
            // ms_id: "required",
            // phone: "required",
            // phone_office: "required",
            // present_address: "required",
            batch_id: "required",
            // join_date: "required",
            // curr_designation_id: "required",
            // curr_working_place: "required",
            // govt_designation: "required",
            // govt_organization: "required",
            // emg_contact_name: "required",
            // emg_contact_no: "required",
            // emg_contact_email: "required",
            // emg_contact_address: "required"
         },
         messages: {
            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname"
         }
      });      

      // propose username by combining first- and lastname
      $("#username").focus(function() {
         var firstname = $("#firstname").val();
         var lastname = $("#lastname").val();
         if (firstname && lastname && !this.value) {
            this.value = firstname + "." + lastname;
         }
      });

      //code to hide topic selection, disable for demo
      var newsletter = $("#newsletter");
      // newsletter topics are optional, hide at first
      var inital = newsletter.is(":checked");
      var topics = $("#newsletter_topics")[inital ? "removeClass" : "addClass"]("gray");
      var topicInputs = topics.find("input").attr("disabled", !inital);
      // show when newsletter is checked
      newsletter.click(function() {
         topics[this.checked ? "removeClass" : "addClass"]("gray");
         topicInputs.attr("disabled", !this.checked);
      });


      // onChange Method
      // $('#identity').keyup(function(){
      //    // $('#mask_username').html($('#identity').val());
      //    $('#mask_username').html($(this).val().toLowerCase());
      // });


   });


</script>
