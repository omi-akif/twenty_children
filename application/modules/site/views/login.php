<div class="row">
   <?php $this->load->view('frontend/right_side_bar'); ?>   
   
   <div class="col-md-9 main-content"> 
      <div class="col-md-8 col-sm-10 col-md-offset-2 col-sm-offset-3"> 
         <fieldset class="scheduler-border">
            <legend class="scheduler-border">লগইন ইনফরমেশন</legend>
            <?php echo form_open("login"); ?>
            <div id="infoMessage"><?php echo $message;?></div>
            
            <?php if($this->session->flashdata('error')):?>
               <div class="alert alert-warning">
                  <a class="close" data-dismiss="alert">&times;</a>
                  <?php echo $this->session->flashdata('error');?>
               </div>
            <?php endif; ?>

            <?php if ($login_error != "") { ?>
            <div class="alert alert-danger">
               <a class="close" data-dismiss="alert">&times;</a>
               <?php echo $login_error; ?>
            </div>
            <?php } ?>

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
               <div class="row form-row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label>ইমেইল এড্রেস</label>
                        <input type="email" name="identity" value="<?=set_value('identity')?>" class="form-control" required>
                     </div>
                  </div>
               </div>

               <div class="row form-row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <label>পাসওয়ার্ড</label>
                        <input type="password" name="password" class="form-control" placeholder="" required>
                     </div>
                  </div>
               </div>

               <div class="row form-row">
                  <div class="col-md-12">
                     <div class="form-group">
                        <input type="submit" name="submit" value="লগইন" class="btn btn-primary pull-right">
                     </div>
                  </div>
               </div>
            </div>
            <?php echo form_close(); ?>
         </fieldset>
      </div> 
   </div>
   
</div>