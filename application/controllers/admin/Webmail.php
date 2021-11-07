<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once(APPPATH.'controllers/Admin_controller.php');
class Webmail extends Admin_controller {

	 public function __construct()
  	{
     	parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->library('email');
		$this->load->model('admin_model');
		$this->load->model('package_setup_model');
		 if (!$this->session->userdata('is_logged_in')) {
            redirect(site_url('admin/user/login'));
        } 
	}


	  public function index() { 
	
        // $this->load->helper('form'); 
         $this->load->view('email_form'); 
      } 
  
      public function send_mail() { 


$this->load->library('email');

//SMTP & mail configuration
$config = array(
    'protocol'  => 'smtp',
    'smtp_host' => 'xo1.x10hosting.com',
    'smtp_port' => 465,
    'smtp_user' => 'udlnepal',
    'smtp_pass' => '',
    'mailtype'  => 'html',
    'charset'   => 'utf-8'
);
$this->email->initialize($config);
$this->email->set_mailtype("html");
$this->email->set_newline("\r\n");

//Email content
$htmlContent = '<h1>Sending email via SMTP server</h1>';
$htmlContent .= '<p>This email has sent via SMTP server from CodeIgniter application.</p>';
  $to_email = $this->input->post('email'); 
/*$this->email->to('recipient@example.com');*/
 $this->email->to($to_email);
$this->email->from('sender@example.com','MyWebsite');
$this->email->subject('How to send email via SMTP server in CodeIgniter');
$this->email->message($htmlContent);

//Send email
$this->email->send();


       /*  $from_email = "your@example.com"; 
         $to_email = $this->input->post('email'); 
   
         //Load email library 
         $this->load->library('email'); 
   
         $this->email->from($from_email, 'Your Name'); 
         $this->email->to($to_email);
         $this->email->subject('Email Test'); 
         $this->email->message('Testing the email class.'); 
   
         //Send mail 
         if($this->email->send()) 
         $this->session->set_flashdata("email_sent","Email sent successfully."); 
         else 
         $this->session->set_flashdata("email_sent","Error in sending Email."); 
         $this->load->view('email_form'); */
      } 


}
?>