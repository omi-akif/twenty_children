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
               <a href="<?=base_url('adminpanel/doctors/add')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> Add New</a>
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
                        <th width="20">SL</th>
                        <th>Doctor Name</th>                        
                        <th>Phone No</th>
                        <th>Institute Name</th>                        
                        <th>Division</th>
                        <th>District</th>
                        <th>Upazila</th>
                        <th>Action</th>
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
                           <td><?=$row->doctor_name;?></td>
                           <td><?=$row->phone;?></td>
                           <td><?=$row->institute_name;?></td>                            
                           <td><?=$row->div_name_bn;?></td> 
                           <td><?=$row->dis_name_bn;?></td> 
                           <td><?=$row->upa_name_bn;?></td>                            
                           <td> 
                           <!-- <a href="#" class="btn btn-success btn-xs">Details</a> -->
                           <a href="<?=base_url('adminpanel/doctors/edit/'.$row->id)?>" class="btn btn-info btn-xs">Edit</a>
                           <?php /*
                              <div class="btn-group">
                                 <button type="button" class="btn btn-success btn-xs">Action</button>
                                 <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                 </button>
                                 <ul class="dropdown-menu" role="menu">
                                    <li><a href="<?=base_url('adminpanel/news/details/'.$row->id)?>">Details</a></li>
                                    <li><a href="<?=base_url('adminpanel/news/edit/'.$row->id)?>">Edit</a></li>
                                    <li><a href="<?=base_url('adminpanel/news/delete/'.$row->id)?>" onclick="return confirm('Are you sure you want to delete this News?');">Delete</a></li>
                                 </ul>
                              </div>
                              */ ?>
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
