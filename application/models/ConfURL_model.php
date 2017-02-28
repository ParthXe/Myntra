<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ConfURL_model extends MY_Model {
    function __construct() {
        parent::__construct();
    } 
	/*Done*/
	public function addConfURLInfo($addData) {
        $this->db->insert('config_url',$addData);
        return $user_id;
    }
	
    public function getConfURLList($data) {
        $confURLList = [];
		$this->db->where('type',$data['type']);
        $query = $this->db->get('config_url');
        foreach ($query->result() as $row) {
            $confURLList[] = $row;
        }
		return $confURLList;
    } 
	
    public function checkConfURLInfo($did) {
        $this->db->where('id', $did);
        $query = $this->db->get('config_url');
        return $query;        
    }

    public function updateConfURLInfo($data) {
        $this->db->where('id',$data['id']);
        $this->db->update('config_url',$data);
		
		return $user_id;
    }
	/*Done*/
}