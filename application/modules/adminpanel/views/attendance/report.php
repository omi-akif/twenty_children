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
               <?php if($results){ ?>
               <a href="javascript:void();" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;" onclick="printDiv('printableArea')"> Print </a> 
               <?php } ?>

               <a href="<?=base_url('adminpanel/attendance/add')?>" class="btn btn-info btn-xs pull-right"> Add Attendance</a>    
                     
            </div>        

            <div class="box-body">
               <div id="infoMessage"><?php //echo $message;?></div>            
               <?php if($this->session->flashdata('success')):?>
                  <div class="alert alert-success">
                     <a class="close" data-dismiss="alert">&times;</a>
                     <?php echo $this->session->flashdata('success');?>
                  </div>
               <?php endif; ?>

               <?php echo form_open_multipart("adminpanel/attendance/report");?>
               <div class="row">
                  <div class="col-md-5">
                     <div class="form-group">
                        <label>Staff Name *</label>
                        <div><?php echo form_error('members_id'); ?></div>
                        <?php 
                        $more_attr = 'class="form-control"';
                        echo form_dropdown('members_id', $members, set_value('members_id'), $more_attr);
                        ?>
                     </div>
                  </div>
                  <div class="col-md-2">
                     <div class="form-group">
                        <label>Start Date *</label>                        
                        <div><?php echo form_error('date_start'); ?></div>
                        <input type="text" class="form-control" name="date_start" value="<?=date('Y-m-d')?>">
                     </div>
                  </div>
                  <div class="col-md-2">
                     <div class="form-group">
                        <label>End Date *</label>
                        <div><?php echo form_error('date_end'); ?></div>
                        <input type="text" class="form-control" name="date_end" value="<?=date('Y-m-d')?>">
                     </div>
                  </div>
                  <div class="col-md-1 pull-left">
                        <br>
                        <?php echo form_submit('submit', 'Search', "class='btn btn-primary pull-right'"); ?>
                   </div>
               </div>
               <?php echo form_close();?>

               <?php if($results){ ?>

               <table class="table table-bordered table-responsive" id="printableArea">
                  <thead>
                     <tr>
                        <th width="20">SL</th>
                        <th>Name</th>
                        <th>Date and Time</th>                 
                        <!-- <th>Action</th> -->
                     </tr>
                  </thead>
                  <tbody>
                     <?php 
                     $sl=0;                     
                        foreach ($results as $row) { 
                           $sl++;
                           ?>
                           <tr>
                              <td><?=$sl;?></td>                
                              <td><?=$row->child_name;?></td> 
                              <td><?=date('d F Y, h:i A', strtotime($row->time));?></td>
                           <?php /*
                           <td> 
                              <div class="btn-group">
                                 <button type="button" class="btn btn-success btn-xs">Action</button>
                                 <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                 </button>
                                 <ul class="dropdown-menu" role="menu">
                                    <!-- <li><a href="<?=base_url('adminpanel/staff/details/'.$row->id)?>">Details</a></li> -->
                                    <li><a href="<?=base_url('adminpanel/staff/edit/'.$row->id)?>">Edit</a></li>
                                    <!-- <li><a href="<?=base_url('adminpanel/staff/delete/'.$row->id)?>" onclick="return confirm('Are you sure you want to delete this data?');">Delete</a></li> -->
                                 </ul>
                              </div>
                           </td>
                           */ ?>
                        </tr>
                        <?php 
                     }                  
                  ?>
               </tbody>
            </table>
            <?php } ?>
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
