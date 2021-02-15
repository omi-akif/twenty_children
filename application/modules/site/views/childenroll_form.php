<style type="text/css">
	fieldset{font-family: 'Kalpurush', sans-serif;}
	h5{font-family: 'Kalpurush', sans-serif; text-align: left; font-weight: bold; font-size:16px;}
</style>
<div class="row">
	<?php $this->load->view('frontend/right_side_bar'); ?>

   <div class="col-md-9 main-content" style="padding: 15px 15px 15px 15px"> 
      <!-- <div class="col-md-10 col-sm-6 col-md-offset-1 col-sm-offset-1" style="border: 1px solid"> -->
      <ul class="nav nav-tabs">
         <li class="active"><a data-toggle="tab" href="#home"><strong>আমার প্রোফাইল</strong></a></li>
         <li><a data-toggle="tab" href="#menu1"><strong>আবেদনের তালিকা</strong></a></li>
         <li><a data-toggle="tab" href="#menu2"><strong>শিশু তালিকা ভুক্তির আবেদন</strong></a></li>
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

       <!-- /home -->



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
                           <td>১</td>
                           <td>১১-০২-২০২১</td>
                           <td>ধানমন্ডি</td>
                           <td>মাফিজুর</td>
                           <td> 
                              <div class="btn-group">
                                 <button type="button" class="btn btn-success btn-xs">অ্যাকশন</button>
                                 <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                 </button>
                                 <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?=base_url('site/site2/newapplication')?>" onclick="">বিস্তারিত</a></li>
                                    <!-- <li><a href="<?=base_url('my-profile/edit/'.$row->id)?>">সংশোধন করুন</a></li> -->
                                 </ul>
                              </div>
                           </td>
                        </tr>
                        <!-- <tr>
                           <td colspan="5" style="text-align: center;">
                              কোন আবেদন পাওয়া যাইনি
                           </td>
                        </tr> -->   

                     <?php } ?>   
                     </tbody>
                  </table>

                  
               </div>
         </div> <!-- /menu1 -->            





          <div id="menu2" class="tab-pane fade">

            <form action="<?=base_url('my-profile')?>" method="post" enctype="multipart/form-data" id="jsvalidation" style="font-family: 'arial'">

               <div><?php //echo validation_errors(); ?></div>
               <div class="col-md-12" style="background: #fff;padding-top:30px;">
                  	<!-- <h2 align="center">শিশু তালিকা ভুক্তির আবেদন</h2> -->
                  <fieldset class="scheduler-border">
                     <legend class="scheduler-border">সাধারণ তথ্য</legend>
                  <div class="row form-row">
                        <!-- <div class="col-md-12">
                           <div class="form-group">
                              <?php echo form_error('day_cares_id'); ?>
                              <label>ডে কেয়ার সেন্টার নাম</label>
                              <?php 
                              $more_attr = 'class="form-control" ';
                              echo form_dropdown('day_cares_id', $day_cares, set_value('day_cares_id'), $more_attr);
                              ?>
                           </div>
                        </div> -->              
                     <div class="row form-row">
                        <div class="col-md-6">
                             <div class="form-group">
	                              <label>আবেদনকারীর নাম</label>
	                              <input type="text" name="registrations[applicant_name]" value="<?=set_value('applicant_name')?>" class="form-control" placeholder="">
	                           </div>
	                       </div>

	                        <div class="col-md-6">
	                           <div class="form-group">
	                              <label>২. আবেদনকারীর সাথে শিশুর সম্পর্ক </label><br>
	                              <input type="radio" name="registrations[applicant_relation]" value="Mother" <?=set_value('applicant_relation')=='Mother'?'checked':'checked';?>> মা 
	                              <input type="radio" name="registrations[applicant_relation]" value="Father" <?=set_value('applicant_relation')=='Father'?'':'';?>> বাবা
	                               <input type="radio" name="registrations[applicant_relation]" value="Guardian" <?=set_value('applicant_relation')=='Guardian'?'':'';?>> অন্যান্য
	                           </div>
	                        </div>
                      	</div>

						<h5>৩. মাতার তথ্য</h5>
						<div class="row form-row">
	                        <div class="col-md-6">
	                           <div class="form-group">
	                              <label>নাম</label>
	                              <input type="text" name="registrations[child_mother_name]" value="<?=set_value('child_mother_name')?>" class="form-control" placeholder="">
	                           </div>
	                        </div>
	                        <div class="col-md-6">
	                           <div class="form-group">
	                              <label>জন্ম তারিখ</label>
	                              <input type="date" name="registrations[child_mother_dob]" value="<?=set_value('child_mother_dob')?>" class="form-control" placeholder="" autocomplete="off">
	                           </div>
	                        </div>  

                        	<div class="col-md-6">
                        		<div class="form-group">
                              		<label>জাতীয় পরিচয়পত্রের নম্বর</label>
                              		<input type="text" name="registrations[child_mother_national_no]" value="<?=set_value('child_mother_national_no')?>" class="form-control" placeholder="">
                           		</div>
                          	</div>
                          	<div class="col-md-6">
	                           <div class="form-group">
	                              <label>ই-মেইল আইডি</label>
	                              <input type="text" name="registrations[child_mother_email]" value="<?=set_value('child_mother_email')?>" class="form-control" placeholder="">
	                           </div>
	                        </div>
	                        <div class="col-md-6">
	                           <div class="form-group">
	                              <label>বাসার ফোন নম্বর(যদি থাকে)</label>
	                              <input type="text" name="registrations[child_mother_parmanent_ph_no]" value="<?=set_value('child_mother_parmanent_ph_no')?>" class="form-control" placeholder="">
	                           </div>
	                        </div>
	                        <div class="col-md-6">
	                           <div class="form-group">
	                              <label>মবাইল নম্বর</label>
	                              <input type="text" name="registrations[child_mother_ph_no]" value="<?=set_value('child_mother_ph_no')?>" class="form-control" placeholder="">
	                           </div>
	                        </div>
                          	<div class="col-md-12">
                        		<div class="form-group">
                              		<label>বাসার ঠিকানা</label>
                              		<input type="text" name="registrations[child_mother_permanent_address]" value="<?=set_value('child_mother_permanent_address')?>" class="form-control" placeholder="">
                           		</div>
                          	</div>
                        </div> 

                        <h5>৪. পিতার তথ্য</h5>
						<div class="row form-row">
	                        <div class="col-md-6">
	                           <div class="form-group">
	                              <label>নাম</label>
	                              <input type="text" name="registrations[child_father_name]" value="<?=set_value('child_father_name')?>" class="form-control" placeholder="">
	                           </div>
	                        </div>
	                        <div class="col-md-6">
	                           <div class="form-group">
	                              <label>জন্ম তারিখ</label>
	                              <input type="date" name="registrations[child_father_dob]" value="<?=set_value('child_father_dob')?>" class="form-control" placeholder="" autocomplete="off">
	                           </div>
	                        </div>  

                        	<div class="col-md-6">
                        		<div class="form-group">
                              		<label>জাতীয় পরিচয়পত্রের নম্বর</label>
                              		<input type="text" name="registrations[child_father_national_no]" value="<?=set_value('child_father_national_no')?>" class="form-control" placeholder="">
                           		</div>
                          	</div>
                          	<div class="col-md-6">
	                           <div class="form-group">
	                              <label>ই-মেইল আইডি</label>
	                              <input type="text" name="registrations[child_father_email]" value="<?=set_value('child_father_email')?>" class="form-control" placeholder="">
	                           </div>
	                        </div>
	                        <div class="col-md-6">
	                           <div class="form-group">
	                              <label>বাসার ফোন নম্বর(যদি থাকে)</label>
	                              <input type="text" name="registrations[child_father_permanent_address]" value="<?=set_value('child_father_permanent_address')?>" class="form-control" placeholder="">
	                           </div>
	                        </div>
	                        <div class="col-md-6">
	                           <div class="form-group">
	                              <label>মবাইল নম্বর</label>
	                              <input type="text" name="registrations[child_father_ph_no]" value="<?=set_value('child_father_ph_no')?>" class="form-control" placeholder="">
	                           </div>
	                        </div>
                          	<div class="col-md-12">
                        		<div class="form-group">
                              		<label>বাসার ঠিকানা</label>
                              		<input type="text" name="registrations[child_father_permanent_address]" value="<?=set_value('child_father_permanent_address')?>" class="form-control" placeholder="">
                           		</div>
                          	</div>
                        </div> 

                        <h5>৫. মাতা পিতার অবর্তমানে অভিভাবকের তথ্য</h5>
						<div class="row form-row">
	                        <div class="col-md-6">
	                           <div class="form-group">
	                              <label>নাম</label>
	                              <input type="text" name="registrations[child_parents_name]" value="<?=set_value('child_parents_name')?>" class="form-control" placeholder="">
	                           </div>
	                        </div>
	                        <div class="col-md-6">
	                           <div class="form-group">
	                              <label>জন্ম তারিখ</label>
	                              <input type="date" name="registrations[child_parents_dob]" value="<?=set_value('child_parents_dob')?>" class="form-control" placeholder="" autocomplete="off">
	                           </div>
	                        </div>  

                        	<div class="col-md-6">
                        		<div class="form-group">
                              		<label>জাতীয় পরিচয়পত্রের নম্বর</label>
                              		<input type="text" name="registrations[child_parents_national_no]" value="<?=set_value('child_parents_national_no')?>" class="form-control" placeholder="">
                           		</div>
                          	</div>
                          	
	                        <div class="col-md-6">
	                           <div class="form-group">
	                              <label>ফোন (বাসা)</label>
	                              <input type="text" name="registrations[child_parents_ph_no]" value="<?=set_value('child_parents_ph_no')?>" class="form-control" placeholder="">
	                           </div>
	                        </div>
                          	<div class="col-md-12">
                        		<div class="form-group">
                              		<label>বাসার ঠিকানা</label>
                              		<input type="text" name="registrations[child_parents_present_address]" value="<?=set_value('child_parents_present_address')?>" class="form-control" placeholder="">
                           		</div>
                          	</div>
                        </div> 

                     	<br><br>
                        
                     </fieldset>


                     <fieldset class="scheduler-border">
                     <legend class="scheduler-border">মাতা পিতার পেশা সংক্রান্ত তথ্য (অবশ্যই পূরণীয়)</legend>
                     	<h5>৬. মাতার তথ্য</h5>
						<div class="row form-row">
	                        <div class="col-md-6">
	                           <div class="form-group">
	                              <label>পেশা</label>
	                              <input type="text" name="registrations[child_mother_work_name]" value="<?=set_value('child_mother_work_name')?>" class="form-control" placeholder="">
	                           </div>
	                        </div>
	                        <div class="col-md-6">
	                           <div class="form-group">
	                              <label>পেশার ধরণঃ</label><br>
	                              <input type="checkbox" name="registrations[child_mother_work_type]" value="1"> ফুল্টাইম
	                              <input type="checkbox" name="registrations[child_mother_work_type]" value="1"> হাফটাইম
	                            </div>
                           </div>
                       </div>
                        <div class="row form-row">
                        	<div class="col-md-6">
                        		<div class="form-group">
                              		<label>পদবী</label>
                              		<input type="text" name="registrations[child_mother_designation]" value="<?=set_value('child_mother_designation')?>" class="form-control" placeholder="">
                           		</div>
                          	</div>
                          	<div class="col-md-6">
	                           <div class="form-group">
	                              <label>প্রতিষ্টাহ্নের নাম</label>
	                              <input type="text" name="registrations[child_mother_working_institute]" value="<?=set_value('child_mother_working_institute')?>" class="form-control" placeholder="">
	                           </div>
	                        </div>
	                        <div class="col-md-6">
	                           <div class="form-group">
	                              <label>প্রতিষ্টাহ্নের ফোন নম্বর(যদি থাকে)</label>
	                              <input type="text" name="registrations[child_mother_work_ph_no]" value="<?=set_value('child_mother_work_ph_no')?>" class="form-control" placeholder="">
	                           </div>
	                        </div>
	                         <div class="col-md-6">
	                           <div class="form-group">
	                              <label>প্রতিষ্টাহ্নের ঠিকানা</label>
	                              <input type="text" name="registrations[child_mother_working_place]" value="<?=set_value('child_mother_working_place')?>" class="form-control" placeholder="">
	                           </div>
	                        </div>
	                         
	                        
	                        <div class="col-md-6">
	                           <div class="form-group">
	                              <label>করমস্থলের কত্রিপক্ষের নাম ও পদবী</label>
	                              <input type="text" name="registrations[child_mother_work_md]" value="<?=set_value('child_mother_work_md')?>" class="form-control" placeholder="">
	                           </div>
	                        </div>
                          	<div class="col-md-6">
                        		<div class="form-group">
                              		<label>করমস্থলের নিয়ন্ত্রণকারী কত্রিপক্ষের ঠিকানা</label>
                              		<input type="text" name="registrations[child_mother_work_md_add]" value="<?=set_value('child_mother_work_md_add')?>" class="form-control" placeholder="">
                           		</div>
                          	</div>
                          	<div class="col-md-8">
	                           <div class="form-group">
	                              <label>প্রতিষ্ঠানের ধরণঃ</label>
	                              <input type="checkbox" name="registrations[child_mother_working_institute_type]" value="1"> সরকারি
	                              <input type="checkbox" name="registrations[child_mother_working_institute_type]" value="1"> বেসরকারি
	                              <input type="checkbox" name="registrations[child_mother_working_institute_type]" value="1"> অন্যান্য
	                            </div>
                           </div>
                        </div> 
                        <h5>৭. পিতার তথ্য</h5>
						<div class="row form-row">
	                        <div class="col-md-6">
	                           <div class="form-group">
	                              <label>পেশা</label>
	                              <input type="text" name="registrations[child_father_work_name]" value="<?=set_value('child_father_work_name')?>" class="form-control" placeholder="">
	                           </div>
	                        </div>
	                        <div class="col-md-6">
	                           <div class="form-group">
	                              <label>পেশার ধরণঃ</label><br>
	                              <input type="checkbox" name="registrations[child_father_work_type]" value="1"> ফুল্টাইম
	                              <input type="checkbox" name="registrations[child_father_work_type]" value="1"> হাফটাইম
	                            </div>
                           </div>
	                       </div>
	                       <div class="row form-row">
                        
                        	<div class="col-md-6">
                        		<div class="form-group">
                              		<label>পদবী</label>
                              		<input type="text" name="registrations[child_father_designation]" value="<?=set_value('child_father_designation')?>" class="form-control" placeholder="">
                           		</div>
                          	</div>
                          	<div class="col-md-6">
	                           <div class="form-group">
	                              <label>প্রতিষ্টাহ্নের নাম</label>
	                              <input type="text" name="registrations[child_father_working_institute]" value="<?=set_value('child_father_working_institute')?>" class="form-control" placeholder="">
	                           </div>
	                        </div>
	                        <div class="col-md-6">
	                           <div class="form-group">
	                              <label>প্রতিষ্টাহ্নের ফোন নম্বর(যদি থাকে)</label>
	                              <input type="text" name="registrations[child_father_work_ph_no]" value="<?=set_value('child_father_work_ph_no')?>" class="form-control" placeholder="">
	                           </div>
	                        </div>
	                        
	                        <div class="col-md-6">
	                           <div class="form-group">
	                              <label>করমস্থলের কত্রিপক্ষের নাম ও পদবী</label>
	                              <input type="text" name="registrations[child_father_work_md]" value="<?=set_value('child_father_work_md')?>" class="form-control" placeholder="">
	                           </div>
	                        </div>
                          	<div class="col-md-12">
                        		<div class="form-group">
                              		<label>করমস্থলের নিয়ন্ত্রণকারী কত্রিপক্ষের ঠিকানা</label>
                              		<input type="text" name="registrations[child_father_work_md_add]" value="<?=set_value('child_father_work_md_add')?>" class="form-control" placeholder="">
                           		</div>
                          	</div>
                          	<div class="col-md-8">
	                           <div class="form-group">
	                              <label>প্রতিষ্ঠানের ধরণঃ</label>
	                              <input type="checkbox" name="registrations[child_father_working_institute_type]" value="1"> সরকারি
	                              <input type="checkbox" name="registrations[child_father_working_institute_type]" value="2"> বেসরকারি
	                              <input type="checkbox" name="registrations[child_father_working_institute_type]" value="3">অন্যান্য
	                            </div>
                           </div>
                        </div>
                 	 </fieldset>

                 	 <fieldset class="scheduler-border">
                     <legend class="scheduler-border">শিশু তালিকাভুক্তির তথ্য</legend>
                       <div class="row form-row">
                       	<div class="col-md-6">
	                           <div class="form-group">
	                              <label>৮. আপনি কতজন শিশু ভর্তি করতে আগ্রহী?</label><br>
	                              <input type="checkbox" name="registrations[child_number]" value="1"> ০১ জন
	                              <input type="checkbox" name="registrations[child_number]" value="2"> ০২ জন
	                            </div>
                           </div>
                           <div class="col-md-8">
	                           <div class="form-group">
	                              <label>৯. আপনি কোন বয়স গ্রুপে শিশুকে ভর্তি করতে আগ্রহী?</label><br>
	                              <input type="checkbox" name="registrations[child_admit_interest]" value="1"> প্রারম্ভিক পর্যায় (৬ মাস - ১২ মাস)<br>
	                              <input type="checkbox" name="registrations[child_admit_interest]" value="2"> প্রাক-প্রারম্ভিক পর্যায় (১২ মাস - ৩০মাস)<br>
	                              <input type="checkbox" name="registrations[child_admit_interest]" value="3"> প্রারম্ভিক পর্যায় (৩০ মাস - ৪৮ মাস)<br>
	                              <input type="checkbox" name="registrations[child_admit_interest]" value="4"> প্রাক-প্রাথমিক স্কুল পর্যায় (৪ বছর - ৬ বছর)<br>
	                            </div>
                           </div>

                           <div class="col-md-8">
                              <div class="form-group">
                                 <label>১০. এই শিশুর জন্য আপনার কখন শিশু দিবাযত্ন কেন্দ্র প্রোয়োজন হবে?</label>
                                  <input class="col-md-6" type="date" name="registrations[child_doj]" value="<?=set_value('child_doj')?>" class="form-control" placeholder="" autocomplete="off">
                              </div>
                           </div>

                       
                        <div class="col-md-6">
                           <div class="form-group">
                              <?php echo form_error('day_cares_id'); ?>
                              <label>১১. নিম্নের কোন কেন্দ্রে শিশু ভর্তি করতে চান?</label>
                             <label>ডে কেয়ার সেন্টার নাম</label> -->
                              <?php 
                              $more_attr = 'class="form-control" ';
                              echo form_dropdown('day_cares_id', $day_cares, set_value('day_cares_id'), $more_attr);
                              ?>
                           </div>
                        </div>               
                      

                       <!--  <div class="col-md-12">
                           <div class="form-group">
                              <?php echo form_error('day_cares_id'); ?>
                              <label>১১. নিম্নের কোন কেন্দ্রে শিশু ভর্তি করতে চান?</label>
                              <div class="row form-row">
                              <div class="col-md-6">
                              	<label>ঢাকার ১০ টি</label>
                              	<div class="form-group">
	                              <br>
	                              <input type="checkbox" name="" value="1"> ধান্মন্ডি<br>
	                              <input type="checkbox" name="" value="1"> মতিঝিল<br>
	                              <input type="checkbox" name="" value="1"> নির্বাচন কমিশন<br>
	                              <input type="checkbox" name="" value="1"> রায়ের বাজার<br>
	                              <input type="checkbox" name="" value="1"> কাওরান বাজার<br>
	                              <input type="checkbox" name="" value="1"> মুগদা<br>
	                              <input type="checkbox" name="" value="1"> পল্লবী<br>
	                              <input type="checkbox" name="" value="1"> সায়েদাবাদ<br>
	                              <input type="checkbox" name="" value="1"> মহাখালী<br>
	                              <input type="checkbox" name="" value="1"> আশুলিয়া<br>
	                            </div>
                              </div>
                              <div class="col-md-6">
                              	<label>ঢাকার বাহিরে ১০ টি</label>
                              	<div class="form-group">
	                              <br>
	                              <input type="checkbox" name="" value="1"> রংপুর<br>
	                              <input type="checkbox" name="" value="1"> গোপাল্গঞ্জ<br>
	                              <input type="checkbox" name="" value="1"> গাজীপুর<br>
	                              <input type="checkbox" name="" value="1"> কক্সবাজার<br>
	                              <input type="checkbox" name="" value="1"> নওগাঁ<br>
	                              <input type="checkbox" name="" value="1"> গাইবান্ধা<br>
	                              <input type="checkbox" name="" value="1"> ভোলা<br>
	                              <input type="checkbox" name="" value="1"> টাঙ্গাইল<br>
	                              <input type="checkbox" name="" value="1"> নোয়াখালী<br>
	                              <input type="checkbox" name="" value="1"> চাঁদপুর<br>
	                            </div>
                              </div>
                             </div>
                           </div>
                        </div>     -->           
                     </div>
                 	 </fieldset>

                 	 <fieldset class="scheduler-border">
                     <legend class="scheduler-border">শিশুর তথ্য</legend>
                     <h5>১২. শিশু -০১</h5>
						<div class="row form-row">
	                        <div class="col-md-12">
	                           <div class="form-group">
	                              <label>নাম</label>
	                              <input type="text" name="members[child_name]" value="<?=set_value('child_name')?>" class="form-control" placeholder="">
	                           </div>
	                        </div>
	                        <div class="col-md-6">
	                           <div class="form-group">
	                              <label>শিশুর জন্ম তারিখ</label>
	                              <input type="date" name="members[child_dob]" value="<?=set_value('child_dob')?>" class="form-control" placeholder="" autocomplete="off">
	                           </div>
	                        </div>  

                        	<div class="col-md-6">
                        		<div class="form-group">
                              		<label>জন্ম নিবন্ধন নম্বর</label>
                              		<input type="text" name="members[birth_certificate_no]" value="<?=set_value('birth_certificate_no')?>" class="form-control" placeholder="">
                           		</div>
                          	</div>
                        </div> 
						<h5>১৩. শিশু -০২</h5>
						<div class="row form-row">
	                        <div class="col-md-12">
	                           <div class="form-group">
	                              <label>নাম</label>
	                              <input type="text" name="members[child_name_2]" value="<?=set_value('child_name')?>" class="form-control" placeholder="">
	                           </div>
	                        </div>
	                        <div class="col-md-6">
	                           <div class="form-group">
	                              <label>শিশুর জন্ম তারিখ</label>
	                              <input type="date" name="members[child_dob_2]" value="<?=set_value('child_dob')?>" class="form-control" placeholder="" autocomplete="off">
	                           </div>
	                        </div>  

                        	<div class="col-md-6">
                        		<div class="form-group">
                              		<label>জন্ম নিবন্ধন নম্বর</label>
                              		<input type="text" name="members[birth_certificate_no_2]" value="<?=set_value('birth_certificate_no')?>" class="form-control" placeholder="">
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
                        </div> 



            		 </fieldset>

                  </div>
               </form>

            </div>
         </div> <!-- /menu2 -->







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