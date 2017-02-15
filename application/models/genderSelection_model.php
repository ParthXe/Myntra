<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class genderSelection_model extends MY_Model {
    function __construct() {
        parent::__construct();
    } 
	/*Done*/
	public function addGenderSelectInfo($addData) {
        $this->db->insert('gender_selection',$addData);
        return $user_id;
    }
	
    public function getGenderSelectList($data) {
        $genderSelectList = [];
		$this->db->where('type',$data['type']);
        $query = $this->db->get('gender_selection');
        foreach ($query->result() as $row) {
            $genderSelectList[] = $row;
        }
		return $genderSelectList;
    } 
	/*Done*/
    public function checkGenderSelectInfo($did) {
        $this->db->where('id', $did);
        $query = $this->db->get('gender_selection');
        return $query;        
    }

    public function updateGenderSelectInfo($data) {
        $this->db->where('id',$data['id']);
        $this->db->update('gender_selection',$data);
		
		return $user_id;
    }

}