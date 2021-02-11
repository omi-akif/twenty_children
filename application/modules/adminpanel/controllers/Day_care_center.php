<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Day_care_center extends Backend_Controller {

	var $img_path;

	public function __construct(){
        parent::__construct();
        if (!$this->ion_auth->logged_in()):
            redirect('login');
        endif;

        // $this->load->model('Common_model');
        // $this->load->model('News_model');
        // $this->img_path = realpath(APPPATH . '../news_img');

        // Slug Generator
        // $config = array(
        //     'field' => 'slug',
        //     'title' => 'news_title_en',
        //     'table' => 'news',
        //     'id' => 'id',
        // );
        // $this->load->library('slug', $config);
    }

	public function index(){
        $this->data['results'] = $this->Common_model->get_data('day_cares'); 
        // print_r($this->data['results']); exit;

        //Load page
        $this->data['meta_title'] = 'All Day Care Center';
        $this->data['subview'] = 'day_care_center/index';
        $this->load->view('backend/_layout_main', $this->data);
        // redirect('adminpanel/news/all');
	}



    


    // public function details($id){
    //     $this->data['info'] = $this->News_model->get_info($id);

    //     $this->data['meta_title'] = 'News Details';
    //     $this->data['subview'] = 'news/details';
    //     $this->load->view('backend/_layout_main', $this->data);
    // }

 //    public function edit($id){


 //        // $this->form_validation->set_rules('event_name_bn', 'Event name bn', 'required|trim');
 //        // $this->form_validation->set_rules('event_name_en', 'Event name en', 'required|trim');
 //        // $this->form_validation->set_rules('event_details_bn', 'Event Details bn', 'required|trim');
 //        // $this->form_validation->set_rules('event_details_en', 'Event Details en', 'required|trim');
 //        // $this->form_validation->set_rules('event_datetime', 'Event Datetime', 'required|trim'); 

 //        $this->form_validation->set_rules('news_title_bn', 'News title bn', 'required|trim');
 //        $this->form_validation->set_rules('news_title_en', 'News title en', 'required|trim');
 //        $this->form_validation->set_rules('news_description_bn', 'News description bn', 'required|trim');
 //        $this->form_validation->set_rules('news_description_en', 'News description en', 'required|trim');
 //        $this->form_validation->set_rules('news_datetime', 'News Datetime', 'required|trim');
 //        $this->form_validation->set_rules('slug', 'slug url', 'required|trim');


 //        $this->data['info'] = $this->News_model->get_info($id);
 //        // print_r($this->data['info']); exit;

 //        if(@$_FILES['userfile']['size'] > 0){
 //            $this->form_validation->set_rules('userfile', '', 'callback_file_check');
 //        }

 //        if ($this->form_validation->run() == true){

            

 //            if($_FILES['userfile']['size'] > 0){

 //                $this->News_model->delete_img($id);
                
 //                $new_file_name = $_FILES["userfile"]['name'];

 //                $config['allowed_types']= 'jpg|png|jpeg|gif|pdf';
 //                $config['upload_path']  = $this->img_path;
 //                $config['file_name']    = $new_file_name;
 //                $config['max_size']     = 0;

 //                $this->load->library('upload', $config);
 //                //upload file to directory
 //                if($this->upload->do_upload()){
 //                    $uploadData = $this->upload->data();
 //                    $uploadedFile = $uploadData['file_name'];
 //                    // print_r($uploadedFile);
 //                    $this->data['message'] = 'File has been uploaded successfully.';
 //                }else{
 //                    $this->data['message'] = $this->upload->display_errors();
 //                }
 //            }


 //            $slug_data = array('news_title_en' => $this->input->post('news_title_en'));
            
 //            $form_data = array(
 //                'news_title_bn' => $this->input->post('news_title_bn'),
 //                'news_title_en' => $this->input->post('news_title_en'),
 //                'slug' => $this->input->post('slug'),
 //                'news_description_bn' => $this->input->post('news_description_bn'),
 //                'news_description_en' => $this->input->post('news_description_en'),
 //                'news_datetime' => date_db_format($this->input->post('news_datetime')),  
 //            );

 //            // echo "<pre>";
 //            // print_r($form_data);
 //            // exit();

 //            if($_FILES['userfile']['size'] > 0){
 //                $form_data['image_file'] = $uploadedFile;
 //            }

 //            // print_r($form_data); exit;
 //            if($this->Common_model->edit('news', $id, 'id', $form_data)){
 //                $this->session->set_flashdata('success', 'Information update successfully.');
 //                redirect('adminpanel/news/all');
 //            }
 //        }

 //        // $this->data['category'] = $this->Common_model->get_event_category();

 //        $this->data['meta_title'] = 'Edit News';
 //        $this->data['subview'] = 'news/edit';
 //        $this->load->view('backend/_layout_main', $this->data);
 //    }


	// public function add(){

	// 	$this->form_validation->set_rules('news_title_bn', 'News title bn', 'required|trim');
 //        $this->form_validation->set_rules('news_title_en', 'News title en', 'required|trim');
 //        $this->form_validation->set_rules('news_description_bn', 'News description bn', 'required|trim');
 //        $this->form_validation->set_rules('news_description_en', 'News description en', 'required|trim');
 //        $this->form_validation->set_rules('news_datetime', 'News Datetime', 'required|trim');
 //        // $this->form_validation->set_rules('meta_keys', 'meta keywords', 'max_length[255]|trim');       

 //        if(@$_FILES['userfile']['size'] > 0){
 //            $this->form_validation->set_rules('userfile', '', 'callback_file_check');
 //        }

 //        if ($this->form_validation->run() == true){

 //            if($_FILES['userfile']['size'] > 0){
 //                $new_file_name = $_FILES["userfile"]['name'];

 //                $config['allowed_types']= 'jpg|png|jpeg|gif|pdf';
 //                $config['upload_path']  = $this->img_path;
 //                $config['file_name']    = $new_file_name;
 //                $config['max_size']     = 0;

 //                $this->load->library('upload', $config);
 //                //upload file to directory
 //                if($this->upload->do_upload()){
 //                    $uploadData = $this->upload->data();
 //                    $uploadedFile = $uploadData['file_name'];
 //                    // print_r($uploadedFile);
 //                    $this->data['message'] = 'File has been uploaded successfully.';
 //                }else{
 //                    $this->data['message'] = $this->upload->display_errors();
 //                }
 //            }

 //            $slug_data = array('news_title_en' => $this->input->post('news_title_en'));

 //            $form_data = array(
 //                'news_title_bn' => $this->input->post('news_title_bn'),
 //                'news_title_en' => $this->input->post('news_title_en'),
 //                'slug' => $this->slug->create_uri($slug_data),
 //                'news_description_bn' => $this->input->post('news_description_bn'),
 //                'news_description_en' => $this->input->post('news_description_en'),
 //                // 'notices_datetime' => $this->input->post('notices_datetime'),
 //                'news_datetime' => date_db_format($this->input->post('news_datetime')),

 //                // 'event_datetime' => date_db_format($this->input->post('event_datetime')),   
 //            );

 //            if($_FILES['userfile']['size'] > 0){
 //                $form_data['image_file'] = $uploadedFile;
 //            }
 //            // print_r($form_data); exit;

 //            if($this->Common_model->save('news', $form_data)){                
 //                $this->session->set_flashdata('success', 'New News insert successfully.');
 //               redirect("adminpanel/news/all");
 //            }
 //        }

 //        // $this->data['category'] = $this->Common_model->get_event_category(); 

	// 	$this->data['meta_title'] = 'Add News';
	// 	$this->data['subview'] = 'news/add';
 //    	$this->load->view('backend/_layout_main', $this->data);
	// }



 //    public function file_check($str){
 //        $this->load->helper('file');
 //        $allowed_mime_type_arr = array('image/gif','image/jpeg','image/png','image/x-png','application/pdf', 'application/x-pdf');
 //        $mime = get_mime_by_extension($_FILES['userfile']['name']);
 //        $file_size = 10500000; 
 //        $size_kb = '10 MB';

 //        if(isset($_FILES['userfile']['name']) && $_FILES['userfile']['name']!=""){
 //            if(!in_array($mime, $allowed_mime_type_arr)){                
 //                $this->form_validation->set_message('file_check', 'Please select only jpg, jpeg, png, gif file.');
 //                return false;
 //            }elseif($_FILES["userfile"]["size"] > $file_size){
 //                $this->form_validation->set_message('file_check', 'Maximum file size '.$size_kb);
 //                return false;
 //            }else{
 //                return true;
 //            }
 //        }else{
 //            $this->form_validation->set_message('file_check', 'Please choose a image file to upload.');
 //            return false;
 //        }
 //    }   
	// // public function file_check($str){
 // //    	$this->load->helper('file');
 // //        $allowed_mime_type_arr = array('image/gif','image/jpeg','image/png','image/x-png');
 // //        $mime = get_mime_by_extension($_FILES['userfile']['name']);
 // //        $file_size = 1050000; 
 // //        $size_kb = '1 MB';

 // //        if(isset($_FILES['userfile']['name']) && $_FILES['userfile']['name']!=""){
 // //            if(!in_array($mime, $allowed_mime_type_arr)){                
 // //                $this->form_validation->set_message('file_check', 'Please select only jpg, jpeg, png, gif file.');
 // //                return false;
 // //            }elseif($_FILES["userfile"]["size"] > $file_size){
 // //            	$this->form_validation->set_message('file_check', 'Maximum file size '.$size_kb);
 // //                return false;
 // //            }else{
	// // 		    return true;
	// // 		}
 // //        }else{
 // //            $this->form_validation->set_message('file_check', 'Please choose a image file to upload.');
 // //            return false;
 // //        }
 // //    }

 //    function delete($id) {
 //        $this->data['info'] = $this->Notices_model->delete($id);
 //        $this->session->set_flashdata('success', 'Information delete successfully.');
 //        redirect('adminpanel/notices/all');
 //    }

}