<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signin_model extends CI_Model {
    function __construct() {
        parent::__construct();
    } 

    public function does_user_exist($email) {
        $this->db->where('mail', $email);
        $this->db->join('users_roles', 'users_roles.ur_uid = users.uid', 'left');
        $this->db->limit(1);
        $query = $this->db->get('users');
        return $query;
    }

	public function signout() {
		$this->session->sess_destroy();
		redirect ('login');
	}     
}