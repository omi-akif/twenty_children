<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends Backend_Controller {

   public function __construct(){
      parent::__construct();

      if (!$this->ion_auth->logged_in()):
         redirect('login');
      endif;

      // $this->load->database();
      // $this->load->driver('cache');

      // if (!$this->ion_auth->in_group(array('parents'))){
      //     redirect(base_url());
      // }

      $this->load->model('Dashboard_model');
   }

   public function index(){      
      if($this->ion_auth->is_admin()){         
         $this->data['day_care_list'] = $this->Dashboard_model->get_day_cares();

         $gtotal['application'] = 0;
         $gtotal['child'] = 0;
         $gtotal['staff'] = 0;
         $gtotal['attendance'] = 0;

         foreach ($this->data['day_care_list'] as $item) {
            $data_arr[$item->id] = $this->dc_statistics($item->database_name);
            $gtotal['application'] += $data_arr[$item->id]['total_application'];
            $gtotal['child'] += $data_arr[$item->id]['total_child'];
            $gtotal['staff'] += $data_arr[$item->id]['total_staff'];
            $gtotal['attendance'] += $data_arr[$item->id]['total_attendance_today'];
         }

         $this->data['result_dc'] = $data_arr;
         $this->data['result_gTotal_application'] = $gtotal['application'];
         $this->data['result_gTotal_child'] = $gtotal['child'];
         $this->data['result_gTotal_staff'] = $gtotal['staff'];
         $this->data['result_gTotal_attendance'] = $gtotal['attendance'];


         // echo '<pre>';
         // print_r($this->data['result_gTotal_staff']); exit; 

         // echo $this->data['result_dc'][1]['total_attendance'];
         //exit;

         // Load View
         $this->data['meta_title'] = 'Dashboard';
         $this->data['subview'] = 'dashboard/index';
         $this->load->view('backend/_layout_main', $this->data);

      }else if($this->ion_auth->in_group(array('dc_admin'))){
         $userDetails = $this->Common_model->get_user_details();
         // echo $user_group; exit;
         // echo $userDetails->day_care_id; exit;
         $this->data['day_care_info'] = $this->Common_model->get_row('day_cares', $userDetails->day_care_id);

         $this->data['dc_statistics'] = $this->dc_statistics($this->data['day_care_info']->database_name);
         // print_r($this->data['dc_statistics']); exit;
         
         // Load View
         $this->data['meta_title'] = 'Dashboard';
         $this->data['subview'] = 'dashboard/dc_admin_index';
         $this->load->view('backend/_layout_main', $this->data);
      }
   }

   public function application_list(){

      $this->data['day_care_list'] = $this->Dashboard_model->get_day_cares();

      foreach ($this->data['day_care_list'] as $item) {
         $data_arr[$item->id] = $this->dc_applicant($item->database_name);
         //$gtotal['application'] = $data_arr[$item->id]['total_application'];
      }

      $this->data['results'] = $data_arr;
      // $this->data['result_gTotal_application'] = $gtotal['application'];

      // $this->data['results'] = $this->Member_model->get_data(0); 

      // echo '<pre>';
      // print_r($this->data['results']); exit;

      $this->data['meta_title'] = 'All Application List';
      $this->data['subview'] = 'dashboard/application_list';
      $this->load->view('backend/_layout_main', $this->data);
   }  

   public function dc_applicant($database_other){
      // Database Load
      $this->Dashboard_model->loadCustomerDatabase($database_other);
      $results = $this->Dashboard_model->get_all_member(0);

      return $results;
   } 

   public function dc_statistics($database_other){
      // Database Load
      $this->Dashboard_model->loadCustomerDatabase($database_other);

      $results['total_child'] = $this->Dashboard_model->get_count_child(1);
      $results['total_application'] = $this->Dashboard_model->get_count_child(0);
      $results['total_advance_bill'] = $this->Dashboard_model->get_count_advance_bill();
      $results['total_staff'] = $this->Dashboard_model->get_count_staff();
      $results['total_attendance_today'] = $this->Dashboard_model->get_count_attendance_today();

      return $results;
   }

   public function blank(){
      $this->data['meta_title'] = 'Blank Page';
      $this->data['subview'] = 'dashboard/blank';
      $this->load->view('backend/_layout_main', $this->data);
   }	

}