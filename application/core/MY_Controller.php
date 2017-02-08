<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
 	
	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		//$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>'); 
	}

	function get_client_ip() {
	    $ipaddress = '';
	    if (isset($_SERVER['HTTP_CLIENT_IP']))
	        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
	    else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
	        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
	    else if(isset($_SERVER['HTTP_X_FORWARDED']))
	        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
	    else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
	        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
	    else if(isset($_SERVER['HTTP_FORWARDED']))
	        $ipaddress = $_SERVER['HTTP_FORWARDED'];
	    else if(isset($_SERVER['REMOTE_ADDR']))
	        $ipaddress = $_SERVER['REMOTE_ADDR'];
	    else
	        $ipaddress = 'UNKNOWN';
	    return $ipaddress;
	}

	/*public function product_details($product_id){
		$time = time();
		$created_on = 	date("Y-m-d H:i:s", $time);
		//$data 		= 	array('pvar_prod_id'	=>	$this->input->post('product_id'));
		$data 		= 	array('pvar_prod_id'	=>	$product_id);
		$response_data	=	$this->Web_api_model->product_details($data);
	
		if ($response_data['status'] == 1) {
			$resp = array('status' => 1, 'message' => 'Details Save Successfully');
		}else{
			$resp = array('status' => 0, 'message' => 'Fail to insert');
		}
		echo json_encode($resp);
	}*/
	// public function abc(){
	// 	return "chocolate";
	// }
}