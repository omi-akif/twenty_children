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
          <a href="<?=base_url('admin/contact/add')?>" class="btn btn-info btn-xs pull-right"> Add Contact</a>          
        </div>        

          <div class="box-body">
            <div id="infoMessage"><?php //echo $message;?></div>            
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
                  <th>Contact Title</th>
                  <th>Contact Address</th>
                  <th>Contact Phone</th>
                  <th>Contact Email</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php 
              $sl=0;
              if($results){
                foreach ($results as $row) { 
                  $sl++;
                
                  $status = $row->status==1?'<span class="pull-right badge bg-green">Enable</span>':'<span class="badge bg-yellow">Disable</span>';
              ?>
              <tr>
                <td><?=$sl;?></td>
                <td><?=$row->title;?></td>
                <td><?=$row->address;?></td>
                <td><?=$row->phone;?></td>                
                <td><?=$row->email;?></td>
                <td><?=$status;?></td>
                <td> 
                  <div class="btn-group">
                      <button type="button" class="btn btn-success btn-xs">Action</button>
                      <button type="button" class="btn btn-success btn-xs dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <!-- <li><a href="<?=base_url('admin/contact/details/'.$row->id)?>">Details</a></li> -->
                        <li><a href="<?=base_url('admin/contact/edit/'.$row->id)?>">Edit</a></li>
                        <li><a href="<?=base_url('admin/contact/delete/'.$row->id)?>" onclick="return confirm('Are you sure you want to delete this Contact?');">Delete</a></li>
                      </ul>
                    </div>
                </td>
              </tr>
              <?php 
                } 
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
