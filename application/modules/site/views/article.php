 <style type="text/css">
     .page-title{
        margin-bottom: 40px;
     }
 </style>
 <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- BREADCRUMBS -->
        <!-- <section class="page-section breadcrumbs text-center" style="background-image:url(<?=base_url()?>article_img/slide-1.png);">
            <div class="container">
                <div class="page-header">
                    <h1><?=$meta_title?></h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="<?=base_url()?>">Home</a></li>
                    <li><a href="#"><?=$meta_title?></a></li>
                </ul>
            </div>
        </section> -->
        <!-- /BREADCRUMBS -->

        <section class="page-title" style="background-image:url(<?=base_url();?>fwedget/images/background/2.jpg);">
            <div class="auto-container">
                <h1><?=$meta_title?></h1>

            </div>

        </section>

        <!-- PAGE -->
        <section class="page-section testimonials">
            <div class="container">
                <div class="row">
                    <div class="col-md-<?php if(!empty ($info->image_file )){ echo 8; }else{ echo 12;} ?> wow fadeInLeft" data-wow-offset="200" data-wow-delay="100ms">
                        <h2 class="section-title text-left">
                            <span><?=$info->name?></span>
                        </h2>
                        <p><?=$info->description;?> </p>
                    </div>
                    <div class="col-md-4 wow fadeInRight" data-wow-offset="200" data-wow-delay="300ms">
                        <?php 
                             $img_path = base_url().'article_img/';
                             if($info->image_file != NULL){
                                $src= $img_path.$info->image_file;
                                echo "<div class='img-box'><img src='$src' alt='$info->name' class='img-responsive'></div>";
                             }
                        ?>
                    </div>
                </div>   
            </div>
        </section>


    <!-- <section class="about-section">
        <div class="auto-container">
            <div class="row clearfix">
                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <h2>About Our DayCare</h2>
                            <div class="separater"></div>
                        </div>
                        <div class="text">
                            <p>Be our old Lasalle ran great those were the days well we're moving on up to the east side to a deluxe apartment in the sky today still wanted.</p>
                        </div>
                        <a href="<?=base_url().'article/about-our-daycare'?>" class="theme-btn btn-style-two">Read More</a>
                    </div>
                </div>
                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                    <div class="image">
                        <img src="<?=base_url();?>fwedget/images/resource/about.png" alt="" />
                    </div>
                </div>
            </div>
        </div>
    </section> -->


    </div>
    <!-- /CONTENT AREA -->


