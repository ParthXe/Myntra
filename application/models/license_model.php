<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class License_model extends MY_Model {
    function __construct() {
        parent::__construct();
    } 
	/*Done*/
	public function addLicenseInfo($addData) {
        $this->db->insert('license',$addData);
        return $user_id;
    }
	
    public function getLicenseList($page) {
        $sendSMSList = [];
        $query = $this->db->get('license');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $sendSMSList[] = $row;
        }
		return $sendSMSList;
    } 
	
    public function checkLicenseInfo($did) {
        $this->db->where('id', $did);
        $query = $this->db->get('license');
        return $query;        
    }

    public function updateLicenseInfo($data) {
        $this->db->where('id',$data['id']);
        $this->db->update('license',$data);
		
		return $user_id;
    }
	/*Done*/
}