<section class="content-header">
   <h1> <?php echo $meta_title; ?>  </h1>
   <ol class="breadcrumb">
      <li><a href="<?=base_url('adminpanel/dashboard')?>"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
   </ol>
</section>

<!-- Main content -->-
<section class="content">

   <div class="row">
      
      <div class="col-lg-3 col-xs-6">
         <div class="small-box bg-aqua">
            <div class="inner">
               <h3><?=$result_gTotal_application?></h3>
               <p>Total Application</p>
            </div>
            <div class="icon"> <i class="fa fa-list"></i> </div>
            <a href="<?php echo base_url('adminpanel/dashboard/application_list')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div> <!-- ./col -->

      <div class="col-lg-3 col-xs-6">      
         <div class="small-box bg-green">
            <div class="inner">
               <h3><?=$result_gTotal_child?></h3>
               <p>Total Child</p>
            </div>
            <div class="icon"> <i class="fa fa-child"></i> </div>
            <a href="<?php //echo base_url('adminpanel/member')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div> 

      
      <div class="col-lg-3 col-xs-6">
         <div class="small-box bg-yellow">
            <div class="inner">
               <h3><?=$result_gTotal_staff?></h3>
               <p>Total Staff</p>
            </div>
            <div class="icon"> <i class="fa fa-users"></i> </div>
            <a href="<?php //echo base_url('adminpanel/staff/all')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div>

      <div class="col-lg-3 col-xs-6">
         <div class="small-box bg-red">
            <div class="inner">
               <h3><?=$result_gTotal_attendance?></h3>
               <p>Today Attendance</p>
            </div>
            <div class="icon"> <i class="fa fa-clock-o"></i> </div>
            <a href="<?php //echo base_url('adminpanel/attendance/all')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div> <!-- ./col -->
      
   </div> <!-- ./row -->


   <div class="row spacing-bottom 2col">
      <div class="col-md-4 col-sm-6 spacing-bottom-sm spacing-bottom">
         <div class="tiles white added-margin new new1">
            <div class="tiles-body">
               <div class="tiles-title"> ধানমন্ডি শিশু দিবাযত্ন কেন্দ্র</div>
               <div class="heading"> মোট শিশু <span class="" data-value="" data-animation-duration="500"><?=eng2bng($result_dc[1]['total_child'])?></span> </div>

               <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
               <div class="description">
                  <table class="report-table">
                     <tbody>
                        <tr><td colspan="2"></td></tr>
                        <tr>
                           <td>আবেদনের সংখ্যা</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[1]['total_application'])?></td>
                        </tr>        
                        <tr>
                           <td>সর্বশেষ অগ্রিম বিল</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[1]['total_advance_bill'])?></td>
                        </tr>
                        <tr>
                           <td>সর্বমোট স্টাফ</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[1]['total_staff'])?></td>
                        </tr>
                        <tr>
                           <td>আজকের উপস্থিতি</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[1]['total_attendance_today'])?></td>
                        </tr>                        
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="triangle-up"></div>
         </div>
      </div>

      <div class="col-md-4 col-sm-6 spacing-bottom-sm spacing-bottom">
         <div class="tiles white added-margin new new2">
            <div class="tiles-body">
               <div class="tiles-title">মতিঝিল শিশু দিবাযত্ন কেন্দ্র</div>
               <div class="heading"> মোট শিশু  <span class="" data-value="" data-animation-duration="1000"><?=eng2bng($result_dc[2]['total_child'])?></span> </div>

               <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
               <div class="description">
                  <table class="report-table report-tabe2">
                     <tbody>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>আবেদনের সংখ্যা</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[2]['total_application'])?></td>
                        </tr>        
                        <tr>
                           <td>সর্বশেষ অগ্রিম বিল</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[2]['total_advance_bill'])?></td>
                        </tr>
                        <tr>
                           <td>সর্বমোট স্টাফ</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[2]['total_staff'])?></td>
                        </tr>
                        <tr>
                           <td>আজকের উপস্থিতি</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[2]['total_attendance_today'])?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="triangle-up"></div>
         </div>
      </div>

      <div class="col-md-4 col-sm-6 spacing-bottom">
         <div class="tiles white added-margin new new3">
            <div class="tiles-body">
               <div class="tiles-title"> রায়ের বাজার শিশু দিবাযত্ন কেন্দ্র </div>
               <div class="heading"> মোট শিশু  <span class="" data-value="" data-animation-duration="1200"><?=eng2bng($result_dc[3]['total_child'])?></span> </div>

               <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
               <div class="description">
                  <table class="report-table">
                     <tbody>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>আবেদনের সংখ্যা</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[3]['total_application'])?></td>
                        </tr>        
                        <tr>
                           <td>সর্বশেষ অগ্রিম বিল</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[3]['total_advance_bill'])?></td>
                        </tr>
                        <tr>
                           <td>সর্বমোট স্টাফ</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[3]['total_staff'])?></td>
                        </tr>
                        <tr>
                           <td>আজকের উপস্থিতি</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[3]['total_attendance_today'])?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="triangle-up"></div>
         </div>
      </div>

      <div class="col-md-4 col-sm-6">
         <div class="tiles white added-margin new new4">
            <div class="tiles-body">
               <div class="tiles-title"> কমলাপুর শিশু দিবাযত্ন কেন্দ্র </div>
               <div class="row-fluid">
                  <div class="heading"> মোট শিশু  <span class="" data-value="" data-animation-duration="700"><?=eng2bng($result_dc[4]['total_child'])?></span> </div>
               </div>
               <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
               <div class="description">
                  <table class="report-table">
                     <tbody>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>আবেদনের সংখ্যা</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[4]['total_application'])?></td>
                        </tr>        
                        <tr>
                           <td>সর্বশেষ অগ্রিম বিল</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[4]['total_advance_bill'])?></td>
                        </tr>
                        <tr>
                           <td>সর্বমোট স্টাফ</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[4]['total_staff'])?></td>
                        </tr>
                        <tr>
                           <td>আজকের উপস্থিতি</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[4]['total_attendance_today'])?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="triangle-up"></div>
         </div>
      </div>

      <div class="col-md-4 col-sm-6 spacing-bottom-sm spacing-bottom">
         <div class="tiles white added-margin new new1">
            <div class="tiles-body">

               <div class="tiles-title"> মুগদা শিশু দিবাযত্ন কেন্দ্র </div>
               <div class="heading"> মোট শিশু  <span class="" data-value="" data-animation-duration="500"><?=eng2bng($result_dc[5]['total_child'])?></span> </div>

               <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
               <div class="description">
                  <table class="report-table">
                     <tbody>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>আবেদনের সংখ্যা</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[5]['total_application'])?></td>
                        </tr>        
                        <tr>
                           <td>সর্বশেষ অগ্রিম বিল</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[5]['total_advance_bill'])?></td>
                        </tr>
                        <tr>
                           <td>সর্বমোট স্টাফ</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[5]['total_staff'])?></td>
                        </tr>
                        <tr>
                           <td>আজকের উপস্থিতি</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[5]['total_attendance_today'])?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="triangle-up"></div>
         </div>
      </div>

      <div class="col-md-4 col-sm-6 spacing-bottom-sm spacing-bottom">
         <div class="tiles white added-margin new new2">
            <div class="tiles-body">

               <div class="tiles-title"> পল্লবী শিশু দিবাযত্ন কেন্দ্র</div>
               <div class="heading"> মোট শিশু  <span class="" data-value="" data-animation-duration="0"><?=eng2bng($result_dc[6]['total_child'])?></span> </div>

               <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
               <div class="description">
                  <table class="report-table">
                     <tbody>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>আবেদনের সংখ্যা</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[6]['total_application'])?></td>
                        </tr>        
                        <tr>
                           <td>সর্বশেষ অগ্রিম বিল</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[6]['total_advance_bill'])?></td>
                        </tr>
                        <tr>
                           <td>সর্বমোট স্টাফ</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[6]['total_staff'])?></td>
                        </tr>
                        <tr>
                           <td>আজকের উপস্থিতি</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[6]['total_attendance_today'])?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="triangle-up"></div>
         </div>
      </div>

      <div class="col-md-4 col-sm-6 spacing-bottom-sm spacing-bottom">
         <div class="tiles white added-margin new new1">
            <div class="tiles-body">
               <div class="tiles-title"> সায়েদাবাদ শিশু দিবাযত্ন কেন্দ্র</div>
               <div class="heading"> মোট শিশু <span class="" data-value="" data-animation-duration="500"><?=eng2bng($result_dc[7]['total_child'])?></span> </div>

               <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
               <div class="description">
                  <table class="report-table">
                     <tbody>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>আবেদনের সংখ্যা</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[7]['total_application'])?></td>
                        </tr>        
                        <tr>
                           <td>সর্বশেষ অগ্রিম বিল</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[7]['total_advance_bill'])?></td>
                        </tr>
                        <tr>
                           <td>সর্বমোট স্টাফ</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[7]['total_staff'])?></td>
                        </tr>
                        <tr>
                           <td>আজকের উপস্থিতি</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[7]['total_attendance_today'])?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="triangle-up"></div>
         </div>
      </div>

      <div class="col-md-4 col-sm-6 spacing-bottom-sm spacing-bottom">
         <div class="tiles white added-margin new new2">
            <div class="tiles-body">
               <div class="tiles-title">মহাখালী শিশু দিবাযত্ন কেন্দ্র</div>
               <div class="heading"> মোট শিশু  <span class="" data-value="" data-animation-duration="1000"><?=eng2bng($result_dc[8]['total_child'])?></span> </div>

               <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
               <div class="description">
                  <table class="report-table report-tabe2">
                     <tbody>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>আবেদনের সংখ্যা</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[8]['total_application'])?></td>
                        </tr>        
                        <tr>
                           <td>সর্বশেষ অগ্রিম বিল</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[8]['total_advance_bill'])?></td>
                        </tr>
                        <tr>
                           <td>সর্বমোট স্টাফ</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[8]['total_staff'])?></td>
                        </tr>
                        <tr>
                           <td>আজকের উপস্থিতি</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[8]['total_attendance_today'])?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="triangle-up"></div>
         </div>
      </div>

      <div class="col-md-4 col-sm-6 spacing-bottom">
         <div class="tiles white added-margin new new3">
            <div class="tiles-body">
               <div class="tiles-title"> আশুলিয়া শিশু দিবাযত্ন কেন্দ্র </div>
               <div class="heading"> মোট শিশু  <span class="" data-value="" data-animation-duration="1200"><?=eng2bng($result_dc[9]['total_child'])?></span> </div>

               <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
               <div class="description">
                  <table class="report-table">
                     <tbody>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>আবেদনের সংখ্যা</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[9]['total_application'])?></td>
                        </tr>        
                        <tr>
                           <td>সর্বশেষ অগ্রিম বিল</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[9]['total_advance_bill'])?></td>
                        </tr>
                        <tr>
                           <td>সর্বমোট স্টাফ</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[9]['total_staff'])?></td>
                        </tr>
                        <tr>
                           <td>আজকের উপস্থিতি</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[9]['total_attendance_today'])?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="triangle-up"></div>
         </div>
      </div>

      <div class="col-md-4 col-sm-6">
         <div class="tiles white added-margin new new4">
            <div class="tiles-body">
               <div class="tiles-title"> রংপুর শিশু দিবাযত্ন কেন্দ্র </div>
               <div class="row-fluid">
                  <div class="heading"> মোট শিশু  <span class="" data-value="" data-animation-duration="700"><?=eng2bng($result_dc[10]['total_child'])?></span> </div>
               </div>
               <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
               <div class="description">
                  <table class="report-table">
                     <tbody>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>আবেদনের সংখ্যা</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[10]['total_application'])?></td>
                        </tr>        
                        <tr>
                           <td>সর্বশেষ অগ্রিম বিল</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[10]['total_advance_bill'])?></td>
                        </tr>
                        <tr>
                           <td>সর্বমোট স্টাফ</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[10]['total_staff'])?></td>
                        </tr>
                        <tr>
                           <td>আজকের উপস্থিতি</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[10]['total_attendance_today'])?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="triangle-up"></div>
         </div>
      </div>

      <div class="col-md-4 col-sm-6 spacing-bottom-sm spacing-bottom">
         <div class="tiles white added-margin new new1">
            <div class="tiles-body">

               <div class="tiles-title"> গোপালগঞ্জ শিশু দিবাযত্ন কেন্দ্র </div>
               <div class="heading"> মোট শিশু  <span class="" data-value="" data-animation-duration="500"><?=eng2bng($result_dc[11]['total_child'])?></span> </div>

               <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
               <div class="description">
                  <table class="report-table">
                     <tbody>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>আবেদনের সংখ্যা</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[11]['total_application'])?></td>
                        </tr>        
                        <tr>
                           <td>সর্বশেষ অগ্রিম বিল</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[11]['total_advance_bill'])?></td>
                        </tr>
                        <tr>
                           <td>সর্বমোট স্টাফ</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[11]['total_staff'])?></td>
                        </tr>
                        <tr>
                           <td>আজকের উপস্থিতি</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[11]['total_attendance_today'])?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="triangle-up"></div>
         </div>
      </div>

      <div class="col-md-4 col-sm-6 spacing-bottom-sm spacing-bottom">
         <div class="tiles white added-margin new new2">
            <div class="tiles-body">

               <div class="tiles-title"> গাজীপুর শিশু দিবাযত্ন কেন্দ্র</div>
               <div class="heading"> মোট শিশু  <span class="" data-value="" data-animation-duration="1000"><?=eng2bng($result_dc[12]['total_child'])?></span> </div>

               <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
               <div class="description">
                  <table class="report-table">
                     <tbody>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>আবেদনের সংখ্যা</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[12]['total_application'])?></td>
                        </tr>        
                        <tr>
                           <td>সর্বশেষ অগ্রিম বিল</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[12]['total_advance_bill'])?></td>
                        </tr>
                        <tr>
                           <td>সর্বমোট স্টাফ</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[12]['total_staff'])?></td>
                        </tr>
                        <tr>
                           <td>আজকের উপস্থিতি</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[12]['total_attendance_today'])?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="triangle-up"></div>
         </div>
      </div>

      <div class="col-md-4 col-sm-6 spacing-bottom-sm spacing-bottom">
         <div class="tiles white added-margin new new1">
            <div class="tiles-body">
               <div class="tiles-title"> কক্সবাজার শিশু দিবাযত্ন কেন্দ্র</div>
               <div class="heading"> মোট শিশু <span class="" data-value="" data-animation-duration="500"><?=eng2bng($result_dc[13]['total_child'])?></span> </div>

               <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
               <div class="description">
                  <table class="report-table">
                     <tbody>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>আবেদনের সংখ্যা</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[13]['total_application'])?></td>
                        </tr>        
                        <tr>
                           <td>সর্বশেষ অগ্রিম বিল</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[13]['total_advance_bill'])?></td>
                        </tr>
                        <tr>
                           <td>সর্বমোট স্টাফ</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[13]['total_staff'])?></td>
                        </tr>
                        <tr>
                           <td>আজকের উপস্থিতি</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[13]['total_attendance_today'])?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="triangle-up"></div>
         </div>
      </div>

      <div class="col-md-4 col-sm-6 spacing-bottom-sm spacing-bottom">
         <div class="tiles white added-margin new new2">
            <div class="tiles-body">
               <div class="tiles-title">নওগাঁ শিশু দিবাযত্ন কেন্দ্র</div>
               <div class="heading"> মোট শিশু  <span class="" data-value="" data-animation-duration="1000"><?=eng2bng($result_dc[14]['total_child'])?></span> </div>

               <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
               <div class="description">
                  <table class="report-table report-tabe2">
                     <tbody>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>আবেদনের সংখ্যা</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[14]['total_application'])?></td>
                        </tr>        
                        <tr>
                           <td>সর্বশেষ অগ্রিম বিল</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[14]['total_advance_bill'])?></td>
                        </tr>
                        <tr>
                           <td>সর্বমোট স্টাফ</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[14]['total_staff'])?></td>
                        </tr>
                        <tr>
                           <td>আজকের উপস্থিতি</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[14]['total_attendance_today'])?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="triangle-up"></div>
         </div>
      </div>

      <div class="col-md-4 col-sm-6 spacing-bottom">
         <div class="tiles white added-margin new new3">
            <div class="tiles-body">
               <div class="tiles-title"> গাইবান্ধা শিশু দিবাযত্ন কেন্দ্র </div>
               <div class="heading"> মোট শিশু  <span class="" data-value="" data-animation-duration="1200"><?=eng2bng($result_dc[15]['total_child'])?></span> </div>

               <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
               <div class="description">
                  <table class="report-table">
                     <tbody>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>আবেদনের সংখ্যা</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[15]['total_application'])?></td>
                        </tr>        
                        <tr>
                           <td>সর্বশেষ অগ্রিম বিল</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[15]['total_advance_bill'])?></td>
                        </tr>
                        <tr>
                           <td>সর্বমোট স্টাফ</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[15]['total_staff'])?></td>
                        </tr>
                        <tr>
                           <td>আজকের উপস্থিতি</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[15]['total_attendance_today'])?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="triangle-up"></div>
         </div>
      </div>

      <div class="col-md-4 col-sm-6">
         <div class="tiles white added-margin new new4">
            <div class="tiles-body">
               <div class="tiles-title"> ভোলা শিশু দিবাযত্ন কেন্দ্র </div>
               <div class="row-fluid">
                  <div class="heading"> মোট শিশু  <span class="" data-value="" data-animation-duration="700"><?=eng2bng($result_dc[16]['total_child'])?></span> </div>
               </div>
               <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
               <div class="description">
                  <table class="report-table">
                     <tbody>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>আবেদনের সংখ্যা</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[16]['total_application'])?></td>
                        </tr>        
                        <tr>
                           <td>সর্বশেষ অগ্রিম বিল</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[16]['total_advance_bill'])?></td>
                        </tr>
                        <tr>
                           <td>সর্বমোট স্টাফ</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[16]['total_staff'])?></td>
                        </tr>
                        <tr>
                           <td>আজকের উপস্থিতি</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[16]['total_attendance_today'])?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="triangle-up"></div>
         </div>
      </div>

      <div class="col-md-4 col-sm-6 spacing-bottom-sm spacing-bottom">
         <div class="tiles white added-margin new new1">
            <div class="tiles-body">

               <div class="tiles-title">  টাঙ্গাইল শিশু দিবাযত্ন কেন্দ্র </div>
               <div class="heading"> মোট শিশু  <span class="" data-value="" data-animation-duration="500"><?=eng2bng($result_dc[17]['total_child'])?></span> </div>

               <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
               <div class="description">
                  <table class="report-table">
                     <tbody>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>আবেদনের সংখ্যা</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[17]['total_application'])?></td>
                        </tr>        
                        <tr>
                           <td>সর্বশেষ অগ্রিম বিল</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[17]['total_advance_bill'])?></td>
                        </tr>
                        <tr>
                           <td>সর্বমোট স্টাফ</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[17]['total_staff'])?></td>
                        </tr>
                        <tr>
                           <td>আজকের উপস্থিতি</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[17]['total_attendance_today'])?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="triangle-up"></div>
         </div>
      </div>

      <div class="col-md-4 col-sm-6 spacing-bottom-sm spacing-bottom">
         <div class="tiles white added-margin new new2">
            <div class="tiles-body">

               <div class="tiles-title"> নোয়াখালী শিশু দিবাযত্ন কেন্দ্র</div>
               <div class="heading"> মোট শিশু  <span class="" data-value="" data-animation-duration="1000"><?=eng2bng($result_dc[18]['total_child'])?></span> </div>

               <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
               <div class="description">
                  <table class="report-table">
                     <tbody>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>আবেদনের সংখ্যা</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[18]['total_application'])?></td>
                        </tr>        
                        <tr>
                           <td>সর্বশেষ অগ্রিম বিল</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[18]['total_advance_bill'])?></td>
                        </tr>
                        <tr>
                           <td>সর্বমোট স্টাফ</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[18]['total_staff'])?></td>
                        </tr>
                        <tr>
                           <td>আজকের উপস্থিতি</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[18]['total_attendance_today'])?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="triangle-up"></div>
         </div>
      </div>

      <div class="col-md-4 col-sm-6 spacing-bottom-sm spacing-bottom">
         <div class="tiles white added-margin new new1">
            <div class="tiles-body">
               <div class="tiles-title"> চাঁদপুর শিশু দিবাযত্ন কেন্দ্র</div>
               <div class="heading"> মোট শিশু <span class="" data-value="" data-animation-duration="500"><?=eng2bng($result_dc[19]['total_child'])?></span> </div>

               <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
               <div class="description">
                  <table class="report-table">
                     <tbody>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>আবেদনের সংখ্যা</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[19]['total_application'])?></td>
                        </tr>        
                        <tr>
                           <td>সর্বশেষ অগ্রিম বিল</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[19]['total_advance_bill'])?></td>
                        </tr>
                        <tr>
                           <td>সর্বমোট স্টাফ</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[19]['total_staff'])?></td>
                        </tr>
                        <tr>
                           <td>আজকের উপস্থিতি</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[19]['total_attendance_today'])?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="triangle-up"></div>
         </div>
      </div>

      <div class="col-md-4 col-sm-6 spacing-bottom-sm spacing-bottom">
         <div class="tiles white added-margin new new2">
            <div class="tiles-body">
               <div class="tiles-title">রামপুরা শিশু দিবাযত্ন কেন্দ্র</div>
               <div class="heading"> মোট শিশু  <span class="" data-value="" data-animation-duration="1000"><?=eng2bng($result_dc[20]['total_child'])?></span> </div>

               <div style="border-bottom:1px solid #fff; margin-bottom: 10px"></div>
               <div class="description">
                  <table class="report-table report-tabe2">
                     <tbody>
                        <tr>
                           <td></td>
                           <td></td>
                           <td></td>
                        </tr>
                        <tr>
                           <td>আবেদনের সংখ্যা</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[20]['total_application'])?></td>
                        </tr>        
                        <tr>
                           <td>সর্বশেষ অগ্রিম বিল</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[20]['total_advance_bill'])?></td>
                        </tr>
                        <tr>
                           <td>সর্বমোট স্টাফ</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[20]['total_staff'])?></td>
                        </tr>
                        <tr>
                           <td>আজকের উপস্থিতি</td>
                           <td class="sub-mark">:</td>
                           <td><?=eng2bng($result_dc[20]['total_attendance_today'])?></td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
            <div class="triangle-up"></div>
         </div>
      </div>

   </div>      
