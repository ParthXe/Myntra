<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class listvideo_model extends MY_Model {
    function __construct() {
        parent::__construct();
    } 

	public function addlistvideoinfo($data) {
        $this->db->insert('listvideo',$data);
        return $user_id;
    }
	
    public function getlistvideolist($page) {
        $listvideolist = [];
        $query = $this->db->get('listvideo');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $listvideolist[] = $row;
        }
		return $listvideolist;
    } 

    public function checklistvideoinfo($did) {
        $this->db->where('id', $did);
        $query = $this->db->get('listvideo');
        return $query;        
    }

    public function updatelistvideoinfo($data) {
        $this->db->where('id',$data['id']);
        $this->db->update('listvideo',$data);
		
		return $user_id;
    }

}