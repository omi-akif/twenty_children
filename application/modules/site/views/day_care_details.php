<style type="text/css">
	.gallery
	{
		display: inline-block;
		margin-top: 20px;
	}
</style>
<div class="row">
	<div class="col-md-9 main-content">

		<?php foreach ($day_care_detail as $item) {?>                

			<section class="introduce">
				<h4 class="heading-int"><?=$item->title?></h4>
				<p><?=nl2br($item->description)?></p>
			</section>
		<?php } ?>

		<!-- <section class="contact-us">
			<h4 class="heading-int">যোগাযোগ</h4>
			<strong>ঠিকানা:</strong><br>
			১৯-বি / ২-সি এবং ২-ডি, ব্লক-এফ, ৫ তলা, রিং রোড,ঢাকা -১২০৭<br>

			<strong>ফোন:</strong><br>
			০১৯৭০৭৭৬৬০৭<br>

			<strong>ইমেইল:</strong><br>
			info@daycare.com<br><br>

		</section> -->

		<section class="contact-us">
			<h4 class="heading-int">যোগাযোগ</h4>
			<i class="pull-left fa fa-home" ></i>
			<p><?=$item->address?> </p>
         <div class="clearfix"></div>
			<i class="pull-left fa fa-phone"></i>
			<p><?=$item->mobile_no?> </p>
         <div class="clearfix"></div>
			<i class="pull-left fa fa-envelope-o"></i>
			<p><?=$item->email?> </p>

		</section>

		<section class="events-heading" style="margin-top: 15px;">
			<div class="row">
				<div class="col-md-12">
					<h4 class="heading-int">আসন্ন ইভেন্টস সমূহ</h4>
				</div>
			</div>
		</section>

		<section class="events" style="">
			<div class="row" style="padding-bottom: 15px;">
				<div class="col-md-4">
					<h4 class="heading-int"></h4>

					<img class="img-responsive details-event" alt="" src="<?=base_url();?>assets/images/event_img/bangabondhu.jpg"/>
				</div>
				<div class="col-md-8 heading-details">
					<h4 class="">জাতীয় শিশু দিবস ১৭ মার্চ</h4>
					<p>আসছে ১৭ই মার্চ। জাতীয় শিশু দিবস। প্রতি বছরের মতো এ বছরও শিশুদের নিয়ে নানা আয়োজনে পালন করা হবে দিবসটিতে।
জাতীয় শিশু দিবস প্রতি বছর পালিত হয় জাতির জনক বঙ্গবন্ধু শেখ মুজিবুর রহমানের জন্মদিনে।
শিশু দিবস পৃথিবীর বিভিন্ন দেশে বিভিন্ন সময় পালিত হয়। শিশু দিবস পালনকারী প্রথম দেশ তুরস্ক। তুরস্কের অধিবাসীরা শিশু দিবস প্রথম পালন করেন ২৩শে এপ্রিল, ১৯২০ সালে।<a style="font-weight: 700" href="<?=base_url();?>event-details">বিস্তারিত....</a></p>
				</div>	
			</div>

