<!-- CONTENT AREA -->
<div class="content-area">

   <!-- BREADCRUMBS -->
   <section class="page-section breadcrumbs text-center">
      <div class="container">
         <div class="page-header">
            <h1><?=$meta_title?></h1>
         </div>
      </div>
   </section>
   <!-- /BREADCRUMBS -->

   <!-- PAGE -->
   <section class="page-section color">
      <div class="container">

         <div class="row">
            <div class="col-md-10 col-sm-6 col-md-offset-1 col-sm-offset-1" style="">
               <div class="col-md-3">
                  <?php $this->load->view('left_menu');?>
               </div>
               

               <form action="<?=base_url('application-form')?>" method="post" enctype="multipart/form-data" id="jsvalidation" style="font-family: 'arial'">

                  <div><?php //echo validation_errors(); ?></div>
                  <div class="col-md-9">

                     <fieldset class="scheduler-border">
                        <legend class="scheduler-border">আবেদনের ভর্তি ফরম</legend>
                        <div class="row form-row">
                           <div class="col-md-12">
                              <div class="form-group">

                                 <label>ডে কেয়ার সেন্টার নাম</label>

                                 <?php echo form_error('day_cares_id');
                                 $more_attr = 'class="form-control" ';
                                 echo form_dropdown('day_cares_id', $day_cares, set_value('day_cares_id'), $more_attr);
                                 ?>
                              <!-- <select name="day_cares_id" class="form-control">
                                 <option value="" selected="selected">-Select Day Cares-</option>
                                 <option value="1">dhanmondi</option>
                                 <option value="2">mohammadpur</option>
                              </select> -->
                              </div>
                           </div>
