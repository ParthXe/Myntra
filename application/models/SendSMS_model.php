<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class sendSMS_model extends MY_Model {
    function __construct() {
        parent::__construct();
    } 
	/*Done*/
	public function addSendSMSInfo($addData) {
        $this->db->insert('send_sms',$addData);
        return $user_id;
    }
	
    public function getSendSMSList($data) {
        $sendSMSList = [];
		$this->db->where('type',$data['type']);
        $query = $this->db->get('send_sms');
        foreach ($query->result() as $row) {
            $sendSMSList[] = $row;
        }
		return $sendSMSList;
    } 
	
    public function checkSendSMSInfo($did) {
        $this->db->where('id', $did);
        $query = $this->db->get('send_sms');
        return $query;        
    }

    public function updateSendSMSInfo($data) {
        $this->db->where('id',$data['id']);
        $this->db->update('send_sms',$data);
		
		return $user_id;
    }
	/*Done*/
}