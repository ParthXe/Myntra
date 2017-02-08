<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');

		$this->load->model('User_model');
	}	

	public function index() {
		if ($this->session->userdata('logged_in') == TRUE) {
			$uid = $this->session->userdata('usr_id');

			// Set Page Title
			$data['page_title'] = "My Profile";
			$data['session'] = $this->session->userdata;
			$data['active_tab'] = "profile";
			$data['user'] = $this->User_model->getUser($uid);
			$data['states'] = $this->User_model->getStates('India');

			if (!is_null(get_cookie('pretmode_cart'))) {
				$data['cart'] = $this->User_model->cart_details(get_cookie('pretmode_cart'), 'cart_cookie_key');
			} elseif(isset($data['session']['cart'])) {
				$data['cart'] = $this->User_model->cart_details($data['session']['cart'], 'cart_id');
			} else {
				$data['cart'] = [];
			}

			$this->load->view('frontend/common/header', $data);
			$this->load->view('frontend/user/user_left_menu');
			$this->load->view('frontend/user/profile');
			$this->load->view('frontend/common/footer');

		} else {
			redirect('admin/login');			
		}
	}

	public function wallet() {
		if ($this->session->userdata('logged_in') == TRUE) {
			// Set Page Title
			$data['page_title'] = "Wallet";

			$data['session'] = $this->session->userdata;

			if (!is_null(get_cookie('pretmode_cart'))) {
				$data['cart'] = $this->User_model->cart_details(get_cookie('pretmode_cart'), 'cart_cookie_key');
			} elseif(isset($data['session']['cart'])) {
				$data['cart'] = $this->User_model->cart_details($data['session']['cart'], 'cart_id');
			} else {
				$data['cart'] = [];
			}

			$data['active_tab'] = "wallet";

			$this->load->view('frontend/common/header', $data);
			$this->load->view('frontend/user/user_left_menu');
			$this->load->view('frontend/user/wallet');
			$this->load->view('frontend/common/footer');

		} else {
			redirect('admin/login');			
		}
	}

	public function seller() {
		if ($this->session->userdata('logged_in') == TRUE) {
			// Set Page Title
			$data['page_title'] = "Seller Section";

			$data['session'] = $this->session->userdata;

			if(isset($data['session']['usr_id'])) {
				$data['bank_details'] = $this->User_model->getBankDetails($data['session']['usr_id']);
			} else {
				$data['bank_details'] = [];
			}

			$data['product_count'] = $this->User_model->notSoldProduct($data['session']['usr_id'],'NOT SOLD');
			$data['pending_payments'] = $this->User_model->notSoldProduct($data['session']['usr_id'],'COMPLETE');
			$data['under_process'] = $this->User_model->notSoldProduct($data['session']['usr_id'],'IN PROCESS');
			$data['payment_done'] = $this->User_model->notSoldProduct($data['session']['usr_id'],'PAYMENT DONE');



			// echo"<pre>";
			// print_r($count);
			// echo"</pre>";
			// exit();

			$data['active_tab'] = "selling";

			$this->load->view('frontend/common/header', $data);
			$this->load->view('frontend/user/user_left_menu');
			$this->load->view('frontend/user/seller');
			$this->load->view('frontend/common/footer');

		} else {
			redirect('admin/login');			
		}
	}

	public function seller_products() {
		if ($this->session->userdata('logged_in') == TRUE) {
			// Set Page Title
			$data['page_title'] = "Seller Section";

			$data['session'] = $this->session->userdata;

			if(isset($data['session']['usr_id'])) {
				$data['processed'] = $this->User_model->seller_products($data['session']['usr_id'],'PAYMENT DONE');//seller payment done
				$data['uprocessed'] = $this->User_model->seller_products($data['session']['usr_id'],'IN PROCESS');//seller payment in process
				$data['pending_payment'] = $this->User_model->seller_products($data['session']['usr_id'],'COMPLETE');//seller order product
				$data['unsold'] = $this->User_model->seller_products($data['session']['usr_id'],'NOT SOLD');//seller active product on site
				$data['pending_product'] = $this->User_model->pending_products($data['session']['usr_id'],'NOT SOLD');//seller products not publish

			} else {
				$data['processed'] = [];
				$data['uprocessed'] = [];
				$data['pending_payment'] = [];
				$data['unsold'] = [];
				$data['pending_product'] = [];
			}

			$data['active_tab'] = "selling";

			$this->load->view('frontend/common/header', $data);
			$this->load->view('frontend/user/user_left_menu');
			$this->load->view('frontend/user/seller_products');
			$this->load->view('frontend/common/footer');

		} else {
			redirect('admin/login');			
		}
	}
	public function myorders(){
		if ($this->session->userdata('logged_in') == TRUE) {
			$this->load->model('Web_api_model');

			$uid = $this->session->userdata('usr_id');

			// Set Page Title
			$data['page_title'] = "My Orders";

			$data['session'] = $this->session->userdata;

			if (!is_null(get_cookie('pretmode_cart'))) {
				$data['cart'] = $this->User_model->cart_details(get_cookie('pretmode_cart'), 'cart_cookie_key');
			} elseif(isset($data['session']['cart'])) {
				$data['cart'] = $this->User_model->cart_details($data['session']['cart'], 'cart_id');
			} else {
				$data['cart'] = [];
			}
			
			$data['orders'] = $this->Web_api_model->web_my_order_history($uid);
			$data['active_tab'] = "order";

			$this->load->view('frontend/common/header', $data);
			$this->load->view('frontend/user/user_left_menu');
			$this->load->view('frontend/user/orders');
			$this->load->view('frontend/common/footer');

		} else {
			redirect('admin/login');			
		}
	}

	public function update_details(){
		if ($this->session->userdata('logged_in') == TRUE) {
			$data = $this->input->post('data');
			if($data['mail'] != $data['existing_mail']) {
				if(empty($this->User_model->user_load_mail($data['mail']))) {
					unset($data['existing_mail']);
					$this->User_model->updateUser($data, $roleData = null);
					$retData = array('status' => 1);
					echo json_encode($retData);
				} else {
					$retData = array('status' => 0, 'msg' => 'Email already in use');
					echo json_encode($retData);
				}
			} else {
				unset($data['existing_mail']);
				$this->User_model->updateUser($data, $roleData = null);
				$retData = array('status' => 1);
				echo json_encode($retData);
			}
		} else {
			redirect('admin/login');			
		}
	}	
}