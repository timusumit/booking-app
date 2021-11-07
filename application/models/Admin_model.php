<?php
class Admin_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }

public function get_logged_user(){
   
    $this->db->select('firstname');
    $this->db->from('user');
    $this->db->where('email', $this->session->userdata('email'));
    $query=$this->db->get()->row();
    $data= $query->firstname;
    return $data;
}

public function get_bookings(){
    $query=$this->db->query('SELECT b.*,s.* FROM package_book b JOIN package_setup s ON s.package_id=b.pack_id ');
    return $query->result_array();

}

public function set_booking_status($booking_id,$booking_status){
$data=array(
'booking_status'=>$booking_status,
);
$this->db->where('booking_id',$booking_id);
return $this->db->update('package_book',$data);
}
/*write above here */
}