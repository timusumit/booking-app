<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH.'controllers/Admin_controller.php');
class Package_setup extends Admin_controller {

	 public function __construct()
  	{
     	parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->model('admin_model');
		$this->load->model('package_setup_model');
		 if (!$this->session->userdata('is_logged_in')) {
            redirect(site_url('admin/user/login'));
        } 
	}

public function index()
	{
		$data['titlename']=$this->admin_model->get_logged_user();
		$this->display('package_setup',$data);
	}

public function add(){
	$data['titlename']=$this->admin_model->get_logged_user();
	
	$this->form_validation->set_rules('package_name','Package Name', 'required');
	$this->form_validation->set_rules('package_features','Package Features','required');
	$this->form_validation->set_rules('package_offer_price','Price is required(At Least One)', 'required');
	$this->form_validation->set_rules('best_for','Best_for', 'required');

	if($this->form_validation->run()===FALSE){		
		$this->display('package_setup',$data);
	}else{
		$this->package_setup_model->add_package();
		$this->session->set_flashdata('Success','Package Addedd Successfully!');
		redirect('admin/package_setup/view');
	}
}

public function view(){
	$data['package_setup']=$this->package_setup_model->get_package();
	$data['titlename']=$this->admin_model->get_logged_user();
	$this->display('view',$data);
}

public function edit(){
	$package_id=$this->uri->segment(4);
	if($package_id==0){
		redirect('admin/package_setup/view');
	}
	$this->package_setup_model->add_package($package_id);
	redirect('admin/package_setup/view');
}

public function delete(){
	$package_id= $this->uri->segment(4);
	if($package_id==0){
		redirect('admin/package_setup');
	}
	$this->package_setup_model->delete_package($package_id);
	redirect('admin/package_setup/view');
}


/* Write Above Here*/
}
