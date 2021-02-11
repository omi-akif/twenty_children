 <style type="text/css">
     .page-title{
        margin-bottom: 40px;
     }
     section.page-section.testimonials{
     	margin-bottom: 20px;
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
                                <span>কার্যকলাপ সম্পর্কীয়</span>
                            </h3>
                            <!-- <p style="text-align: justify;">                                 
                            এই প্রকল্পের অধীনে ঢাকার বিভিন্ন স্থানের সর্বমোট ২০ টি দিবাযত্ন কেন্দ্র কে নিয়ে শুরু করা হয়েছে যা সরাসরি সরকারের তত্ত্বাবধানে পরিচালিত হবে
                            </p> -->
                            <b><i class="fa fa-arrow-circle-o-right"></i></b>  প্রতিটি কেন্দ্রই সরকার কর্তৃক পরিচালিত হবে। <br>
                            <b><i class="fa fa-arrow-circle-o-right"></i></b>  বাচ্চাদের সার্বক্ষনিক প্রশিক্ষন প্রাপ্ত লোক দ্বারা তত্তাবধায়ন করা এবং সঠিক ভাবে বেড়ে ওঠা নিশ্চিত করা হবে।  <br>

                            <b><i class="fa fa-arrow-circle-o-right"></i></b>  বাবা/মা’র সাথে নিয়মিত যোগাযোগ রাখা হবে <br>
                            <b><i class="fa fa-arrow-circle-o-right"></i></b>  নির্দিষ্ট সময়  অনুযায়ী  খাওয়ানো/ঘুমানোর/খেলাধুলার সুব্যবস্থা <br>
                            <b><i class="fa fa-arrow-circle-o-right"></i></b>  নির্দিষ্ট সময়ে শিশুদের কার্টুন/শিক্ষানীয় বিষয় পরিবেশন করা <br>
                            <b><i class="fa fa-arrow-circle-o-right"></i></b>  শিশুদের পরিচ্ছন্ন সুন্দর জীবন যাপনে অভ্যস্থ করা <br>
                            <b><i class="fa fa-arrow-circle-o-right"></i></b>  শিশুদের সুন্দর ভাবে কথা বলতে শিখানো <br>
                            <b><i class="fa fa-arrow-circle-o-right"></i></b>  জরুরী প্রয়োজনে ডাক্তারী সুব্যবস্থা করা <br>
                            <b><i class="fa fa-arrow-circle-o-right"></i></b>  বন্ধ/ছুটির দিনে/অতিরিক্ত সময় বাচ্চাদের রাখার সুব্যবস্থা <br>



                            <!-- <div class="separater"></div> -->
                        </div>
                    
                </div>
                <div class="image-column col-md-4 col-sm-12 col-xs-12">
                    <div class="image">
                        <img src="<?=base_url();?>assets/images/article_img/about-image-02.png" alt="" />
                        
                    </div>
                </div>
            </div>
        </div>
    </section>


    </div>
    <!-- /CONTENT AREA -->


