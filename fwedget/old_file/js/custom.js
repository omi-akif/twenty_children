//district dropdown
$('#division').change(function(){
   $('.distirict_val').addClass('form-control input-sm');
   $(".distirict_val > option").remove();
   var id = $('#division').val();

   $.ajax({
      type: "POST",
      url: hostname +"site/ajax_get_district_by_div/" + id,
      success: function(func_data)
      {
         $.each(func_data,function(id,name)
         {
            var opt = $('<option />');
            opt.val(id);
            opt.text(name);
            $('.distirict_val').append(opt);
         });
      }
   });
});

// Upazila / Thana dropdown
$('#district').change(function(){
   $('.upazila_thana_val').addClass('form-control input-sm');
   $(".upazila_thana_val > option").remove();
   var dis_id = $('#district').val();

   $.ajax({
      type: "POST",
      url: hostname +"site/ajax_get_upa_tha_by_dis/" + dis_id,
      success: function(upazilaThanas)
      {
         $.each(upazilaThanas,function(id,ut_name)
         {
            var opt = $('<option />');
            opt.val(id);
            opt.text(ut_name);
            $('.upazila_thana_val').append(opt);
         });
      }
   });
});