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
               <h3 class="box-title"><?=$meta_title; ?></h3>
               <a href="<?=base_url('adminpanel/budget/monthly_demand_add')?>" class="btn btn-info btn-xs pull-right"> Add Monthly Demand</a>          
            </div>        

            <div class="box-body">
               <!-- <div id="infoMessage"><?php //echo $message;?></div>             -->
               <?php if($this->session->flashdata('success')):?>
                  <div class="alert alert-success">
                     <a class="close" data-dismiss="alert">&times;</a>
                     <?php echo $this->session->flashdata('success');?>
                  </div>
               <?php endif; ?>

               <table id="example1" class="table table-bordered table-striped table-responsive">
                  <thead>
                     <tr>
                        <th>SL</th>
                        <th>Date</th>
                        <th>Title</th>
                        <th>Total Item</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php 
                     $sl=0;
                     foreach ($results as $row) { 
                        $sl++;

                        // $display_home = $row->display_home==1?'<span class="pull-right badge bg-green">Yes</span>':'<span class="badge bg-yellow">No</span>';
                        // $status = $row->status==1?'<span class="pull-right badge bg-green">Enable</span>':'<span class="badge bg-yellow">Disable</span>';
                        ?>
                        <tr>
                           <td><?=$sl;?></td>
                           <td><?=date('d, M Y', strtotime($row->created));?></td> 
                           <td><?=$row->title;?></td>
                           <td><?=$row->total_item_count;?></td>                 
                           <td> 
                           <a href="<?=base_url('adminpanel/budget/monthly_demand_details/'.$row->id)?>" class="btn btn-success btn-xs">Details</a>
                           <!-- <a href="<?=base_url('adminpanel/budget/edit/'.$row->id)?>"  class="btn btn-success btn-xs">Print</a> -->
                           </td>
                        </tr>
                        <?php 
                     } 
                     ?>
                  </tbody>
               </table>
            </div>
            <!-- /.box-body -->

            <div class="box-footer">                
            </div>
         </div>
         <!-- /.box -->
      </div>
   </div>
   <!-- /.row -->

</section>
<!-- /.content -->
