<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class MY_Model extends CI_Model
{
   public $customDB;

   public function __construct()
   {
      parent::__construct();
      $this->loadCustomerDatabase($DBname=NULL);
   }

   public function loadCustomerDatabase($DBname='demo_daycares_1')
   {
      if($_SERVER['HTTP_HOST'] === 'localhost'){
         $DBuser = 'root';
         $DBpass = '';
      }else{
         $DBuser = 'demo_daycare';
         $DBpass = 'demo_daycare';
         // $DBname = 'demo_'.$DBname;
      }
      
      // define your customers database
      // $customerDatabase = $this->session->userdata("customer_db");

      $config['hostname'] = 'localhost';
      $config['username'] = $DBuser;
      $config['password'] = $DBpass;
      $config['database'] = $DBname;
      $config['dbdriver'] = 'mysqli';
      $config['dbprefix'] = '';
      $config['pconnect'] = FALSE;
      $config['db_debug'] = TRUE;
      $config['cache_on'] = FALSE;
      $config['cachedir'] = '';
      $config['char_set'] = 'utf8';
      $config['dbcollat'] = 'utf8_general_ci';
      $config['swap_pre'] = '';
      $config['encrypt']  = FALSE;
      $config['compress'] = FALSE;
      $config['stricton'] = FALSE;
      $config['failover'] = array();
      $config['save_queries'] = TRUE;      

      $this->customDB = $this->load->database($config, true);
   }

   public function save_other_db($table, $data) {
      if ($this->customDB->insert($table, $data)) {
         return true;
      } else {
         return false;
      }
   }

   public function edit_otherdb($table, $id, $field, $data) {
      $this->customDB->where($field, $id);
      if ($this->customDB->update($table, $data)) {
         return true;
      } else {
         return false;
      }
   }
}