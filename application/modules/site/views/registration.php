<style type="text/css">
   .error{
      color: red;
   }
</style>
<div class="row">
   <?php $this->load->view('frontend/right_side_bar'); ?>   
   
   <div class="col-md-9 main-content"> 
      <div class="col-md-12 col-sm-12">   
         <fieldset class="scheduler-border">
            <legend class="scheduler-border"> অভিভাবকের রেজিস্ট্রেশন ফরম </legend>

            <form action="<?=base_url('registration')?>" method="post" enctype="multipart/form-data" id="jsvalidation">
               <div><?php echo validation_errors(); ?></div>

               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="row form-row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>নামের প্রথম অংশ (বাংলা) <span class="required">*</span></label>
                           <input type="text" name="first_name" value="" class="form-control" placeholder="">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>নামের শেষাংশ (বাংলা) <span class="required">*</span></label>
                           <input type="text" name="last_name" value="" class="form-control" placeholder="">
                        </div>
                     </div>
                  </div>

                  <div class="row form-row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>ইমেইল এড্রেস <span class="required">*</span></label>
                           <input type="email" name="identity" value ="<?=set_value('identity')?>" id="identity" class="form-control" placeholder="" style="text-transform: lowercase;">
                        </div>                           
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>মোবাইল নম্বর <span class="required">*</span></label>
                           <input type="text" name="mobile_no" value="<?=set_value('mobile_no')?>" class="form-control" placeholder="">
                        </div>
                     </div>
                  </div>

                  <div class="row form-row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>পাসওয়ার্ড <span class="required">*</span></label>
                           <input type="password" name="password" value="" class="form-control">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>লিঙ্গ</label><br>
                           <input type="radio" name="gender" value="Male" checked> পুরুষ 
                           <input type="radio" name="gender" value="Female"> মহিলা
                        </div>
                     </div>
                  </div>

                  <div class="row form-row">
                     <div class="col-md-12">
                        <div class="form-group">
                           <input type="submit" name="submit" value="সাবমিট করুন" class="btn btn-success pull-right" style="font-weight: bold;">
                        </div>
                     </div>
                  </div>
               </div>
            </form>

         </fieldset>
      </div>
   </div>

   
</div>

<script type="text/javascript">

   $(document).ready(function() {

   // validate signup form on keyup and submit
   $("#jsvalidation").validate({
      rules: {
         first_name: "required",
         last_name: "required",
         identity: {
            required: true, 
            email: true,
            minlength: 3,
            remote: {
               url: hostname +"site/ajax_exists_identity/",
               type: "post",
               data: {
                  inputData: function() {
                     return $( "#identity" ).val();
                  }
               }
            }         
         }, 
         password: {
            required: true,
            minlength: 8
         },
         mobile_no: {
            required: true,
            minlength: 11,
            maxlength: 11
         }
      },
      messages: {
         firstname: "Please enter your firstname",
         lastname: "Please enter your lastname",
         identity: {
            remote: "Already in use! Please try another"
         }
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