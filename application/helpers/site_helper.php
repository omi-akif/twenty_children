<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('helper_session_data')) {
   function helper_session_data($item) {
      // Getting CI class instance.
      $CI =& get_instance();

      $CI->load->library('session');
      if($item){
         return $CI->session->userdata($item);   
      }else{         
         return $CI->session->all_userdata();
      }
   }
}

if (!function_exists('date_dayname_format')) {
   function date_dayname_format($item) {      
      if($item != '0000-00-00'){
         // return date('d M Y', strtotime($item));
         return date_format(date_create($item), "d M Y");
      }else{
         return '';
      }
   }
}

if (!function_exists('date_bangla_calender_format')) {
   function date_bangla_calender_format($item) {      
      $currentDate = date_dayname_format($item);
      $engDATE = array('1','2','3','4','5','6','7','8','9','0','Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec','Saturday','Sunday','Monday','Tuesday','Wednesday','Thursday','Friday');
      $bangDATE = array('১','২','৩','৪','৫','৬','৭','৮','৯','০','জানুয়ারী','ফেব্রুয়ারী','মার্চ','এপ্রিল','মে','জুন','জুলাই','আগস্ট','সেপ্টেম্বর','অক্টোবর','নভেম্বর','ডিসেম্বর','শনিবার','রবিবার','সোমবার','মঙ্গলবার','বুধবার','বৃহস্পতিবার','শুক্রবার' );
      $convertedDATE = str_replace($engDATE, $bangDATE, $currentDate);
      return $convertedDATE;
   }
}

function eng2bng($item) {      
   return BanglaConverter::en2bn($item);
}

function bng2eng($item) {      
   return BanglaConverter::bn2en($item);
}

// function switch_db_dynamic($name_db)
// {
//    $db['another_db'] = array(
//    'dsn' => '',
//    'hostname' => 'localhost',
//    'username' => 'root',
//    'password' => '',
//    'database' => $name_db,
//    'dbdriver' => 'mysqli',
//    'dbprefix' => '',
//    'pconnect' => FALSE,
//    'db_debug' => (ENVIRONMENT !== 'production'),
//    'cache_on' => FALSE,
//    'cachedir' => '',
//    'char_set' => 'utf8',
//    'dbcollat' => 'utf8_general_ci',
//    'swap_pre' => '',
//    'encrypt' => FALSE,
//    'compress' => FALSE,
//    'stricton' => FALSE,
//    'failover' => array(),
//    'save_queries' => TRUE
// );

//    return $db;
//     // $config_app['hostname'] = 'localhost';
//     // $config_app['username'] = 'root';
//     // $config_app['password'] = '';
//     // $config_app['database'] = $name_db;
//     // $config_app['dbdriver'] = 'mysqli';
//     // $config_app['dbprefix'] = '';
//     // $config_app['pconnect'] = FALSE;
//     // $config_app['db_debug'] = TRUE;
//     // return $config_app;
// }
