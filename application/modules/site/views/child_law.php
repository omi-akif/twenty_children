<style type="text/css">
   .carousel-indicators li{ display: none; }

   table,th, td{
        padding: 10px;
        border: 0px solid black;
        border-collapse: collapse;

        text-align: center;
        vertical-align: center;
      }

   .crop {
        width: 100%;
        height: 150px;
        overflow: hidden;
    }
    .button {
     background-color: #4CAF50; /* Green */
     border: none;
     color: white;
     padding: 10px 15px;
     text-align: center;
     text-decoration: none;
     display: inline-block;
     margin: 5px 0 25px 0;
     cursor: pointer;
     display: block;
   }
   .button2 {background-color: #008CBA;} /* Blue */
   .button3 {background-color: #f44336;} /* Red */ 
   .button4 {background-color: #e7e7e7; color: black;} /* Gray */ 
   .button5 {background-color: #555555;} /* Black */
   /*.galance a{font-size: 30px; font-family: "arial"}
   .galance a:hover{text-decoration: none; color: white; }*/

   li{list-style-type: none;}
   i{color: red;}
</style>
<div class="row">
   <?php $this->load->view('frontend/right_side_bar'); ?>   
   
   <div class="col-md-9 main-content">

      <section class="project-purpose">

         <h4 class="lnt text-center"><?=$meta_title?></h4>
         <br>
         <!-- <div class="pdln" id="marquee4"> -->
            <ul style="margin-left: 20px;">            
               <li><a href="<?=base_url('child-mental-health')?>"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> জাতিসংঘ শিশু অধিকার সনদ, ১৯৮৯</a></li>
               <li><a href="javascript:void()"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> জাতীয় নারী উন্নয়ন নীতি, ২০১১</a></li>
               <li><a href="javascript:void()"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> জাতীয় শিক্ষা নীতি, ২০১০</a></li>
               <li><a href="javascript:void()">  <i class="fa fa-hand-o-right" aria-hidden="true"></i> জাতীয় শিশু নীতি, ২০১১</a></li>
               <li><a href="javascript:void()">  <i class="fa fa-hand-o-right" aria-hidden="true"></i> প্রাক-প্রাথমিক শিক্ষাক্রম, ২০১১</a></li>
               <li><a href="javascript:void()"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> প্রাক-প্রাথমিক শিক্ষার পরিচালনা কাঠামো, ২০০৮</a></li>
               <li><a href="javascript:void()"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> শিশু আইন, ২০১৩</a></li>
               <li><a href="javascript:void()"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> শিশু দিবাযত্ন কেন্দ্র আইন, ২০২১</a></li>  
               <li><a href="javascript:void()"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> শিশু দিবাযত্ন কেন্দ্রের নকশা এবং কারিগরী নির্দেশিকা</a></li> 
               <li><a href="javascript:void()"> <i class="fa fa-hand-o-right" aria-hidden="true"></i> শিশুর প্রারম্ভিক যত্ন ও বিকাশের সমন্বিত নীতি-২০১৩</a></li>
            </ul>
         <!-- </div> -->

      </section>


      <!-- </div> -->
   </div>   
</div>