<!-- <style type="text/css">
   .carousel-indicators li{ display: none; }
</style> -->
<div class="row">
   <?php $this->load->view('frontend/right_side_bar'); ?>   
   
   <div class="col-md-9 main-content">


     <section class="introduce">
         <h4 class="heading-int">ভূমিকা</h4>
         <p style="text-align: justify;">মহিলা বিষয়ক অধিদপ্তর কর্তৃক গৃহীত ”২০টি শিশু দিবাযন্ত কেন্দ্র স্থাপন” প্রকল্পটির অধীনে যে ২০টি দিবাযন্ত কেন্দ্র স্থাপন করা হয়েছে তার অবস্থান নিম্নরুপঃ</p>
      </section>


      <!-- <section class="project">
         <h4 class="heading-int">দিবাযত্ন কেন্দ্র স্থাপন প্রকল্প</h4>
         <p style="text-align: justify;">মহিলা বিষয়ক অধিদপ্তর কর্তৃক গৃহীত ”২০টি শিশু দিবাযন্ত কেন্দ্র স্থাপন” প্রকল্পটির অধীনে যে ২০টি দিবাযন্ত কেন্দ্র স্থাপন করা হয়েছে তার অবস্থান নিম্নরুপঃ</p>

         <h4 class="lnt text-center">ঢাকায় ১০টি</h4>
         <div class="row">
            <div class="col-md-5 col-md-offset-1">
               <div class="pdln" id="marquee4">
                  <ul>
                     <li><a href="<?=base_url()?>day-care-details/1">ধানমন্ডি </a></li>
                     <li><a href="<?=base_url()?>day-care-details/2">মতিঝিল</a></li>
                     <li><a href="<?=base_url()?>day-care-details/3">কমলাপুর</a></li>
                     <li><a href="<?=base_url()?>day-care-details/4">পল্লবী</a></li>
                     <li><a href="<?=base_url()?>day-care-details/5">মহাখালী</a></li>
                  </ul>
               </div>
            </div>

            <div class="col-md-5 col-md-offset-1">
               <div class="pdln" id="marquee4">
                  <ul>
                     <li><a href="<?=base_url()?>day-care-details/6">রামপুরা</a></li>
                     <li><a href="<?=base_url()?>day-care-details/7">রায়েরবাজার</a></li>
                     <li><a href="<?=base_url()?>day-care-details/8">মুগদা</a></li>
                     <li><a href="<?=base_url()?>day-care-details/9">সায়েদাবাদ</a></li>
                     <li><a href="<?=base_url()?>day-care-details/10">আশুলিয়া</a></li>
                  </ul>
               </div>
            </div>
         </div>

         <h4 class="lnt text-center" style="color: #fff;background: #759a10; font-weight: 700">ঢাকার বাহিরে ১০টি</h4>
         <div class="row">
            <div class="col-md-5 col-md-offset-1">
               <div class="pdln" id="marquee4">
                  <ul>
                     <li><a href="<?=base_url()?>day-care-details/11">রংপুর </a></li>
                     <li><a href="<?=base_url()?>day-care-details/12">গাজীপুর</a></li>
                     <li><a href="<?=base_url()?>day-care-details/13">নওগাঁ</a></li>
                     <li><a href="<?=base_url()?>day-care-details/14">ভোলা</a></li>
                     <li><a href="<?=base_url()?>day-care-details/15">নোয়াখালী</a></li>
                  </ul>
               </div>
            </div>

            <div class="col-md-5 col-md-offset-1">
               <div class="pdln" id="marquee4">
                  <ul>
                     <li><a href="<?=base_url()?>day-care-details/16">গোপালগঞ্জ</a></li>
                     <li><a href="<?=base_url()?>day-care-details/17">কক্সবাজার</a></li>
                     <li><a href="<?=base_url()?>day-care-details/18">গাইবান্ধা</a></li>
                     <li><a href="<?=base_url()?>day-care-details/19">টাঙ্গাইল</a></li>
                     <li><a href="<?=base_url()?>day-care-details/20">চাঁদপুর</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </section> -->


      <section class="project-properties">
         <h4 class="lnt text-center">প্রকল্পের আওতাধীন শিশু দিবাযত্ন কেন্দ্রসমূহ</h4>

         <div class="row">
            <div class="pdln" id="marquee4">
            
                <?php foreach ($day_care_list as $value) { ?>
        
                    <ul>
                       <li><a href="<?=base_url('day-care-details/'.$value->id)?>"><?=$value->title?> </a> </li>
                    </ul>
     
                <?php } ?>
            </div>
         </div>   
      </section>
      
   </div>   
</div>