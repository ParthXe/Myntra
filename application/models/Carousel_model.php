<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Carousel_model extends MY_Model {
    function __construct() {
        parent::__construct();
    } 
	/*Done*/
	public function addCarouselInfo($addData) {
        $this->db->insert('carousel_data',$addData);
        return $user_id;
    }
	
    public function getCarouselList($page) {
        $sendSMSList = [];
        $query = $this->db->get('carousel_data');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
			if($row->gender == "men")
				$row->gender = "MALE";
			if($row->gender == "women")
				$row->gender = "FEMALE";
            $sendSMSList[] = $row;
        }
		return $sendSMSList;
    } 
	
    public function checkCarouselInfo($did) {
        $this->db->where('id', $did);
        $query = $this->db->get('carousel_data');
        return $query;        
    }

    public function updateCarouselInfo($data) {
        $this->db->where('id',$data['id']);
        $this->db->update('carousel_data',$data);
		
		return $user_id;
    }
	
	public function deleteCarouselInfo($data) {
        $this->db->where('id',$data['id']);
        $this->db->delete('carousel_data');
		
		return $user_id;
    }
	/*Done*/
}