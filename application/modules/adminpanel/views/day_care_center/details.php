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
          <h3 class="box-title">Details News</h3>
          <a href="<?=base_url('adminpanel/news/edit/'.$info->id)?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> Edit News</a>          
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
                  <dt>News Name Bangla</dt>
                    <dd><?=$info->news_title_bn?></dd>
                  <dt>News Name English</dt>
                    <dd><?=$info->news_title_en?></dd>  
                  <dt>News Description Bangla</dt>
                    <dd><?=$info->news_description_bn?></dd>
                  <dt>News Description English</dt>
                    <dd><?=$info->news_description_en?></dd>
                </dl>                 
              </div>

              <div class="col-md-5">
                <dl class="dl-horizontal">
                  
                  <dt>Image</dt>
                    <dd>
                      <?php 
                      $img_path = base_url().'news_img/';
                      if($info->image_file != NULL){
                              $src= $img_path.$info->image_file;
                              echo "<img src='$src' class='img-responsive'>";
                          }
                      ?>
                    </dd>                 
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
