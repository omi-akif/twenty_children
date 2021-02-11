<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
   <title><?=$meta_title?> | <?=$domain_title?></title>

   <!-- Bootstrap -->
   <link href="<?=base_url();?>fwedget/css/bootstrap.min.css" rel="stylesheet">
   <link href="<?=base_url();?>fwedget/css/responsive.css" rel="stylesheet">
   <link href="<?=base_url();?>fwedget/plugins/fontawesome/css/font-awesome.min.css" rel="stylesheet">
   <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   <!-- <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> -->
   <link href="<?=base_url();?>fwedget/css/style.css" rel="stylesheet">

   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   <script src="<?=base_url();?>fwedget/js/bootstrap.min.js"></script>   
   <script src="<?=base_url();?>fwedget/plugins/jquery-validation/dist/jquery.validate.js">
   </script>
   <script type="text/javascript">var hostname='<?php echo base_url();?>';</script>

   <style type="text/css">
      .topright{text-align: right;border: 0px solid red;padding-right: 1px;color: white;width: 266px;}
      .topright a{color: white; font-size: 13px;}
   </style>
</head>

<body>
   <div class="container">
      <div class="row">
         <div class="col-md-12 fullbody">
            <div class="col-md-10 col-md-offset-1">

               <div class="row" style="border-bottom: 1px solid #ccc; margin-top: 0px; margin-bottom: 10px; background-color: #000;">
                  <div class="col-md-1" style="text-align: left;padding-left: 3px;border: 0px solid red;">
                     <img src="<?=base_url();?>fwedget/images/govt-logo.png" alt="logo" style="float:left; height: 35px;margin-top: 3px;">
                  </div>
                  <div class="col-md-7" style="text-align: left; padding-top: 5px; padding-left: 0px;border: 0px solid red; font-size: 12px; line-height: 17px; font-weight: bold; color: white;margin-left: -30px;">
                     ২০টি শিশু দিবাযত্ন কেন্দ্র স্থাপন প্রকল্প <br> মহিলা বিষয়ক অধিদপ্তর, মহিলা ও শিশু বিষয়ক মন্ত্রণালয়
                  </div>
                  <div class="col-md-3 topright">
                     <a href="#">ইংরেজি</a> | <a href="#">লগইন</a> | <a href="#">রেজিস্ট্রেশন</a>
                  </div>
                  <div class="col-md-1" style="float:right; padding-right: 1px; border: 0px solid red;margin-right: 0;">
                      <img class="img-responsive" src="<?=base_url();?>fwedget/images/mujib100.png" alt="mujib 100 logo" style="float:right; height: 37px; margin-top: 1px;">
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-offset-1 col-md-12 col-sm-12" style="border:0px solid red;margin: 5px 0;">
                     <a href="<?=base_url();?>">
                        <img class="img-responsive" src="<?=base_url();?>fwedget/images/logo-final3.png" alt="logo" style="height: 150px; display: block;margin-left: auto;margin-right: auto;">
                     </a>
                  </div>
                  <!-- <div class="col-md-3" style="border:0px solid green;margin: 5px 0;">
                     <img class="img-responsive" src="<?=base_url();?>fwedget/images/mujib100.png" alt="mujib 100 logo" height="50" style="float:right; height: 150px;">
                  </div> -->
               </div>

               <div class="row">
                  <div class="col-md-12" style="padding-right: 0px; padding-left: 0px;">
                     <nav class="navbar navbar-default" role="navigation">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                           <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                           </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse navbar-ex1-collapse">
                           <ul class="nav navbar-nav">
                              <li><a href="<?=base_url();?>">হোম <span class="sr-only">(current)</span></a></li>
                              <li><a href="<?=base_url()?>about-us">প্রকল্প প্রসঙ্গে</a></li>
                              <!-- <li><a href="<?=base_url()?>service">সেবা সমূহ</a></li> -->
                              <li><a href="<?=base_url()?>contact-us">যোগাযোগ</a></li>

                              <?php if(!$this->ion_auth->logged_in()) { ?>
                              <li><a href="<?=base_url()?>registration">রেজিস্ট্রেশন</a></li>
                              <li ><a href="<?=base_url()?>login" style="border-right:0px;">লগইন </a></li>
                              <?php }else{  ?>
                              <li><a href="<?=base_url()?>my-profile">প্রোফাইল</a></li>
                              <li class="remBorder"><a href="<?=base_url()?>logout" style="border-right:0px;">লগ-আউট</a></li>
                              <?php } ?>  
                           </ul>
                        </div><!-- /.navbar-collapse -->
                     </nav>
                     <?php /*
                     <nav class="navbar navbar-default">
                        <div class="navbar-header">
                           <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                              <span class="sr-only">Toggle navigation</span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                              <span class="icon-bar"></span>
                           </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                           <!-- class="active" -->
                           <ul class="nav navbar-nav">
                              <li class="active"><a href="<?=base_url();?>">হোম <span class="sr-only">(current)</span></a></li>
                              <li><a href="<?=base_url()?>about-us">আমাদের কথা</a></li>
                              <li><a href="<?=base_url()?>service">সেবা সমূহ</a></li>
                              <li><a href="<?=base_url()?>contact-us">যোগাযোগ</a></li>

                              <?php if(!$this->ion_auth->logged_in()) { ?>

                              <li><a href="<?=base_url()?>registration">রেজিস্ট্রেশন</a></li>
                              <li><a href="<?=base_url()?>login">লগইন </a></li>
                              <?php }else{  ?>

                              <li><a href="<?=base_url()?>my-profile">প্রোফাইল</a></li>

                              <li><a href="<?=base_url()?>logout">লগ-আউট</a></li>

                              <?php } ?>  
                           </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                        <!-- </div> -->
                     </nav>
                     */ ?>
                  </div>

                  <?php /*
                  <div class="col-md-3 slogan-side">
                     <div class="inner-content" style="padding-left: 5px; padding-right: 0px;">
                        <div class="row">
                           <div class="col-md-12 slogan">
                              <img style="width: 100%;" src="<?=base_url();?>fwedget/images/slogan2.png">
                              <!-- <h4 style="text-align: center; font-size: 20px; font-weight: bold;">শিশুর মানসম্মত যত্ন </h4>  -->
                           </div>
                        </div>
                     </div>
                  </div>
                  */ ?>
               </div>
               <!--header end -->