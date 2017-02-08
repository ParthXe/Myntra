<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');

		$this->load->model('Product_model');
	}	

	public function index() {

		$this->load->view('frontend/common/header');
		$this->load->view('frontend/product_details');
		$this->load->view('frontend/common/footer');
	}


	public function product_details($slug){
		$data['session'] = $this->session->userdata;
		$product_id = $this->Product_model->getProductId($slug);
		$data['product'] = $this->Product_model->product_details($product_id);

		$category_id = $this->Product_model->getSelectedCategories($data['product']['category_tid']);

		$data['similar'] = $this->Product_model->similar_products($product_id,$data['product']['category_tid'] ,$data['product']['size_id']);

		if (!is_null(get_cookie('pretmode_cart'))) {
			$data['cart'] = $this->Product_model->cart_details(get_cookie('pretmode_cart'), 'cart_cookie_key');
		} elseif(isset($data['session']['cart'])) {
			$data['cart'] = $this->Product_model->cart_details($data['session']['cart'], 'cart_id');
		} else {
			$data['cart'] = [];
		} 

		$this->load->view('frontend/common/header', $data);
		$this->load->view('frontend/product_details');
		$this->load->view('frontend/common/footer');

	}

	public function product_details_api(){
		$time = time();
		$created_on = 	date("Y-m-d H:i:s", $time);
		$data 		= 	array('pvar_prod_id'	=>	$this->input->post('product_id'));
		
		// $response_data	=	$this->Web_api_model->product_details($data);
		// if ($response_data['status'] == 1) {
		// 	$resp = array('status' => 1, 'message' => 'Details Save Successfully');
		// }else{
		// 	$resp = array('status' => 0, 'message' => 'Fail to insert');
		// }
		echo json_encode($data);
	}
}