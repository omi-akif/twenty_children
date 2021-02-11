<section class="content-header">
  <h1> <?=$meta_title; ?> </h1>
  <ol class="breadcrumb">
    <li><a href="<?=base_url('admin/dashboard');?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
    <li class="active"><?=$meta_title; ?></li>
  </ol>
</section>

<section class="content">

  <div class="row">
    <div class="col-md-6">
      <div class="box box-primary">
        <div class="box-header with-border">
          <h3 class="box-title"><?php echo $meta_title?> for <?=$user->username;?> </h3>
        </div>        
        <?php echo form_open(uri_string());?>
        <div id="infoMessage"><?php echo $message;?></div>

        <div class="box-body">
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                  <label><?php echo lang('edit_user_fname_label', 'first_name');?></label>
                  <?php echo form_input($first_name);?>
              </div>

              <div class="form-group">
                  <label><?php echo lang('edit_user_lname_label', 'last_name');?></label>
                  <?php echo form_input($last_name);?>
              </div>

              <div class="form-group">
                  <label>Phone Number</label>
                  <?php echo form_input($phone);?>
              </div>

              <!-- <div class="form-group">
                  <label><?php echo lang('edit_user_company_label', 'company');?></label>
                  <?php echo form_input($company);?>
              </div>     -->

              <div class="form-group">
                  <label><?php echo lang('edit_user_password_label', 'password');?></label>
                  <?php echo form_input($password);?>
              </div>

              <div class="form-group">
                  <label><?php echo lang('edit_user_password_confirm_label', 'password_confirm');?></label>
                  <?php echo form_input($password_confirm);?>
              </div>

              <?php if ($this->ion_auth->is_admin()): ?>
                <div class="form-group">
                

                  <h3><?php echo lang('edit_user_groups_heading');?></h3>
                  <?php foreach ($groups as $group):?>
                      <div class="checkbox">
                        <?php
                            $gID=$group['id'];
                            $checked = null;
                            $item = null;
                            foreach($currentGroups as $grp) {
                                if ($gID == $grp->id) {
                                    $checked= ' checked="checked"';
                                break;
                                }
                            }
                        ?>
                        <label>
                          <input type="checkbox" name="groups[]" value="<?php echo $group['id'];?>"<?php echo $checked;?>>
                          <?php echo htmlspecialchars($group['description'],ENT_QUOTES,'UTF-8');?>
                        </label>
                      </div>
                  <?php endforeach?>
                  </div>
                <?php endif; ?>
                

                </div>
            </div>
        </div>

        <div class="box-footer">    
          <?php echo form_hidden('id', $user->id);?>
          <?php echo form_hidden($csrf); ?>
  
          <?php echo form_submit('submit', lang('edit_user_submit_btn'), "class='btn btn-primary pull-right'"); ?>
        </div>
        <?php echo form_close();?>

      </div> <!-- /.box -->
    </div>
  </div> <!-- /.row -->

</section> <!-- /.content -->

