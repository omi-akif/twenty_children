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
               <!-- <a href="<?=base_url('adminpanel/member/add')?>" class="btn btn-info btn-xs pull-right"> Add Member</a>           -->
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
                        <th>Child Name</th>
                        <th>Age</th>
                        <th>Weight</th>
                        <th>Height</th>
                        <th>Mother</th>
                        <th>Designation</th>
                        <th>Working Place</th>
                        <th>Salary</th>
                        <th width="100">Action</th>
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
                           <td><?=$row->child_age;?></td>
                           <td><?=$row->child_weight;?></td>                 
                           <td><?=$row->child_height;?></td> 
                           <td><?=$row->child_mother_name;?></td>
                           <td><?=$row->child_mother_designation;?></td>
                           <td><?=$row->child_mother_working_place;?></td>
                           <td><?=$row->child_mother_total_salary;?></td>
                           <td> 
                              <div class="btn-group">
                                 <button type="button" class="btn btn-success btn-xs">Action</button>
                                 <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                 </button>
                                 <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Details</a></li>
                                    <!-- 
                                    <li><a href="<?=base_url('adminpanel/member/details_pdf/'.$row->id)?>" target="_blank">PDF Generate</a></li>
                                    <li><a href="<?=base_url('adminpanel/member/edit/'.$row->id)?>">Edit</a></li>
                                    <li><a href="<?=base_url('adminpanel/member/delete/'.$row->id)?>" onclick="return confirm('Are you sure you want to delete this Member?');">Delete</a></li> -->
                                 </ul>
                              </div>
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
