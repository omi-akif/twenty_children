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
               <h3 class="box-title">Add Event</h3>
               <a href="<?=base_url('adminpanel/budget/monthly_demand')?>" class="btn btn-info btn-xs pull-right" style="margin-left: 15px;"> All Data</a>                    
            </div>        
            <?php echo form_open_multipart("adminpanel/budget/monthly_demand_add");?>
            <div class="box-body">
               <div id="infoMessage"><?php //echo $message;?></div>
               <div><?php //echo validation_errors(); ?></div>
               <?php if($this->session->flashdata('success')):?>
                  <div class="alert alert-success">
                     <a class="close" data-dismiss="alert">&times;</a>
                     <?php echo $this->session->flashdata('success');;?>
                  </div>
               <?php endif; ?>

               <div class="row form-row">
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>Monthly Demand Budget Title</label>
                        <div><?php echo form_error('title'); ?></div>
                        <input type="text" class="form-control" name="title" value="<?=set_value('title')?>">
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label>Monthly Demand Budget Details</label>
                        <div><?php echo form_error('description'); ?></div>
                        <input type="text" class="form-control" name="description" value="<?=set_value('description')?>">
                     </div>
                  </div>
               </div>

               <div class="row form-row">
                  <div class="col-md-12 appointmentDiv"> 
                     <h4 style="text-align: center;">Monthly Demand List</em></h4>
                     <style type="text/css">
                        #appRowDiv td{padding: 5px; border-color: #ccc;}
                        #appRowDiv th{padding: 5px;text-align:center;border-color: #ccc; color: black;}                        
                     </style>                              
                     <div class="col-md-12" >
                        <table border="1" id="appRowDiv" style="border:1px solid #a09e9e; width: 700px; margin: 0 auto;">
                           <tr>
                              <th width="20%">Item Name <span class="required">*</span></th>
                              <th width="20%">Quantity</th>
                              <th width="8%">  </th>
                           </tr>
                           <tr></tr>
                        </table>
                        <div style="width: 100px; margin: 10px auto;">
                           <a href="javascript:void();" id="addRow"  class="label label-success pull-right" style="display: block; padding: 5px;  border:1px solid black;"> <i  class="fa fa-plus-circle"></i> Add More</a>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
            <!-- /.box-body -->

            <div class="box-footer">    
               <?php //echo form_input($user_id);?>        
               <?php echo form_submit('submit', 'Save', "class='btn btn-primary pull-right'"); ?>
            </div>
            <?php echo form_close();?>
         </div>
         <!-- /.box -->
      </div>
   </div>
   <!-- /.row -->

</section>
<!-- /.content -->

<script>
   $(document).ready(function() {     
      var i;
      for (i = 0; i < 27; i++) {
         addNewRow(i);
      }
   });

   // Add multiple person
   $("#addRow").click(function(e) {
      addNewRow('new');
   }); 
   //remove row
   function removeRow(id){ 
      $(id).closest("tr").remove();
   }
   //add row function
   function addNewRow(key){
      var arrayData = ["হ্যান্ড ওয়াশ", "রিফিল প্যাক", "বেবি পাউডার (১০০ মি. গ্রা.)", "বেবি লোশন (১০০ মি. গ্রা.)", "বেবি শ্যাম্পু (১০০ মি. গ্রা.)", "বেবি সোপ (৪০ মি. গ্রা.)", "অলিভ অয়েল (৫০০ মি. গ্রা.)", "ভ্যাসলিন (১৫ মি. গ্রা.)", "সরিষার তেল (৫০০ মি. গ্রা.)", "ভিম বার", "লিকুইড ডিশ ওয়াশ", "ওয়াশিং পাউডার (৫০০ মি. গ্রা.)", "লাইজল (৫০০ মি. লি.)", "হারপিক", "হারপিক পাউডার (৫০০ গ্রাম)", "ওডোনিল", "ফেসিয়াল টিস্যু", "ন্যাপকিন টিস্যু", "টয়লেট টিস্যু", "অ্যারোসল (৮৭৫ মি. লি.)", "এয়ার ফ্রেশনার", "ডেটল (১ লিটার)", "ফিনাইল (১ লিটার)", "ফুলের ঝাড়ু", "ঝুল ঝাড়ু", "মব", "শলার ঝাড়ু"];
      // alert(cars[1]);
      var res = (key !== 'new') ? arrayData[key] : '';
      var res1 = (key !== 'new') ? 1 : '';

      var items = '';
      items+= '<tr>';
      items+= '<td><input name="item_name[]" value="'+ res +'" type="text" class="form-control input-sm"></td>';
      items+= '<td><input name="item_count[]" value="'+ res1 +'" type="text" class="form-control input-sm"></td>';
      items+= '<td> <a href="javascript:void();" class="label label-warning" onclick="removeRow(this)"> <i class="fa fa-minus-circle"></i> Remove </a></td>';
      items+= '</tr>';

      $('#appRowDiv tr:last').after(items);
      //scout_id_select2_dd();
   } 
</script>
