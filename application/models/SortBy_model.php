<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class SortBy_model extends MY_Model {
    function __construct() {
        parent::__construct();
    } 
	/*Done*/
	public function addSortByInfo($addData) {
        $this->db->insert('sort_by',$addData);
        return $user_id;
    }
	
    public function getSortByList($data) {
        $sendSortByList = [];
		$this->db->where('type',$data['type']);
        $query = $this->db->get('sort_by');
        foreach ($query->result() as $row) {
            $sendSortByList[] = $row;
        }
		return $sendSortByList;
    } 
	
    public function checkSortByInfo($did) {
        $this->db->where('id', $did);
        $query = $this->db->get('sort_by');
        return $query;        
    }

    public function updateSortByInfo($data) {
        $this->db->where('id',$data['id']);
        $this->db->update('sort_by',$data);
		
		return $user_id;
    }
	/*Done*/
}