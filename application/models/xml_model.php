<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class xml_model extends MY_Model {
    function __construct() {
        parent::__construct();
    } 
	public function getscreensaverlist($did) {
        $this->db->where('id', $did);
        $query = $this->db->get('screensaver');
		return $query;   
    } 
	public function getcollectionvideolist($did) {
        $this->db->where('id', $did);
        $query = $this->db->get('collectionvideo');
        return $query;        
    }
	public function getgenderselectionlist($did) {
        $this->db->where('id', $did);
        $query = $this->db->get('gender_selection');
        return $query;    
    }
	public function getroadsterselectionlist($did) {
        $this->db->where('id', $did);
        $query = $this->db->get('roadster_selection');
        return $query;    
    }
	public function getlistvideolist($did) {
        $this->db->where('id', $did);
        $query = $this->db->get('listvideo');
        return $query; 
    }
	public function getsortbylist($did) {
        $this->db->where('id', $did);
        $query = $this->db->get('sort_by');
        return $query;
    }
	
	public function getfilterbylist($did) {
        $this->db->where('id', $did);
        $query = $this->db->get('filter_by');
        return $query;
    }
	public function getproductdesclist($did) {
		$this->db->where('id', $did);
        $query = $this->db->get('productdesc');
        return $query;
    }
	public function getlicenselist($did) {
        $this->db->where('id', $did);
        $query = $this->db->get('license');
        return $query;
    }
	public function getsmssentlist($did) {
        $this->db->where('id', $did);
        $query = $this->db->get('send_sms');
        return $query;
    }
}