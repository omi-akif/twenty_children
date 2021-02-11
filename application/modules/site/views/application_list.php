<!-- CONTENT AREA -->
<div class="content-area">

   <!-- BREADCRUMBS -->
   <section class="page-section breadcrumbs text-center">
      <div class="container">
         <div class="page-header">
            <h1><?=$meta_title?></h1>
         </div>
      </div>
   </section>
   <!-- /BREADCRUMBS -->

   <!-- PAGE -->
   <section class="page-section color" style="min-height: 344px;">
      <div class="container">

         <div class="row">

            <div class="col-md-10 col-sm-6 col-md-offset-1 col-sm-offset-1" style="">
               <div class="col-md-3">
                  <?php $this->load->view('left_menu');?>
               </div>

               <div class="col-md-9">

                  <!-- Application list Start -->
                  <table class="table table-bordered applications-list">
                     <caption>আবেদনের তালিকা</caption>
                     <tbody>
                        <tr>
                           <th>ক্রমিক নং </th>
                           <th>তারিখ</th>
                           <th>ডে কেয়ার নাম</th>
                           <th>শিশুর নাম</th>
                        </tr>
                     </tbody>

                     <?php
                        $sl=0;                     
                        foreach ($results as $row) { 
                        $sl++;   
                     ?>
                     <tbody>
                        <tr>
                           <td><?=$sl?></td>
                           <td><?=$row->created?></td>
                           <td><?=$this->Site_model->get_daycare_name($row->day_cares_id)?></td>
                           <td><?=$row->child_name?></td>
                           <!-- <td style="font-weight:600"><a href="javascript:void()">Edit</a> || <a href="javascript:void()">View</a></td> -->
                        </tr>
                     </tbody>
                     <?php } ?>
                  </table>
                  <!-- Application list close -->
               </div>
            </div>
         </div>    
      </div>
   </section>


</div>
    <!-- /CONTENT AREA