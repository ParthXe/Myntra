<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class productdesc_model extends MY_Model {
    function __construct() {
        parent::__construct();
    } 

	public function addproductdescinfo($data) {
        $this->db->insert('productdesc',$data);
        return $user_id;
    }
	
    public function getproductdesclist($data) {
        $productdesclist = [];
		$this->db->where('type', $data['type']);
        $query = $this->db->get('productdesc');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $productdesclist[] = $row;
        }
		return $productdesclist;
    } 

    public function checkproductdescinfo($did) {
        $this->db->where('id', $did);
        $query = $this->db->get('productdesc');
        return $query;        
    }

    public function updateproductdescinfo($data) {
        $this->db->where('id',$data['id']);
        $this->db->update('productdesc',$data);
		
		return $user_id;
    }

}