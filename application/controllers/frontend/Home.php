<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		$this->load->model('My_model');
	}	

	public function index() {
		$data['session'] = $this->session->userdata;

		if (!is_null(get_cookie('pretmode_cart'))) {
			$data['cart'] = $this->My_model->cart_details(get_cookie('pretmode_cart'), 'cart_cookie_key');
			$_SESSION['cart'] = $data['cart']['details']->cart_id;
		} elseif(isset($data['session']['cart'])) {
			$data['cart'] = $this->My_model->cart_details($data['session']['cart'], 'cart_id');
			$_SESSION['cart'] = $data['cart']['details']->cart_id;
		} else {
			$data['cart'] = [];
		}		
		
		$data['featured'] = $this->My_model->featured_products();

		$this->load->view('frontend/common/header', $data);
		$this->load->view('frontend/home');
		$this->load->view('frontend/common/footer');
	}

	public function sell() {

		$data['session'] = $this->session->userdata;

		if (!is_null(get_cookie('pretmode_cart'))) {
			$data['cart'] = $this->My_model->cart_details(get_cookie('pretmode_cart'), 'cart_cookie_key');
			$_SESSION['cart'] = $data['cart']['details']->cart_id;
		} elseif(isset($data['session']['cart'])) {
			$data['cart'] = $this->My_model->cart_details($data['session']['cart'], 'cart_id');
			$_SESSION['cart'] = $data['cart']['details']->cart_id;
		} else {
			$data['cart'] = [];
		}	
		
		$this->load->view('frontend/common/header', $data);
		$this->load->view('frontend/sell');
		$this->load->view('frontend/common/footer');
	}	
}