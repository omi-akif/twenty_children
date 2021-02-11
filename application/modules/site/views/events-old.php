<style type="text/css">
    .event-block .inner-box .content-column .inner-column{
        padding-top: 0px;
        text-align: justify;
    }

    ul.post-info{
        font-size: 10px;
    }
/*
    .page-title{
        margin-bottom: 40px;
     }*/

     .gallery-section .image-box .zoom-btn{
        position:absolute;
        left:0px;
        top:0px;
        width:100%;
        height:100%;
        display:block;
        text-align:center;
        font-size:42px;
        color:#DFBB6D;
        outline:3px solid #DFBB6D;
        outline-offset:-20px;
        transform:scale(0,0);
        -webkit-transform:scale(0,0);
        -ms-transform:scale(0,0);
        -o-transform:scale(0,0);
        -moz-transform:scale(0,0);
        transition:all 0.5s ease;
        -moz-transition:all 0.5s ease;
        -webkit-transition:all 0.5s ease;
        -ms-transition:all 0.5s ease;
        -o-transition:all 0.5s ease;
    }

    .gallery-section .image-box .zoom-btn .icon{
        position:relative;
        display:inline-block;
        line-height:50px;
        top:46%;
        margin-top:-25px;
    }

    .gallery-section .image-box .inner-box:hover .zoom-btn{
        background-color:rgba(255,255,255,0.70);
        transform:scale(1,1);
        -webkit-transform:scale(1,1);
        -ms-transform:scale(1,1);
        -o-transform:scale(1,1);
        -moz-transform:scale(1,1);
    }

    .gallery-section .filter-tabs {
        position: relative;
        margin-bottom: 30px;
        text-align: center;
    }

    .gallery-section .filter-tabs li{
        position:relative;
        display:inline-block;
        line-height:20px;
        padding:5px 0px;
        min-width:80px;
        text-align:center;
        color:#353535;
        font-weight: 900;
        margin:0px 5px 10px;
        border-top:1px solid #ec9600;
        border-bottom:1px solid #ec9600;
        cursor:pointer;
        transition:all 0.5s ease;
        -moz-transition:all 0.5s ease;
        -webkit-transition:all 0.5s ease;
        -ms-transition:all 0.5s ease;
        -o-transition:all 0.5s ease;    
    }

    .gallery-section .filter-tabs li.active{
        border-color:#e21c3f;
        color:#ffffff;
        background:#e21c3f; 
    }
    .image-box{
        display: none;
    }

