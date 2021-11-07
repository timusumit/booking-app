<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH.'controllers/Admin_controller.php');
class Bookings extends Admin_controller {

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
		$data['package_book']=$this->admin_model->get_bookings();
		$this->display('bookings',$data);
	}

	public function book_status(){
		$booking_id=$this->uri->segment(4);
		$booking_status=$this->uri->segment(5);


	if(empty($booking_id)){
        show_404();
    }
    $this->admin_model->set_booking_status($booking_id,$booking_status);
    redirect('admin/bookings');

	}


}
