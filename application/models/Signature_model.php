<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signature_model extends MY_Model {
    function __construct() {
        parent::__construct();
    } 

    public function getAllDestination($page) {
        $destination = [];
        $query = $this->db->get('destination');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $destination[] = $row;
        }
        return $destination;
    } 

    public function checkDestination($did) {
        $this->db->where('Id', $did);
        $query = $this->db->get('destination');
        return $query;        
    }

    public function addDenimVideo($addData) {

        $this->db->insert('signature_video',$addData);
        $user_id = $this->db->insert_id();

        return $user_id;
    }

    public function addShirtVideo($addData) {

        $this->db->insert('signature_video',$addData);
        $user_id = $this->db->insert_id();

        return $user_id;
    }

    public function addTshirtVideo($addData) {

        $this->db->insert('signature_video',$addData);
        $user_id = $this->db->insert_id();

        return $user_id;
    }


    public function updateDestination($data) {
        $this->db->where('Id',$data['Id']);
        $this->db->update('destination',$data);
    }

}