<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends MY_Model {
    function __construct() {
        parent::__construct();
    } 
    public function getAllUsers($page) {
        $this->db->group_by('users.uid'); 
        $query = $this->db->get('users');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $users[] = $row;
        }
        return $users;
    } 

    public function checkUser($uid) {
        $this->db->where('uid', $uid);
        $query = $this->db->get('users');
        return $query;        
    }

    public function checkUserByMail($mail) {
        $this->db->where('mail', $mail);
        $query = $this->db->get('users');
        return $query;        
    }    



    public function addUser($data, $roleData, $addData) {

        $this->db->insert('users',$data);
        $user_id = $this->db->insert_id();

        foreach ($roleData['roles'] as $key => $value) {
            $roleTempArr = array(
                'ur_uid' => $user_id,
                'ur_rid' => $value
            );
            $this->db->insert('users_roles',$roleTempArr);
        }

        if(!empty($addData)) {
            $addData['ua_uid'] = $user_id;
            $this->db->insert('users_addresses',$addData);   
        }
    }

    public function updateUser($data, $roleData) {
        $this->db->where('uid',$data['uid']);
        $this->db->update('users',$data);

        if(!empty($roleData)) {
            $this->db->where('ur_uid', $data['uid']);
            $this->db->delete('users_roles');              

            foreach ($roleData['roles'] as $key => $value) {
                $roleTempArr = array(
                    'ur_uid' => $data['uid'],
                    'ur_rid' => $value
                );
                $this->db->insert('users_roles',$roleTempArr);
            }
        }
    }



    public function getUser($uid){
       return $this->User_model->user_load($uid);
    }


}