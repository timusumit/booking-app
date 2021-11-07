<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_controller extends CI_Controller {

	 public function __construct()
  	{
     	parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->model('admin_model');
		$this->load->model('package_setup_model');
		 if (!$this->session->userdata('is_logged_in')) {
            redirect(site_url('user/login'));
        } 
	}



public function display($view,$data){
		$this->load->view('templates/header',$data);
		$this->load->view('templates/headernav',$data);
		$this->load->view('templates/sidebar',$data);
		$this->load->view($view,$data);
		$this->load->view('templates/footer',$data);

}



	public function index()
	{
		$data['titlename']=$this->admin_model->get_logged_user();
		$data['package_setup']=$this->package_setup_model->get_package();
		$this->display('test',$data);
	}



	


}
