<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LooksJSON extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		$this->load->model('looksJSON_model');
	}	
	/* Done */
	public function index() {
		//if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set Page Title
			$header['page_title'] = "Style Images";
			$page = 1;	
			$data['type'] = trim($this->uri->segment(3));
			$data['gender'] = trim($this->uri->segment(4));
			$json_data = $this->looksJSON_model->getJSON($data);
			//echo "<pre>";
			for($ii=0;$ii<count($json_data);$ii++)
			{ 
				$StyleData = $this->looksJSON_model->getStyles($json_data[$ii]->id);
				for($kk=0;$kk<count($StyleData);$kk++)
				{
					$json_data[$ii]->styles[] = $StyleData[$kk];	
				}
			}
			echo json_encode($json_data,JSON_UNESCAPED_SLASHES);
			//echo json_encode($json_data);
			// Create the data array to pass to view
			$menu_details['session'] = $this->session->userdata;
			$data['styleList'] = $json_data;
			$data['message'] = $this->session->flashdata('message');
			//$this->load->view('admin/common/header', $header);
			//$this->load->view('admin/common/left_menu', $menu_details);
			//$this->load->view('admin/style/list', $data);
			//$this->load->view('admin/common/footer');
		/* } else {
			redirect('admin/login');
		} */
	}	

	/* Done */
	
}
