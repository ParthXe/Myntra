<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Store extends MY_Controller {

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
		redirect('store/category/topwear');
	}

	public function category($slug) {

		$catID = $this->Product_model->getIdbySlug($slug, 'categories', 'cat_slug');

		
		$product_filter_array = array('category' => isset($catID->cat_id) != NULL ? $catID->cat_id : NULL,
									'child_cat' => ($this->input->get('child_cat') != null) ? $this->input->get('child_cat') : NULL,
									'from_price' => ($this->input->get('from_price') != null) ? $this->input->get('from_price') : NULL,
									'to_price' => ($this->input->get('to_price') != null) ? $this->input->get('to_price') : NULL,
									'color' => ($this->input->get('color') != null) ? $this->input->get('color') : NULL,
									'brand' => ($this->input->get('brand') != null) ? $this->input->get('brand') : NULL,
									'size' => ($this->input->get('size') != null) ? $this->input->get('size') : NULL,
									'condition' => ($this->input->get('condition') != null) ? $this->input->get('condition') : NULL,
									'sort' => ($this->input->get('sort') != null) ? $this->input->get('sort') : NULL
									//category' => isset($this->input->get('id') ? $this->input->get('id') : NULL),
									);
		//$product_filter_array = ($this->input->get('category') != null) ? $this->input->get('category') : NULL;		
		$data['session'] = $this->session->userdata;
		$data['products'] =  $this->Product_model->product_list($product_filter_array);
		$active_filters = [];
		$active_tokens = [];
		$i = 0;
		foreach ($_GET as $key => $value) {
			$name = $key;
			$array = explode(",", $value);
			foreach ($array as $key => $value) {
				array_push($active_filters, $value);
			}	
			foreach ($array as $key => $value) {
				if($name != "category" && $name != "sort") {
					$active_tokens[$i]['name'] = $name;
					$active_tokens[$i]['value'] = $value;
					$i++;
				}
			}	
		}

		$data['child_cat'] = $this->Product_model->getChildCategories($catID->cat_id);
		$data['sizes'] = $this->Product_model->getSizesFilterCat($catID->cat_id);
		$data['brands'] = $this->Product_model->getAllBrands();
		$data['colors'] = $this->Product_model->getAllColors();
		$data['conditions'] = $this->Product_model->getAllConditions();
		$data['active_filters'] = $active_filters;
		$data['active_tokens'] = $active_tokens;
		$data['slug'] = $slug;

		if (!is_null(get_cookie('pretmode_cart'))) {
			$data['cart'] = $this->Product_model->cart_details(get_cookie('pretmode_cart'), 'cart_cookie_key');
		} elseif(isset($data['session']['cart'])) {
			$data['cart'] = $this->Product_model->cart_details($data['session']['cart'], 'cart_id');
		} else {
			$data['cart'] = [];
		}		

		$this->load->view('frontend/common/header', $data);
		$this->load->view('frontend/listing');
		$this->load->view('frontend/common/footer');
	}
}