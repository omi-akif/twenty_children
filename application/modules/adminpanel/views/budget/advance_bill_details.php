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
               <h3 class="box-title"><?=$meta_title; ?></h3>
               <!-- <a href="<?=base_url('adminpanel/event/edit/'.$info->id)?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> Edit Event</a>           -->
               <a href="<?=base_url('adminpanel/budget/advance_bill')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> All Data</a>   
               <a href="javascript:void();" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;" onclick="printDiv('printableArea')"> Print </a> 
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

               <?php /*
                  <style type="text/css">
                     .tg  {border-collapse:collapse;border-spacing:0; width: 500px;}
                     .tg td{font-family:Arial, sans-serif;font-size:14px;padding:4px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                     .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:4px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                     .tg .tg-cly1{text-align:left;vertical-align:middle}
                     .tg .tg-gg7l{background-color:#efefef;text-align:left;vertical-align:middle}
                  </style>
                  <div class="col-md-12">
                     <table class="tg" align="center">
                        <tr>
                           <th class="tg-gg7l">Budget Title</th>
                           <td class="tg-cly1"><?=$info->title?></td>
                           <th class="tg-gg7l">Date</th>
                           <td class="tg-cly1"><?=date('d, M Y', strtotime($info->created));?></td>
                        </tr>
                        <tr>
                           <th class="tg-gg7l">Budget Description</th>
                           <td class="tg-cly1" colspan="3"><?=$info->description?></td>
                        </tr>
                     </table>
                  </div> 
                  */ ?>

                  <div class="row" id="printableArea">
                     <div class="col-md-8 col-md-offset-2">
                        <div style="text-align: center;">গণপ্রজাতন্ত্রী বাংলাদেশ সরকার</div>
                        <div style="text-align: center;font-weight: bold;">মহিলা বিষয়ক অধিদপ্তর</div>
                        <div style="text-align: center;"><?=$this->DC_Title?></div>
                        <div style="text-align: center;"><?=$this->DC_Address?></div>
                        <br><br>
                        <div style="text-align: left;">বিষয়ঃ <?=$info->title?></div>
                        <br>
                        <div style="text-align: left;">মহিলা বিষয়ক অধিদপ্তরাধীন " ২০ টি শিশু দিবা যত্ন কেন্দ্র স্থাপন" শীর্ষক প্রকল্পের ধানমন্ডি ডে কেয়ার সেন্টারের নিন্মোক্ত বিল বাবদ প্রতিমাসে খরচ হয়- </div>

                        <table id="example1" class="table table-bordered table-responsive">
                           <thead>
                              <tr>
                                 <th>ক্রম</th>
                                 <th>দ্রবাদির নাম/ সেবা</th>
                                 <th>টাকার পরিমাণ</th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php 
                              $sl=0;
                              $total=0;
                              foreach ($item_results as $row) { 
                                 $sl++;
                                 $total += $row->amount;
                                 ?>
                                 <tr>
                                    <td><?=$sl;?></td>                           
                                    <td><?=$row->item_name;?></td>                 
                                    <td align="right"><?=$row->amount;?></td>
                                 </tr>
                                 <?php 
                              } 
                              ?>
                           </tbody>
                           <tfoot>
                              <tr>
                                 <td colspan="2" align="right"><b>সর্বমোট</b></td>
                                 <td align="right"><b><?=$total;?></b></td>
                              </tr>
                           </tfoot>
                        </table>          


                        <div style="text-align: center;">এমতাবস্থায়, উপরোল্লিখিত বিল সমূহ অগ্রীম প্রদানের প্রয়োজনীয় ব্যবস্থা গ্রহনের জন্য মহোদয়ের নিকট অনুরোধ করছি । </div>
                        <br><br><br>
                        <div style="float: left">
                           <div style="text-align: left;">প্রাপক</div>
                           <div style="text-align: left;">প্রকল্প পরিচালক </div>
                           <div style="text-align: left;">২০ টি শিশু দিবাযত্ন কেন্দ্র । </div>
                        </div>
                        <div style="float: right;">
                           <div style="text-align: left;">প্রেরক</div>
                           <div style="text-align: left; font-weight: bold;"><?=$this->DC_Officer?> </div>
                           <div style="text-align: left;">ডে-কেয়ার অফিসার </div>
                           <div style="text-align: left;"><?=$this->DC_Title?></div>
                        </div>

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