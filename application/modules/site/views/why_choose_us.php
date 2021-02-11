     <!-- CONTENT AREA -->
    <div class="content-area">

        <!-- BREADCRUMBS -->
        <section class="page-section breadcrumbs text-center" style="background-image:url(<?=base_url()?>fwedget/assets/img/slide-1.jpg);">
            <div class="container">
                <div class="page-header">
                    <h1><?=$meta_title?></h1>
                </div>
                <ul class="breadcrumb">
                    <li><a href="<?=base_url()?>">Home</a></li>
                    <li><a href="#"><?=$meta_title?></a></li>
                </ul>
            </div>
        </section>
        <!-- /BREADCRUMBS -->

        <section class="page-section testimonials">
            <div class="container">
                    <div class="row">
                        <div class="col-md-8 wow fadeInLeft" data-wow-offset="200" data-wow-delay="100ms">
                            <h2 class="section-title text-left">
                                <span><?=$info->name?></span>
                            </h2>
                            <p><?=$info->description;?> </p>
                           
                        </div>
                        <div class="col-md-4 wow fadeInRight" data-wow-offset="200" data-wow-delay="300ms">
                            <?php 
                                 $img_path = base_url().'service_img/';
                                 if($info->image_file != NULL){
                                    $src= $img_path.$info->image_file;
                                    echo "<div class='img-box'><img src='$src' alt='$info->name' class='img-responsive'></div>";
                                 }
                            ?>
                          
                        </div>
                    </div>   
            </div>
        </section>
