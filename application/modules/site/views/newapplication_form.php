<style type="text/css">
	fieldset{font-family: 'Kalpurush', sans-serif;}
	h3{font-family: 'Kalpurush', sans-serif; text-align: center; font-weight: bold; font-size:16px;}
	h4{font-family: 'Kalpurush', sans-serif; text-align: left; font-weight: bold; font-size:16px;}
	h5{font-family: 'Kalpurush', sans-serif; text-align: left; font-weight: bold; font-size:16px;}
</style>
<div class="row">
	<?php $this->load->view('frontend/right_side_bar'); ?>   

   <div class="col-md-9 main-content" style="padding: 15px 15px 15px 15px"> 
      
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

          <div>

            <form action="<?=base_url('site/site2/newapplication/'.$member_id)?>" method="post" enctype="multipart/form-data" id="jsvalidation" style="font-family: 'arial'">

               <div><?php //echo validation_errors(); ?></div>
               <div class="col-md-12" style="background: #fff;padding-top:30px;">
               	<h3>ভর্তি ফরম</h3>
                  <fieldset class="scheduler-border">
                     <legend class="scheduler-border">শিশুর তথ্য </legend>
                     <!-- <div class="row form-row">
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
                     </div> -->

                     <div class="row form-row">
                        <div class="col-md-8">
                           <div class="form-group">
                              <label>১. শিশুর নাম</label>
                              <input type="text" name="members[child_name]" value="<?=set_value('child_name',$results[0]->child_name)?>" class="form-control" placeholder="">
                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="form-group">
                              <label>২. লিঙ্গ</label><br>
                              <input type="radio" name="members[gender]" value="Male" <?=set_value('gender')=='Male'?'checked':'checked';?>> পুরুষ 
                              <input type="radio" name="members[gender]" value="Female" <?=set_value('gender')=='Female'?'':'';?>> মহিলা
                           </div>
                        </div>                   
                     </div>

                     <div class="row form-row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>৩. শিশুর জন্ম তারিখ</label>
                              <input type="date" name="members[child_dob]" value="<?=set_value('child_dob',$results[0]->child_dob)?>" class="form-control" placeholder="" autocomplete="off">
                           </div>
                        </div> 
                        <div class="row form-row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>শিশুর জন্ম সনদ নম্বর</label>
                              <input type="number" name="members[birth_certificate_no]" value="<?=set_value('birth_certificate_no',$results[0]->birth_certificate_no)?>" class="form-control">
                           </div>
                        </div>
                     </div>


                        <div class="col-md-6">
                           <div class="form-group">
                              <label>৫. ভর্তির তারিখে শিশুর বয়স</label>
                              <input type="text" name="members[child_age]" value="<?=set_value('child_age')?>" class="form-control" placeholder="">
                           </div>
                        </div>
                     </div>

                      
                     <div class="row form-row">
                        <div class="col-md-4">
                           <div class="form-group">
                              <label>৫. শিশুর ওজন</label>
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

                 

                    

                     </fieldset>
                 <fieldset class="scheduler-border">
                     <legend class="scheduler-border">শিশুর চিকিৎসা সংক্রান্ত তথ্য </legend>

                     <div class="row form-row">
                        <div class="col-md-8">
                           <div class="form-group">
                              <label>৬. শিশুর বিশেষ কোন শারীরিক অসুস্থা থাকলে তার বর্ণনা</label>
                              <input type="text" name="members[child_diseases_name]" value="<?=set_value('child_diseases_name')?>" class="form-control">
                           </div>
                        </div>

                        <div class="col-md-8">
                           <div class="form-group">
                              <label>৭. শিশুর নিয়মিত কোন ঔষধ সেবন করে কিনা?</label>
                               <input type="radio" name="members[child_diseases_medicine]" value="Yes" <?=set_value('child_diseases_medicine')=='Yes'?'checked':'checked';?>> হ্যাঁ 
                              <input type="radio" name="members[child_diseases_medicine]" value="No" <?=set_value('child_diseases_medicine')=='No'?'':'';?>> না
                           </div>
                        </div>
                     </div> 

                     <h5>হ্যাঁ হলে</h5>

                     <div class="row form-row"> 
                        <div class="col-md-8">
                           <div class="form-group">
                              <label>ক. ঔষধের নাম ও সেবনের মাত্রা</label>
                              <input type="text" name="members[child_diseases_medicine_range]" value="<?=set_value('child_diseases_medicine_range')?>" class="form-control">
                           </div>
                        </div>
                         <div class="col-md-8">
                           <div class="form-group">
                              <label>খ. রোগের কারণ</label>
                              <input type="text" name="members[child_diseases_reason]" value="<?=set_value('child_diseases_reason')?>" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="form-group">
                              <label>গ. প্রেসক্রিপশন সংযুক্ত করেছেন কিনা?</label>
                               <input type="radio" name="members[child_diseases_prescription]" value="Yes" <?=set_value('child_diseases_prescription')=='Yes'?'checked':'checked';?>> হ্যাঁ 
                              <input type="radio" name="members[child_diseases_prescription]" value="No" <?=set_value('child_diseases_prescription')=='No'?'':'';?>> না
                           </div>
                        </div>

                        <div class="col-md-8">
                           <div class="form-group">
                              <label>৮. শিশুর চোখ, কান, দাঁতের পরিক্ষা করা হয়েছে কিনা?</label>
                               <input type="radio" name="members[describe_health_problem]" value="Yes" <?=set_value('describe_health_problem')=='Yes'?'checked':'checked';?>> হ্যাঁ 
                              <input type="radio" name="members[describe_health_problem]" value="No" <?=set_value('describe_health_problem')=='No'?'':'';?>> না
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="form-group">
                              <label>পরীক্ষা করা হয়ে থাকলে তার ফলাফল</label>
                              <input type="text" name="members[child_diseases_result]" value="<?=set_value('child_father_name')?>" class="form-control">
                           </div>
                        </div>

                         <div class="col-md-8">
                           <div class="form-group">
                              <label>৯. শিশুর বিশেষ কোন খাদ্যে সমস্যা/এলারজি আছে কি?</label>
                               <input type="radio" name="members[child_allergic_food]" value="Yes" <?=set_value('child_allergic_food')=='Yes'?'checked':'checked';?>> হ্যাঁ 
                              <input type="radio" name="members[child_allergic_food]" value="No" <?=set_value('child_allergic_food')=='No'?'':'';?>> না
                           </div>
                       </div>


                           <div class="col-md-8">
                           <div class="form-group">
                              <label>হ্যাঁ হলে তার বর্ণনা</label>
                              <input type="text" name="members[describe_food]" value="<?=set_value('describe_food')?>" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="form-group">
                              <label>নির্দিষ্ট খাদ্যের নাম</label>
                              <input type="text" name="members[child_allergic_food_name]" value="<?=set_value('child_allergic_food_name')?>" class="form-control">
                           </div>
                        </div>


                        <div class="col-md-8">
                           <div class="form-group">
                              <label>শিশুর করোনা/জল্বসন্ত/মাম্পস/অন্যান্য কোন সংক্রামণ রোগ হয়েছিল কিনা?</label>
                               <input type="radio" name="members[child_viral_disease]" value="Yes" <?=set_value('child_viral_disease')=='Yes'?'checked':'checked';?>> হ্যাঁ 
                              <input type="radio" name="members[child_viral_disease]" value="No" <?=set_value('child_viral_disease')=='No'?'':'';?>> না
                           </div>
                       </div>

                       <div class="col-md-8">
                           <div class="form-group">
                              <label>১০. বয়স অনুযায়ী শিশুর প্রয়োজনীয় টিকাসমুহ সম্পন্ন হয়েছে কিনা?</label>
                               <input type="radio" name="members[child_vaccination]" value="Yes" <?=set_value('child_vaccination')=='Yes'?'checked':'checked';?>> হ্যাঁ 
                              <input type="radio" name="members[child_vaccination]" value="No" <?=set_value('child_vaccination')=='No'?'':'';?>> না
                           </div>
                       </div>

                       <div class="col-md-8">
                           <div class="form-group">
                              <label>(উত্তর "না" হলে) কোন কোন টিকা দেওয়া হয়নি?</label>
                              <input type="text" name="members[child_novaccine_reason]" value="<?=set_value('child_novaccine_reason')?>" class="form-control">
                           </div>
                        </div>

                    </div>

                    
                </fieldset>

                <fieldset class="scheduler-border">
                    
                     <div class="row form-row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>১১. আপনার শিশুর শীর্ষ তিনটি শক্তিশালী দিক চিহ্নিত করুণ</label><br>
                              <table class="table">
                              <tr>
                             <td> <input type="checkbox" name="members[child_strong_side]" value="1"> অ্যাথলেটিক</td></td>
                             <td> <input type="checkbox" name="members[child_strong_side]" value="1"> সহানুভুতিশিল</td>
                             <td> <input type="checkbox" name="members[child_strong_side]" value="1"> স্নহময়</td>
                             <td> <input type="checkbox" name="members[child_strong_side]" value="1"> আত্মসচেতন<br></td>
                              </tr>
                              <tr>

                              <td><input type="checkbox" name="members[child_strong_side]" value="1"> সাহসী</td>
                              <td><input type="checkbox" name="members[child_strong_side]" value="1"> উৎসাহী</td>
                              <td><input type="checkbox" name="members[child_strong_side]" value="1"> অনুগত</td>
                              <td><input type="checkbox" name="members[child_strong_side]" value="1"> সামাজিক<br></td>
                              </tr>
                              <tr>
                              <td><input type="checkbox" name="members[child_strong_side]" value="1"> সহযোগী</td>
                              <td><input type="checkbox" name="members[child_strong_side]" value="1"> উদ্যমী</td>
                              <td><input type="checkbox" name="members[child_strong_side]" value="1"> সঙ্গীতপ্রমী</td>
                              <td><input type="checkbox" name="members[child_strong_side]" value="1"> চিন্তাশিল<br></td>
                              </tr>
                              <tr>
                              <td><input type="checkbox" name="members[child_strong_side]" value="1"> সৃজনশীল</td>
                              <td><input type="checkbox" name="members[child_strong_side]" value="1"> ক্ষমাশীল</td>
                              <td><input type="checkbox" name="members[child_strong_side]" value="1"> আশাবাদী</td>
                              <td><input type="checkbox" name="members[child_strong_side]" value="1"> সুনিয়ন্ত্রিত<br></td>
                              </tr>
                              <tr>
                              <td><input type="checkbox" name="members[child_strong_side]" value="1"> কৌতুহলি</td>
                              <td><input type="checkbox" name="members[child_strong_side]" value="1"> বন্ধুসুলভ</td>
                              <td><input type="checkbox" name="members[child_strong_side]" value="1"> কৌতকপূর্ণ</td>
                              <td><input type="checkbox" name="members[child_strong_side]" value="1"> হস্যোউজ্জল<br></td>
                              </tr>
                              <tr>
                              <td><input type="checkbox" name="members[child_strong_side]" value="1"> সিদ্ধান্তমূলক</td>
                              <td><input type="checkbox" name="members[child_strong_side]" value="1"> সৎ</td>
                              <td><input type="checkbox" name="members[child_strong_side]" value="1"> সম্ভাবনাময়য়</td>
                              <td><input type="checkbox" name="members[child_strong_side]" value="1"> মনোযোগী<br></td>
                              </tr>
                              <tr>
                              <td><input type="checkbox" name="members[child_strong_side]" value="1"> অধ্যাবসায়ী</td>
                              <td><input type="checkbox" name="members[child_strong_side]" value="1"> কল্পনাপ্রবণ<br></td>
                              </tr>
                              <tr>
                              <td><input type="checkbox" name="members[child_strong_side]" value="1"> ন্যায়পরায়ণ</td>
                              <td><input type="checkbox" name="members[child_strong_side]" value="1"> দয়ালু<br></td>
                              </tr>
                              </table>
                     </fieldset>

                     <fieldset class="scheduler-border">
                    
                     <div class="row form-row">
                        <div class="col-md-12">
                           <div class="form-group">
                              <label>১২. আপনার শিশুর শীর্ষ তিনটি দুর্বল দিক চিহ্নিত করুণ</label><br>
                              <table class="table">
                              <tr>
                             <td> <input type="checkbox" name="members[child_week_side]" value="1"> আগ্রাসী মনোভাব</td></td>
                             <td> <input type="checkbox" name="members[child_week_side]" value="1"> নিয়ম ভঙ্গ</td>
                             <td> <input type="checkbox" name="members[child_week_side]" value="1"> শ্রবণ ক্ষমতার হ্রাস</td>
                             
                              </tr>
                              <tr>

                              <td><input type="checkbox" name="members[child_week_side]" value="1"> বাড়িতে অন্যদের প্রতি আক্রমনাত্মক মনোভাব</td>
                              <td><input type="checkbox" name="members[child_week_side]" value="1"> জটিল</td>
                              <td><input type="checkbox" name="members[child_week_side]" value="1"> ভাষায় বিলম্ব</td>
                              
                              </tr>
                              <tr>
                              <td><input type="checkbox" name="members[child_week_side]" value="1"> অস্থিরতা</td>
                              <td><input type="checkbox" name="members[child_week_side]" value="1"> প্রানির প্রতি নিষ্ঠুরতা</td>
                              <td><input type="checkbox" name="members[child_week_side]" value="1"> সেখার অক্ষমতা</td>
                             
                              </tr>
                              <tr>
                              <td><input type="checkbox" name="members[child_week_side]" value="1"> উদ্বেগ/অস্বস্থি</td>
                              <td><input type="checkbox" name="members[child_week_side]" value="1"> হতাশা</td>
                              <td><input type="checkbox" name="members[child_week_side]" value="1"> কম আত্মসম্মান</td>
                              
                              </tr>
                              <tr>
                              <td><input type="checkbox" name="members[child_week_side]" value="1"> ম্নোযোগ</td>
                              <td><input type="checkbox" name="members[child_week_side]" value="1"> বিকাশে বিলম্ব</td>
                              <td><input type="checkbox" name="members[child_week_side]" value="1"> মিথ্যা বলা</td>
                             
                              </tr>
                              <tr>
                              <td><input type="checkbox" name="members[child_week_side]" value="1"> ব্যাধি</td>
                              <td><input type="checkbox" name="members[child_week_side]" value="1"> সৎবেদনশীল</td>
                              <td><input type="checkbox" name="members[child_week_side]" value="1"> অবহেলা করা</td>
                             
                              </tr>
                              <tr>
                              <td><input type="checkbox" name="members[child_week_side]" value="1"> আচরণগত</td>
                              <td><input type="checkbox" name="members[child_week_side]" value="1"> মানসিক বা শারীরিক নির্যাতন<br></td>
                              <td><input type="checkbox" name="members[child_week_side]" value="1"> বিরোধী প্রতীবাদ<br></td>
                              </tr>
                              <tr>
                              <td><input type="checkbox" name="members[child_week_side]" value="1"> সামাজিক সমস্যা</td>
                              <td><input type="checkbox" name="members[child_week_side]" value="1"> সহিংসতা বা ট্রমার পরে যত্নশীল<br></td>
                              </tr>
                              </table>
                     </fieldset>
                     <fieldset class="scheduler-border">
                     	<div class="col-md-8">
                           <div class="form-group">
                              <label>১৩. আপনার শিশুর জন্য আপনার সামাজিক ও আচরণগত উদ্বেগগুলো কি কি?</label>
                              <textarea name="members[child_social_describe]" style=" width: 600px;height: 120px;">
                              	
                              </textarea>
                           </div>
                        </div>

                     </fieldset>

                      <fieldset class="scheduler-border">
                     <legend class="scheduler-border">জরুরী যোগাযোগ ও সেন্টারে শিশুকে দেওয়া-নেওয়ায় নিয়োজিত ব্যাক্তিবরগ </legend>
                     <div class="row form-row">
                        
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>১৪. ক. নাম</label>
                              <input type="text" name="registrations[child_parents_name]" value="<?=set_value('child_parents_name')?>" class="form-control">
                           </div>
                        </div>
						<div class="col-md-6">
                           <div class="form-group">
                              <label>ঠিকানা</label>
                              <input type="text" name="registrations[child_parents_present_address]" value="<?=set_value('child_parents_present_address')?>" class="form-control">
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
                              <label>মোবাইল নম্বর</label>
                              <input type="number" name="registrations[child_parents_ph_no]" value="<?=set_value('child_parents_ph_no')?>" class="form-control">
                           </div>
                        </div>
                     </div>

                    

                        <div class="col-md-6">
                           <div class="form-group">
                              <label>শিশুর সাথে সম্পর্ক</label>
                              <input type="text" name="registrations[child_parents_relation]" value="<?=set_value('child_parents_relation')?>" class="form-control">
                           </div>
                        </div> 
                     </div>


                    <div class="row form-row">
                       
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>খ. নাম</label>
                              <input type="text" name="registrations[child_parents_name_2]" value="<?=set_value('child_parents_name_2')?>" class="form-control">
                           </div>
                        </div>
						<div class="col-md-6">
                           <div class="form-group">
                              <label>ঠিকানা</label>
                              <input type="text" name="registrations[child_parents_present_address_2]" value="<?=set_value('child_parents_present_address_2')?>" class="form-control">
                           </div>
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                              <label>অভিভাবকের জাতীয় পরিচয় পত্রের নম্বর</label>
                              <input type="number" name="registrations[child_parents_ph_no_2]" value="<?=set_value('child_parents_ph_no_2')?>" class="form-control">
                           </div>
                        </div>
                    </div>

                    <div class="row form-row">   
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>মোবাইল নম্বর</label>
                              <input type="number" name="registrations[child_parents_national_no_2]" value="<?=set_value('child_parents_national_no_2')?>" class="form-control">
                           </div>
                        </div>

                        <div class="col-md-6">
                           <div class="form-group">
                              <label>শিশুর সাথে সম্পর্ক</label>
                              <input type="text" name="registrations[child_parents_relation_2]" value="<?=set_value('child_mother_designation_2')?>" class="form-control">
                           </div>
                        </div> 
                    </div>
                     </fieldset>	



                     <fieldset class="scheduler-border">
                     	<h3>প্রয়োজনীয় সংযুক্তি সমুহ</h3>
                     <div class="row form-row">
                     	<div class="col-md-12">
                           <div class="form-group">
                           	<table>	
                           		<tr>
	                              <td><input type="radio" name="members[child_necessary_attatch[]]" value="1" <?=set_value('child_necessary_attatch[]')==''?'checked':'checked';?>> শিশুর পাসপোর্ট সাইজ ছবি-০২ কপি</td>
	                            </tr>

	                            <tr>
	                              <td></td><input type="radio" name="members[child_necessary_attatch[]]" value="1" <?=set_value('child_necessary_attatch[]')==''?'':'';?>> মাতাপিতার পাসপোর্ট সাইজ ছবি-০২ কপি
								</tr>
	                            
								<tr>  
								  <td><input type="radio" name="members[child_necessary_attatch[]]" value="1" <?=set_value('child_necessary_attatch[]')==''?'':'';?>> শিশুর টিকা কার্ড এর ফটোকপি</td>
								</tr>
								<tr>
								  <td><input type="radio" name="members[child_necessary_attatch[]]" value="1" <?=set_value('child_necessary_attatch[]')==''?'':'';?>> শিশুর অসুস্থতা নীতি সংক্রান্ত অজ্ঞিকারনামা</td>
								</tr>
								<tr>  
								  <td><input type="radio" name="members[child_necessary_attatch[]]" value="1" <?=set_value('child_necessary_attatch[]')==''?'':'';?>> জরুরী চিকিৎসা সেবা প্রদানের সম্মতি</td>
	                            </tr>
	                            <tr>  
	                              <td><input type="radio" name="members[child_necessary_attatch[]]" value="1" <?=set_value('child_necessary_attatch[]')==''?'':'';?>> শিশুর কারযবলি ও বিশেষ অনুষ্ঠানের ছবি ও তথ্যচিত্র ব্যাবহারের অনুমতি</td>
	                            </tr>
                          </table>
                           </div>
                        </div>
                    </div>  
                     </fieldset>
                     <fieldset>
                     	<h4>এই মর্মে প্রত্যয়ন করা যাচ্ছে যে, উপরের সকল তথ্যাবলী আমার জানা মতে সত্য ও সঠিক এবং শিশু ভর্তির সকল নিয়ম মেনে আমার শিশু কে সেন্টারে ভর্তি করছি</h4><br>

                     	<div class="row form-row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>মাতা বা পিতা বা অভিভাবকের স্বাক্ষর</label>
                                 <div><?php echo form_error('userfile'); ?></div>
                                 <input type="file" name="userfile">
                                 <!-- <p class="help-block">File type jpg, png, jpeg are allowed.</p> -->
                                 
                              </div>
                           </div>

                           <div class="col-md-6">
                              <div class="form-group">
                                 <label>তারিখ</label>
                                 <input type="date" name="registrations[reg_date]" value="<?=set_value('reg_date')?>" class="form-control" placeholder="" autocomplete="off">
                                 
                              </div>
                           </div>
                        </div>



                     </fieldset>

                      <input type="hidden" name="hide_app_info" value="22222">

                        <div class="row form-row">
                           <div class="col-md-12">
                              <div class="form-group">
                                 <input type="submit" name="submit" value="সাবমিট করুন" class="btn btn-success pull-right" style="font-weight: bold;">
                              </div>
                           </div>
                        </div>
                  </div>
               </form>
            </div>
         </div>


      </div>

      
   </div>