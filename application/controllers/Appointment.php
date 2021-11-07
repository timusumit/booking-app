<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//include_once(APPPATH.'controllers/Admin_controller.php');
class Appointment extends CI_controller {

	 public function __construct()
  	{
     	parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->model('appointment_model');
	}

	public function display($view,$data){
		$this->load->view('front_template/header',$data);
		$this->load->view($view,$data);
		$this->load->view('front_template/footer',$data);

}


    public function index(){
		$data['test']='hello';
		$this->display('appointment/add_appointment',$data);
    }


    public function add()
    {
	
            $config['upload_path']          = './assets/frontend/images';
            $config['allowed_types']        = 'gif|jpg|png|pdf|doc|xls|txt';


            $this->load->library('upload', $config);

            // if ( ! $this->upload->do_upload('fileField'))
            // {
				
            //         $error = array('error' => $this->upload->display_errors());
			// 		$data['test']='hello';
			// 		$this->load->view('front_template/header',$data);
            //         $this->load->view('appointment/add_appointment', $error);
			// 		$this->load->view('front_template/footer',$data);
            // }
            // else
            // {
				$this->upload->do_upload('fileField');
			 	$this->form_validation->set_rules('nameField','Name', 'required');
				$this->form_validation->set_rules('emailField','Email Address', 'required','is_unique');
				$this->form_validation->set_rules('phoneField','Phone', 'required');
			 	$this->form_validation->set_rules('dateField','DateField', 'required');
			 	$this->form_validation->set_rules('timeField','TimeField', 'required');
			 	$this->form_validation->set_rules('branchField','BranchField', 'required');
			    $this->form_validation->set_rules('termsField','Terms and Conditions', 'required',
			 	   array('required'=>'You must accept Terms and Conditions'));
				   if($this->form_validation->run()==FALSE){	
				
					$data = array('upload_data' => $this->upload->data());
					$this->display('appointment/add_appointment',$data['upload_data']['file_path']);
				}else{
					$data = array('upload_data' => $this->upload->data());
					$this->appointment_model->add_appointment($appointment_id=0,$data['upload_data']['file_path']);
					$this->session->set_flashdata('Success','Appointmnet made successfully!');
					redirect('appointment');
				}
                    
					
                   
            // }
    }


	public function edit(){
	
		$appointment_id=$this->uri->segment(3);
		if(empty($appointment_id)){
			show_404();
		}
	
		$this->appointment_model->add_appointment($appointment_id,$file_url);
		redirect('admin/appointment_admin');
	}
	

public function delete(){
	
	$appointment_id= $this->uri->segment(3);
	if(empty($appointment_id)){
	   show_404();
	}
	$this->appointment_model->delete_appointment($appointment_id);
	redirect('admin/appointment_admin');
}
}