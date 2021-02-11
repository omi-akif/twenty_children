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
        <!-- <section class="page-section testimonials">
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
        </section> -->


    <section class="page-section testimonials">
        <div class="container">
            <div class="row">
                <div class="content-column col-md-8 col-sm-12 col-xs-12">
                    
                        <div class="sec-title">
                            <h3 class="section-title text-left">
                                <span>তত্ত্ব সম্পর্কীয়</span>
                            </h3>
                            <p style="text-align: justify;">
							আমরা সবসময় শিশুদের সুরক্ষায় বিশ্বাসী। যে কারণে আমরা সবসময় প্রতিটি সন্তানের যথাযথ যত্ন বজায় রাখি। প্রতিটি শিশু পিতামাতার জন্য মূল্যবান। আমরা সর্বদা তাদের চিন্তাকে সম্মান করি এবং প্রতিটি সন্তানের জন্য সর্বোচ্চ সুরক্ষা স্তর রাখি।
 							<br><br>                                   
                            আমাদের শিক্ষকরা সর্বদা মায়েদের যত্নের মতো প্রতিটি সন্তানের যত্ন নিচ্ছেন। শিশুরা সবসময় তাদের পরিবারের মতো পরিবেশে থাকে।
                            <br>আমরা সবসময় শিশুদের সুরক্ষায় বিশ্বাসী। যে কারণে আমরা সবসময় প্রতিটি সন্তানের যথাযথ যত্ন বজায় রাখি। প্রতিটি শিশু পিতামাতার জন্য মূল্যবান। আমরা সর্বদা তাদের চিন্তাকে সম্মান করি এবং প্রতিটি সন্তানের জন্য সর্বোচ্চ সুরক্ষা স্তর রাখি।
                            <br><br>                                   
                            আমাদের শিক্ষকরা সর্বদা মায়েদের যত্নের মতো প্রতিটি সন্তানের যত্ন নিচ্ছেন। শিশুরা সবসময় তাদের পরিবারের মতো পরিবেশে থাকে।
                            </p>
                            <!-- <div class="separater"></div> -->
                        </div>
                    
                </div>
                <div class="image-column col-md-4 col-sm-12 col-xs-12">
                    <div class="image">
                        
                        <img src="<?=base_url();?>assets/images/article_img/about-image-03.png" alt="" />

                    </div>
                </div>
            </div>
        </div>
    </section>


    </div>
    <!-- /CONTENT AREA -->


