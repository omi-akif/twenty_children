<!-- <style type="text/css">
   .carousel-indicators li{ display: none; }
</style> -->
<div class="row">
   <?php $this->load->view('frontend/right_side_bar'); ?>   
   
   <div class="col-md-9 main-content">

      <section class="project-properties">
         <h4 class="lnt text-center"><?=$meta_title?></h4>

         <div class="row">
            <div class="pdln" id="marquee4">
               <style type="text/css">
                  table.tableizer-table {
                     font-size: 12px;
                     border: 1px solid #CCC;                   
                  } 
                  .tableizer-table td {
                     padding: 4px;
                     margin: 3px;
                     border: 1px solid #CCC;
                  }
                  .tableizer-table th {
                     background-color: #104E8B; 
                     color: #FFF;
                     font-weight: bold;
                      padding: 4px;
                  }
               </style>
               <table class="tableizer-table">
               <thead><tr class="tableizer-firstrow"><th>বিভাগ</th><th>জেলা</th><th>উপজেলা </th><th>উপজেলা শিশু বিষয়ক কর্মকর্তার নাম</th><th>মোবাইল</th><th>ই-মেইল</th><th>স্কাইপ আইডি</th></tr></thead><tbody>
                <tr><td>খুলনা</td><td>যশোর</td><td>কেশবপুর (যশোর)</td><td>বিমল কুমার কুনডু</td><td>1982684886</td><td>bskeshabpur@gmail.com</td><td>bsa.keshabpur</td></tr>
                <tr><td>চট্রগ্রাম</td><td>ফেনী</td><td>পরশুরাম (ফেনী)</td><td>মো: বোরহান উদ্দিন</td><td>1818418033</td><td>bsa.parshuramfeni0603@yahoo.com</td><td>bsa.parshuram</td></tr>
                <tr><td>সিলেট</td><td>মৌলভীবাজার</td><td>কুলাউরা( মৌলভীবাজার)</td><td>মো: আবুল বাসার(চ.দা)</td><td>1714516601</td><td>bsa14kulaura@gmail.com</td><td>bsakula</td></tr>
                <tr><td>রংপুর</td><td> রংপুর</td><td>মিঠাপুকুর( রংপুর)</td><td>মুহা. আব্দুল ওয়াহেদ</td><td>1718703845</td><td>bsamithapukur@gmail.com</td><td>bsa.mithapukur</td></tr>
                <tr><td>বরিশাল</td><td>বরিশাল</td><td>বাবুগঞ্জ(বরিশাল)</td><td>মো. ইসমাইল হোসেন (চ.দা)</td><td>1723423739</td><td>bsababuganj1121970@yahoo.com</td><td>bsa.babuganj</td></tr>
                <tr><td>ঢাকা</td><td>মুন্সিগঞ্জ</td><td>শ্রীনগর ( মুন্সিগঞ্জ)</td><td>মো. শামীম হোসেন(চ.দা)</td><td>1924764744</td><td>bsasreenagar@gmail.com</td><td></td></tr>
               </tbody></table>
                <?php /* foreach ($day_care_list as $value) { ?>
                    <ul>
                       <li><a href="<?=base_url('day-care-details/'.$value->id)?>"><?=$value->title?> </a> </li>
                    </ul>
                    <?php } */?>
                 </div>
              </div>   
           </section>

        </div>   
     </div>