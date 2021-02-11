<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title><?=$meta_title;?> | <?=$domain_title;?></title>
   <!-- Tell the browser to be responsive to screen width -->
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
   <!-- Bootstrap 3.3.6 -->
   <link rel="stylesheet" href="<?=base_url();?>awedget/assets/bootstrap/css/bootstrap.min.css">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
   <!-- Ionicons -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
   <!-- daterange picker -->
   <link rel="stylesheet" href="<?=base_url();?>awedget/assets/plugins/daterangepicker/daterangepicker.css">
   <!-- bootstrap datepicker -->
   <link rel="stylesheet" href="<?=base_url();?>awedget/assets/plugins/datepicker/datepicker3.css">
   <!-- iCheck for checkboxes and radio inputs -->
   <link rel="stylesheet" href="<?=base_url();?>awedget/assets/plugins/iCheck/all.css">
   <!-- Bootstrap time Picker -->
   <link rel="stylesheet" href="<?=base_url();?>awedget/assets/plugins/timepicker/bootstrap-timepicker.min.css">
   <!-- Select2 -->
   <link rel="stylesheet" href="<?=base_url();?>awedget/assets/plugins/select2/select2.min.css">
   <!-- DataTables -->
   <link rel="stylesheet" href="<?=base_url();?>awedget/assets/plugins/datatables/dataTables.bootstrap.css">

   <!-- <link rel="stylesheet" href="<?=base_url();?>awedget/assets/plugins/texteditor/editor.css"> -->
   <!-- bootstrap wysihtml5 - text editor -->
   <link rel="stylesheet" href="<?=base_url();?>awedget/assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

   <!-- Theme style -->
   <link rel="stylesheet" href="<?=base_url();?>awedget/assets/css/AdminLTE.min.css">
   <!-- AdminLTE Skins. Choose a skin from the css/skins
   folder instead of downloading all of them to reduce the load. -->
   <link rel="stylesheet" href="<?=base_url();?>awedget/assets/css/skins/_all-skins.min.css">
   <link rel="stylesheet" href="<?=base_url();?>awedget/assets/css/custom.css">

   <!-- jQuery 2.2.3 -->
   <script src="<?=base_url();?>awedget/assets/plugins/jQuery/jquery-2.2.3.min.js"></script> 

   <link href="<?=base_url();?>awedget/assets/plugins/jquery-validation/demo/css/screen.css" rel="stylesheet">
   <script src="<?=base_url();?>awedget/assets/plugins/jquery-validation/dist/jquery.validate.js"></script>
   <script type="text/javascript">var hostname='<?php echo base_url();?>';</script>

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
   <!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
   <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
   <div class="wrapper">

      <header class="main-header">
         <a href="<?=base_url('adminpanel/dashboard');?>" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>DC</b></span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Admin</b> Panel</span>
         </a>
         <nav class="navbar navbar-static-top">
            <a href="javascript:void();" class="sidebar-toggle" data-toggle="offcanvas" role="button">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
            </a>

            <div class="navbar-custom-menu">
               <ul class="nav navbar-nav">
               <?php if($this->ion_auth->in_group(array('dc_admin'))){ ?>
                  <?php if($this->session->userdata('is_superadmin')){ ?> 
                  <li><a href="<?=base_url('adminpanel/day_care/admin_login')?>" class="btn btn-danger">Return to Master Dashboard</a></li>
                  <?php } ?>
               <?php } ?>

                  <!-- <li><a target="_blank" href="<?=base_url()?>" class="btn btn-success">Visit Website</a></li> -->

                  <li class="dropdown user user-menu">
                     <a href="javascript:void();" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?=base_url('awedget/assets/img/no-avatar.jpeg');?>" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?=ucwords($this->session->userdata('first_name').' '.$this->session->userdata('last_name'));?></span>
                     </a>
                     <ul class="dropdown-menu">
                        <li class="user-header">
                           <img src="<?=base_url('awedget/assets/img/no-avatar.jpeg');?>" class="img-circle" alt="User Image">
                           <p><small>Member since <strong><?=date('j F, Y', $this->session->userdata('created_on'));?></strong></small> </p>
                        </li>
                        <li class="user-footer">
                           <div class="pull-left">
                              <a href="<?=base_url('adminpanel/my_profile');?>" class="btn btn-default btn-flat">Profile</a>
                           </div>
                           <div class="pull-right">
                              <a href="<?=base_url('adminpanel/logout');?>" class="btn btn-default btn-flat">Sign Out</a>
                           </div>
                        </li>
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
      </header>

      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
         <section class="sidebar">

            <ul class="sidebar-menu">
               <li class="header" style="text-align: center; text-transform: uppercase;"><?=$user_group?></li>

               <li class="treeview <?=backend_activate_menu_class('dashboard');?>"> <a href="<?=base_url('adminpanel/dashboard');?>"> <i class="fa fa-dashboard"></i> <span>Dashboard</span></a> </li>             

               <?php if ($this->ion_auth->in_group(array('dc_admin'))){ ?>
               <li class="treeview <?=backend_activate_menu_class('member');?>">
                  <a href="javascript:void();">
                     <i class="fa fa-users"></i> <span>Members</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="<?=base_url('adminpanel/member');?>"><i class="fa fa-circle-o"></i> Member List</a></li>
                     <li><a href="<?=base_url('adminpanel/member/request');?>"><i class="fa fa-circle-o"></i> Member Waiting List</a></li>
                     <li><a href="<?=base_url('adminpanel/member/completed');?>"><i class="fa fa-circle-o"></i> Member Completed List</a></li>
                  </ul>
               </li>

               <li class="treeview <?=backend_activate_menu_class('budget');?>">
                  <a href="javascript:void();">
                     <i class="fa fa-users"></i> <span>Budget</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
                  </a>
                  <ul class="treeview-menu">              
                     <li><a href="<?=base_url('adminpanel/budget/monthly_demand');?>"><i class="fa fa-circle-o"></i> Monthly Demand</a></li>
                     <li><a href="<?=base_url('adminpanel/budget/advance_bill');?>"><i class="fa fa-circle-o"></i> Advance Bill</a></li>
                  </ul>
               </li>               
               
               <li class="treeview <?=backend_activate_menu_class('attendance');?>">
                  <a href="javascript:void();">
                     <i class="fa fa-users"></i> <span>Attendance</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
                  </a>
                  <ul class="treeview-menu">              
                     <li><a href="<?=base_url('adminpanel/attendance/today');?>"><i class="fa fa-circle-o"></i> Today Attendance</a></li>
                     <li><a href="<?=base_url('adminpanel/attendance/all');?>"><i class="fa fa-circle-o"></i> All Attendance</a></li>
                     <li><a href="<?=base_url('adminpanel/attendance/report');?>"><i class="fa fa-circle-o"></i> Attendance Report</a></li>
                     <!-- <li><a href="<?=base_url('adminpanel/attendance/today');?>"><i class="fa fa-circle-o"></i> Today Attendance</a></li> -->
                  </ul>
               </li>

               <li class="<?=backend_activate_menu_class('event');?>"><a href="<?php echo base_url('adminpanel/event/all');?>"><i class="fa fa-circle-o"></i> <span>Event Manage</span></a></li>
               <li class="<?=backend_activate_menu_class('gallery');?>"><a href="<?php echo base_url('adminpanel/gallery/all');?>"><i class="fa fa-circle-o"></i> <span>Gallery Image</span></a></li> 

               <li class="<?=backend_activate_menu_class('staff');?>"><a href="<?php echo base_url('adminpanel/staff');?>"><i class="fa fa-book"></i> <span>Staff List</span></a></li>
               <li class="<?=backend_activate_menu_class('day_care');?>"><a href="<?php echo base_url('adminpanel/day_care/my_day_care_center');?>"><i class="fa fa-book"></i> <span>Day Care Information</span></a></li>  

               <?php } ?>

               <?php if ($this->ion_auth->in_group(array('admin'))){ ?>
               <li class="<?=backend_activate_menu_class('day_care');?>"><a href="<?php echo base_url('adminpanel/day_care');?>"><i class="fa fa-th"></i> <span>Day Care Center</span></a></li>

               <li class="<?=backend_activate_menu_class('day_care_others');?>"><a href="<?php echo base_url('adminpanel/day_care_others');?>"><i class="fa fa-th"></i> <span>Day Care Others</span></a></li>

               <li class="<?=backend_activate_menu_class('doctors');?>"><a href="<?php echo base_url('adminpanel/doctors');?>"><i class="fa fa-th"></i> <span>Doctors</span></a></li>

               <li class="treeview <?=backend_activate_menu_class('manage_user');?>">
                  <a href="javascript:void();">
                     <i class="fa fa-users"></i> <span>Manage Users</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span>
                  </a>
                  <ul class="treeview-menu">
                     <li><a href="<?=base_url('adminpanel/manage_user/all');?>"><i class="fa fa-circle-o"></i> User List</a></li>
                     <!-- <li><a href="<?=base_url('adminpanel/manage_user/add');?>"><i class="fa fa-circle-o"></i> Add User</a></li> -->
                  </ul>
               </li>               

               <?php } ?>

            </ul>
         </section>
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">