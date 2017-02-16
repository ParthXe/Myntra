<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class roadsterSelection_model extends MY_Model {
    function __construct() {
        parent::__construct();
    } 
	/*Done*/
	public function addRoadsterSelectionInfo($addData) {
        $this->db->insert('roadster_selection',$addData);
        return $user_id;
    }
	
    public function getRoadsterSelectionList($data) {
        $roadsterSelectList = [];
		$this->db->where('type',$data['type']);
        $query = $this->db->get('roadster_selection');
        foreach ($query->result() as $row) {
            $roadsterSelectList[] = $row;
        }
		return $roadsterSelectList;
    } 
	/*Done*/
    public function checkRoadsterSelectionInfo($did) {
        $this->db->where('id', $did);
        $query = $this->db->get('roadster_selection');
        return $query;        
    }

    public function updateRoadsterSelectionInfo($data) {
        $this->db->where('id',$data['id']);
        $this->db->update('roadster_selection',$data);
		
		return $user_id;
    }

}