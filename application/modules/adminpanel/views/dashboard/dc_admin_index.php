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
      <div class="col-md-12">
         <div class="box box-widget widget-user">
            <!-- Add the bg color to the header using any of the bg-* classes -->
            <div class="widget-user-header bg-aqua-active">
               <h3 class="widget-user-username"><?=$day_care_info->title?></h3>
               <h5 class="widget-user-desc"><?=$day_care_info->area?></h5>
            </div>
         </div> <!-- /.widget-user -->
      </div> <!-- /.col -->
   </div>

   <div class="row">
      
      <div class="col-lg-3 col-xs-6">
         <div class="small-box bg-aqua">
            <div class="inner">
               <h3><?=$dc_statistics['total_application']?></h3>
               <p>Total Application</p>
            </div>
            <div class="icon"> <i class="fa fa-list"></i> </div>
            <a href="<?php echo base_url('adminpanel/member/request')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div> <!-- ./col -->

      <div class="col-lg-3 col-xs-6">      
         <div class="small-box bg-green">
            <div class="inner">
               <h3><?=$dc_statistics['total_child']?></h3>
               <p>Total Child</p>
            </div>
            <div class="icon"> <i class="fa fa-child"></i> </div>
            <a href="<?php echo base_url('adminpanel/member')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div> 

      
      <div class="col-lg-3 col-xs-6">
         <div class="small-box bg-yellow">
            <div class="inner">
               <h3><?=$dc_statistics['total_staff']?></h3>
               <p>Total Staff</p>
            </div>
            <div class="icon"> <i class="fa fa-users"></i> </div>
            <a href="<?php echo base_url('adminpanel/staff/all')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div>

      <div class="col-lg-3 col-xs-6">
         <div class="small-box bg-red">
            <div class="inner">
               <h3><?=$dc_statistics['total_attendance_today']?></h3>
               <p>Today Attendance</p>
            </div>
            <div class="icon"> <i class="fa fa-clock-o"></i> </div>
            <a href="<?php echo base_url('adminpanel/attendance/all')?>" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
         </div>
      </div> <!-- ./col -->
      
   </div> <!-- ./row -->




   <?php /*

   <!-- Info boxes -->
   <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-list"></i></span>
            <div class="info-box-content">
               <span class="info-box-text">Total Applicant</span>
               <span class="info-box-number" style="font-size: 40px;"><?=$dc_statistics['total_application']?></span>
            </div>
            <div><a href="" class="btn btn-block btn-xs btn-primary">Details</a></div>
            <!-- /.info-box-content -->
         </div>
         <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-child"></i></span>
            <div class="info-box-content">
               <span class="info-box-text">Total Child</span>
               <span class="info-box-number" style="font-size: 40px;"><?=$dc_statistics['total_child']?></span>
            </div>
            <!-- /.info-box-content -->
         </div>
         <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <!-- fix for small devices only -->
      <div class="clearfix visible-sm-block"></div>

      <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>
            <div class="info-box-content">
               <span class="info-box-text">Total Staff</span>
               <span class="info-box-number" style="font-size: 40px;"><?=$dc_statistics['total_staff']?></span>
            </div>
            <!-- /.info-box-content -->
         </div>
         <!-- /.info-box -->
      </div>
      <!-- /.col -->

      <div class="col-md-3 col-sm-6 col-xs-12">
         <div class="info-box">
            <span class="info-box-icon bg-green"><i class="fa fa-random"></i></span>
            <div class="info-box-content">
               <span class="info-box-text">Today Attendance</span>
               <span class="info-box-number" style="font-size: 40px;"><?=$dc_statistics['total_attendance_today']?></span>
            </div>
            <!-- /.info-box-content -->
         </div>
         <!-- /.info-box -->
      </div>
      <!-- /.col -->
   </div> <!-- /.row -->

   */ ?>




</section>
<!-- /.content -->
