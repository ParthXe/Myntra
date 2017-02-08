<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Denim_model extends MY_Model {
    function __construct() {
        parent::__construct();
    } 

    public function getAllDenimMale($page) {
        $denim_male = [];
        $query = $this->db->get('denim_male');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $denim_male[] = $row;
        }
        return $denim_male;
    } 

    public function getAllDenimFemale($page) {
        $denim_female = [];
        $query = $this->db->get('denim_female');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $denim_female[] = $row;
        }
        return $denim_female;
    } 

    public function checkDenimMale($did) {
        $this->db->where('Id', $did);
        $query = $this->db->get('denim_male');
        return $query;        
    }

    public function checkDenimFemale($did) {
        $this->db->where('Id', $did);
        $query = $this->db->get('denim_female');
        return $query;        
    }

    public function addDenimMale($addData) {

        $this->db->insert('denim_male',$addData);
        $user_id = $this->db->insert_id();
        return $user_id;
    }

    public function addDenimFemale($addData) {

        $this->db->insert('denim_female',$addData);
        $user_id = $this->db->insert_id();
        return $user_id;
    }

    public function updateDenimMale($data) {
        $this->db->where('Id',$data['Id']);
        $this->db->update('denim_male',$data);
    }

    public function updateDenimFemale($data) {
        $this->db->where('Id',$data['Id']);
        $this->db->update('denim_female',$data);
    }

   

}