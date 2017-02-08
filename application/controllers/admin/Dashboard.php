<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');

		$this->load->model('MY_model');
		//$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>'); 
	}	

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			
			// Set Page Title
			$header['page_title'] = "Dashboard";
			$params = [];

			// Create the data array to pass to view
			$data['session'] = $this->session->userdata;
			//$data['orders'] = $this->MY_model->getOrders($params);

			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $data);
			$this->load->view('admin/dashboard');
			$this->load->view('admin/common/footer');
		} else {
			redirect('admin/login');			
		}
	}
}
