<?php 
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "day_care_others";

// #select title from  day_cares_others where type_id = 1;
// #
// $conn = new mysqli($servername, $username, $password, $dbname);

// if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//  }
 
//  $sql = 'SELECT title FROM  day_cares_others WHERE type_id = 1';
// #$sql = 'SELECT title, address, officer_name, officer_designation, mobile_no FROM  day_cares_others WHERE type_id = 1';
// $result = $conn->query($sql);


// // $sql_title = 'SELECT title FROM  day_cares_others WHERE type_id = 1';
// // $sql_address = 'SELECT address FROM  day_cares_others WHERE type_id = 1';
// // $sql_officer_name = 'SELECT officer_name FROM  day_cares_others WHERE type_id = 1';
// // $sql_officer_designation = 'SELECT officer_designation FROM  day_cares_others WHERE type_id = 1';
// // $sql_mobile_no = 'SELECT mobile_no FROM  day_cares_others WHERE type_id = 1';

// // $sql_title_result = $conn->query($sql_title);
// // $sql_address_result = $conn->query($sql_address);
// // $sql_officer_name_result = $conn->query($sql_officer_name);
// // $sql_officer_designation_result = $conn->query($sql_officer_designation);
// // $sql_mobile_no_result = $conn->query($sql_mobile_no);

// print_r($result->fetch_assoc());
// exit();

// if ($result->num_rows > 0) {
//    // output data of each row
//    while($row = $result->fetch_assoc()) 
//    {
//      echo "title: " . $row["title"]. " <br> address : " . $row["address"]. " <br> officer_name" . $row["officer_name"]. "<br> officer_designation " . $row['officer_designation'] ."<br> mobile_no" . $row['mobile_no']; 
   
//    }   

// } 
 
//  else {
//    echo "0 results";
// }
?>

<div class="row">
   <?php $this->load->view('frontend/right_side_bar');?>   
   <div class="col-md-9 main-content">
   <h4 class="lnt text-center"><?=$meta_title?></h4>
         <br>
   <section>
      <?php /*
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
   */ ?>


   </section>
      <table class="table table-bordered">
         <tr>
            <th>ডে কেয়ার</th>
            <th>ঠিকানা</th>
            <th>দায়িত্বপ্রাপ্ত ব্যক্তির নাম</th>
            <th>পদবি</th>
            <th>মোবাইল</th>
         </tr>

         <?php  foreach($results as $single_result){   ?>

         <tr>
            <td><?=$single_result->title?></td>
            <td><?=$single_result->address?></td>
            <td><?=$single_result->officer_name?></td>
            <td><?=$single_result->officer_designation?></td>
            <td><?=$single_result->mobile_no?></td>
         </tr>

         <?php } ?>
      </table>

   <section>



   </section>


   </div>
</div>