<!-- 
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>আবেদনের তারিখ </label>
                              <input type="date" name="application_dob" value="<?=set_value('application_dob')?>" class="form-control" placeholder="" autocomplete="off">
                           </div>
                        </div>  -->                
                     </div>

                     <div class="row form-row">
                        <div class="col-md-8">
                           <div class="form-group">
                              <label>শিশুর নাম</label>
                              <input type="text" name="members[child_name]" value="<?=set_value('child_name')?>" class="bangla form-control" placeholder="">
                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="form-group">
                              <label>লিঙ্গ</label><br>
                              <input type="radio" name="members[gender]" value="Male" <?=set_value('gender')=='Male'?'checked':'checked';?>> পুরুষ 
                              <input type="radio" name="members[gender]" value="Female" <?=set_value('gender')=='Female'?'':'';?>> মহিলা
                           </div>
                        </div>                   
                     </div>

                     <div class="row form-row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>শিশুর জন্ম তারিখ</label>
                              <input type="date" name="members[child_dob]" value="<?=set_value('child_dob')?>" class="form-control" placeholder="" autocomplete="off">
                           </div>
                        </div> 

                        <div class="col-md-6">
                           <div class="form-group">
                              <label>ভর্তির তারিখে শিশুর বয়স</label>
                              <input type="text" name="members[child_age]" value="<?=set_value('child_age')?>" class="bangla form-control" placeholder="">
                           </div>
                        </div>
                     </div>
                     
                     <div class="row form-row">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>শিশুর ওজন</label>
                              <input type="text" name="members[child_weight]" value="<?=set_value('child_weight')?>" class="bangla form-control" placeholder="">
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>শিশুর উচ্চতা</label>
                              <input type="text" name="members[child_height]" value="<?=set_value('child_height')?>" class="bangla form-control" placeholder="">
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>শিশুর জন্ম চিহ্ন</label>
                              <input type="text" name="members[birth_mark]" value="<?=set_value('birth_mark')?>" class="bangla form-control" placeholder="">
                           </div>
                        </div>
                     </div>

                     <div class="row form-row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>শিশুর জন্ম সনদ নম্বর</label>
                              <input type="number" name="members[birth_certificate_no]" value="<?=set_value('birth_certificate_no')?>" class="form-control">
                           </div>
                        </div>
                     </div>

                     <div class="row form-row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>শিশুর মাতার নাম</label>
                              <input type="text" name="registrations[child_mother_name]" value="<?=set_value('child_mother_name')?>" class="bangla form-control">
                           </div>
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                              <label>মাতার জাতীয় পরিচয় পত্রের নম্বর</label>
                              <input type="number" name="registrations[child_mother_national_no]" value="<?=set_value('child_mother_national_no')?>" class="form-control">
                           </div>
                        </div>
                     </div> 

                     <div class="row form-row"> 
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>শিশুর পিতার নাম</label>
                              <input type="text" name="registrations[child_father_name]" value="<?=set_value('child_father_name')?>" class="bangla form-control">
                           </div>
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                              <label>পিতার জাতীয় পরিচয় পত্রের নম্বর</label>
                              <input type="number" name="registrations[child_father_national_no]" value="<?=set_value('child_father_national_no')?>" class="form-control">
                           </div>
                        </div>
                     </div>

                     <div class="row form-row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>শিশুর অভিভাবকের নাম</label>
                              <input type="text" name="registrations[child_parents_name]" value="<?=set_value('child_parents_name')?>" class="bangla form-control">
                           </div>
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                              <label>অভিভাবকের ফোন নম্বর</label>
                              <input type="number" name="registrations[child_parents_ph_no]" value="<?=set_value('child_parents_ph_no')?>" class="form-control">
                           </div>
                        </div>
                     </div>
                     
                     <div class="row form-row">   
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>অভিভাবকের জাতীয় পরিচয় পত্রের নম্বর</label>
                              <input type="number" name="registrations[child_parents_national_no]" value="<?=set_value('child_parents_national_no')?>" class="form-control">
                           </div>
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                              <label>শিশুর মাতার বর্তমান পদবী</label>
                              <input type="text" name="registrations[child_mother_designation]" value="<?=set_value('child_mother_designation')?>" class="bangla form-control">
                           </div>
                        </div> 
                     </div>

                     <div class="row form-row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>শিশুর মাতার কর্মস্থলের ঠিকানা</label>
                              <input type="text" name="registrations[child_mother_working_place]" value="<?=set_value('child_mother_working_place')?>" class="bangla form-control">
                           </div>
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                              <label>শিশুর মাতার ফোন নম্বর</label>
                              <input type="number" name="registrations[child_mother_ph_no]" value="<?=set_value('child_mother_ph_no')?>" class="form-control">
                           </div>
                        </div> 
                     </div>

                     <div class="row form-row">
                        <h4 style="margin-left: 15px; font-weight: bold;color: #777">শিশুর মাতার মাসিক বেতন</h4>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>মোট বেতন</label>
                              <input type="number" name="registrations[child_mother_total_salary]" value="<?=set_value('child_mother_total_salary')?>" class="form-control">
                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="form-group">
                              <label>মূল বেতন</label>
                              <input type="text" name="registrations[child_mother_basic_salary]" value="<?=set_value('child_mother_basic_salary')?>" class="form-control">
                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="form-group">
                              <label>বেতন স্কেল </label>
                              <input type="text" name="registrations[child_mother_pay_scale]" value="<?=set_value('child_mother_pay_scale')?>" class="form-control">
                           </div>
                        </div>
                     </div>

                     <div class="row form-row">   
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>শিশুর মাতার চাকুরীর মোট সময়কাল </label>
                              <input type="text" name="registrations[child_mother_job_duration]" value="<?=set_value('child_mother_job_duration')?>" class="bangla form-control">
                           </div>
                        </div> 
                     </div>

                     <div class="row form-row">
                        <h4 style="margin-left: 15px; font-weight: bold;color: #777">শিশুর পিতা/অভিভাবকের মাসিক বেতন</h4>

                        <div class="col-md-4">
                           <div class="form-group">
                              <label>মোট বেতন</label>
                              <input type="number" name="registrations[child_father_total_salary]" value="<?=set_value('child_father_total_salary')?>" class="form-control">
                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="form-group">
                              <label>মূল বেতন</label>
                              <input type="text" name="registrations[child_father_basic_salary]" value="<?=set_value('child_father_basic_salary')?>" class="form-control">
                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="form-group">
                              <label>বেতন স্কেল </label>
                              <input type="text" name="registrations[child_father_pay_scale]" value="<?=set_value('child_father_pay_scale')?>" class="form-control">
                           </div>
                        </div>
                     </div>   

                     <div class="row form-row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>শিশুর মাতা/পিতা/অভিভাবকের বর্তমান আবাসিক ঠিকানা </label>
                              <textarea name="registrations[child_parents_present_address]" type="text" class="bangla form-control" placeholder="" rows="2"><?=set_value('child_parents_present_address')?></textarea>
                           </div>
                        </div> 
                     </div>

                     <div class="row form-row">
                        <div class="col-md-8">
                           <div class="form-group">
                              <label>শিশুর মাতার স্থায়ী ঠিকানা</label>
                              <textarea name="registrations[child_mother_permanent_address]" type="text" class="bangla form-control" placeholder="" rows="2"><?=set_value('child_mother_permanent_address')?></textarea>
                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="form-group">
                              <label>মাতার ফোন নম্বর</label>
                              <input type="number" name="registrations[child_mother_parmanent_ph_no]" value="<?=set_value('child_mother_parmanent_ph_no')?>" class="form-control">
                           </div>
                        </div>
                     </div>

                     <div class="row form-row">
                        <div class="col-md-8">
                           <div class="form-group">
                              <label>শিশুর পিতার স্থায়ী ঠিকানা</label>
                              <textarea name="registrations[child_father_permanent_address]" type="text" class="bangla form-control" placeholder="" rows="2"><?=set_value('child_father_permanent_address')?></textarea>
                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="form-group">
                              <label>পিতার ফোন নম্বর</label>
                              <input type="number" name="registrations[child_father_ph_no]" value="<?=set_value('child_father_ph_no')?>" class="form-control">
                           </div>
                        </div>
                     </div>

                     <div class="row form-row">
                        <div class="col-md-9">
                           <div class="form-group">
                              <label>৬ বছর ও তার নিচের বয়সের কয়টি শিশু কেন্দ্রে ভর্তি করতে ইচ্ছুক</label>
                              <input type="text" name="registrations[child_admit_interest]" value="<?=set_value('child_admit_interest')?>" class="bangla form-control">

                           </div>
                        </div>

                        <div class="col-md-3">
                           <div class="form-group">
                              <label>শিশুর সংখ্যা</label>
                              <input type="number" name="registrations[child_number]" value="<?=set_value('child_number')?>" class="form-control">
                           </div>
                        </div>
                     </div>
                     <h5 style="color: #777;">(একজন মায়ের দুই জন শিশু কেন্দ্রে ভর্তি করা যাবে। তবে আসন খালি সাপেক্ষে দুইজনের অধিক শিশু ভর্তি করা যাতে পারে)</h5><br>
                     <div class="row form-row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>শিশুর কোন বিশেষ খাদ্যে সমস্যা থাকলে উহার বর্ণনা</label>
                              <textarea name="members[describe_food]" type="text" class="bangla form-control" placeholder="" rows="2"><?=set_value('describe_food')?></textarea>
                           </div>
                        </div>
                     </div>

                     <div class="row form-row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>শিশুর বিশেষ কোন শারীরিক অসুস্থতা থাকলে উহার বর্ণনা </label>
                              <textarea name="members[describe_health_problem]" type="text" class="bangla form-control" placeholder="" rows="2"><?=set_value('describe_health_problem')?></textarea>
                           </div>
                        </div>
                     </div>

                     <div class="row form-row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>শিশুর টিকা সম্পন্ন করেছেন?</label><br>
                              <input type="radio" name="members[child_vaccination]" value="Yes" <?=set_value('child_vaccination')=='Yes'?'checked':'checked';?>> হ্যাঁ   
                              <input type="radio" name="members[child_vaccination]" value="No" <?=set_value('child_vaccination')=='No'?'':'';?>> না
                           </div>
                        </div>

                        <!-- <div class="col-md-6">
                           <div class="form-group">
                              <label>ইমেজ আপলোড</label>
                              <div><?php echo form_error('userfile'); ?></div>
                              <input type="file" name="userfile">
                              <p class="help-block">ফাইল টাইপ jpg, png, jpeg are allowed.</p>
                           </div>
                        </div> -->

                        <!-- <div class="col-md-3">
                           <div class="form-group">
                              <label>শিশুর মাতা/পিতার স্বাক্ষর</label><br>
                              <input type="text" name="identity" value="" class="form-control">
                           </div>
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                              <label>মাতা/পিতার অবর্তমানে নির্ধারিত অভিভাবকের স্বাক্ষর </label><br>
                              <input type="text" name="identity" value="" class="form-control">
                           </div>
                        </div> -->
                     </div>

                     <!-- <div class="row form-row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>ইমেজ আপলোড</label>
                              <input type="file" name="userfile">
                              <p class="help-block">ফাইল টাইপ jpg, png, jpeg are allowed.</p>
                           </div>
                        </div>
                     </div>  -->

                     <div class="row form-row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <input type="submit" name="submit" value="সাবমিট করুন" class="btn btn-primary pull-right" style="background: #E21C3F;border-color: red; font-weight: bold;">
                           </div>
                        </div>
                     </div>
                  </fieldset>
               </div>
            </form>

         </div>
      </div>    
   </div>
</section>


</div>
<!-- /CONTENT AREA-->


