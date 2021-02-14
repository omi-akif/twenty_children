<div class="row">
   <?php $this->load->view('frontend/right_side_bar'); ?>
   <div class="col-md-9 main-content" style="padding: 15px 15px 15px 15px"> 
      <!-- <div class="col-md-10 col-sm-6 col-md-offset-1 col-sm-offset-1" style="border: 1px solid"> -->
      <ul class="nav nav-tabs">
         <li class="active"><a data-toggle="tab" href="#home"><strong>আমার প্রোফাইল</strong></a></li>
         <li><a data-toggle="tab" href="#menu1"><strong>আবেদনের তালিকা</strong></a></li>
         <li><a data-toggle="tab" href="#menu2"><strong>আবেদনের ভর্তি ফরম</strong></a></li>
      </ul>

      <div class="tab-content">
         <div id="home" class="tab-pane fade in active">
            <div  class="col-md-12" style="<?php if(!$edit){ echo 'display: none;'; } ?>  border:0px solid; background-color: #fff;padding-top:30px;">
               <?php echo form_open(uri_string());?>

               <?php if($this->session->flashdata('success')):?>
                  <div class="alert alert-success">
                     <a class="close" data-dismiss="alert">&times;</a>
                     <?php echo $this->session->flashdata('success');?>
                  </div>
               <?php endif; ?> 

               <h4 class="pull-left" style="font-weight: bold">বেসিক তথ্য সংশোধন করুন</h4>
               <div><?php echo validation_errors(); ?></div>

               <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                  <div class="row form-row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>নামের প্রথম অংশ (বাংলা) <span class="required">*</span></label>
                           <input type="text" name="first_name" value="<?=set_value('first_name' , $user_info->first_name)?>" class="form-control" placeholder="">
                        </div>
                     </div>
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>নামের শেষাংশ (বাংলা) <span class="required">*</span></label>
                           <input type="text" name="last_name" value="<?=set_value('last_name' , $user_info->last_name)?>" class="form-control" placeholder="">
                        </div>
                     </div>
                  </div>

                  <div class="row form-row">

                     <div class="col-md-6">
                        <div class="form-group">
                           <label>মোবাইল নম্বর <span class="required">*</span></label>
                           <input type="text" name="phone" value="<?=set_value('phone' , $user_info->phone)?>" class="form-control" placeholder="">
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="form-group">
                           <label>লিঙ্গ</label><br>
                           <input type="radio" name="gender" value="Male" <?=set_value('gender')=='Male'?'checked':'checked';?>> পুরুষ
                           <input type="radio" name="gender" value="Female" <?=set_value('gender')=='Female'?'':'';?>> মহিলা
                        </div>
                     </div>
                  </div>

                  <div class="row form-row">
                     <div class="col-md-6">
                        <div class="form-group">
                           <label>পাসওয়ার্ড</label>
                           <input type="password" name="password" value="" class="form-control">
                        </div>
                     </div>

                     <div class="col-md-6">
                        <div class="form-group">
                           <label>পুনরায় পাসওয়ার্ড</label>
                           <input type="password" name="password_confirm" value="" class="form-control">
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
               <input type="hidden" name="hide_update_info" value="11111">
               <?php echo form_close();?>

            </div>
            <div  class="col-md-12" style="<?php if($edit){ echo 'display: none;'; } ?>  border:0px solid; background-color: #fff;padding-top:30px;">
               <?php if($this->session->flashdata('success')):?>
                  <div class="alert alert-success">
                     <a class="close" data-dismiss="alert">&times;</a>
                     <?php echo $this->session->flashdata('success');?>
                  </div>
               <?php endif; ?> 

               <h4 class="pull-left" style="font-weight: bold">বেসিক তথ্য</h4>
               <a class="btn btn-success pull-right" href="<?=base_url();?>my-profile/edit" style="font-weight: bold">এডিট করুন</a>

               <table class="table table-bordered basic">
                  <tbody>
                     <tr>
                        <th width="150">নাম</th>
                        <td><?=$user_info->first_name.' '.$user_info->last_name?></td>
                     </tr>
                     <tr>
                        <th>ইমেইল</th>
                        <td><?=$user_info->username?></td>
                     </tr>
                     <tr>
                        <th>ফোন নং</th>
                        <td><?=$user_info->phone?></td>
                     </tr>
                     <tr>
                        <th>লিঙ্গ</th>
                        <td><?=$user_info->gender?></td>
                     </tr>
                  </tbody>
               </table> 
            </div>
         </div>

         <div id="menu1" class="tab-pane fade">
            <div class="col-md-12" style="background-color: #fff;padding-top:30px;">
               <div style="float: left;">
                  <h4 style="font-weight: bold;" class="pull-left">আবেদনের তালিকা</h4>
               </div>
               <div style="float: right;">
                  <span class="btn btn-success btn-xs list_view" style="display: none;">তালিকা দেখুন</span>
               </div>

               <style type="text/css">
               .tg  {border-collapse:collapse;border-spacing:0; clear: both; width: 100%;}
               .tg td{font-family:Arial, sans-serif;font-size:14px;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
               .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
               .tg .tg-dath{background-color:#a9e9f9;border-color:#9698ed;text-align:right;vertical-align:middle; width: 350px;}
               .tg .tg-wra3{border-color:#9698ed;text-align:left;vertical-align:middle}
               </style>
               
               <div class="appview"></div>

               <table class="table table-bordered applications-list" >
                  <thead>
                     <tr>
                        <th>ক্রম </th>
                        <th>তারিখ</th>
                        <th>ডে কেয়ার নাম</th>
                        <th>শিশুর নাম</th>
                        <th width="110">অ্যাকশন</th>
                     </tr>
                  </thead>
                  <tbody>  
                  <?php
                  $sl=0;   
                  if(isset($results) && !empty($results)){
                  
                  foreach ($results as $row) { 
                     $sl++;   
                     ?>
                    
                        <tr>
                           <td><?=$sl?></td>
                           <td><?=date('Y-m-d', strtotime($row->created))?></td>
                           <td><?=$this->Site_model->get_daycare_name($row->day_cares_id)?></td>
                           <td><?=$row->child_name?></td>
                           <td> 
                              <div class="btn-group">
                                 <button type="button" class="btn btn-success btn-xs">অ্যাকশন</button>
                                 <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                 </button>
                                 <ul class="dropdown-menu" role="menu">
                                    <li><a href="javascript:void()" data-id="<?=$row->ud_table_id?>" onclick="func_details(<?=$row->ud_table_id?>)">বিস্তারিত</a></li>
                                    <!-- <li><a href="<?=base_url('my-profile/edit/'.$row->id)?>">সংশোধন করুন</a></li> -->
                                 </ul>
                              </div>
                           </td>
                        </tr>
                     
                     <?php }}else{ ?>
                        <tr>
                           <td colspan="5" style="text-align: center;">
                              কোন আবেদন পাওয়া যাইনি
                           </td>
                        </tr>   

                     <?php } ?>   
                     </tbody>
                  </table>

                  
               </div>
            </div>

            <script>
               function func_details(id){
                  // alert(id);

                  $.ajax({
                     type: "GET",
                     url: hostname+'site/app_view/'+id,
                     success: function(response) {
                        // AppendResponse(response);
                        // alert(response);
                        $('.appview').show();
                        $('.applications-list').hide();
                        $('.list_view').show();
                        $('.appview').html(response);
                        // console.log(response);
                     }
                  });
               }

               $(".list_view").click(function(){
                $('.applications-list').show();
                $('.appview').hide();
                $('.list_view').hide();

             });
          </script>

          <div id="menu2" class="tab-pane fade">

            <form action="<?=base_url('my-profile')?>" method="post" enctype="multipart/form-data" id="jsvalidation" style="font-family: 'arial'">

               <div><?php //echo validation_errors(); ?></div>
               <div class="col-md-12" style="background: #fff;padding-top:30px;">
                  <fieldset class="scheduler-border">
                     <legend class="scheduler-border">আবেদনের ভর্তি ফরম</legend>
                     <div class="row form-row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <?php echo form_error('day_cares_id'); ?>
                              <label>ডে কেয়ার সেন্টার নাম</label>
                              <?php 
                              $more_attr = 'class="form-control" ';
                              echo form_dropdown('day_cares_id', $day_cares, set_value('day_cares_id'), $more_attr);
                              ?>
                           </div>
                        </div>               
                     </div>

                     <div class="row form-row">
                        <div class="col-md-8">
                           <div class="form-group">
                              <label>শিশুর নাম</label>
                              <input type="text" name="members[child_name]" value="<?=set_value('child_name')?>" class="form-control" placeholder="">
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
                              <input type="text" name="members[child_age]" value="<?=set_value('child_age')?>" class="form-control" placeholder="">
                           </div>
                        </div>
                     </div>

                     <div class="row form-row">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>শিশুর ওজন</label>
                              <input type="text" name="members[child_weight]" value="<?=set_value('child_weight')?>" class="form-control" placeholder="">
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>শিশুর উচ্চতা</label>
                              <input type="text" name="members[child_height]" value="<?=set_value('child_height')?>" class="form-control" placeholder="">
                           </div>
                        </div>
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>শিশুর জন্ম চিহ্ন</label>
                              <input type="text" name="members[birth_mark]" value="<?=set_value('birth_mark')?>" class="form-control" placeholder="">
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
                              <input type="text" name="registrations[child_mother_name]" value="<?=set_value('child_mother_name')?>" class="form-control">
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
                              <input type="text" name="registrations[child_father_name]" value="<?=set_value('child_father_name')?>" class="form-control">
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
                        <h4 style="margin-left: 15px; font-weight: bold;color: #777">পিতা/মাতার অবর্তমানে</h4>
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>শিশুর অভিভাবকের নাম</label>
                              <input type="text" name="registrations[child_parents_name]" value="<?=set_value('child_parents_name')?>" class="form-control">
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
                              <input type="text" name="registrations[child_mother_designation]" value="<?=set_value('child_mother_designation')?>" class="form-control">
                           </div>
                        </div> 
                     </div>

                     <div class="row form-row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>শিশুর মাতার কর্মস্থলের ঠিকানা</label>
                              <input type="text" name="registrations[child_mother_working_place]" value="<?=set_value('child_mother_working_place')?>" class="form-control">
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
                              <input type="text" name="registrations[child_mother_job_duration]" value="<?=set_value('child_mother_job_duration')?>" class="form-control">
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
                              <textarea name="registrations[child_parents_present_address]" type="text" class="form-control" placeholder="" rows="2"><?=set_value('child_parents_present_address')?></textarea>
                           </div>
                        </div> 
                     </div>

                     <div class="row form-row">
                        <div class="col-md-9">
                           <div class="form-group">
                              <label>৬ বছর ও নিচের বয়সের কয়টি শিশু কেন্দ্রে ভর্তি করতে ইচ্ছুক</label>
                              <input type="text" name="registrations[child_admit_interest]" value="<?=set_value('child_admit_interest')?>" class="form-control">

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
                              <textarea name="members[describe_food]" type="text" class="form-control" placeholder="" rows="2"><?=set_value('describe_food')?></textarea>
                           </div>
                        </div>
                     </div>

                     <div class="row form-row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>শিশুর বিশেষ কোন শারীরিক অসুস্থতা থাকলে উহার বর্ণনা </label>
                              <textarea name="members[describe_health_problem]" type="text" class="form-control" placeholder="" rows="2"><?=set_value('describe_health_problem')?></textarea>
                           </div>
                        </div>
                     </div>

                     <div class="row form-row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>শিশুর কয়টি টিকা সম্পন্ন করেছে?</label><br>
                              <input type="checkbox" name="members[bcg]" value="1"> বিসিজি<br>
                              <input type="checkbox" name="members[penta]" value="1"> পেন্টা (ডিপিটি, হেপ-বি, হিব)<br>
                              <input type="checkbox" name="members[pcb]" value="1"> পিসিভি<br>
                              <input type="checkbox" name="members[opb]" value="1"> ওপিভি<br>
                              <input type="checkbox" name="members[ipb]" value="1"> আইপিভি<br>
                              <input type="checkbox" name="members[mr]" value="1"> এমআর (হাম ও রুবেলা)<br>
                              <input type="checkbox" name="members[ham]" value="1"> হাম (২য় ডোজ)

                                 <!-- <input type="radio" name="members[child_vaccination]" value="Yes" <?=set_value('child_vaccination')=='Yes'?'checked':'checked';?>> হ্যাঁ   
                                 <input type="radio" name="members[child_vaccination]" value="No" <?=set_value('child_vaccination')=='No'?'':'';?>> না -->
                              </div>
                           </div>
                        </div>

                        <div class="row form-row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>শিশুর ছবি আপলোড</label>
                                 <div><?php echo form_error('userfile'); ?></div>
                                 <input type="file" name="userfile">
                                 <p class="help-block">File type jpg, png, jpeg are allowed.</p>
                              </div>
                           </div>

                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>টিকাদান কার্ড আপলোড</label>
                                 <div><?php echo form_error('userfile1'); ?></div>
                                 <input type="file" name="userfile1">
                                 <p class="help-block">File type jpg, png, jpeg are allowed.</p>
                              </div>
                           </div>
                        </div>

                        <input type="hidden" name="hide_app_info" value="22222">

                        <div class="row form-row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <input type="submit" name="submit" value="সাবমিট করুন" class="btn btn-success pull-right" style="font-weight: bold;">
                              </div>
                           </div>
                        </div>
                     </fieldset>
                  </div>
               </form>
            </div>
         </div>


      </div>

         
   </div>