</style>
<!--Page Title-->
    <section class="page-title" style="background-image:url(<?=base_url();?>fwedget/images/background/2.jpg);">
    	<div class="auto-container">
        	<!-- <h1>ইভেন্টস</h1> -->
            <h1><?=$meta_title?></h1>

        </div>
    </section>
    <!--End Page Title-->
    
    <!--Events Page Section-->
    <section class="gallery-section boxed-style">
    	<div class="auto-container">
        <!--Filter-->
            <div class="filters">
                <ul class="filter-tabs clearfix anim-3-all">
                    <li class="filter active" data-role="button" data-filter="all">সকল</li>
                                     
                    <li class="filter" data-role="button" data-filter=".day_care1">দিবা যত্ন কেন্দ্র ১</li>
                                
                    <li class="filter" data-role="button" data-filter=".day_care2">দিবা যত্ন কেন্দ্র ২</li>

                    <li class="filter" data-role="button" data-filter=".day_care3">দিবা যত্ন কেন্দ্র ৩</li>

                    <li class="filter" data-role="button" data-filter=".day_care4">দিবা যত্ন কেন্দ্র ৪</li>

                    <li class="filter" data-role="button" data-filter=".day_care5">দিবা যত্ন কেন্দ্র ৫</li>

                    <li class="filter" data-role="button" data-filter=".day_care6">দিবা যত্ন কেন্দ্র ৬</li>

                    <li class="filter" data-role="button" data-filter=".day_care7">দিবা যত্ন কেন্দ্র ৭</li>

                    <li class="filter" data-role="button" data-filter=".day_care8">দিবা যত্ন কেন্দ্র ৮</li>

                    <li class="filter" data-role="button" data-filter=".day_care9">দিবা যত্ন কেন্দ্র ৯</li>

                    <li class="filter" data-role="button" data-filter=".day_care10">দিবা যত্ন কেন্দ্র ১০</li>

                    <li class="filter" data-role="button" data-filter=".day_care11">দিবা যত্ন কেন্দ্র ১১</li>

                    <li class="filter" data-role="button" data-filter=".day_care12">দিবা যত্ন কেন্দ্র ১২</li>

                    <li class="filter" data-role="button" data-filter=".day_care13">দিবা যত্ন কেন্দ্র ১৩</li>

                    <li class="filter" data-role="button" data-filter=".day_care14">দিবা যত্ন কেন্দ্র ১৪</li>

                    <li class="filter" data-role="button" data-filter=".day_care15">দিবা যত্ন কেন্দ্র ১৫</li>

                    <li class="filter" data-role="button" data-filter=".day_care16">দিবা যত্ন কেন্দ্র ১৬</li>

                    <li class="filter" data-role="button" data-filter=".day_care17">দিবা যত্ন কেন্দ্র ১৭</li>

                    <li class="filter" data-role="button" data-filter=".day_care18">দিবা যত্ন কেন্দ্র ১৮</li>

                    <li class="filter" data-role="button" data-filter=".day_care19">দিবা যত্ন কেন্দ্র ১৯</li>

                    <li class="filter" data-role="button" data-filter=".day_care20">দিবা যত্ন কেন্দ্র ২০</li>
                </ul>
            </div>
           </div> 

           <div class="images-container auto-container">
                <div class="filter-list row clearfix">
                        <!--Image Box-->
                    <div class="col-md-12 col-sm-12 col-xs-12 image-box mix mix_all day_care1" style="display: inline-block;">
                        <div class="event-block">
                            <div class="inner-box clearfix">
                                <!--Image Column-->
                                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                                    <div class="image">
                                        <img src="<?=base_url();?>assets/images/event_img/news-1.png" alt="" />

                                         
                                    </div>
                                </div>
                                <!--Content Column-->
                                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                                    <div class="inner-column">
                                        <div class="content">
                                            <!-- <div class="post-date">20<span>nov</span></div> -->
                                            <h3><a href="<?=base_url();?>event-details">ইভেন্ট ১</a></h3>

                                            <ul class="post-info">
                                                <li><span class="icon fa fa-clock-o"></span>১৬ই সেপ্টেম্বর ২০১৯,(৮.৩০ - ১২.৩০)</li>
                                                <li><span class="icon fa fa-map-marker"></span>ঢাকা, বাংলাদেশ</li>
                                            </ul>
                                            <div class="text">২০টি দিবাযত্ন কেন্দ্র প্রকল্প সরকার কর্তৃক গৃহীত সময়োপযোগী বিভিন্ন প্রকল্প গুলর মধ্যে একটি। এই প্রকল্পের মাধ্যমে কর্মজীবী মহিলা রা যেমন কাজের সুবিধা থাকবে তেমনি বাচ্চার সুরক্ষা নিয়েও থাকবে চিন্তামুক্ত।</div>
                                            <a href="<?=base_url();?>event-details" class="view-detail">আরো পড়ুন <span class="icon fa fa-angle-double-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!--Image Box-->
                    <div class="col-md-12 col-sm-12 col-xs-12 image-box mix mix_all day_care2" style="display: inline-block;">
                        <div class="event-block">
                            <div class="inner-box clearfix">
                    <!--Image Column-->
                            <div class="image-column col-md-6 col-sm-12 col-xs-12">
                                <div class="image">
                                    <img src="<?=base_url();?>assets/images/event_img/news-2.png" alt="" />
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-12 col-xs-12">
                                <div class="inner-column">
                                    <div class="content">
                                        <!-- <div class="post-date">06<span>dec</span></div> -->
                                        <h3><a href="<?=base_url();?>event-details">ইভেন্ট ১</a></h3>
                                        <ul class="post-info">
                                            <li><span class="icon fa fa-clock-o"></span>১৬ই সেপ্টেম্বর ২০১৯,(৮.৩০ - ১২.৩০)</li>
                                            <li><span class="icon fa fa-map-marker"></span>ঢাকা, বাংলাদেশ</li>
                                        </ul>
                                        <div class="text">২০টি দিবাযত্ন কেন্দ্র প্রকল্প সরকার কর্তৃক গৃহীত সময়োপযোগী বিভিন্ন প্রকল্প গুলর মধ্যে একটি। এই প্রকল্পের মাধ্যমে কর্মজীবী মহিলা রা যেমন কাজের সুবিধা থাকবে তেমনি বাচ্চার সুরক্ষা নিয়েও থাকবে চিন্তামুক্ত।</div>
                                        <a href="<?=base_url();?>event-details" class="view-detail">আরো পড়ুন <span class="icon fa fa-angle-double-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12 col-xs-12 image-box mix mix_all day_care3" style="display: inline-block;">
                        <div class="event-block">
                            <div class="inner-box clearfix">
                                <!--Image Column-->
                                <div class="image-column col-md-6 col-sm-12 col-xs-12">
                                    <div class="image">
                                        <img src="<?=base_url();?>assets/images/event_img/news-3.png" alt="" />
                                    </div>
                                </div>
                                <!--Content Column-->
                                <div class="content-column col-md-6 col-sm-12 col-xs-12">
                                    <div class="inner-column">
                                        <div class="content">
                                            <!-- <div class="post-date">20<span>nov</span></div> -->
                                            <h3><a href="<?=base_url();?>event-details">ইভেন্ট ১</a></h3>

                                            <ul class="post-info">
                                                <li><span class="icon fa fa-clock-o"></span>১৬ই সেপ্টেম্বর ২০১৯,(৮.৩০ - ১২.৩০)</li>
                                                <li><span class="icon fa fa-map-marker"></span>ঢাকা, বাংলাদেশ</li>
                                            </ul>
                                            <div class="text">২০টি দিবাযত্ন কেন্দ্র প্রকল্প সরকার কর্তৃক গৃহীত সময়োপযোগী বিভিন্ন প্রকল্প গুলর মধ্যে একটি। এই প্রকল্পের মাধ্যমে কর্মজীবী মহিলা রা যেমন কাজের সুবিধা থাকবে তেমনি বাচ্চার সুরক্ষা নিয়েও থাকবে চিন্তামুক্ত।</div>
                                            <a href="<?=base_url();?>event-details" class="view-detail">আরো পড়ুন <span class="icon fa fa-angle-double-right"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Image Box-->
                    <div class="col-md-12 col-sm-12 col-xs-12 image-box mix mix_all day_care4" style="display: inline-block;">
                        <div class="event-block">
                            <div class="inner-box clearfix">
                    <!--Image Column-->
                            <div class="image-column col-md-6 col-sm-12 col-xs-12">
                                <div class="image">
                                    <img src="<?=base_url();?>assets/images/event_img/news-5.png" alt="" />
                                </div>
                            </div>
                            <!--Content Column-->
                            <div class="content-column col-md-6 col-sm-12 col-xs-12">
                                <div class="inner-column">
                                    <div class="content">
                                        <!-- <div class="post-date">06<span>dec</span></div> -->
                                        <h3><a href="<?=base_url();?>event-details">ইভেন্ট ১</a></h3>
                                        <ul class="post-info">
                                            <li><span class="icon fa fa-clock-o"></span>১৬ই সেপ্টেম্বর ২০১৯,(৮.৩০ - ১২.৩০)</li>
                                            <li><span class="icon fa fa-map-marker"></span>ঢাকা, বাংলাদেশ</li>
                                        </ul>
                                        <div class="text">২০টি দিবাযত্ন কেন্দ্র প্রকল্প সরকার কর্তৃক গৃহীত সময়োপযোগী বিভিন্ন প্রকল্প গুলর মধ্যে একটি। এই প্রকল্পের মাধ্যমে কর্মজীবী মহিলা রা যেমন কাজের সুবিধা থাকবে তেমনি বাচ্চার সুরক্ষা নিয়েও থাকবে চিন্তামুক্ত।</div>
                                        <a href="<?=base_url();?>event-details" class="view-detail">আরো পড়ুন <span class="icon fa fa-angle-double-right"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
            <!-- <div class="event-block">
                <div class="inner-box clearfix">
                   
                    <div class="image-column col-md-6 col-sm-12 col-xs-12">
                        <div class="image">
                            <img src="<?=base_url();?>fwedget/images/resource/news-3.jpg" alt="" />
                        </div>
                    </div>
                    
                    <div class="content-column col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-column">
                        	<div class="content">
                               
                                <h3><a href="<?=base_url();?>event-details">Five passengers set sail that day</a></h3>
                                <ul class="post-info">
                                    <li><span class="icon fa fa-clock-o"></span>16 September, 2019, 8.30am - 12.30pm</li>
                                    <li><span class="icon fa fa-map-marker"></span>Dhaka, Bangladesh</li>
                                </ul>
                                <div class="text">Way we all be came english Brady Bunch these to days artists bean needs your face on up to the east side to a deluxe pulled apartment in the sky William Buck Rogers are blown out of their trajectory into an orbit which freezes.</div>
                                <a href="<?=base_url();?>event-details" class="view-detail">View Details <span class="icon fa fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            
           
            <!-- <div class="event-block">
                <div class="inner-box clearfix">
                    
                    <div class="image-column col-md-6 col-sm-12 col-xs-12">
                        <div class="image">
                            <img src="<?=base_url();?>fwedget/images/resource/news-4.jpg" alt="" />
                        </div>
                    </div>
                    
                    <div class="content-column col-md-6 col-sm-12 col-xs-12">
                        <div class="inner-column">
                        	<div class="content">
                                
                                <h3><a href="<?=base_url();?>event-details">Straight ahead and on the track</a></h3>
                                <ul class="post-info">
                                    <li><span class="icon fa fa-clock-o"></span> 16 September, 2019, 8.30am - 12.30pm</li>
                                    <li><span class="icon fa fa-map-marker"></span>Dhaka, Bangladesh</li>
                                </ul>

                                <div class="text">Way we all be came english Brady Bunch these to days artists bean needs your face on up to the east side to a deluxe pulled apartment in the sky William Buck Rogers are blown out of their trajectory into an orbit which freezes.</div>
                                <a href="<?=base_url();?>event-details" class="view-detail">View Details <span class="icon fa fa-angle-double-right"></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             -->
            
            
            <!--Styled Pagination-->
                <!-- <div class="styled-pagination text-center">
                    <ul class="clearfix">
                        <li class="prev"><a href="javascript:void()"><span class="fa fa-angle-double-left"></span></a></li>
                        <li><a href="javascript:void()">1</a></li>
                        <li><a href="javascript:void()" class="active">2</a></li>
                        <li><a href="javascript:void()">3</a></li>
                        <li class="next"><a href="javascript:void()"><span class="fa fa-angle-double-right"></span></a></li>
                    </ul>
                </div> -->
            <!--End Styled Pagination-->
            
        </div>
    </section>
    <!--End Events Page Section-->
    
    <!--Call To Action Two-->
    <section class="call-to-action-two style-two alternate" style="background-image:url(<?=base_url();?>fwedget/images/background/5.jpg);">
    	<div class="auto-container">
        	<div class="row clearfix">
            	<!--Title Column-->
            	<div class="title-column col-md-8 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<div class="icon-box">
                        	<span class="icon"><img src="<?=base_url();?>fwedget/images/resource/hand-icon.png" alt="" /></span>
                        </div>
                        <h2>আমাদের দিবা যত্ন কেন্দ্রে আপনার শিশুকে ভর্তি করুন</h2>
                        <div class="text">আমরা প্রতিদিন আপনার সন্তানের জন্য উন্নত শিক্ষা সরবরাহ করে থাকি</div>
                    </div>
                </div>
                <!--Btn Column-->
                <div class="btn-column col-md-4 col-sm-12 col-xs-12">
                	<a href="<?=base_url();?>registration" class="theme-btn btn-style-three">রেজিস্ট্রেশন</a>
                </div>
            </div>
        </div>
    </section>
    <!--End Call To Action Two