<?php /*
			<div class="row" style="padding-bottom: 15px;">
				<div class="col-md-4">
					<h4 class="heading-int"></h4>

					<img class="img-responsive details-event" alt="" src="<?=base_url();?>assets/images/event_img/21.jpg"/>
				</div>
				<div class="col-md-8 heading-details">
					<h4 class="">আন্তর্জাতিক মাতৃভাষা দিবস </h4>
					<p>একুশে ফেব্রুয়ারি বাংলাদেশের জনগণের গৌরবোজ্জ্বল একটি দিন। এটি শহীদ দিবস ও আন্তর্জাতিক মাতৃভাষা দিবস হিসাবেও সুপরিচিত। বাঙালি জনগণের ভাষা আন্দোলনের মর্মন্তুদ ও গৌরবোজ্জ্বল স্মৃতিবিজড়িত একটি দিন হিসেবে চিহ্নিত হয়ে আছে। ১৯৫২ সালের এই দিনে (৮ ফাল্গুন, ১৩৫৮) বাংলাকে পূর্ব পাকিস্তানের অন্যতম রাষ্ট্রভাষা করার দাবিতে আন্দোলনরত ছাত্রদের ওপর পুলিশের গুলিবর্ষণে কয়েকজন তরুণ শহীদ হন। তাদের মধ্যে অন্যতম হলো রফিক,জব্বার,শফিউল,সালাম,বরকত সহ অনেকেই। তাই এ দিনটি শহীদ দিবস হিসেবে চিহ্নিত হয়ে আছে। ২০১০ খ্রিষ্টাব্দে জাতিসংঘ কর্তৃক গৃহীত সিদ্ধান্ত মোতাবেক প্রতিবছর একুশে ফেব্রুয়ারি বিশ্বব্যাপী আন্তর্জাতিক মাতৃভাষা দিবস পালন করা হয়। <a style="font-weight: 700" href="<?=base_url();?>">বিস্তারিত...</a></p>
				</div>	
			</div>
*/ ?>
		</section>

		<section class="introduce">
			<h4 class="heading-int">গ্যালারী</h4>

			<div class='list-group gallery'>
				<div class='col-sm-4 col-xs-6 col-md-4 col-lg-4'>
					<a class="thumbnail fancybox" rel="ligthbox" href="<?=base_url();?>assets/images/gallery_img/06.png">
						<img class="img-responsive" alt="" src="<?=base_url();?>assets/images/gallery_img/06.png"/>
						<!-- <div class='text-right'>
							<small class='text-muted'>Image Title</small>
						</div> -->
					</a>
				</div> <!-- col-6 / end -->
				<div class='col-sm-4 col-xs-6 col-md-4 col-lg-4'>
					<a class="thumbnail fancybox" rel="ligthbox" href="<?=base_url();?>assets/images/gallery_img/news-1.png">
						<img class="img-responsive" alt="" src="<?=base_url();?>assets/images/gallery_img/news-1.png"/>
						<!-- <div class='text-right'>
							<small class='text-muted'>Image Title</small>
						</div> --> 
					</a>
				</div> <!-- col-6 / end -->
				<div class='col-sm-4 col-xs-6 col-md-4 col-lg-4'>
					<a class="thumbnail fancybox" rel="ligthbox" href="<?=base_url();?>assets/images/gallery_img/news-2.png">
						<img class="img-responsive" alt="" src="<?=base_url();?>assets/images/gallery_img/news-2.png" />
						<!-- <div class='text-right'>
							<small class='text-muted'>Image Title</small>
						</div>  -->
					</a>
				</div> <!-- col-6 / end -->
				<div class='col-sm-4 col-xs-6 col-md-4 col-lg-4'>
					<a class="thumbnail fancybox" rel="ligthbox" href="<?=base_url();?>assets/images/gallery_img/news-3.png">
						<img class="img-responsive" alt="" src="<?=base_url();?>assets/images/gallery_img/news-3.png" />
						<!-- <div class='text-right'>
							<small class='text-muted'>Image Title</small>
						</div> -->
					</a>
				</div> <!-- col-6 / end -->
				<div class='col-sm-4 col-xs-6 col-md-4 col-lg-4'>
					<a class="thumbnail fancybox" rel="ligthbox" href="<?=base_url();?>assets/images/gallery_img/news-4.png">
						<img class="img-responsive" alt="" src="<?=base_url();?>assets/images/gallery_img/news-4.png" />
						<!-- <div class='text-right'>
							<small class='text-muted'>Image Title</small>
						</div> -->
					</a>
				</div> <!-- col-6 / end -->
				<div class='col-sm-4 col-xs-6 col-md-4 col-lg-4'>
					<a class="thumbnail fancybox" rel="ligthbox" href="<?=base_url();?>assets/images/gallery_img/news-5.png">
						<img class="img-responsive" alt="" src="<?=base_url();?>assets/images/gallery_img/news-5.png" />
						<!-- <div class='text-right'>
							<small class='text-muted'>Image Title</small>
						</div> -->
					</a>
				</div> <!-- col-6 / end -->
			</div> <!-- list-group / end -->

		</section>
	</div>

	<?php $this->load->view('frontend/right_side_bar'); ?>   
</div>

<script type="text/javascript">
	$(document).ready(function(){
    //FANCYBOX
    //https://github.com/fancyapps/fancyBox
    $(".fancybox").fancybox({
    	openEffect: "none",
    	closeEffect: "none"
    });
 });
</script>