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
	
    public function getSortByList($page) {
        $sendSMSList = [];
        $query = $this->db->get('sort_by');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $sendSMSList[] = $row;
        }
		return $sendSMSList;
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