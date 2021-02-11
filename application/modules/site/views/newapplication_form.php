<style type="text/css">
	fieldset{font-family: 'Kalpurush', sans-serif;}
	h4{font-family: 'Kalpurush', sans-serif; text-align: left; font-weight: bold; font-size:16px;}
	h5{font-family: 'Kalpurush', sans-serif; text-align: left; font-weight: bold; font-size:16px;}
</style>
<div class="row">
   <div class="col-md-9 main-content" style="padding: 15px 15px 15px 15px"> 
      <!-- <div class="col-md-10 col-sm-6 col-md-offset-1 col-sm-offset-1" style="border: 1px solid"> -->
      <!-- <ul class="nav nav-tabs">
         <li class="active"><a data-toggle="tab" href="#home"><strong>আমার প্রোফাইল</strong></a></li>
         <li><a data-toggle="tab" href="#menu1"><strong>আবেদনের তালিকা</strong></a></li>
         <li><a data-toggle="tab" href="#menu2"><strong>আবেদনের ভর্তি ফরম</strong></a></li>
      </ul> -->

      <div class="tab-content">
      <!--    <div id="home" class="tab-pane fade in active">
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
 -->
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

            <form action="<?=base_url('my-profile')?>" method="post" enctype="multipart/form-data" id="jsvalidation" style="font-family: 'arial'">

               <div><?php //echo validation_errors(); ?></div>
               <div class="col-md-12" style="background: #fff;padding-top:30px;">
               	<h4>ভর্তি ফরম</h4>
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
                              <input type="text" name="members[child_name]" value="<?=set_value('child_name')?>" class="form-control" placeholder="">
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
                              <input type="date" name="members[child_dob]" value="<?=set_value('child_dob')?>" class="form-control" placeholder="" autocomplete="off">
                           </div>
                        </div> 
                        <div class="row form-row">
                        <div class="col-md-6">
                           <div class="form-group">
                              <label>শিশুর জন্ম সনদ নম্বর</label>
                              <input type="number" name="members[birth_certificate_no]" value="<?=set_value('birth_certificate_no')?>" class="form-control">
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
                              <input type="text" name="registrations[child_mother_name]" value="<?=set_value('child_mother_name')?>" class="form-control">
                           </div>
                        </div>

                        <div class="col-md-8">
                           <div class="form-group">
                              <label>৭. শিশুর নিয়মিত কোন ঔষধ সেবন করে কিনা?</label>
                               <input type="radio" name="members[gender]" value="Male" <?=set_value('gender')=='Male'?'checked':'checked';?>> হ্যাঁ 
                              <input type="radio" name="members[gender]" value="Female" <?=set_value('gender')=='Female'?'':'';?>> না
                           </div>
                        </div>
                     </div> 

                     <h5>হ্যাঁ হলে</h5>

                     <div class="row form-row"> 
                        <div class="col-md-8">
                           <div class="form-group">
                              <label>ক. ঔষধের নাম ও সেবনের মাত্রা</label>
                              <input type="text" name="registrations[child_father_name]" value="<?=set_value('child_father_name')?>" class="form-control">
                           </div>
                        </div>
                         <div class="col-md-8">
                           <div class="form-group">
                              <label>খ. রোগের কারণ</label>
                              <input type="text" name="registrations[child_father_name]" value="<?=set_value('child_father_name')?>" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="form-group">
                              <label>গ. প্রেসক্রিপশন সংযুক্ত করেছেন কিনা?</label>
                               <input type="radio" name="members[gender]" value="Male" <?=set_value('gender')=='Male'?'checked':'checked';?>> হ্যাঁ 
                              <input type="radio" name="members[gender]" value="Female" <?=set_value('gender')=='Female'?'':'';?>> না
                           </div>
                        </div>

                        <div class="col-md-8">
                           <div class="form-group">
                              <label>৮. শিশুর চোখ, কান, দাঁতের পরিক্ষা করা হয়েছে কিনা?</label>
                               <input type="radio" name="members[gender]" value="Male" <?=set_value('gender')=='Male'?'checked':'checked';?>> হ্যাঁ 
                              <input type="radio" name="members[gender]" value="Female" <?=set_value('gender')=='Female'?'':'';?>> না
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="form-group">
                              <label>পরীক্ষা করা হয়ে থাকলে তার ফলাফল</label>
                              <input type="text" name="registrations[child_father_name]" value="<?=set_value('child_father_name')?>" class="form-control">
                           </div>
                        </div>

                         <div class="col-md-8">
                           <div class="form-group">
                              <label>৯. শিশুর বিশেষ কোন খাদ্যে সমস্যা/এলারজি আছে কি?</label>
                               <input type="radio" name="members[gender]" value="Male" <?=set_value('gender')=='Male'?'checked':'checked';?>> হ্যাঁ 
                              <input type="radio" name="members[gender]" value="Female" <?=set_value('gender')=='Female'?'':'';?>> না
                           </div>
                       </div>


                           <div class="col-md-8">
                           <div class="form-group">
                              <label>হ্যাঁ হলে তার বর্ণনা</label>
                              <input type="text" name="registrations[child_father_name]" value="<?=set_value('child_father_name')?>" class="form-control">
                           </div>
                        </div>
                        <div class="col-md-8">
                           <div class="form-group">
                              <label>নির্দিষ্ট খাদ্যের নাম</label>
                              <input type="text" name="registrations[child_father_name]" value="<?=set_value('child_father_name')?>" class="form-control">
                           </div>
                        </div>


                        <div class="col-md-8">
                           <div class="form-group">
                              <label>শিশুর করোনা/জল্বসন্ত/মাম্পস/অন্যান্য কোন সংক্রামণ রোগ হয়েছিল কিনা?</label>
                               <input type="radio" name="members[gender]" value="Male" <?=set_value('gender')=='Male'?'checked':'checked';?>> হ্যাঁ 
                              <input type="radio" name="members[gender]" value="Female" <?=set_value('gender')=='Female'?'':'';?>> না
                           </div>
                       </div>

                       <div class="col-md-8">
                           <div class="form-group">
                              <label>১০. বয়স অনুযায়ী শিশুর প্রয়োজনীয় টিকাসমুহ সম্পন্ন হয়েছে কিনা?</label>
                               <input type="radio" name="members[gender]" value="Male" <?=set_value('gender')=='Male'?'checked':'checked';?>> হ্যাঁ 
                              <input type="radio" name="members[gender]" value="Female" <?=set_value('gender')=='Female'?'':'';?>> না
                           </div>
                       </div>

                       <div class="col-md-8">
                           <div class="form-group">
                              <label>(উত্তর "না" হলে) কোন কোন টিকা দেওয়া হয়নি?</label>
                              <input type="text" name="registrations[child_father_name]" value="<?=set_value('child_father_name')?>" class="form-control">
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
                             <td> <input type="checkbox" name="members[bcg]" value="1"> অ্যাথলেটিক</td></td>
                             <td> <input type="checkbox" name="members[bcg]" value="1"> সহানুভুতিশিল</td>
                             <td> <input type="checkbox" name="members[bcg]" value="1"> স্নহময়</td>
                             <td> <input type="checkbox" name="members[bcg]" value="1"> আত্মসচেতন<br></td>
                              </tr>
                              <tr>

                              <td><input type="checkbox" name="members[bcg]" value="1"> সাহসী</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> উৎসাহী</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> অনুগত</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> সামাজিক<br></td>
                              </tr>
                              <tr>
                              <td><input type="checkbox" name="members[bcg]" value="1"> সহযোগী</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> উদ্যমী</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> সঙ্গীতপ্রমী</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> চিন্তাশিল<br></td>
                              </tr>
                              <tr>
                              <td><input type="checkbox" name="members[bcg]" value="1"> সৃজনশীল</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> ক্ষমাশীল</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> আশাবাদী</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> সুনিয়ন্ত্রিত<br></td>
                              </tr>
                              <tr>
                              <td><input type="checkbox" name="members[bcg]" value="1"> কৌতুহলি</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> বন্ধুসুলভ</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> কৌতকপূর্ণ</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> হস্যোউজ্জল<br></td>
                              </tr>
                              <tr>
                              <td><input type="checkbox" name="members[bcg]" value="1"> সিদ্ধান্তমূলক</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> সৎ</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> সম্ভাবনাময়য়</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> মনোযোগী<br></td>
                              </tr>
                              <tr>
                              <td><input type="checkbox" name="members[bcg]" value="1"> অধ্যাবসায়ী</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> কল্পনাপ্রবণ<br></td>
                              </tr>
                              <tr>
                              <td><input type="checkbox" name="members[bcg]" value="1"> ন্যায়পরায়ণ</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> দয়ালু<br></td>
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
                             <td> <input type="checkbox" name="members[bcg]" value="1"> আগ্রাসী মনোভাব</td></td>
                             <td> <input type="checkbox" name="members[bcg]" value="1"> নিয়ম ভঙ্গ</td>
                             <td> <input type="checkbox" name="members[bcg]" value="1"> শ্রবণ ক্ষমতার হ্রাস</td>
                             
                              </tr>
                              <tr>

                              <td><input type="checkbox" name="members[bcg]" value="1"> বাড়িতে অন্যদের প্রতি আক্রমনাত্মক মনোভাব</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> জটিল</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> ভাষায় বিলম্ব</td>
                              
                              </tr>
                              <tr>
                              <td><input type="checkbox" name="members[bcg]" value="1"> অস্থিরতা</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> প্রানির প্রতি নিষ্ঠুরতা</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> সেখার অক্ষমতা</td>
                             
                              </tr>
                              <tr>
                              <td><input type="checkbox" name="members[bcg]" value="1"> উদ্বেগ/অস্বস্থি</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> হতাশা</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> কম আত্মসম্মান</td>
                              
                              </tr>
                              <tr>
                              <td><input type="checkbox" name="members[bcg]" value="1"> ম্নোযোগ</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> বিকাশে বিলম্ব</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> মিথ্যা বলা</td>
                             
                              </tr>
                              <tr>
                              <td><input type="checkbox" name="members[bcg]" value="1"> ব্যাধি</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> সৎবেদনশীল</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> অবহেলা করা</td>
                             
                              </tr>
                              <tr>
                              <td><input type="checkbox" name="members[bcg]" value="1"> আচরণগত</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> মানসিক বা শারীরিক নির্যাতন<br></td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> বিরোধী প্রতীবাদ<br></td>
                              </tr>
                              <tr>
                              <td><input type="checkbox" name="members[bcg]" value="1"> সামাজিক সমস্যা</td>
                              <td><input type="checkbox" name="members[bcg]" value="1"> সহিংসতা বা ট্রমার পরে যত্নশীল<br></td>
                              </tr>
                              </table>
                     </fieldset>
                     <fieldset class="scheduler-border">
                     	<div class="col-md-8">
                           <div class="form-group">
                              <label>১৩. আপনার শিশুর জন্য আপনার সামাজিক ও আচরণগত উদ্বেগগুলো কি কি?</label>
                              
                           </div>
                        </div>

                     </fieldset>

                      <fieldset class="scheduler-border">
                     <legend class="scheduler-border">শিশুর চিকিৎসা সংক্রান্ত তথ্য </legend>
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

      <?php $this->load->view('frontend/right_side_bar'); ?>   
   </div>