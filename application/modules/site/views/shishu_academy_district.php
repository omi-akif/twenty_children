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
                     padding:5px;
                  }
               </style>
               <table class="tableizer-table" id="myTable">
                  <thead>
                     <tr class="tableizer-firstrow">
                        <th>বিভাগ</th><th>জেলা</th>
                        <th>জেলা শিশু বিষয়ক কর্মকর্তার নাম</th>
                        <th>মোবাইল</th>
                        <th>ফোন (অফিস)</th>
                        <th>ই-মেইল</th>
                        <th>স্কাইপ আইডি</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr><td>সিলেট</td><td>সিলেট</td><td>সাইদুর রহমান  ভূঞা</td><td>1838421807</td><td>821718304</td><td>bsasylhet@gmail.com</td><td>bsasylhet</td></tr>
                     <tr><td>সিলেট</td><td>সুনামগঞ্জ</td><td>বাদল চন্দ্র রর্মন (চ.দা)</td><td>1718558592</td><td>87162693</td><td>bsasunam@gmail.com</td><td>bsa.sunamganj</td></tr>
                     <tr><td>সিলেট</td><td>হবিগঞ্জ</td><td>দিল আফরোজ   কাঞ্চি</td><td>1937705431</td><td>83153358</td><td>bsa.habiganj@gmail.com</td><td>bsa.habiganj</td></tr>
                     <tr><td>সিলেট</td><td>মৌলভিবাজার</td><td>মো. জসীম উদ্দীন</td><td>1712118855</td><td>86153096</td><td>dcaobsamoulvibazar@gmail.com</td><td>bsa.shishuacademymb</td></tr>
                     <tr><td>বরিশাল</td><td>বরিশাল</td><td>পঙ্কজ কুমার রায় চৌধুরী</td><td>1716893340</td><td>4312173521</td><td>bsa.bari@yahoo.com</td><td>Bsa.barisal</td></tr>
                     <tr><td>বরিশাল</td><td>পিরোজপুর</td><td>মো. মোজাম্মেল হোসেন (অ.দা)</td><td>1716758426</td><td>46162456</td><td>bsapirojpur@gmail.com</td><td>bsa.pirojpur</td></tr>
                     <tr><td>বরিশাল</td><td>বরগুনা</td><td>এস, এম, রফিকুল ইসলাম (চ.দা)</td><td>1718204446</td><td>44862599</td><td>bsabarguna98@gmail.com</td><td>bsa.barguna</td></tr>
                     <tr><td>বরিশাল</td><td>ঝালকাঠি</td><td>মো. মোজাম্মেল হোসেন</td><td>1716758426</td><td>49862442</td><td>bsa.jkt99@gmail.com</td><td>bsa.jkt11</td></tr>
                     <tr><td>বরিশাল</td><td>ভোলা</td><td>মুহাম্মদ আখতার হোসেন (চ.দা)</td><td>1716260136</td><td>49162923</td><td>bsabhola@gmail.com</td><td>bsa.bhola</td></tr>
                     <tr><td>বরিশাল</td><td>পটুয়াখালী</td><td>জি, এম, আব্দুল সালাম</td><td>1719008565</td><td>44162231</td><td>Bsapatuakhali71@gmail.com</td><td>bsa.patuakhali</td></tr>
                     <tr><td>রংপুর</td><td>রংপুর</td><td>মো. মোস্তাক আহমেদ</td><td>1733390699</td><td>52162818</td><td>bsa.rangpur123@gmail.com</td><td>bsa.rangpur</td></tr>
                     <tr><td>রংপুর</td><td>লালমনিরহাট</td><td>তুহিনুর রহমান (চ.দা)</td><td>1716586838</td><td>59161261</td><td>bsalalmonirhat123@gmail.com</td><td>bsalalmonirhat</td></tr>
                     <tr><td>রংপুর</td><td>দিনাজপুর</td><td>মো. সাইফুল আলম</td><td>1851504504</td><td>53165780</td><td>bsadinajpur@gmail.com</td><td>bsadinajpur</td></tr>
                     <tr><td>রংপুর</td><td>পঞ্চগড় </td><td>মো. আকতারুজ্জামান</td><td>1715003548</td><td>56861512</td><td>bsapanch@gmail.com</td><td>bsapanch</td></tr>
                     <tr><td>রংপুর</td><td>নীলফামারী</td><td>মো. ইমরান মিঞা</td><td>1675211675</td><td>55161703</td><td>bsanilphamari@gmail.com</td><td>bsanilphamari</td></tr>
                     <tr><td>রংপুর</td><td>গাইবান্ধা</td><td>মো. মোস্তাক আহমেদ( চ. দা)</td><td>1733390699</td><td>54151755</td><td>bsagaibandha.bd@gmail.com</td><td>bsagaibandha</td></tr>
                     <tr><td>রংপুর</td><td>কুড়িগ্রাম</td><td>এস,এম, এ বকর</td><td>1712149109</td><td>58161303</td><td>bsa.kuri2014@gmail.com</td><td>bsa.kuri2014</td></tr>
                     <tr><td>রংপুর</td><td>ঠাকুরগাঁও</td><td>মো. জবেদ আলী ( চ. দা)</td><td>1717330405</td><td>56152105</td><td>thakurgaonbsa@gmail.com</td><td>bsathakurgaon</td></tr>
                     <tr><td>রাজশাহী</td><td>রাজশাহী</td><td>মো. মনজুর কাদের</td><td>1762604090</td><td>721773403</td><td>bsarajshahi@gmail.com</td><td>bsa.rajshahi</td></tr>
                     <tr><td>রাজশাহী</td><td>নাটোর</td><td>মো. আবুল কালাম আজাদ</td><td>1712067732</td><td>77166758</td><td>bsanatorekm@gmail.com</td><td>bsanatoreoffice</td></tr>
                     <tr><td>রাজশাহী</td><td>পাবনা</td><td>মো. আবুল কালাম আজাদ( অ.দা)</td><td>1712067732</td><td>73165095</td><td>bsapab@gmail.com</td><td>bsapabna</td></tr>
                     <tr><td>রাজশাহী</td><td>বগুড়া</td><td>শাহ মো. ইসাহাক আলী</td><td>1712250518</td><td>5166124</td><td>bsabogra@gmail.com</td><td>bsa.bogra</td></tr>
                     <tr><td>রাজশাহী</td><td>জয়পুরহাট</td><td>শাহ মো. ইসাহাক আলী ( অ.দা)</td><td>1712520518</td><td>57162614</td><td>bsajoybranch@gmail.com</td><td>bsajoypurhat</td></tr>
                     <tr><td>রাজশাহী</td><td>সিরাজগঞ্জ</td><td>মোস্তফা কামাল</td><td>1717628323</td><td>751625547</td><td>bsa.sirajganj@yahoo.com</td><td>bsa.sirajganj</td></tr>
                     <tr><td>রাজশাহী</td><td>নওগাঁ</td><td>মো. জাহেদুল ইসলাম</td><td>1824428648</td><td>74163007</td><td>bsanaogaon@gmail.com</td><td>bsa.naogaon</td></tr>
                     <tr><td>রাজশাহী</td><td>চাঁপাইনবাবগঞ্জ</td><td>শফিকুল আলম (চ.দা)</td><td>1714525326</td><td>78152836</td><td>bsachapai@gmail.com</td><td>bsa.chapai</td></tr>
                     <tr><td>খুলনা</td><td>খুলনা</td><td>মো. আবুল আলম</td><td>1717669020</td><td>41725648</td><td>bsakhulnagov@gmail.com</td><td>bsa.khulna</td></tr>
                     <tr><td>খুলনা</td><td>যশোর</td><td>সাধন কুমার দাস</td><td>1717580631</td><td>42165191</td><td>bsajessore@gmail.com</td><td>bsa.jessore</td></tr>
                     <tr><td>খুলনা</td><td>সাতক্ষীরা</td><td>সাধন কুমার দাস ( অ. দা)</td><td>1717580631</td><td>47164237</td><td>bsasatkhiragov@yahoo.com</td><td>bsasatkhira</td></tr>
                     <tr><td>খুলনা</td><td>ঝিনাইদহ</td><td>মো. আয়ূব হোসেন</td><td>1711950135</td><td>45162130</td><td>bsajhe@gmail.com</td><td>bsajhenidah</td></tr>
                     <tr><td>খুলনা</td><td>কুষ্টিয়া</td><td>মখলেছুর রহমান</td><td>1717210936</td><td>7162466</td><td>bsa.kustia@gmail.com</td><td>bsa.kustia</td></tr>
                     <tr><td>খুলনা</td><td>বাগেরহাট</td><td>মো. শেখ আসাদুর রহমান ( চ. দা)</td><td>1855868412</td><td>46862657</td><td>bsabagerhat@gmail.com</td><td>bsa.bagerhat</td></tr>
                     <tr><td>খুলনা</td><td>নড়াইল</td><td>ওয়ালিউর রহমান</td><td>1913414466</td><td>48162557</td><td>bsanarail@yahoo.com</td><td>bsanarail</td></tr>
                     <tr><td>খুলনা</td><td>মাগুরা</td><td>আহাম্মদ আল হোসেন</td><td>1716104440</td><td>48863610</td><td>bsamagura@yahoo.com</td><td>bsa.magura</td></tr>
                     <tr><td>খুলনা</td><td>চুয়াডাঙ্গা</td><td>আফসানা ফেরদৌসী</td><td>1715686300</td><td>76162803</td><td>shisuchua001@gmail.com</td><td>bsachuadanga</td></tr>
                     <tr><td>খুলনা</td><td>মেহেরপুর</td><td>মো. গোলাম সিদ্দিক</td><td>1913912140</td><td>79162243</td><td>bsameherpur@gmail.com</td><td>bsameherpur</td></tr>
                     <tr><td>চট্রগ্রাম</td><td>চট্রগ্রাম</td><td>নারগিস সুলতানা</td><td>1711570130</td><td>31652850</td><td>bsa.ctg07@gmail.com</td><td>bsactg07</td></tr>
                     <tr><td>চট্রগ্রাম</td><td>লক্ষীপুর</td><td>মাঈনউদ্দিন</td><td>1671433344</td><td>38162576</td><td>bsalakshmipur@gmail.com</td><td>bsa.lakshmipur</td></tr>
                     <tr><td>চট্রগ্রাম</td><td>চাঁদপুর</td><td>মো. কাউছার আহমেদ</td><td>1712096250</td><td>84163896</td><td>bsachandpur@gmail.com</td><td>bsa.chandpur</td></tr>
                     <tr><td>চট্রগ্রাম</td><td>নোয়াখালী</td><td>মো. মোসলেহ উদ্দীন</td><td>1706528285</td><td>32161223</td><td>Shishu.noakhali@gmail.com</td><td>bsa.noakhali1</td></tr>
                     <tr><td>চট্রগ্রাম</td><td>বান্দরবন</td><td>শিলাদিত্য মুৎসুব্দী</td><td>1556742321</td><td>36162220</td><td>bsabandarban@gmail.com</td><td>bsa.bandarban</td></tr>
                     <tr><td>চট্রগ্রাম</td><td>খাগড়াছড়ি</td><td>উষানু চৌধুরী</td><td>1556620220</td><td>37161834</td><td>bshishukhg@gmail.com</td><td>bsakhagrachari4</td></tr>
                     <tr><td>চট্রগ্রাম</td><td>কক্সবাজার</td><td>আহসানুল হক চৌধুরী</td><td>1914463659</td><td>34163570</td><td>shishuacademycox@yahoo.com</td><td>bsa.cox</td></tr>
                     <tr><td>চট্রগ্রাম</td><td>ফেনী</td><td>মো. নুরুল আবছার ভূঁঞা</td><td>1814119107</td><td>33163182</td><td>bsa.feni@gmail.com</td><td>bsa.feni</td></tr>
                     <tr><td>চট্রগ্রাম</td><td>কুমিল্লা</td><td>সোহেল আহম্মদ ভূইয়া</td><td>1816937883</td><td>8168218</td><td>bsacomilla@gmail.com</td><td>bsa.comilla</td></tr>
                     <tr><td>চট্রগ্রাম</td><td>ব্রাক্ষণবাড়িয়া</td><td>মাহফুজা আখতার</td><td>1912268645</td><td>85152932</td><td>bsa.brahmanbaria@gmail.com</td><td>bsa.brabmanbaria</td></tr>
                     <tr><td>চট্রগ্রাম</td><td>রাঙ্গামাটি</td><td>অর্চনা চাকমা</td><td>1825865252</td><td>35162152</td><td>Bangladeshshishu_a@yahoo.com</td><td>Bsa.rahgamati1</td></tr>
                     <tr><td>ঢাকা </td><td>ঢাকা  </td><td>রাশিদা বেগম</td><td>1711952472</td><td>29009734</td><td>dhakadistrict.bsa@gmail.com</td><td>bsadhakadistrict</td></tr>
                     <tr><td>ঢাকা </td><td>নারায়নগঞ্জ</td><td>ইসরাত জাহান</td><td>1914891392</td><td>27642850</td><td>bsangonj@gmail.com</td><td>bsa.ngonj</td></tr>
                     <tr><td>ঢাকা </td><td>মুন্সিগঞ্জ</td><td>দেওয়ান হাফিজুর রহমান</td><td>17116795353</td><td>69162083</td><td>munshiganjshishu320@gmail.com</td><td>bsa.munshiganj</td></tr>
                     <tr><td>ঢাকা </td><td>মানিকগঞ্জ</td><td>মো. শরিফুল ইসলাম</td><td>1718000224</td><td>27710639</td><td>bsamanikganj@gmail.com</td><td>bsamanikganj</td></tr>
                     <tr><td>ঢাকা </td><td>নরসিংদী</td><td>মো. খলিলুর রহমান খান</td><td>1715577238</td><td>62863052</td><td>bsa.narsingdi@gmail.com</td><td>bsa.narsingdi</td></tr>
                     <tr><td>ঢাকা </td><td>গাজীপুর</td><td>মো. নাসির উদ্দিন</td><td>1711247820</td><td>29256472</td><td>bsagazipur563@gmail.com</td><td>bsagazipur</td></tr>
                     <tr><td>ঢাকা </td><td>টাংগাইল</td><td>খন্দকার নিপুন হোসাইন</td><td>1764361608</td><td>92164190</td><td>shishutangail@gmail.com</td><td>bsa.tangail</td></tr>
                     <tr><td>ঢাকা </td><td>ফরিদপুর   </td><td>হুমায়ুন কবির</td><td>1719785984</td><td>63163511</td><td>bsafaridpur@gmail.com</td><td>bsa.faridpur</td></tr>
                     <tr><td>ঢাকা </td><td>শরীয়তপুর</td><td>সরল বড়ুয়া ( চ.দা)</td><td>1927869381</td><td>60155879</td><td>bcaoshariatpur@yahoo.com</td><td>bsa.shariatpur</td></tr>
                     <tr><td>ঢাকা </td><td>মাদারীপুর  </td><td>মো. শহিদুল ইসলাম মুন্সী</td><td>1819522721</td><td>66155630</td><td>bsamadaripur@yahoo.com</td><td>shahidul.islam</td></tr>
                     <tr><td>ঢাকা </td><td>গোপালগঞ্জ</td><td>মো. শাহীন উদ্দীন</td><td>1724847000</td><td>266855237</td><td>bsagopalganj@gmail.com</td><td>bsa.gopalganj</td></tr>
                     <tr><td>ঢাকা </td><td>রাজবাড়ী   </td><td>মো. আলিমুর রেজা</td><td>1716637832</td><td>64165812</td><td>bsa.rajbari@gmail.com</td><td>bsa.rajbari</td></tr>
                     <tr><td>ময়মনসিংহ</td><td>ময়মনসিংহ</td><td>মো. মেহেদী হাসিনা</td><td>1914128481</td><td>9152351</td><td>bsamymensingh@gmail.com</td><td>BSA.Mymensing</td></tr>
                     <tr><td>ময়মনসিংহ</td><td>কিশোরগঞ্জ</td><td>তায়েফা হাসিনা</td><td>1711053114</td><td>94155857</td><td>bsakdb1@gmail.com</td><td>bsa.kishoreganj</td></tr>
                     <tr><td>ময়মনসিংহ</td><td>জামালপুর</td><td>সুলতানা আহমেদ স্বপনা ( চ.দা)</td><td>1711196266</td><td>98163154</td><td>bsajamalpur800@gmail.com</td><td>bsa.jamalpur</td></tr>
                     <tr><td>ময়মনসিংহ</td><td>শেরপুর</td><td>শেখ মো. আসলাম খান ( চ.দা)</td><td>1726670059</td><td>93162177</td><td>Bsasherpur2100@yahoo.com</td><td>bsasherpur</td></tr>
                     <tr><td>ময়মনসিংহ</td><td>নেত্রকোনা</td><td>মীর বাবলুর রহমান</td><td>1712939282</td><td>95161810</td><td>bsanetrakona@gmail.com</td><td>bsa.netrokoma</td></tr>
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