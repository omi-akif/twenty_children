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
</style>
<div class="row">
   <?php $this->load->view('frontend/right_side_bar'); ?>   
   
   <div class="col-md-9 main-content">

      <section class="project-purpose">

         <h4 class="lnt text-center"><?=$meta_title?></h4>
         <br>
         <table width="100%">
            <caption style="text-align: center; font-size: 25px; color: black; font-weight: bold;">বাংলাদেশ শিশু একাডেমী সমূহ</caption>
            <tr>
               <td width="49%"><a href="<?=base_url('shishu-academy-district')?>" class="button button3" style="font-size: 20px;text-decoration: none; color: white;width: 100%">জেলা শাখা</a></td>
               <td width="49%"><a href="<?=base_url('shishu-academy-upazila')?>" class="button button3" style="font-size: 20px; text-decoration: none;color: white;width: 100%">৬টি উপজেলা শাখা</a></td>
               </tr>
         </table>

      </section>


      <!-- </div> -->
   </div>   
</div>