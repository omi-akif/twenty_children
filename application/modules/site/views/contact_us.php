<style type="text/css">
  legend.scheduler-border{
    font-size: 14px!important;
  }
  fieldset.scheduler-border{
    min-height: 300px;
  }
</style>

<div class="row">
   <?php $this->load->view('frontend/right_side_bar'); ?>  
   
   <div class="col-md-9 main-content"> 
      <section class="contact-us">
        <?php foreach ($day_care_address as $value) { ?>
      <div class="col-md-6">
            <fieldset class="scheduler-border">
               <legend class="scheduler-border"><?=$value->title?></legend>
               <div class="media-list">
                  <div class="media">
                     <i class="pull-left fa fa-home"></i>
                     <div class="media-body">
                       <strong>ঠিকানা:</strong><br><?=$value->address?>
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ফোন:</strong><br>
                       <?=$value->mobile_no?>
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ইমেইল:</strong><br>
                       <?=$value->email?>
                    </div>
                 </div>
            </div>
         </fieldset>
      </div>

      <?php } ?>

      <!-- <div class="col-md-6">
            <fieldset class="scheduler-border">
               <legend class="scheduler-border">দিবা যত্ন কেন্দ্র ২</legend>
               <div class="media-list">
                  <div class="media">
                     <i class="pull-left fa fa-home"></i>
                     <div class="media-body">
                       <strong>ঠিকানা:</strong><br>
                       ১৯-বি / ২-সি এবং ২-ডি, ব্লক-এফ, ৫ তলা, রিং রোড,ঢাকা -১২০৭
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ফোন:</strong><br>
                       ০১৮১০০০০০০০
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ইমেইল:</strong><br>
                       test@gmail.com
                    </div>
                 </div>
            </div>
         </fieldset>
      </div>

      <div class="col-md-6">
            <fieldset class="scheduler-border">
               <legend class="scheduler-border">দিবা যত্ন কেন্দ্র ৩</legend>
               <div class="media-list">
                  <div class="media">
                     <i class="pull-left fa fa-home"></i>
                     <div class="media-body">
                       <strong>ঠিকানা:</strong><br>
                       ১৯-বি / ২-সি এবং ২-ডি, ব্লক-এফ, ৫ তলা, রিং রোড,ঢাকা -১২০৭
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ফোন:</strong><br>
                       ০১৮১০০০০০০০
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ইমেইল:</strong><br>
                       test@gmail.com
                    </div>
                 </div>
            </div>
         </fieldset>
      </div>

      <div class="col-md-6">
            <fieldset class="scheduler-border">
               <legend class="scheduler-border">দিবা যত্ন কেন্দ্র ৪</legend>
               <div class="media-list">
                  <div class="media">
                     <i class="pull-left fa fa-home"></i>
                     <div class="media-body">
                       <strong>ঠিকানা:</strong><br>
                       ১৯-বি / ২-সি এবং ২-ডি, ব্লক-এফ, ৫ তলা, রিং রোড,ঢাকা -১২০৭
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ফোন:</strong><br>
                       ০১৮১০০০০০০০
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ইমেইল:</strong><br>
                       test@gmail.com
                    </div>
                 </div>
            </div>
         </fieldset>
      </div>

      <div class="col-md-6">
            <fieldset class="scheduler-border">
               <legend class="scheduler-border">দিবা যত্ন কেন্দ্র ৫</legend>
               <div class="media-list">
                  <div class="media">
                     <i class="pull-left fa fa-home"></i>
                     <div class="media-body">
                       <strong>ঠিকানা:</strong><br>
                       ১৯-বি / ২-সি এবং ২-ডি, ব্লক-এফ, ৫ তলা, রিং রোড,ঢাকা -১২০৭
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ফোন:</strong><br>
                       ০১৮১০০০০০০০
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ইমেইল:</strong><br>
                       test@gmail.com
                    </div>
                 </div>
            </div>
         </fieldset>
      </div>

      <div class="col-md-6">
            <fieldset class="scheduler-border">
               <legend class="scheduler-border">দিবা যত্ন কেন্দ্র ৬</legend>
               <div class="media-list">
                  <div class="media">
                     <i class="pull-left fa fa-home"></i>
                     <div class="media-body">
                       <strong>ঠিকানা:</strong><br>
                       ১৯-বি / ২-সি এবং ২-ডি, ব্লক-এফ, ৫ তলা, রিং রোড,ঢাকা -১২০৭
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ফোন:</strong><br>
                       ০১৮১০০০০০০০
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ইমেইল:</strong><br>
                       test@gmail.com
                    </div>
                 </div>
            </div>
         </fieldset>
      </div>

      <div class="col-md-6">
            <fieldset class="scheduler-border">
               <legend class="scheduler-border">দিবা যত্ন কেন্দ্র ৭</legend>
               <div class="media-list">
                  <div class="media">
                     <i class="pull-left fa fa-home"></i>
                     <div class="media-body">
                       <strong>ঠিকানা:</strong><br>
                       ১৯-বি / ২-সি এবং ২-ডি, ব্লক-এফ, ৫ তলা, রিং রোড,ঢাকা -১২০৭
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ফোন:</strong><br>
                       ০১৮১০০০০০০০
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ইমেইল:</strong><br>
                       test@gmail.com
                    </div>
                 </div>
            </div>
         </fieldset>
      </div>

      <div class="col-md-6">
            <fieldset class="scheduler-border">
               <legend class="scheduler-border">দিবা যত্ন কেন্দ্র ৮</legend>
               <div class="media-list">
                  <div class="media">
                     <i class="pull-left fa fa-home"></i>
                     <div class="media-body">
                       <strong>ঠিকানা:</strong><br>
                       ১৯-বি / ২-সি এবং ২-ডি, ব্লক-এফ, ৫ তলা, রিং রোড,ঢাকা -১২০৭
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ফোন:</strong><br>
                       ০১৮১০০০০০০০
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ইমেইল:</strong><br>
                       test@gmail.com
                    </div>
                 </div>
            </div>
         </fieldset>
      </div>

      <div class="col-md-6">
            <fieldset class="scheduler-border">
               <legend class="scheduler-border">দিবা যত্ন কেন্দ্র ৯</legend>
               <div class="media-list">
                  <div class="media">
                     <i class="pull-left fa fa-home"></i>
                     <div class="media-body">
                       <strong>ঠিকানা:</strong><br>
                       ১৯-বি / ২-সি এবং ২-ডি, ব্লক-এফ, ৫ তলা, রিং রোড,ঢাকা -১২০৭
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ফোন:</strong><br>
                       ০১৮১০০০০০০০
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ইমেইল:</strong><br>
                       test@gmail.com
                    </div>
                 </div>
            </div>
         </fieldset>
      </div>

      <div class="col-md-6">
            <fieldset class="scheduler-border">
               <legend class="scheduler-border">দিবা যত্ন কেন্দ্র ১০</legend>
               <div class="media-list">
                  <div class="media">
                     <i class="pull-left fa fa-home"></i>
                     <div class="media-body">
                       <strong>ঠিকানা:</strong><br>
                       ১৯-বি / ২-সি এবং ২-ডি, ব্লক-এফ, ৫ তলা, রিং রোড,ঢাকা -১২০৭
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ফোন:</strong><br>
                       ০১৮১০০০০০০০
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ইমেইল:</strong><br>
                       test@gmail.com
                    </div>
                 </div>
            </div>
         </fieldset>
      </div>

      <div class="col-md-6">
            <fieldset class="scheduler-border">
               <legend class="scheduler-border">দিবা যত্ন কেন্দ্র ১১</legend>
               <div class="media-list">
                  <div class="media">
                     <i class="pull-left fa fa-home"></i>
                     <div class="media-body">
                       <strong>ঠিকানা:</strong><br>
                       ১৯-বি / ২-সি এবং ২-ডি, ব্লক-এফ, ৫ তলা, রিং রোড,ঢাকা -১২০৭
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ফোন:</strong><br>
                       ০১৮১০০০০০০০
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ইমেইল:</strong><br>
                       test@gmail.com
                    </div>
                 </div>
            </div>
         </fieldset>
      </div>

      <div class="col-md-6">
            <fieldset class="scheduler-border">
               <legend class="scheduler-border">দিবা যত্ন কেন্দ্র ১২</legend>
               <div class="media-list">
                  <div class="media">
                     <i class="pull-left fa fa-home"></i>
                     <div class="media-body">
                       <strong>ঠিকানা:</strong><br>
                       ১৯-বি / ২-সি এবং ২-ডি, ব্লক-এফ, ৫ তলা, রিং রোড,ঢাকা -১২০৭
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ফোন:</strong><br>
                       ০১৮১০০০০০০০
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ইমেইল:</strong><br>
                       test@gmail.com
                    </div>
                 </div>
            </div>
         </fieldset>
      </div>

      <div class="col-md-6">
            <fieldset class="scheduler-border">
               <legend class="scheduler-border">দিবা যত্ন কেন্দ্র ১৩</legend>
               <div class="media-list">
                  <div class="media">
                     <i class="pull-left fa fa-home"></i>
                     <div class="media-body">
                       <strong>ঠিকানা:</strong><br>
                       ১৯-বি / ২-সি এবং ২-ডি, ব্লক-এফ, ৫ তলা, রিং রোড,ঢাকা -১২০৭
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ফোন:</strong><br>
                       ০১৮১০০০০০০০
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ইমেইল:</strong><br>
                       test@gmail.com
                    </div>
                 </div>
            </div>
         </fieldset>
      </div>

      <div class="col-md-6">
            <fieldset class="scheduler-border">
               <legend class="scheduler-border">দিবা যত্ন কেন্দ্র ১৪</legend>
               <div class="media-list">
                  <div class="media">
                     <i class="pull-left fa fa-home"></i>
                     <div class="media-body">
                       <strong>ঠিকানা:</strong><br>
                       ১৯-বি / ২-সি এবং ২-ডি, ব্লক-এফ, ৫ তলা, রিং রোড,ঢাকা -১২০৭
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ফোন:</strong><br>
                       ০১৮১০০০০০০০
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ইমেইল:</strong><br>
                       test@gmail.com
                    </div>
                 </div>
            </div>
         </fieldset>
      </div>

      <div class="col-md-6">
            <fieldset class="scheduler-border">
               <legend class="scheduler-border">দিবা যত্ন কেন্দ্র ১৫</legend>
               <div class="media-list">
                  <div class="media">
                     <i class="pull-left fa fa-home"></i>
                     <div class="media-body">
                       <strong>ঠিকানা:</strong><br>
                       ১৯-বি / ২-সি এবং ২-ডি, ব্লক-এফ, ৫ তলা, রিং রোড,ঢাকা -১২০৭
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ফোন:</strong><br>
                       ০১৮১০০০০০০০
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ইমেইল:</strong><br>
                       test@gmail.com
                    </div>
                 </div>
            </div>
         </fieldset>
      </div>

      <div class="col-md-6">
            <fieldset class="scheduler-border">
               <legend class="scheduler-border">দিবা যত্ন কেন্দ্র ১৬</legend>
               <div class="media-list">
                  <div class="media">
                     <i class="pull-left fa fa-home"></i>
                     <div class="media-body">
                       <strong>ঠিকানা:</strong><br>
                       ১৯-বি / ২-সি এবং ২-ডি, ব্লক-এফ, ৫ তলা, রিং রোড,ঢাকা -১২০৭
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ফোন:</strong><br>
                       ০১৮১০০০০০০০
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ইমেইল:</strong><br>
                       test@gmail.com
                    </div>
                 </div>
            </div>
         </fieldset>
      </div>

      <div class="col-md-6">
            <fieldset class="scheduler-border">
               <legend class="scheduler-border">দিবা যত্ন কেন্দ্র ১৭</legend>
               <div class="media-list">
                  <div class="media">
                     <i class="pull-left fa fa-home"></i>
                     <div class="media-body">
                       <strong>ঠিকানা:</strong><br>
                       ১৯-বি / ২-সি এবং ২-ডি, ব্লক-এফ, ৫ তলা, রিং রোড,ঢাকা -১২০৭
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ফোন:</strong><br>
                       ০১৮১০০০০০০০
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ইমেইল:</strong><br>
                       test@gmail.com
                    </div>
                 </div>
            </div>
         </fieldset>
      </div>

      <div class="col-md-6">
            <fieldset class="scheduler-border">
               <legend class="scheduler-border">দিবা যত্ন কেন্দ্র ১৮</legend>
               <div class="media-list">
                  <div class="media">
                     <i class="pull-left fa fa-home"></i>
                     <div class="media-body">
                       <strong>ঠিকানা:</strong><br>
                       ১৯-বি / ২-সি এবং ২-ডি, ব্লক-এফ, ৫ তলা, রিং রোড,ঢাকা -১২০৭
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ফোন:</strong><br>
                       ০১৮১০০০০০০০
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ইমেইল:</strong><br>
                       test@gmail.com
                    </div>
                 </div>
            </div>
         </fieldset>
      </div>

      <div class="col-md-6">
            <fieldset class="scheduler-border">
               <legend class="scheduler-border">দিবা যত্ন কেন্দ্র ১৯</legend>
               <div class="media-list">
                  <div class="media">
                     <i class="pull-left fa fa-home"></i>
                     <div class="media-body">
                       <strong>ঠিকানা:</strong><br>
                       ১৯-বি / ২-সি এবং ২-ডি, ব্লক-এফ, ৫ তলা, রিং রোড,ঢাকা -১২০৭
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ফোন:</strong><br>
                       ০১৮১০০০০০০০
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ইমেইল:</strong><br>
                       test@gmail.com
                    </div>
                 </div>
            </div>
         </fieldset>
      </div>

      <div class="col-md-6">
            <fieldset class="scheduler-border">
               <legend class="scheduler-border">দিবা যত্ন কেন্দ্র ২০</legend>
               <div class="media-list">
                  <div class="media">
                     <i class="pull-left fa fa-home"></i>
                     <div class="media-body">
                       <strong>ঠিকানা:</strong><br>
                       ১৯-বি / ২-সি এবং ২-ডি, ব্লক-এফ, ৫ তলা, রিং রোড,ঢাকা -১২০৭
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ফোন:</strong><br>
                       ০১৮১০০০০০০০
                    </div>
                 </div>

                 <div class="media">
                     <i class="pull-left fa fa-phone"></i>
                     <div class="media-body">
                       <strong>ইমেইল:</strong><br>
                       test@gmail.com
                    </div>
                 </div>
            </div>
         </fieldset>
      </div>  -->  

   </section>
</div>

 
</div>