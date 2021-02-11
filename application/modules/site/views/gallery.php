 <style type="text/css">
     .page-title{
        margin-bottom: 40px;
     }

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
 <!-- CONTENT AREA -->
    <div class="content-area">

        <section class="page-title" style="background-image:url(<?=base_url();?>fwedget/images/background/2.jpg);">
            <div class="auto-container">
                <h1><?=$meta_title?></h1>

            </div>

        </section>

        <!-- PAGE -->
        <section class="gallery-section boxed-style" id="gallery-section">

        <div class="auto-container">
        
            <!--Section Title-->
            <div class="sec-title">
                
            </div>
            
            <!--Filter-->
                <div class="filters">
                    <ul class="filter-tabs clearfix anim-3-all">
                        <li class="filter" data-role="button" data-filter="all">সকল</li>
                         <?php foreach ($category as $item) {?>                
                            <li class="filter" data-role="button" data-filter=".<?=$item->slug?>"><?=$item->cat_name?></li>
                        <?php } ?>
                    </ul>
                </div>
        </div>

	        <div class="images-container auto-container">
	            <div class="filter-list row clearfix">
	                
	                <?php foreach ($gallery as $item): ?>

	                    <?php 
	                     $img_path = base_url().'assets/images/gallery_img/';
	                         if($item->image_file != NULL){
	                            $src= $img_path.$item->image_file;
	                         }
	                    ?>
	                     <!--Image Box-->
	                    <div class="col-md-3 col-sm-4 col-xs-12 image-box mix mix_all <?=$item->category_id?>">
	                        <div class="inner-box">
	                            <figure class="image"><a href="<?=$src?>" class="lightbox-image"><img src="<?=$src?>" alt=""></a></figure>
	                            <a href="<?=$src?>" class="zoom-btn lightbox-image"><span class="icon flaticon-add30"></span></a>
	                        </div>
	                    </div>
	                        
	                <?php endforeach ?>

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


