<?php
class Package_setup_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }



    public function add_package($package_id=0){
    	$this->load->helper('url');
    	$data=array(
    		'package_name'=>$this->input->post('package_name'),
    		'package_features'=>$this->input->post('package_features'),
    		'package_price'=>$this->input->post('package_price'),
    		'package_offer_price'=>$this->input->post('package_offer_price'),
            'best_for'=>$this->input->post('best_for'),
    	);
    		if($package_id==0){
    			//echo "heere";exit;
    			return $this->db->insert('package_setup',$data);
    		}else{
    			//echo "not there";exit;
    			$this->db->where('package_id',$package_id);
    			return $this->db->update('package_setup',$data);
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