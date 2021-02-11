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
            echo form_open_multipart("adminpanel/member/nominee", $attributes);
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
                  <div class="col-md-12">

                     <fieldset class="col-md-12">      
                        <legend>Nominee Information</legend>
                        <div class="row row-form">
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label>Nominee Name (Bangla) <span class='required'>*</span></label>
                                 <div><?php echo form_error('nom_name_bn'); ?></div>
                                 <input type="text" name="nom_name_bn" value="<?=set_value('nom_name_bn')?>" class="bangla form-control">
                              </div>   
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label>Nominee Name (English) <span class='required'>*</span></label>
                                 <div><?php echo form_error('nom_name_en'); ?></div>
                                 <input type="text" name="nom_name_en" value="<?=set_value('nom_name_en')?>" class="form-control">
                              </div>   
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">
                                 <label>Father Name (Bangla) <span class='required'>*</span></label>
                                 <div><?php echo form_error('nom_father_name_bn'); ?></div>
                                 <input type="text" name="nom_father_name_bn" value="<?=set_value('nom_father_name_bn')?>" class="form-control">
                              </div>   
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label>Father Name (English) <span class='required'>*</span></label>
                                 <div><?php echo form_error('nom_father_name_en'); ?></div>
                                 <input type="text" name="nom_father_name_en" value="<?=set_value('nom_father_name_en')?>" class="form-control">
                              </div>   
                           </div>

                        </div>

                        <div class="row row-form">
                           
                        </div>
                        <div class="row row-form">
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label>Mother Name (Bangla)</label>
                                 <div><?php echo form_error('nom_mother_name_bn'); ?></div>
                                 <input type="text" name="nom_mother_name_bn" value="<?=set_value('nom_mother_name_bn')?>" class="form-control">
                              </div>   
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label>Mother Name (English)</label>
                                 <div><?php echo form_error('nom_mother_name_en'); ?></div>
                                 <input type="text" name="nom_mother_name_en" value="<?=set_value('nom_mother_name_en')?>" class="form-control">
                              </div>   
                           </div>

                           <div class="col-md-3">
                           <div class="form-group">
                              <label>Personal Phone  <span class='required'>*</span> </label>
                              <div><?php echo form_error('nom_mobile_no'); ?></div>
                              <input type="text" name="nom_mobile_no" value="<?=set_value('nom_mobile_no')?>" class="form-control">
                           </div>   
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                              <label>Personal Email</label>
                              <div><?php echo form_error('nom_email'); ?></div>
                              <input type="text" name="nom_email" value="<?=set_value('nom_email')?>" class="form-control">
                           </div>   
                        </div>
                        </div>
                     
                     <div class="row row-form">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="form-label">Parmanent Address</label>
                              <div><?php echo form_error('nom_par_address'); ?></div>
                              <textarea name="nom_par_address" class="form-control"><?=set_value('nom_par_address')?></textarea>
                           </div>
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="form-label">Present Address</label>
                              <div><?php echo form_error('nom_pre_address'); ?></div>
                              <textarea name="nom_pre_address" class="form-control"><?=set_value('nom_pre_address')?></textarea>
                           </div>
                        </div>                 
                     </div>

                     <div class="row row-form">
                        
                     </div>

                     <div class="row row-form">
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label>Date of Birth <span class='required'>*</span></label>
                                 <div><?php echo form_error('nom_dob'); ?></div>
                                 <input type="text" name="nom_dob" value="<?=set_value('nom_dob')?>" class="form-control datepicker">
                              </div>   
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label>Religion</label>
                                 <?php echo form_error(' nom_religion_id');
                                 $more_attr = 'class="form-control input-sm" ';
                                 echo form_dropdown(' nom_religion_id', $religions, set_value('   nom_religion_id'), $more_attr);
                                 ?>
                              </div>   
                           </div>
                           <div class="col-md-3">
                              <div class="form-group">
                               <label class="form-label">Gender</label> <br>
                               <div><?php echo form_error('nom_gender'); ?></div>
                               <input type="radio" name="nom_gender" value="Male" <?=set_value('nom_gender')=='Male'?'checked':'checked';?>> Male 
                               <input type="radio" name="nom_gender" value="Female" <?=set_value('nom_gender')=='Female'?'':'';?>> Female
                            </div>
                         </div>

                         <div class="col-md-3">
                              <div class="form-group">
                                 <label>Birth Certificate No </label>
                                 <div><?php echo form_error('nom_birth_certificate'); ?></div>
                                 <input type="text" name="nom_birth_certificate" value="<?=set_value('nom_birth_certificate')?>" class="form-control">
                              </div>   
                           </div>

                      </div>

                      <div class="row row-form">
                           <div class="col-md-3">
                              <div class="form-group">
                                 <label>Passport</label>
                                 <div><?php echo form_error('nom_passport'); ?></div>
                                 <input type="text" name="nom_passport" value="<?=set_value('nom_passport')?>" class="form-control datepicker">
                              </div>   
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">
                                 <label>Tin No</label>
                                 <div><?php echo form_error('nom_etin'); ?></div>
                                 <input type="text" name="nom_etin" value="<?=set_value('nom_etin')?>" class="form-control datepicker">
                              </div>   
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">
                                 <label>Driving License</label>
                                 <div><?php echo form_error('nom_driving_license'); ?></div>
                                 <input type="text" name="nom_driving_license" value="<?=set_value('nom_driving_license')?>" class="form-control">
                              </div>   
                           </div>

                           <div class="col-md-3">
                              <div class="form-group">
                                 <label>Nominee Relationship</label>
                                 <div><?php echo form_error('nom_relation'); ?></div>
                                 <input type="text" name="nom_relation" value="<?=set_value('nom_relation')?>" class="form-control">
                              </div>   
                        </div>

                      </div>

                     <div class="row row-form">
                        
                        <div class="col-md-3">
                           <div class="form-group">
                              <label>Nominee Share Amount</label>
                              <div><?php echo form_error('nom_share_amount'); ?></div>
                              <input type="text" name="nom_share_amount" value="<?=set_value('nom_share_amount')?>" class="form-control">
                           </div>   
                        </div>

                        <div class="col-md-3">
                           <div class="form-group">
                              <label class="form-label">Kid Nominee </label> <br>
                              <input type="radio" name="govt_emp" value="0" onclick="show1();" <?=set_value('govt_emp')=='0'?'checked':'checked';?>> No
                              <input type="radio" name="govt_emp" value="1" onclick="show2();" <?=set_value('govt_emp')=='1'?'checked':'';?>> Yes 
                           </div>  
                        </div>

                     </div>

                     <div id="div1" class="row row-form">
                        <div class="col-md-3">
                           <div class="form-group">
                              <label>Name</label>
                              <div><?php echo form_error('nom_kid_name'); ?></div>
                              <input type="text" name="nom_kid_name" value="<?=set_value('nom_kid_name')?>" class="form-control">
                           </div>   
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                              <label>Father Name</label>
                              <div><?php echo form_error('nom_kid_father_name'); ?></div>
                              <input type="text" name="nom_kid_father_name" value="<?=set_value('nom_kid_father_name')?>" class="form-control">
                           </div>   
                        </div>

                        <div class="col-md-3">
                           <div class="form-group">
                              <label>Mother Name</label>
                              <div><?php echo form_error('  nom_kid_mother_name'); ?></div>
                              <input type="text" name="  nom_kid_mother_name" value="<?=set_value(' nom_kid_mother_name')?>" class="form-control">
                           </div>   
                        </div>

                        <div class="col-md-3">
                           <div class="form-group">
                                 <label>Date of Birth</label>
                                 <div><?php echo form_error('nom_kid_dob'); ?></div>
                                 <input type="text" name="nom_kid_dob" value="<?=set_value('nom_kid_dob')?>" class="form-control datepicker">
                           </div>   
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="form-label">Present Address</label>
                              <div><?php echo form_error('nom_kid_pre_address'); ?></div>
                              <textarea name="nom_kid_pre_address" class="form-control"><?=set_value('nom_kid_pre_address')?></textarea>
                           </div>
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                              <label class="form-label">Permanent Address</label>
                              <div><?php echo form_error('nom_kid_par_address'); ?></div>
                              <textarea name="nom_kid_par_address" class="form-control"><?=set_value('nom_kid_par_address')?></textarea>
                           </div>
                        </div>

                        <div class="col-md-3">
                           <div class="form-group">
                              <label>Other Guardian</label>
                              <div><?php echo form_error('nom_kid_other_guardian'); ?></div>
                              <input type="text" name="nom_kid_other_guardian" value="<?=set_value('nom_kid_other_guardian')?>" class="form-control">
                           </div>   
                        </div>
                        <div class="col-md-3">
                           <div class="form-group">
                              <label>Kid Relationship</label>
                              <div><?php echo form_error('nom_kid_relation'); ?></div>
                              <input type="text" name="nom_kid_relation" value="<?=set_value('nom_kid_relation')?>" class="form-control">
                           </div>   
                        </div>


                     </div>

                     <div class="form-group">
                        <label>Image Upload</label>
                        <div><?php echo form_error('userfile'); ?></div>
                        <input type="file" name="userfile">
                        <p class="help-block">File type jpg, png, jpeg are allowed.</p>
                     </div>
                  </fieldset>                               
                  <div class="clearfix"></div>
               </div> 
               <!-- /col-md-7 -->

               
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
            nom_name_bn: "required",
            nom_name_en: "required",
            nom_father_name_bn: "required",
            nom_father_name_en: "required",
            nom_mobile_no: "required",
            nom_dob: "required",
            
            identity: {
               required: true, 
               noSpace: true,
               minlength: 3,
               remote: {
                  url: hostname +"adminpanel/ajax_exists_identity/",
                  type: "post",
                  data: {
                     inputData: function() {
                        return $( "#identity" ).val();
                     }
                  }
               }         
            }, 
            member_id: {
               required: true, 
               number: true,
               noSpace: true,
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
            }, 
            password: {
               required: true,
               minlength: 8
            },
            confirm_password: {
               required: true,
               minlength: 5,
               equalTo: "#password"
            },
            email: {
               required: true,
               email: true
            },
            topic: {
               required: "#newsletter:checked",
               minlength: 2
            },
            agree: "required"
         },
         messages: {
            firstname: "Please enter your firstname",
            lastname: "Please enter your lastname",
            identity: {
               required: "Enter member ID / email required.",               
               remote: "Already in use! Please try another"
            },
            member_id: {
               required: "Enter member ID required.",               
               number: "Please enter number only",               
               remote: "Already existes member ID"
            },
            username: {
               required: "Please enter a username",
               minlength: "Your username must consist of at least 2 characters"
            },
            password: {
               required: "Please provide a password",
               minlength: "Your password must be at least 5 characters long"
            },
            confirm_password: {
               required: "Please provide a password",
               minlength: "Your password must be at least 5 characters long",
               equalTo: "Please enter the same password as above"
            },
            email: "Please enter a valid email address",
            agree: "Please accept our policy",
            topic: "Please select at least 2 topics"
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
