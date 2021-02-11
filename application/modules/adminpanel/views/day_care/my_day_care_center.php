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
            <div class="box-header with-border">
               <h3 class="box-title">Details News</h3>
               <a href="<?=base_url('adminpanel/day_care/edit/'.$info->id)?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> Edit Information</a>          
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
                  <div class="col-md-7">
                     <dl class="dl-horizontal">
                        <dt>Day Care Name</dt>
                        <dd><?=$info->title?></dd>
                        <dt>Day Care Area</dt>
                        <dd><?=$info->area?></dd>  
                        <dt>Day Care Description</dt>
                        <dd><?=$info->description?></dd>
                     </dl>                 
                  </div>

                  <div class="col-md-5">
                     <dl class="dl-horizontal">
                        <dt>Officer Name</dt>
                        <dd><?=$info->officer_name?></dd>
                        <dt>Address</dt>
                        <dd><?=$info->address?></dd>
                        <dt>Mobile No</dt>
                        <dd><?=$info->mobile_no?></dd>
                        <dt>Phone Number</dt>
                        <dd><?=$info->phone?></dd>
                        <dt>Email</dt>
                        <dd><?=$info->email?></dd>
                        <dt>Latitude</dt>
                        <dd><?=$info->latitude?></dd>        
                        <dt>Longitude</dt>
                        <dd><?=$info->longitude?></dd>          
                     </dl>

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
