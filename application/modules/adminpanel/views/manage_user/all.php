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
          <h3 class="box-title"><?=$meta_title; ?> </h3>
          <!-- <a href="<?=base_url('adminpanel/manage_user/add')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> Create User</a>  -->
          <!-- <a href="<?=base_url('admin/manage_user/create_group')?>" class="btn btn-info btn-xs pull-right"> Create Group</a>  -->
        </div>        

          <div class="box-body">
            <div id="infoMessage"><?php echo $message;?></div>            
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
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Username</th>
                  <th>Email Address</th>
                  <th>Status</th>
                  <th>Groups</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php 
                $sl=0;
                foreach ($users as $user):
                  $sl++;
              ?>
              <tr>
                <td><?=$sl;?></td>
                <td><?php echo htmlspecialchars($user->first_name,ENT_QUOTES,'UTF-8');?></td>
                <td><?php echo htmlspecialchars($user->last_name,ENT_QUOTES,'UTF-8');?></td>
                <td><?php echo htmlspecialchars($user->username,ENT_QUOTES,'UTF-8');?></td>
                <td><?php echo htmlspecialchars($user->email,ENT_QUOTES,'UTF-8');?></td>
                <td>
                  <?php echo ($user->active) ? anchor("adminpanel/manage_user/deactivate/".$user->id, lang('index_active_link'), array('class' => 'btn btn-warning btn-flat btn-xs')) : anchor("adminpanel/manage_user/activate/". $user->id, lang('index_inactive_link'), array('class' => 'btn btn-danger btn-flat btn-xs'));?>
                </td>
                <td>
                  <?php foreach ($user->groups as $group):?>
                    <?php //echo anchor("adminpanel/manage_user/edit_group/".$group->id, htmlspecialchars($group->name,ENT_QUOTES,'UTF-8'), array('class' => 'btn  bg-maroon btn-flat btn-xs')) ;?>
                    <span class="btn bg-maroon btn-flat btn-xs"><?php echo htmlspecialchars($group->description,ENT_QUOTES,'UTF-8'); ?></span>
                  <?php endforeach?>
                </td>
                <td><?php echo anchor("adminpanel/manage_user/edit_user/".$user->id, 'Edit User', array('class' => 'btn btn-success btn-xs')) ;?></td>                
              </tr>
              <?php endforeach;?>
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->

          <div class="box-footer">  </div>
      </div> <!-- /.box -->
    </div>
  </div> <!-- /.row -->

</section> <!-- /.content -->