</div> 


<?php /* 
   <div class="row">
      
      <div class="col-lg-6 col-xs-6">
         <div class="small-box bg-aqua">
            <div class="inner">
               <h3>123<?php //$total_member ?></h3>
               <p>Total Application</p>
            </div>
            <div class="icon"> <i class="ion ion-bag"></i> </div>
            <a href="<?php //base_url('adminpanel/member')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div> <!-- ./col -->

      <div class="col-lg-6 col-xs-6">      
         <div class="small-box bg-green">
            <div class="inner">
               <h3>123<?php //$total_product ?></h3>
               <p>Total Child</p>
            </div>
            <div class="icon"> <i class="ion ion-stats-bars"></i> </div>
            <a href="<?php //base_url('adminpanel/product/all')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div> 

      
      <div class="col-lg-3 col-xs-6">
         <div class="small-box bg-yellow">
            <div class="inner">
               <h3><?php //$total_document ?></h3>
               <p>Total Document</p>
            </div>
            <div class="icon"> <i class="ion ion-person-add"></i> </div>
            <a href="<?php //base_url('admin/document/all')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div>

      <div class="col-lg-3 col-xs-6">
         <div class="small-box bg-red">
            <div class="inner">
               <h3><?php // $total_testimonial ?></h3>
               <p>Total Testimonial</p>
            </div>
            <div class="icon"> <i class="ion ion-pie-graph"></i> </div>
            <a href="<?php //base_url('admin/testimonial/all')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div> <!-- ./col -->
      
   </div> <!-- ./row --> */ ?>

   <?php /*
   <div class="row">
      
      <?php foreach ($day_care_list as $row) {  ?>
      <div class="col-md-4">
         <div class="box box-widget widget-user-2">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
               <h3 class="widget-user-username"><?=$row->title?></h3>
               <h5 class="widget-user-desc"><?=$row->description?></h5>
            </div>
            <div class="box-footer no-padding">
               <ul class="nav nav-stacked">
                  <li><a href="javascript:void()">Child <span class="pull-right badge bg-blue">31</span></a></li>
                  <li><a href="javascript:void()">Employee <span class="pull-right badge bg-aqua">5</span></a></li>
                  <li><a href="javascript:void()">Budgets <span class="pull-right badge bg-red">842</span></a></li>
                  <li><a href="javascript:void()">Attendance <span class="pull-right badge bg-green">12</span></a></li>
               </ul>
               <a href="<?php //base_url('admin/testimonial/all')?>" class="btn btn-block btn-success btn-xs">Details View <i class="fa fa-arrow-circle-right"></i></a>
            </div>
         </div> <!-- /.widget-user -->
      </div> <!-- /.col -->
      <?php } ?>
      
      
      <div class="col-md-4">
         <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
               <h3 class="widget-user-username">Alexander Pierce</h3>
               <h5 class="widget-user-desc">Founder &amp; CEO</h5>
            </div>
            <div class="widget-user-image">
               <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Avatar">
            </div>
            <div class="box-footer">
               <div class="row">
                  <div class="col-sm-4 border-right">
                     <div class="description-block">
                        <h5 class="description-header">3,200</h5>
                        <span class="description-text">SALES</span>
                     </div> <!-- /.description-block -->
                  </div> <!-- /.col -->
                  <div class="col-sm-4 border-right">
                     <div class="description-block">
                        <h5 class="description-header">13,000</h5>
                        <span class="description-text">FOLLOWERS</span>
                     </div> <!-- /.description-block -->
                  </div> <!-- /.col -->
                  <div class="col-sm-4">
                     <div class="description-block">
                        <h5 class="description-header">35</h5>
                        <span class="description-text">PRODUCTS</span>
                     </div> <!-- /.description-block -->
                  </div> <!-- /.col -->
               </div> <!-- /.row -->
            </div>
         </div> <!-- /.widget-user -->
      </div> <!-- /.col -->
      
   </div>*/ ?>
</div>

</section>
<!-- /.content -->
