<div class="row">
   <?php $this->load->view('frontend/right_side_bar');?>   
   <div class="col-md-9 main-content">
   
   <section>
   <!-- Division -->
      <div class="row"> 

         <div class="col-md-3">
            <h4 style="margin-left:50px">বিভাগ</h4>
            <select name="division" id="division_id" class="form-control">
               <option value="">All</option>
               <option value="">Dhaka</option>
               <option value="">Sylhet</option>
               <option value="">Chittagong</option>
               <option value="">Mymenshing</option>
               <option value="">Khulna</option>
            </select>
         </div> 

         <div class="col-md-3">
            <h4 style="margin-left:50px">জেলা</h4>
            <select name="district" id="district_id" class="form-control">
               <option value="">All</option>
               <option value="">2</option>
               <option value="">3</option>
               <option value="">4</option>
               <option value="">5</option>
            </select>
         </div>

         <div class="col-md-3">

            <h4 style="margin-left:50px">উপাযেলা</h4>
            <select name="upazila" id="upazila_id" class="form-control">
               <option>All</option>
               <option>2</option>
               <option>3</option>
               <option>4</option>
               <option>5</option>
            </select>
         </div> 

         <div class="col-md-3">
            <button style="margin-top:38px" type="button" class="btn btn-success">Success</button>
         </div>

      </div>


   <br><br>
   </section>
      <table class="table table-bordered">
         <tr>
            <th>ডে কেয়ার</th>
            <th>ঠিকানা</th>
            <th>দায়িত্বপ্রাপ্ত ব্যক্তির নাম</th>
            <th>পদবি</th>
            <th>মোবাইল</th>
         </tr>

         <tr>
            <td>demo</td>
            <td>demo</td>
            <td>demo</td>
            <td>demo</td>
            <td>demo</td>
         </tr>
      </table>

   <section>



   </section>


   </div>
</div>