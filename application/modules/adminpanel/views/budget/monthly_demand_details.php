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
               <h3 class="box-title"><?=$meta_title; ?></h3>
               <!-- <a href="<?=base_url('adminpanel/event/edit/'.$info->id)?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> Edit Event</a>           -->
               <a href="<?=base_url('adminpanel/budget/monthly_demand')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> All Data</a>   
               <a href="javascript:void();" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;" onclick="printDiv('printableArea')"> Print </a> 
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

               <div class="row" id="printableArea">
                  <style type="text/css">
                     .tg  {border-collapse:collapse;border-spacing:0; width: 500px;}
                     .tg td{font-family:Arial, sans-serif;font-size:14px;padding:4px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                     .tg th{font-family:Arial, sans-serif;font-size:14px;font-weight:normal;padding:4px 5px;border-style:solid;border-width:1px;overflow:hidden;word-break:normal;border-color:black;}
                     .tg .tg-cly1{text-align:left;vertical-align:middle}
                     .tg .tg-gg7l{background-color:#efefef;text-align:left;vertical-align:middle}
                  </style>
                  <div class="col-md-12">
                     <table class="tg" align="center">
                        <tr>
                           <th class="tg-gg7l">Budget Title</th>
                           <td class="tg-cly1"><?=$info->title?></td>
                           <th class="tg-gg7l">Date</th>
                           <td class="tg-cly1"><?=date('d, M Y', strtotime($info->created));?></td>
                        </tr>
                        <tr>
                           <th class="tg-gg7l">Budget Description</th>
                           <td class="tg-cly1" colspan="3"><?=$info->description?></td>
                        </tr>
                     </table>
                  </div> 
                  <div class="col-md-12">
                     <table id="example1" class="table table-bordered table-responsive">
                        <thead>
                           <tr>
                              <th>SL</th>
                              <th>Product Name</th>
                              <th>Quentity</th>
                           </tr>
                        </thead>
                        <tbody>
                           <?php 
                           $sl=0;
                           foreach ($item_results as $row) { 
                              $sl++;
                              ?>
                              <tr>
                                 <td><?=$sl;?></td>                           
                                 <td><?=$row->item_name;?></td>                 
                                 <td><?=$row->item_count;?></td>
                              </tr>
                              <?php 
                           } 
                           ?>
                        </tbody>
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
