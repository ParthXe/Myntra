<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shirt_model extends MY_Model {
    function __construct() {
        parent::__construct();
    } 

    public function getAllShirtMale($page) {
        $shirts_male = [];
        $query = $this->db->get('shirts_male');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $shirts_male[] = $row;
        }
        return $shirts_male;
    } 

    public function getAllShirtFemale($page) {
        $shirts_female = [];
        $query = $this->db->get('shirts_female');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $shirts_female[] = $row;
        }
        return $shirts_female;
    } 

    public function checkShirtMale($did) {
        $this->db->where('Id', $did);
        $query = $this->db->get('shirts_male');
        return $query;        
    }

    public function checkShirtFemale($did) {
        $this->db->where('Id', $did);
        $query = $this->db->get('shirts_female');
        return $query;        
    }

    public function addShirtMale($addData) {

        $this->db->insert('shirts_male',$addData);
        $user_id = $this->db->insert_id();
        return $user_id;
    }

    public function addShirtFemale($addData) {

        $this->db->insert('shirts_female',$addData);
        $user_id = $this->db->insert_id();
        return $user_id;
    }

    public function updateShirtMale($data) {
        $this->db->where('Id',$data['Id']);
        $this->db->update('shirts_male',$data);
    }

    public function updateShirtFemale($data) {
        $this->db->where('Id',$data['Id']);
        $this->db->update('shirts_female',$data);
    }

   

}