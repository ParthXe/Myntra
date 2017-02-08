<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Tshirts_model extends MY_Model {
    function __construct() {
        parent::__construct();
    } 

    public function getAllTshirtMale($page) {
        $tshirts_male = [];
        $query = $this->db->get('tshirts_male');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $tshirts_male[] = $row;
        }
        return $tshirts_male;
    } 

    public function getAllTshirtFemale($page) {
        $tshirts_female = [];
        $query = $this->db->get('tshirts_female');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $tshirts_female[] = $row;
        }
        return $tshirts_female;
    } 

    public function checkTshirtMale($did) {
        $this->db->where('Id', $did);
        $query = $this->db->get('tshirts_male');
        return $query;        
    }

    public function checkTshirtFemale($did) {
        $this->db->where('Id', $did);
        $query = $this->db->get('tshirts_female');
        return $query;        
    }

    public function addTshirtMale($addData) {

        $this->db->insert('tshirts_male',$addData);
        $user_id = $this->db->insert_id();
        return $user_id;
    }

    public function addTshirtFemale($addData) {

        $this->db->insert('tshirts_female',$addData);
        $user_id = $this->db->insert_id();
        return $user_id;
    }

    public function updateTshirtMale($data) {
        $this->db->where('Id',$data['Id']);
        $this->db->update('tshirts_male',$data);
    }

    public function updateTshirtFemale($data) {
        $this->db->where('Id',$data['Id']);
        $this->db->update('tshirts_female',$data);
    }

   

}