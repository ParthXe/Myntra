<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comm_model extends MY_model {
    function __construct() {
        parent::__construct();
    }
    public function insert($comm_info){

        $this->db->set('is_active', 0);
        $this->db->where('user_id',$comm_info['user_id']);
        $this->db->update('commission');
        $this->db->insert('commission', $comm_info);
        return $this->db->insert_id();

    }

    public function commValues($comm_values){

        $this->db->insert('commission_values', $comm_values);
        //$this->db->insert_id();
    }

    public function getCommissionList($page){

        $this->db->select('commission.*, commission_values.minimum, commission_values.max,commission_values.type,commission_values.amount,commission_values.created_on,users.mail,users.name');
        $this->db->join('commission_values', 'commission_values.comm_id = commission.comm_id', 'left');
        $this->db->join('users', 'users.uid = commission.user_id', 'left');
        $this->db->group_by("commission.comm_id");
        $this->db->order_by("commission_values.created_on","desc");
        $query = $this->db->get('commission');

        // $this->output->enable_profiler(TRUE);
        $commission = [];
        foreach ($query->result() as $row) {
            $commission[] = $row;
        }
        return $commission;
        //$this->db->insert_id();
    }


    public function getCommissionById($comm_id){
        $this->db->where('commission.comm_id', $comm_id);
        $this->db->select('commission.*,users.mail,users.name');
       // $this->db->join('commission_values', 'commission_values.comm_id = commission.comm_id', 'left');
        $this->db->join('users', 'users.uid = commission.user_id', 'left');
        $query = $this->db->get('commission');
        // $this->output->enable_profiler(TRUE);
        $commission_row = [];
        foreach ($query->result() as $row) {
            $this->db->where('commission_values.comm_id', $comm_id);
            $this->db->select('commission_values.*');
            $query_product = $this->db->get('commission_values');

            foreach ($query_product->result() as $commission_row) {
                $row->commission[] = $commission_row;
            }

        }
        return $row;
        //$this->db->insert_id();
    }
}