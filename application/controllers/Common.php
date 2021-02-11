<?php if (!defined('BASEPATH')) { exit('No direct script access allowed'); }

class Common extends Backend_Controller {
	
    function __construct() {
        parent::__construct();        
        $this->load->model('Common_model');

        // if (!$this->ion_auth->logged_in()):
        //     redirect('login');
        // endif;
    }

    public function index(){
    	redirect('dashboard');
    }
    

    /* Gives search suggestions based on what is being searched for */
    function suggest_nid(){
        $suggestions = $this->Common_model->get_nid_suggestions($this->input->post('q'));
        echo implode("\n",$suggestions);
    }

    function suggest_organization(){
        $suggestions = $this->Common_model->get_organization_suggestions($this->input->post('q'));
        echo implode("\n",$suggestions);
    }

    function suggest_designation(){
        $suggestions = $this->Common_model->get_designation_suggestions($this->input->post('q'));
        echo implode("\n",$suggestions);
    }

    function suggest_post_office(){
        $suggestions = $this->Common_model->get_post_office_suggestions($this->input->post('q'));
        echo implode("\n",$suggestions);
    }

    function suggest_nilg_course(){
        $suggestions = $this->Common_model->get_nilg_course_suggestions($this->input->post('q'));
        echo implode("\n",$suggestions);
    }

    function suggest_local_course(){
        $suggestions = $this->Common_model->get_local_course_suggestions($this->input->post('q'));
        echo implode("\n",$suggestions);
    }

    function suggest_foreign_course(){
        $suggestions = $this->Common_model->get_foreign_course_suggestions($this->input->post('q'));
        echo implode("\n",$suggestions);
    }

    // function suggest_first_organization(){
    //     $suggestions = $this->Common_model->get_first_organization_suggestions($this->input->post('q'));
    //     echo implode("\n",$suggestions);      
    // }

    // function suggest_curr_organization(){
    //     $suggestions = $this->Common_model->get_curr_organization_suggestions($this->input->post('q'));
    //     echo implode("\n",$suggestions);      
    // }

    public function organization(){
        $this->form_validation->set_rules('name_org', 'organization name', 'required|trim');
        // $this->form_validation->set_rules('name_english', 'name english', 'required|trim');

        $message='';
        if ($this->form_validation->run() == true){
            $form_data = array(
                'org_name' => $this->input->post('name_org')
                );    

            if($this->Common_model->save('organizations', $form_data)){   
                $message = '<div class="alert alert-success">প্রদত্ত তথ্যটি সঠিকভাবে সংরক্ষিত হয়েছে</div>';                
            }
        }
        echo $message = (validation_errors()) ? validation_errors() : $message;
    }    

    function ajax_check_exists_organization(){
        // echo 'true';
        $id = $_POST['orgname'];
        echo $this->Common_model->exists_organization_name($id);
    }

    public function select2_natioanl_id_name(){
        $json = [];
        if(!empty($this->input->get("q"))){
            $this->db->or_like('national_id', $this->input->get("q")); 
            $this->db->or_like('name_bangla', $this->input->get("q"));
            $this->db->or_like('telephone_mobile', $this->input->get("q")); 
            $query = $this->db->select('id, CONCAT(national_id, " (", name_bangla, ")", " (", telephone_mobile, ")") AS text')
            ->limit(15)
            ->get("personal_datas");
            $json = $query->result();
        }
        echo json_encode($json);
    }

    public function select2_trainee(){
        $json = [];
        if(!empty($this->input->get("q"))){
            $this->db->or_like('trainer_name', $this->input->get("q")); 
            $this->db->or_like('trainer_desig', $this->input->get("q"));
            $this->db->or_like('mobile', $this->input->get("q")); 
            $query = $this->db->select('id, CONCAT(trainer_name, " (", trainer_desig, ")", " (", mobile, ")") AS text')
            ->limit(15)
            ->get("trainer_register");
            $json = $query->result();
        }
        echo json_encode($json);
    }

    public function select2_coordinator(){
        $json = [];
        if(!empty($this->input->get("q"))){
            $this->db->select('u.id, ug.group_id, CONCAT(u.office_name, " (", u.designation, ")") AS text');
            $this->db->join('users_groups ug', 'ug.user_id = u.id', 'left');
            $this->db->join('groups g', 'g.id = ug.user_id', 'left');
            // $this->db->where('ug.group_id', 9); 
            // $this->db->or_where_in('ug.group_id', 9);
            $this->db->having('ug.group_id', 9); 
            $this->db->having('u.id !=', $this->session->userdata('user_id'));
            $this->db->or_like('u.office_name', $this->input->get("q")); 
            $this->db->or_like('u.designation', $this->input->get("q")); 
            $this->db->limit(15);            
            $query = $this->db->get("users u");

            $json = $query->result();
            // echo $this->db->last_query();exit;
        }
        echo json_encode($json);
    }

    public function select2_organization_name(){
      $json = [];
      if(!empty($this->input->get("q"))){
       $this->db->or_like('org_name', $this->input->get("q")); 
       $query = $this->db->select('id, org_name AS text')
       ->limit(15)
       ->get("organizations");
       $json = $query->result();
   }
   echo json_encode($json);
}

function ajax_district_by_div($div_id){
    header('Content-Type: application/x-json; charset=utf-8');
    echo (json_encode($this->Common_model->get_district_by_div_id($div_id)));
}

function ajax_active_district_by_div($div_id){
    header('Content-Type: application/x-json; charset=utf-8');
    echo (json_encode($this->Common_model->get_active_district_by_div_id($div_id)));
}

function ajax_upazila_by_dis($dis_id){
    header('Content-Type: application/x-json; charset=utf-8');
    echo (json_encode($this->Common_model->get_upa_tha_by_dis_id($dis_id)));
}

function ajax_active_upazila_by_dis($dis_id){
    header('Content-Type: application/x-json; charset=utf-8');
    echo (json_encode($this->Common_model->get_active_upa_tha_by_dis_id($dis_id)));
}

function ajax_union_by_upa($upa_id){
    header('Content-Type: application/x-json; charset=utf-8');
    echo (json_encode($this->Common_model->get_uni_by_upa_id($upa_id)));
}

function ajax_active_union_by_upa($upa_id){
    header('Content-Type: application/x-json; charset=utf-8');
    echo (json_encode($this->Common_model->get_active_uni_by_upa_id($upa_id)));
}

function ajax_exists_identity(){
        // echo 'true';
    $item = $_POST['inputData'];
    $result = $this->Common_model->exists('users', 'username', $item);
    if ($result == 0) {
        echo 'true';
    }else{
        echo 'false';
    }
}
}
