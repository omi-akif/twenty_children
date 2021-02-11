<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?=$headding?></title>
	<style type="text/css">
		.priview-body{font-size: 16px;color:#000;margin: 25px;}
		.priview-header{margin-bottom: 10px;text-align:center;}
		.priview-header div{font-size: 18px;}
		.priview-memorandum, .priview-from, .priview-to, .priview-subject, .priview-message, .priview-office, .priview-demand, .priview-signature{padding-bottom: 20px;}
		.priview-office{text-align: center;}
		.priview-imitation ul{list-style: none;}
		.priview-imitation ul li{display: block;}
		.date-name{width: 20%;float: left;padding-top: 23px;text-align: right;}
		.date-value{width: 70%;float:left;}
		.date-value ul{list-style: none;}
		.date-value ul li{text-align: center;}
		.date-value ul li.underline{border-bottom: 1px solid black;}
		.subject-content{text-decoration: underline;}
		.headding{border-top:1px solid #000;border-bottom:1px solid #000;}

		.col-1{width:8.33%;float:left;}
		.col-2{width:16.66%;float:left;}
		.col-3{width:25%;float:left;}
		.col-4{width:33.33%;float:left;}
		.col-5{width:41.66%;float:left;}
		.col-6{width:50%;float:left;}
		.col-7{width:58.33%;float:left;}
		.col-8{width:66.66%;float:left;}
		.col-9{width:75%;float:left;}
		.col-10{width:83.33%;float:left;}
		.col-11{width:91.66%;float:left;}
		.col-12{width:100%;float:left;}

		.table{width:100%;border-collapse: collapse;}
		.table td, .table th{border:0px solid #ddd;}
		.table tr.bottom-separate td,
		.table tr.bottom-separate td .table td{border-bottom:1px solid #ddd;}
		.borner-none td{border:0px solid #ddd;}
		.headding td, .total td{border-top:1px solid #ddd;border-bottom:1px solid #ddd;}
		.table td{padding:5px;}
		.text-center{text-align:center;}
		.text-right{text-align:right;}
		b{font-weight:500;}
	</style>

	<style type="text/css">
	.tg  {border-collapse:collapse;border-spacing:0; width: 100%}
		.tg td{font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
		.tg th{font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;width: 40%;}
		.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top;}
		.tg .tg-dvpl{border-color:inherit;text-align:right;vertical-align:top}
	</style>
</head>
<body>
	<div class="priview-body">
		<table width="100%" border="0">
			<tr>
				<td width="20%"> <span style="font-size: 25px; font-weight: bold;">সদস্য নং </span><br> 
					<span style="font-size: 25px; font-weight: bold;"><?=eng2bng($info->member_id)?></span></td>
					<td align="center">
						<div class="priview-header">
							<div style="font-size:18px;">বিসিএস (প্রশাসন) কল্যাণ বহুমুখী সমবায় সমিতি লিমিটেড</div>
							<span style="">নিবন্ধন নং ০১২৮২, তারিখঃ ২৬.০৯.২০০৭</span><br> 
							<span style="">বিয়াম ফাউন্ডেশন ভবন, ৬৩ নিউ ইস্কাটন, ঢাকা ১০০০</span><br> 
							<span style="font-size:12px;">Email: bcswmcs@gmail.com</span> <br>
							<span style="font-size:12px;">Website: www.bcsadminwelfare.org.bd</span></p>
						</div>
					</td>
					<td width="20%">
						<?php 
						$img_path = base_url('member_img/');
						if($info->image_file != NULL){
							$src= $img_path.$info->image_file;
							echo "<img src='".$src."' width='100'>";
						}
						?>
					</td>
				</tr>
		</table>


			<div class="priview-memorandum">
				<div class="row">
					<div class="col-12 text-center">
						<div style="font-size:18px;"><u>সমিতির সদস্যের বিস্তারিত তথ্য</u></div>		
						তারিখঃ <?=date_bangla_calender_format(date('d-m-Y'))?>
					</div>
				</div>
			</div>





			<div class="priview-demand">

				<table class="tg">
					<tr>
						<th class="tg-0pky">১। নাম (বাংলায়)</th>
						<th class="tg-0pky" colspan="5"><?=$info->name_bn?></th>
					</tr>
					<tr>
						<td class="tg-0pky">In English (BLOCK LETTER)</td>
						<td class="tg-0pky" colspan="5"><?=$info->first_name?></td>
					</tr>
					<tr>
						<td class="tg-0pky">২।  (ক) পরিচিতি নং</td>
						<td class="tg-0pky"><?=$info->member_id?></td>
						<td class="tg-0pky">(খ) ব্যাচ</td>
						<td class="tg-0pky"><?=$info->batch_name_en?></td>
						<td class="tg-0pky">(গ) যোগদানের তারিখ</td>
						<td class="tg-0pky"><?=$info->join_date?></td>
					</tr>
					<tr>
						<td class="tg-0pky">৩। বর্তমান পদবি ও কর্মস্থলঃ</td>
						<td class="tg-0pky">পদবিঃ</td>
						<td class="tg-0pky"><?=$info->desig_name_en?></td>
						<td class="tg-0pky">কর্মস্থলঃ</td>
						<td class="tg-0pky" colspan="2"><?=$info->curr_working_place?></td>
					</tr>
					<tr>
						<td class="tg-0pky">৪। পিতার নাম (বাংলায়)</td>
						<td class="tg-0pky" colspan="5"><?=$info->father_name_bn?></td>
					</tr>
					<tr>
						<td class="tg-0pky">In English (BLOCK LETTER)</td>
						<td class="tg-0pky" colspan="5"><?=$info->father_name_en?></td>
					</tr>
					<tr>
						<td class="tg-0pky">৫। মাতার নাম (বাংলায়)</td>
						<td class="tg-0pky" colspan="5"><?=$info->mother_name_bn?></td>
					</tr>
					<tr>
						<td class="tg-0pky">In English (BLOCK LETTER)</td>
						<td class="tg-0pky" colspan="5"><?=$info->mother_name_en?></td>
					</tr>

					<!-- <tr>
						<td class="tg-0pky">৬। বৈবাহিক অবস্থাঃ </td>
						<td class="tg-0pky"><?=$info->ms_name_en?></td>
						<td class="tg-0pky">স্বামী / স্ত্রীর নাম(প্রযোজ্য হলে)</td>
						<td class="tg-0pky"><?=$info->spouse_name?></td>
						<td class="tg-0pky" colspan="2"></td>
					</tr> -->

					<tr>
						<td class="tg-0pky">৬। বৈবাহিক অবস্থাঃ</td>
						<td class="tg-0pky" colspan="2"><?=$info->ms_name_en?></td>
						<td class="tg-0pky">স্বামী / স্ত্রীর নামঃ</td>
						<td class="tg-0pky" colspan="2"><?=$info->spouse_name?></td>
					</tr>

					<tr>
						<td class="tg-0pky">(সরকারি চাকরি জীবী হলে পদবি, সংস্থার নাম এবং ক্যাডার সদস্য হলে ব্যাচ ও পরিচিতি নম্বর)</td>
						<td class="tg-0pky" colspan="5"><?=$info->spouse_service_info?></td>
					</tr>

					<tr>
						<td class="tg-0pky">৭। বর্তমান ঠিকানাঃ</td>
						<td class="tg-0pky" colspan="5"><?=$info->present_address?></td>
					</tr>
					<tr>
						<td class="tg-0pky">৮। স্থায়ী ঠিকানাঃ</td>
						<td class="tg-0pky" colspan="5"><?=$info->per_village_house?>,<?=$info->per_road_block?></td>
					</tr>
					<tr>
						<td class="tg-0pky">উপজেলা/থানাঃ</td>
						<td class="tg-0pky"><?=$info->upa_name_en?></td>
						<td class="tg-0pky">জেলাঃ</td>
						<td class="tg-0pky"><?=$info->dis_name_en?></td>
						<td class="tg-0pky" colspan="2">বিভাগঃ<?=$info->div_name_en?></td>
					</tr>
					<tr>
						<td class="tg-0pky">ফোনঃ</td>
						<td class="tg-0pky">(ক)অফিসঃ<?=$info->phone?></td>
						<td class="tg-0pky">(খ) বাসাঃ<?=$info->phone_house?></td>
						<td class="tg-0pky">(গ)মোবাইলঃ<?=$info->phone_office?></td>
						<td class="tg-0pky" colspan="2">(ঘ) ইমেইলঃ<?=$info->email?></td>
					</tr>

					<tr>
						<td class="tg-0pky">৯। (ক) জন্ম তারিখঃ</td>
						<td class="tg-0pky"><?=$info->dob?></td>
						<td class="tg-0pky">(খ)ধর্মঃ<?=$info->religion_name_en?></td>
						<td class="tg-0pky">(গ)লিঙ্গঃ</td>
						<td class="tg-0pky" colspan="2"><?=$info->gender?></td>
					</tr>

<!-- 
					<tr>
						<td class="tg-0pky">৯। (ক) জন্ম তারিখঃ</td>
						<td class="tg-0pky" colspan="2"><?=$info->dob?></td>
						<td class="tg-0pky">ধর্মঃ</td>
						<td class="tg-0pky" colspan="2"><?=$info->religion_name_en?></td>
					</tr> -->

					<tr>
						<!-- <td class="tg-0pky">লিঙ্গঃ</td>
						<td class="tg-0pky" colspan="2"><?=$info->gender?></td> -->
						<!-- <td class="tg-0pky" colspan="2">লিঙ্গঃ<?=$info->gender?></td> -->
						<td class="tg-0pky">১০। রক্তের গ্রুপ</td>
						<td class="tg-0pky" colspan="5"><?=$info->bg_name_en?></td>
					</tr>
					<tr>
						<td class="tg-0pky">১১। সংযুক্ত দলিলাদিঃ</td>
						<td class="tg-0pky" colspan="5"></td>
					</tr>
					<!-- <tr>
						<td class="tg-0pky">(ক) জন্ম নিবন্ধন নংঃ</td>
						<td class="tg-0pky" colspan="5"><?=$info->birth_certificate_no?></td>
					</tr> -->
					<tr>
						<td class="tg-0pky">(খ) জাতীয় পরিচয়ত্র নম্বর</td>
						<td class="tg-0pky" colspan="5"><?=$info->national_id?></td>
					</tr>
					<tr>
						<td class="tg-0pky">(গ) পাসপোর্ট নম্বর</td>
						<td class="tg-0pky" colspan="5"><?=$info->passport_no?></td>
					</tr>
					<!-- <tr>
						<td class="tg-0pky">(ঘ) ই টি আই এন নম্বর</td>
						<td class="tg-0pky" colspan="5"><?=$info->tin_no?></td>
					</tr>
					<tr>
						<td class="tg-0pky">(ঙ) ড্রাইভিং লাইসেন্স নম্বর</td>
						<td class="tg-0pky" colspan="5"><?=$info->driving_license_no?></td>
					</tr>
					<tr>
						<td class="tg-0pky">(চ) অন্যান্য</td>
						<td class="tg-0pky" colspan="5"><?=$info->attach_other_info?></td>
					</tr> -->
					<tr>
						<td class="tg-0pky" colspan="6">১২। জুরুরী প্রয়োজনে যোগাযোগের জন্য মনোনীত ব্যাক্তিঃ</td>
					</tr>
					<tr>
						<td class="tg-0pky">নামঃ</td>
						<td class="tg-0pky" colspan="2"><?=$info->emg_contact_name?></td>
						<td class="tg-0pky">ঠিকানাঃ</td>
						<td class="tg-0pky" colspan="2"><?=$info->emg_contact_address?></td>
					</tr>
					<tr>
						<td class="tg-0pky">ফোন নম্বরঃ</td>
						<td class="tg-0pky" colspan="2"><?=$info->emg_contact_no?></td>
						<td class="tg-0pky">ইমেইল ঠিকানাঃ</td>
						<td class="tg-0pky" colspan="2"><?=$info->emg_contact_email?></td>
					</tr>
					<tr>
						<td class="tg-0pky">১৩। সদস্যের নমুনা স্বাক্ষরঃ</td>
						<td class="tg-0pky" colspan="5">
							
						<?php 
		                  $img_path = base_url().'signature_img/';
		                  
		                  if($info->image_file != NULL){
		                    $src= $img_path.$info->signiture_file;
		                      echo "<img src='$src' class='img-responsive' width='180' style='border:1px solid #ccc; padding:3px'>";
						                    }
		                ?>
						</td>
					</tr>
					<tr>
						<td class="tg-0pky" colspan="6"></td>
					</tr>
					<tr>
						<td class="tg-0pky" rowspan="2">আর্থিক বিবরণঃ</td>
						<td class="tg-0pky">অন্তর্ভুক্তি ফিঃ</td>
						<td class="tg-0pky"><?=$info->pay_member_fee?></td>
						<td class="tg-0pky">প্রদানের তারিখঃ</td>
						<td class="tg-0pky" colspan="2"><?=$info->pay_date?></td>
					</tr>
					<tr>
						<td class="tg-0pky">প্রদানের পদ্ধতিঃ</td>
						<td class="tg-0pky"><?=$info->pm_name_en?></td>
						<td class="tg-0pky">ব্যাংকের নাম/মন্তব্যঃ</td>
						<td class="tg-0pky" colspan="2"><?=$info->pay_receipt_no?></td>
					</tr>
				</table>

			</div>

		</body>
		</html>


