<style type="text/css">
	.tg  {border-collapse:collapse;border-spacing:0; color: black;}
	.tg td{font-family:Arial, sans-serif;font-size:14px;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
	.tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
	.tg .tg-lboi{border-color:inherit;text-align:left;vertical-align:middle; text-align: right;}
	.tg .tg-0pky{border-color:inherit;text-align:left;vertical-align:top; text-align: left;}
/*-----------------tg1-----------------*/
	.tg1  {border-collapse:collapse;border-spacing:0;}
	.tg1 td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
	.tg1 th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
	.tg1 .tg1-cly1{text-align:left;vertical-align:middle}
	.tg1 .tg1-0lax{text-align:left;vertical-align:top}
/*-----------------tg3-----------------*/
	.tg3  {border-collapse:collapse;border-spacing:0;}
	.tg3 td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
	.tg3 th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
	.tg3 .tg3-cly1{text-align:left;vertical-align:middle}
	.tg3 .tg3-0lax{text-align:left;vertical-align:top}
/*-----------------tg4-----------------*/
	.tg4  {border-collapse:collapse;border-spacing:0;}
	.tg4 td{font-family:Arial, sans-serif;font-size:14px;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
	.tg4 th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:10px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
	.tg4 .tg4-9czc{text-align:left;vertical-align:middle; width: 30%}
	.tg4 .tg4-0pky{text-align:left;vertical-align:top}
	
</style>

<section class="content-header">
  <h1> <?=$meta_title; ?> </h1>
  <ol class="breadcrumb">
    <li><a href="<?=base_url('adminpanel/dashboard');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><?=$meta_title; ?></li>
  </ol>
</section>

<section class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">

          <div class="box-body">
           
            <?php if($this->session->flashdata('success')):?>
                <div class="alert alert-success">
                    <a class="close" data-dismiss="alert">&times;</a>
                    <?php echo $this->session->flashdata('success');;?>
                </div>
            <?php endif; ?>


            <div class="col-md-12">
            	<?php 
            		$attributes = array('id' => 'jsvalidation');
            		echo form_open_multipart("adminpanel/member/member_info", $attributes);
            	?>
            	<div class="row row-form">
	               <div class="col-md-offset-4 col-md-4" style="border: 0px solid red">
	                  <div><?php echo form_error('member_id'); ?></div>
	                  <div class="form-group">
	                      <label>Select Member <span class='required'>*</span> </label>
	                    <?php 
	                      $more_attr = 'class="form-control"';
	                      echo form_dropdown('member_id', $users, set_value('member_id'), $more_attr);
	                    ?>
	                  </div>  
	               </div>
	               <div class="col-md-1 pull-left">
				            <br>
				            <?php echo form_submit('submit', 'Search', "class='btn btn-primary pull-right'"); ?>
	                </div>
	             </div>
					</form>	
			</div>

	        <div class="col-md-12">
	           <?php if($info){ ?>
					<table class="tg" align="center" style="width: 70%" >
						<caption style="font-weight: bold;font-size: 20px; text-align: center; color: black; text-decoration: underline;">Member Basic Information</caption>
					  <tr>
					    <th class="tg-lboi" width="150">Name</th>
					    <td class="tg-0pky"><b><?=$info->first_name;?></b></td>
					    <th class="tg-lboi" width="170">Member ID</th>
					    <td class="tg-0pky"><b><?=$info->member_id;?></b></td>					    
					  </tr>
					  <tr>
					  	 <th class="tg-lboi">Current Designation</th>
					    <td class="tg-0pky"><b><?=$info->desig_name_en;?></b></td>
					    <th class="tg-lboi">Current Working Place</th>
					    <td class="tg-0pky"><b><?=$info->curr_working_place;?></b></td>					    
					  </tr>
					  <tr>
					    <th class="tg-lboi">Service ID</th>
					    <td class="tg-0pky"><b><?=$info->member_no;?></b></td>
					    <th class="tg-lboi">Mobile No</th>
					    <td class="tg-0pky"><b><?=$info->phone;?></b></td>
					  </tr>
					</table>
					<?php } ?>
            </div>

			<?php if($info){ ?>
		        <div class="col-md-12">
		        	<br><br><br>
		          <!-- Custom Tabs -->
		          <div class="nav-tabs-custom">
		            <ul class="nav nav-tabs">
		              <li class="active"><a href="#tab_1" data-toggle="tab"><b>Project Information</b></a></li>
		              <li><a href="#tab_2" data-toggle="tab"><b>Member Details</b></a></li>
		              <li><a href="#tab_3" data-toggle="tab"><b>Signature</b></a></li>              
		            </ul>
		            <div class="tab-content">
		              <div class="tab-pane active" id="tab_1">
						<h4 align="center" style="width: 100%">Member Fee</h4>
						<table class="tg3" align="center" style="width: 70%">
						  <tr>
						    <th class="tg3-cly1">Transaction Amount</th>
						    <th class="tg3-cly1">Pay Order/ Bank DD Name</th>
						    <th class="tg3-0lax">Comment</th>
						  </tr>
						  <tr>
						    <td class="tg3-cly1">50000.00</td>
						    <td class="tg3-cly1">po-2296895</td>
						    <td class="tg3-0lax">gfgfgfgf</td>
						  </tr>
						</table>



						<h4 align="center" style="width: 100%">Moghbazar Project</h4>
						<table class="tg1" align="center" style="width: 70%">
						  <tr>
						    <th class="tg1-cly1">Share Amount</th>
						    <th class="tg1-cly1">Transaction Amount</th>
						    <th class="tg1-cly1">Pay Order/ Bank DD Name</th>
						    <th class="tg1-0lax">Comment</th>
						  </tr>
						  <tr>
						    <td class="tg1-cly1">5</td>
						    <td class="tg1-cly1">50000.00</td>
						    <td class="tg1-cly1">PO-985658</td>
						    <td class="tg1-0lax">fggfg hgh</td>
						  </tr>
						</table>
		              </div>

		              <!-- /.tab-pane -->
		            <div class="tab-pane" id="tab_2">
		             <h4 align="center" style="width: 100%">Personal Information</h4>
		             <table class="tg4" align="center" style="width: 70%" >
		             
		              <tr>
		                <th class="tg4-9czc">Name(Bangla)</th>
		                <th class="tg4-0pky"><?=$info->name_bn?></th>
		                <th class="tg4-0pky" rowspan="4" style="width: 150px;">
		                  
		                  <?php 
		                  $img_path = base_url().'member_img/';
		                  $blank_img= $img_path.'blank_profile.jpg';
		                  
		                  if($info->image_file != NULL){
		                    $src= $img_path.$info->image_file;
		                    echo "<img src='$src' class='img-responsive' width='180' style='border:1px solid #ccc; padding:3px'>";
		                  }else{
		                    echo "<img src='$blank_img' class='img-responsive' width='180' style='border:1px solid #ccc; padding:3px'>";
		                  }
		                  ?>
		                </th>
		              </tr>



		              <tr>
		                <td class="tg4-9czc">Name(English)</td>
		                <td class="tg4-0pky"><?=$info->first_name?></td>
		              </tr>

		              <tr>
		                <td class="tg4-9czc">Father Name(Bangla)</td>
		                <td class="tg4-0pky"><?=$info->father_name_bn?></td>
		              </tr>

		              <tr>
		                <td class="tg4-9czc">Father Name(English)</td>
		                <td class="tg4-0pky"><?=$info->father_name_en?></td>
		              </tr>

		              <tr>
		                <td class="tg4-9czc">Mother Name(Bangla)</td>
		                <td class="tg4-0pky" colspan="2"><?=$info->mother_name_bn?></td>
		              </tr>

		              <tr>
		                <td class="tg4-9czc">Mother Name(English)</td>
		                <td class="tg4-0pky" colspan="2"><?=$info->mother_name_en?></td>
		              </tr>
		              <tr>
		                <td class="tg4-9czc">Date of Birth</td>
		                <td class="tg4-0pky" colspan="2"><?=$info->dob?></td>
		              </tr>
		              <tr>
		                <td class="tg4-9czc">Religion</td>
		                <td class="tg4-0pky" colspan="2"><?=$info->religion_name_en?></td>
		              </tr>


		              <tr>
		                <td class="tg4-9czc">Gender</td>
		                <td class="tg4-0pky" colspan="2"><?=$info->gender?></td>
		              </tr>
		              <tr>
		                <td class="tg4-9czc">Blood Group</td>
		                <td class="tg4-0pky" colspan="2"><?=$info->bg_name_en?></td>
		              </tr>
		              <tr>
		                <td class="tg4-9czc">Marital Status</td>
		                <td class="tg4-0pky" colspan="2"><?=$info->ms_name_en?></td>
		              </tr>
		              <tr>
		                <td class="tg4-9czc">Spouse Name</td>
		                <td class="tg4-0pky" colspan="2"><?=$info->spouse_name?></td>
		              </tr>
		              <tr>
		                <td class="tg4-9czc">Personal Phone</td>
		                <td class="tg4-0pky" colspan="2"><?=$info->phone?></td>
		              </tr>
		              <tr>
		                <td class="tg4-9czc">Residance Phone</td>
		                <td class="tg4-0pky" colspan="2"><?=$info->phone_house?></td>
		              </tr>
		              <tr>
		                <td class="tg4-9czc">Office Phone</td>
		                <td class="tg4-0pky" colspan="2"><?=$info->phone_office?></td>
		              </tr>
		              <tr>
		                <td class="tg4-9czc">Present Address</td>
		                <td class="tg4-0pky" colspan="2"><?=$info->present_address?></td>
		              </tr>
		            </table>

		            <br>
		            <table class="tg4" align="center" style="width: 70%">
		             <h4 align="center" style="width: 100%">Permanent Address</h4>
		              <tr>
		                <td class="tg4-9czc">Village/House No</td>
		                <td class="tg4-0pky" colspan="2"><?=$info->per_village_house?></td>
		              </tr>
		              <tr>
		                <td class="tg4-9czc">Road/Block/Sector</td>
		                <td class="tg4-0pky" colspan="2"><?=$info->per_road_block?></td>
		              </tr>
		              <tr>
		                <td class="tg4-9czc">Division</td>
		                <td class="tg4-0pky" colspan="2"><?=$info->div_name_en?></td>
		              </tr>
		              <tr>
		                <td class="tg4-9czc">District</td>
		                <td class="tg4-0pky" colspan="2"><?=$info->dis_name_en?></td>
		              </tr>
		              <tr>
		                <td class="tg4-9czc">Upazila/Thana</td>
		                <td class="tg4-0pky" colspan="2"><?=$info->upa_name_en?></td>
		              </tr>
		              <tr>
		                <td class="tg4-9czc">Postal Code</td>
		                <td class="tg4-0pky" colspan="2"><?=$info->per_post_code?></td>
		              </tr>
		          </table>

		          <br>
		           <table class="tg4" align="center" style="width: 70%">
		            
		            <h4 align="center" style="width: 100%">Attachment Document Information</h4>

		            <tr>
		              <td class="tg4-9czc">Birth Certificate No:</td>
		              <td class="tg4-0pky" colspan="2"><?=$info->birth_certificate_no?></td>
		            </tr>
		            <tr>
		              <td class="tg4-9czc">National ID No:</td>
		              <td class="tg4-0pky" colspan="2"><?=$info->national_id?></td>
		            </tr>
		            <tr>
		              <td class="tg4-9czc">Passport No:</td>
		              <td class="tg4-0pky" colspan="2"><?=$info->passport_no?></td>
		            </tr>
		            <tr>
		              <td class="tg4-9czc">Tin No:</td>
		              <td class="tg4-0pky" colspan="2"><?=$info->tin_no?></td>
		            </tr>
		            <tr>
		              <td class="tg4-9czc">Driving License No:</td>
		              <td class="tg4-0pky" colspan="2"><?=$info->driving_license_no?></td>
		            </tr>
		            <tr>
		              <td class="tg4-9czc">Other Information</td>
		              <td class="tg4-0pky" colspan="2"><?=$info->attach_other_info?></td>
		            </tr>
		          </table>

			       <br>
		           <table class="tg4" align="center" style="width: 70%">
			          
		             <h4 align="center" style="width: 100%">Official Information</h4>
		            
		            <tr>
		              <td class="tg4-9czc">MEMBER ID</td>
		              <td class="tg4-0pky" colspan="2"><?=$info->member_id?></td>
		            </tr>
		            <tr>
		              <td class="tg4-9czc">Batch No</td>
		              <td class="tg4-0pky" colspan="2"><?=$info->batch_name_en?></td>
		            </tr>
		            <tr>
		              <td class="tg4-9czc">Joining Date</td>
		              <td class="tg4-0pky" colspan="2"><?=$info->join_date?></td>
		            </tr>
		            <tr>
		              <td class="tg4-9czc">Current Designation</td>
		              <td class="tg4-0pky" colspan="2"><?=$info->desig_name_en?></td>
		            </tr>
		            <tr>
		              <td class="tg4-9czc">Current Working Place</td>
		              <td class="tg4-0pky" colspan="2"><?=$info->curr_working_place?></td>
		            </tr>
		          </table>

		          <br>
		          <table class="tg4" align="center" style="width: 70%">
		            <h4 align="center" style="width: 100%">Emergency Contact Information</h4>

		            <tr>
		              <td class="tg4-9czc">Contact Name</td>
		              <td class="tg4-0pky" colspan="2"><?=$info->emg_contact_name?></td>
		            </tr>
		            <tr>
		              <td class="tg4-9czc">Contact Number</td>
		              <td class="tg4-0pky" colspan="2"><?=$info->emg_contact_no?></td>
		            </tr>
		            <tr>
		              <td class="tg4-9czc">Contact Email</td>
		              <td class="tg4-0pky" colspan="2"><?=$info->emg_contact_email?></td>
		            </tr>
		            <tr>
		              <td class="tg4-9czc">Contact Address</td>
		              <td class="tg4-0pky" colspan="2"><?=$info->emg_contact_address?></td>
		            </tr>
		          </table>



		              </div>
		              <!-- /.tab-pane -->
		              <div class="tab-pane" id="tab_3">
		               

		                <?php 
		                  $img_path = base_url().'signature_img/';
		                  $blank_img= $img_path.'blank_profile.jpg';
		                  
		               
		             	    $src= $img_path.$info->signiture_file;
		                    echo "<img src='$src' class='img-responsive' width='180' style='border:1px solid #ccc; padding:3px'>";
		                 
		                  ?>
		              </div>
		              <!-- /.tab-pane -->
		            </div>
		            <!-- /.tab-content -->
		          </div>
		          <!-- nav-tabs-custom -->
		        </div>

			<?php } ?>

          <!-- /.box-body -->
        <!-- <?php echo form_close();?> -->
      	  </div>
      <!-- /.box -->
   	  </div>
    </div>
  </div>
  <!-- /.row -->

</section>
<!-- /.content -->
