<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class collectionvideo_model extends MY_Model {
    function __construct() {
        parent::__construct();
    } 

	public function addcollectionvideoinfo($data) {
        $this->db->insert('collectionvideo',$data);
        return $user_id;
    }
	
    public function getcollectionvideolist($data) {
        $collectionvideolist = [];
		$this->db->where('type', $data['type']);
        $query = $this->db->get('collectionvideo');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $collectionvideolist[] = $row;
        }
		return $collectionvideolist;
    } 

    public function checkcollectionvideoinfo($did) {
        $this->db->where('id', $did);
        $query = $this->db->get('collectionvideo');
        return $query;        
    }

    public function updatecollectionvideoinfo($data) {
        $this->db->where('id',$data['id']);
        $this->db->update('collectionvideo',$data);
		
		return $user_id;
    }

}