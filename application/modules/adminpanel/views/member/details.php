<style type="text/css">
              .tg  {border-collapse:collapse;border-spacing:0; width: 100%}
              .tg td{font-family:Arial, sans-serif;font-size:14px;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
              .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:5px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
              .tg .tg-x5m0{background-color:#c0c0c0;text-align:right;vertical-align:top;font-weight: bold;}
              .tg .tg-kftd{background-color:#efefef;text-align:left;vertical-align:top; }
              .tg .tg-9czc{background-color:#c0c0c0;text-align:right;vertical-align:middle; width: 163px!important; font-weight: bold;}
              .tg .tg-0lax{text-align:left;vertical-align:top;width: 200px;}
              .tg .tg-0pky{background-color:#efefef;text-align:left;vertical-align:top;}
              .tg .tg-9czc{background-color:#c0c0c0;text-align:right;vertical-align:middle; width: 236px!important; font-weight: bold;}
</style>

<section class="content-header">
  <h1> <?=$meta_title; ?> </h1>
  <ol class="breadcrumb">
    <li><a href="<?=base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><?=$meta_title; ?></li>
  </ol>
</section>

<section class="content">

  <div class="row">
    <div class="col-md-12">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title">Details Member</h3>
          <a href="<?=base_url('adminpanel/member/complete_status/'.$info->id)?>" target="_blank" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;" onclick="return confirm('Are you sure?')">Completed</a>
          <!-- <a href="<?=base_url('adminpanel/member/edit/'.$info->id)?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> Edit </a>           -->
        </div>        
          <div class="box-body">
            <div id="infoMessage"><?php //echo $message;?></div>
            <div><?php //echo validation_errors(); ?></div>
            <?php if($this->session->flashdata('success')):?>
                <div class="alert alert-success">
                    <a class="close" data-dismiss="alert">&times;</a>
                    <?php echo $this->session->flashdata('success');?>
                </div>
            <?php endif; ?>

        <div class="row">
          <div class="col-md-6">
            <table class="tg">
             <!--  <caption style="color: #ffffff;font-weight: 700; background-color: #10192d;padding: 5px;">MY PROFILE</caption> -->
              <caption style="color: #ffffff;font-weight: 700; background-color: #10192d;padding: 5px;">Member Information</caption>

              <tr>
                <th class="tg-9czc">Child Name</th>
                <th class="tg-0pky"><?=$info->child_name?></th>

                <th class="tg-0pky" rowspan="4" style="width: 150px;">   
              
                <?php 
                      $img_path = base_url().'assets/images/member_img/';
                      if($info->image_file != NULL){
                        $src= $img_path.$info->image_file;
                        echo "<img src='$src' height='150'>";
                     }
                ?>

                </th>                
              </tr>

              <tr>
                <th class="tg-9czc">Date Of Birth</th>
                <th class="tg-0pky"><?=$info->child_dob?></th>                
              </tr>
              <tr>
                <td class="tg-9czc">Gender</td>
                <td class="tg-0pky"><?=$info->gender?></td>
              </tr>
              <tr>
                <td class="tg-9czc">Age</td>
                <td class="tg-0pky"><?=$info->child_age?></td>
              </tr>
              <tr>
                <td class="tg-9czc">Weight</td>
                <td class="tg-0pky"><?=$info->child_weight?></td>
              </tr>
              <tr>
                <td class="tg-9czc">Height</td>
                <td class="tg-0pky"><?=$info->child_height?></td>
              </tr>
              <tr>
                <td class="tg-9czc">Birth Mark</td>
                <td class="tg-0pky"><?=$info->birth_mark?></td>
              </tr>
              <tr>
                <td class="tg-9czc">Birth Certificate No</td>
                <td class="tg-0pky"><?=$info->birth_certificate_no?></td>
              </tr>
              <tr>
                <td class="tg-9czc">Describe child particular food problem</td>
                <td class="tg-0pky"><?=$info->describe_food?></td>
              </tr>
              <tr>
                <td class="tg-9czc">Describe health problem</td>
                <td class="tg-0pky"><?=$info->describe_health_problem?></td>
              </tr>

              
              <!-- <h4 style="color: #ffffff;font-weight: 700; background-color: #10192d;padding: 5px;">Child Vaccination Information</h4> -->
              <tr>
                <td class="tg-9czc">bcg</td>
                <td class="tg-0pky"><?=$info->bcg?></td>
              </tr>
              <tr>
                <td class="tg-9czc">penta</td>
                <td class="tg-0pky"><?=$info->penta?></td>
              </tr>
              <tr>
                <td class="tg-9czc">pcb</td>
                <td class="tg-0pky"><?=$info->pcb?></td>
              </tr>
              <tr>
                <td class="tg-9czc">opb</td>
                <td class="tg-0pky"><?=$info->opb?></td>
              </tr>
              <tr>
                <td class="tg-9czc">ipb</td>
                <td class="tg-0pky"><?=$info->ipb?></td>
              </tr>
              <tr>
                <td class="tg-9czc">mr</td>
                <td class="tg-0pky"><?=$info->mr?></td>
              </tr>
              <tr>
                <td class="tg-9czc">ham</td>
                <td class="tg-0pky"><?=$info->ham?></td>
              </tr>
            </table>
        </div>

        <div class="col-md-6">

          <table class="tg">
            <caption style="color: #ffffff;font-weight: 700; background-color: #10192d;padding: 5px;">Registration Information</caption>

            <tr>
              <td class="tg-9czc">Child Mother Name:</td>
              <td class="tg-0pky" colspan="2"><?=$info->child_mother_name?></td>
            </tr>
            <tr>
              <td class="tg-9czc">Child Mother National No:</td>
              <td class="tg-0pky" colspan="2"><?=$info->child_mother_national_no?></td>
            </tr>
            <tr>
              <td class="tg-9czc">Child Father Name:</td>
              <td class="tg-0pky" colspan="2"><?=$info->child_father_name?></td>
            </tr>
            <tr>
              <td class="tg-9czc">Child Father National No:</td>
              <td class="tg-0pky" colspan="2"><?=$info->child_father_national_no?></td>
            </tr>
            <tr>
              <td class="tg-9czc">Child Parents Name:</td>
              <td class="tg-0pky" colspan="2"><?=$info->child_parents_name?></td>
            </tr>
            <tr>
              <td class="tg-9czc">Child Parents Ph No:</td>
              <td class="tg-0pky" colspan="2"><?=$info->child_parents_ph_no?></td>
            </tr>

            <tr>
              <td class="tg-9czc">Child Parents National No:</td>
              <td class="tg-0pky" colspan="2"><?=$info->child_parents_national_no?></td>
            </tr>

            <tr>
              <td class="tg-9czc">Child Mother Designation:</td>
              <td class="tg-0pky" colspan="2"><?=$info->child_mother_designation?></td>
            </tr>
            <tr>
              <td class="tg-9czc">Child Mother Working Place:</td>
              <td class="tg-0pky" colspan="2"><?=$info->child_mother_working_place?></td>
            </tr>
            <tr>
              <td class="tg-9czc">Child Mother Ph No:</td>
              <td class="tg-0pky" colspan="2"><?=$info->child_mother_ph_no?></td>
            </tr>
            <tr>
              <td class="tg-9czc">Child Mother Total Salary:</td>
              <td class="tg-0pky" colspan="2"><?=$info->child_mother_total_salary?></td>
            </tr>
            <tr>
              <td class="tg-9czc">Child Mother Basic Salary:</td>
              <td class="tg-0pky" colspan="2"><?=$info->child_mother_basic_salary?></td>
            </tr>
            <tr>
              <td class="tg-9czc">Child Mother Pay Scale:</td>
              <td class="tg-0pky" colspan="2"><?=$info->child_mother_pay_scale?></td>
            </tr>
            <tr>
              <td class="tg-9czc">Child Mother Job Duration:</td>
              <td class="tg-0pky" colspan="2"><?=$info->child_mother_job_duration?></td>
            </tr>
            <tr>
              <td class="tg-9czc">Child Father Total Salary:</td>
              <td class="tg-0pky" colspan="2"><?=$info->child_father_total_salary?></td>
            </tr>
            <tr>
              <td class="tg-9czc">Child Father Basic Salary:</td>
              <td class="tg-0pky" colspan="2"><?=$info->child_father_basic_salary?></td>
            </tr>
            <tr>
              <td class="tg-9czc">Child Father Pay Scale:</td>
              <td class="tg-0pky" colspan="2"><?=$info->child_father_pay_scale?></td>
            </tr>
            <tr>
              <td class="tg-9czc">Child Parents Present Address:</td>
              <td class="tg-0pky" colspan="2"><?=$info->child_parents_present_address?></td>
            </tr>
            <tr>
              <td class="tg-9czc">Child Mother Parmanent Address:</td>
              <td class="tg-0pky" colspan="2"><?=$info->child_mother_permanent_address?></td>
            </tr>
            <tr>
              <td class="tg-9czc">Child Mother Parmanent Ph no:</td>
              <td class="tg-0pky" colspan="2"><?=$info->child_mother_parmanent_ph_no?></td>
            </tr>
            <tr>
              <td class="tg-9czc">Child Father Parmanent Address:</td>
              <td class="tg-0pky" colspan="2"><?=$info->child_father_permanent_address?></td>
            </tr>
            <tr>
              <td class="tg-9czc">Child Father Ph No:</td>
              <td class="tg-0pky" colspan="2"><?=$info->child_father_ph_no?></td>
            </tr>
            <tr>
              <td class="tg-9czc">Child Admit Interest:</td>
              <td class="tg-0pky" colspan="2"><?=$info->child_admit_interest?></td>
            </tr>
            <tr>
              <td class="tg-9czc">Child Number:</td>
              <td class="tg-0pky" colspan="2"><?=$info->child_number?></td>
            </tr>
          </table>
        </div>
      </div>

          </div>
          <!-- /.box-body -->
        <?php echo form_close();?>
      </div>
      <!-- /.box -->
    </div>
  </div>
  <!-- /.row -->

</section>
<!-- /.content -->
