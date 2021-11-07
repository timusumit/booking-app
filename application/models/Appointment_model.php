<?php
class Appointment_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }

    public function add_appointment($appointment_id=0, $file_name){
   
    	$this->load->helper('url');
    	$data=array(
    		'name'=>$this->input->post('nameField'),
    		'gender'=>$this->input->post('genderField'),
    		'email'=>$this->input->post('emailField'),
    		'phone'=>$this->input->post('phoneField'),
            'address'=>$this->input->post('addressField'),
            'file_url'=>$file_name,
            'message'=>$this->input->post('messageField'),
            'date'=>$this->input->post('dateField'),
            'time_slots'=>$this->input->post('timeField'),
            'branch'=>$this->input->post('branchField'),
            'terms_agreed'=>$this->input->post('termsField'),
    	);
       // print_r($data);exit;
    		if($appointment_id==0){
    		//	echo "heere";exit;
    			return $this->db->insert('appointment_setup',$data);
    		}else{
    		//	echo "not there";exit;
    			$this->db->where('appointment_id',$appointment_id);
    			return $this->db->update('appointment_setup',$data);
    		}
     }

     public function get_package(){
        $this->db->select('*');
        $query = $this->db->get('package_setup');
        return $query->result_array();
     }


     public function delete_package($package_id){      
        $this->db->where('package_id', $package_id);
        return $this->db->delete('package_setup');
        
     }

/*write above here*/
}