<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class screensaver_model extends MY_Model {
    function __construct() {
        parent::__construct();
    } 

	public function addscreensaverinfo($data) {
        $this->db->insert('screensaver',$data);
        return $user_id;
    }
	
    public function getscreensaverlist($page) {
        $screensaverinfo = [];
        $query = $this->db->get('screensaver');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $screensaverinfo[] = $row;
        }
		return $screensaverinfo;
    } 

    public function checkscreensaverinfo($did) {
        $this->db->where('id', $did);
        $query = $this->db->get('screensaver');
        return $query;        
    }

    public function updatescreensaverinfo($data) {
        $this->db->where('id',$data['id']);
        $this->db->update('screensaver',$data);
		
		return $user_id;
    }

}