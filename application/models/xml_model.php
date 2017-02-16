<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Xml_model extends MY_Model {
    function __construct() {
        parent::__construct();
    } 
	public function getscreensaverlist($type) {
        $this->db->where('type', $type);
        $query = $this->db->get('screensaver');
		return $query;   
    } 
	public function getcollectionvideolist($type) {
        $this->db->where('type', $type);
        $query = $this->db->get('collectionvideo');
        return $query;        
    }
	public function getgenderselectionlist($type) {
        $this->db->where('type', $type);
        $query = $this->db->get('gender_selection');
        return $query;    
    }
	public function getroadsterselectionlist($type) {
        $this->db->where('type', $type);
        $query = $this->db->get('roadster_selection');
        return $query;    
    }
	public function getlistvideolist($type) {
        $this->db->where('type', $type);
        $query = $this->db->get('listvideo');
        return $query; 
    }
	public function getsortbylist($type) {
        $this->db->where('type', $type);
        $query = $this->db->get('sort_by');
        return $query;
    }
	
	public function getfilterbylist($type) {
        $this->db->where('type', $type);
        $query = $this->db->get('filter_by');
        return $query;
    }
	public function getproductdesclist($type) {
		$this->db->where('type', $type);
        $query = $this->db->get('productdesc');
        return $query;
    }
	public function getlicenselist($type) {
        $this->db->where('type', $type);
        $query = $this->db->get('license');
        return $query;
    }
	public function getsmssentlist($type) {
        $this->db->where('type', $type);
        $query = $this->db->get('send_sms');
        return $query;
    }
}