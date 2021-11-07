<?php
class Package_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }
    

    public function book_package(){
    	$this->load->helper('url');
    	$data=array(
    		'pack_id'=>$this->input->post('pack_id'),
    		'name'=>$this->input->post('name'),
    		'phone'=>$this->input->post('phone'),
    		'email'=>$this->input->post('email'),
            'requirements'=>$this->input->post('requirements'),
    	);
    	return $this->db->insert('package_book',$data);

    }

/* write above here */
}
?>