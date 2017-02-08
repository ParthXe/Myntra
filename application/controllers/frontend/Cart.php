<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');

		$this->load->model('Cart_model');
	}	

	public function index(){
		$data['session'] = $this->session->userdata;

		if (!is_null(get_cookie('pretmode_cart'))) {
			$data['cart'] = $this->Cart_model->cart_details(get_cookie('pretmode_cart'), 'cart_cookie_key');
			$_SESSION['cart'] = $data['cart']['details']->cart_id;


			if(!empty($data['cart']['coupon'])) {
				$couponAmt = $this->Cart_model->getCouponAmt($data['cart']['details']->cart_total, $data['cart']['coupon']->cp_code);
				$subTotal = $data['cart']['details']->cart_total - $couponAmt;
				$data['cart']['details']->discount = $couponAmt;
				$data['cart']['details']->cart_discounted_total = $subTotal;
			} else {
				$data['cart']['details']->discount = 0;
				$data['cart']['details']->cart_discounted_total = $data['cart']['details']->cart_total;
			}
		} elseif(isset($data['session']['cart'])) {
			$data['cart'] = $this->Cart_model->cart_details($data['session']['cart'], 'cart_id');
			$_SESSION['cart'] = $data['cart']['details']->cart_id;


			if(!empty($data['cart']['coupon'])) {
				$couponAmt = $this->Cart_model->getCouponAmt($data['cart']['details']->cart_total, $data['cart']['coupon']->cp_code);
				$subTotal = $data['cart']['details']->cart_total - $couponAmt;
				$data['cart']['details']->discount = $couponAmt;
				$data['cart']['details']->cart_discounted_total = $subTotal;
			} else {
				$data['cart']['details']->discount = 0;
				$data['cart']['details']->cart_discounted_total = $data['cart']['details']->cart_total;
			}
		} else {
			$data['cart'] = [];
		}

		$this->load->view('frontend/common/header', $data);
		$this->load->view('frontend/cart/cart');
		$this->load->view('frontend/common/footer');
	}

	public function login(){

		if($this->session->userdata('logged_in') == TRUE) {
			redirect('cart/address');
		}

		$data['session'] = $this->session->userdata;

		if (!is_null(get_cookie('pretmode_cart'))) {
			$data['cart'] = $this->Cart_model->cart_details(get_cookie('pretmode_cart'), 'cart_cookie_key');
			$_SESSION['cart'] = $data['cart']['details']->cart_id;


			if(!empty($data['cart']['coupon'])) {
				$couponAmt = $this->Cart_model->getCouponAmt($data['cart']['details']->cart_total, $data['cart']['coupon']->cp_code);
				$subTotal = $data['cart']['details']->cart_total - $couponAmt;
				$data['cart']['details']->discount = $couponAmt;
				$data['cart']['details']->cart_discounted_total = $subTotal;
			} else {
				$data['cart']['details']->discount = 0;
				$data['cart']['details']->cart_discounted_total = $data['cart']['details']->cart_total;
			}
		} elseif(isset($data['session']['cart'])) {
			$data['cart'] = $this->Cart_model->cart_details($data['session']['cart'], 'cart_id');
			$_SESSION['cart'] = $data['cart']['details']->cart_id;


			if(!empty($data['cart']['coupon'])) {
				$couponAmt = $this->Cart_model->getCouponAmt($data['cart']['details']->cart_total, $data['cart']['coupon']->cp_code);
				$subTotal = $data['cart']['details']->cart_total - $couponAmt;
				$data['cart']['details']->discount = $couponAmt;
				$data['cart']['details']->cart_discounted_total = $subTotal;
			} else {
				$data['cart']['details']->discount = 0;
				$data['cart']['details']->cart_discounted_total = $data['cart']['details']->cart_total;
			}
		} else {
			$data['cart'] = [];
		}

		if(isset($_SESSION['order_id'])) {
			// If order id is set in session update the order 
			$params = array(
				'user_id' => 0,
				'order_id' => $_SESSION['order_id'],
				'order_total' => $this->input->post('order_total'),
				'order_products' => $this->input->post('order_products'),
			);

			if(!empty($data['cart']['coupon'])) {
				$params['coupon'] = array(
					'coupon_id' => $data['cart']['coupon']->cp_id,
					'coupon' => $data['cart']['coupon']->cp_code,
					'coupon_amount' => 100,
					'coupon_type' => "flat",
				);
			} else {
				$params['coupon'] = [];
			}

			$order = $this->order($params);
		} else {
			// Else add a new order
			$params = array(
				'user_id' => 0,
				'order_products' => $this->input->post('order_products'),
				'order_total' => $this->input->post('order_total'),
			);

			$order = $this->order($params);

			// Set the session order id
			$_SESSION['order_id'] = $order['order_id'];
		}

		$this->load->view('frontend/common/header', $data);
		$this->load->view('frontend/cart/cart-login');
		$this->load->view('frontend/common/footer');
	}	

	public function address(){

		$data['session'] = $this->session->userdata;

		if (!is_null(get_cookie('pretmode_cart'))) {
			$data['cart'] = $this->Cart_model->cart_details(get_cookie('pretmode_cart'), 'cart_cookie_key');
			$_SESSION['cart'] = $data['cart']['details']->cart_id;


			if(!empty($data['cart']['coupon'])) {
				$couponAmt = $this->Cart_model->getCouponAmt($data['cart']['details']->cart_total, $data['cart']['coupon']->cp_code);
				$subTotal = $data['cart']['details']->cart_total - $couponAmt;
				$data['cart']['details']->discount = $couponAmt;
				$data['cart']['details']->cart_discounted_total = $subTotal;
			} else {
				$data['cart']['details']->discount = 0;
				$data['cart']['details']->cart_discounted_total = $data['cart']['details']->cart_total;
			}
		} elseif(isset($data['session']['cart'])) {
			$data['cart'] = $this->Cart_model->cart_details($data['session']['cart'], 'cart_id');
			$_SESSION['cart'] = $data['cart']['details']->cart_id;


			if(!empty($data['cart']['coupon'])) {
				$couponAmt = $this->Cart_model->getCouponAmt($data['cart']['details']->cart_total, $data['cart']['coupon']->cp_code);
				$subTotal = $data['cart']['details']->cart_total - $couponAmt;
				$data['cart']['details']->discount = $couponAmt;
				$data['cart']['details']->cart_discounted_total = $subTotal;
			} else {
				$data['cart']['details']->discount = 0;
				$data['cart']['details']->cart_discounted_total = $data['cart']['details']->cart_total;
			}
		} else {
			$data['cart'] = [];
		}


		if(isset($data['session']['usr_id'])) {
			$data['user'] = $this->Cart_model->user_load($data['session']['usr_id']);
		} else {
			$data['user'] = [];
		}

		if(isset($_SESSION['order_id'])) {
			// If order id is set in session update the order 
			$params = array(
				'user_id' => $this->input->post('order_user'),
				'order_id' => $_SESSION['order_id'],
				'order_total' => $this->input->post('order_total'),
				'order_products' => $this->input->post('order_products'),
			);

			if(!empty($data['cart']['coupon'])) {
				$params['coupon'] = array(
					'coupon_id' => $data['cart']['coupon']->cp_id,
					'coupon' => $data['cart']['coupon']->cp_code,
					'coupon_amount' => $this->Cart_model->getCouponAmt($data['cart']['details']->cart_total, $data['cart']['coupon']->cp_code),
					'coupon_type' => "flat",
				);
			} else {
				$params['coupon'] = [];
			}

			$order = $this->order($params);
		} else {
			// Else add a new order
			$params = array(
				'user_id' => $this->input->post('order_user'),
				'order_products' => $this->input->post('order_products'),
				'order_total' => $this->input->post('order_total'),
			);

			$order = $this->order($params);

			// Set the session order id
			$_SESSION['order_id'] = $order['order_id'];
		}

		$this->load->view('frontend/common/header', $data);
		$this->load->view('frontend/cart/cart-address');
		$this->load->view('frontend/common/footer');
	}

	public function checkout(){

		if(!$_SESSION['order_id']){
			redirect('cart');
		}

		$data['session'] = $this->session->userdata;

		if (!is_null(get_cookie('pretmode_cart'))) {
			$data['cart'] = $this->Cart_model->cart_details(get_cookie('pretmode_cart'), 'cart_cookie_key');
			$_SESSION['cart'] = $data['cart']['details']->cart_id;


			if(!empty($data['cart']['coupon'])) {
				$couponAmt = $this->Cart_model->getCouponAmt($data['cart']['details']->cart_total, $data['cart']['coupon']->cp_code);
				$subTotal = $data['cart']['details']->cart_total - $couponAmt;
				$data['cart']['details']->discount = $couponAmt;
				$data['cart']['details']->cart_discounted_total = $subTotal;
			} else {
				$data['cart']['details']->discount = 0;
				$data['cart']['details']->cart_discounted_total = $data['cart']['details']->cart_total;
			}
		} elseif(isset($data['session']['cart'])) {
			$data['cart'] = $this->Cart_model->cart_details($data['session']['cart'], 'cart_id');
			$_SESSION['cart'] = $data['cart']['details']->cart_id;


			if(!empty($data['cart']['coupon'])) {
				$couponAmt = $this->Cart_model->getCouponAmt($data['cart']['details']->cart_total, $data['cart']['coupon']->cp_code);
				$subTotal = $data['cart']['details']->cart_total - $couponAmt;
				$data['cart']['details']->discount = $couponAmt;
				$data['cart']['details']->cart_discounted_total = $subTotal;
			} else {
				$data['cart']['details']->discount = 0;
				$data['cart']['details']->cart_discounted_total = $data['cart']['details']->cart_total;
			}
		} else {
			$data['cart'] = [];
		}

		if(isset($data['session']['usr_id'])) {
			$data['user'] = $this->Cart_model->user_load($data['session']['usr_id']);
		} else {
			$data['user'] = [];
		}

		$params = array(
			'user_id' => $this->input->post('order_user'),
			'order_id' => $_SESSION['order_id'],
			'order_total' => $this->input->post('order_total'),
			'order_products' => $this->input->post('order_products'),
			'address_name' => $this->input->post('address_name'),
			'address_line_1' => $this->input->post('address_line_1'),
			'address_line_2' => $this->input->post('address_line_2'),
			'address_city' => $this->input->post('address_city'),
			'address_state' => $this->input->post('address_state'),
			'address_zipcode' => $this->input->post('address_zipcode'),
			'address_mobile' => $this->input->post('address_mobile'),
			'order_mail' => $this->session->userdata('usr_email'),
		);

		if(!empty($data['cart']['coupon'])) {
			$params['coupon'] = array(
				'coupon_id' => $data['cart']['coupon']->cp_id,
				'coupon' => $data['cart']['coupon']->cp_code,
				'coupon_amount' => $this->Cart_model->getCouponAmt($data['cart']['details']->cart_total, $data['cart']['coupon']->cp_code),
				'coupon_type' => "flat",
			);
		} else {
			$params['coupon'] = [];
		}		

		$_SESSION['selected_address']['address_name'] 		= $this->input->post('address_name');
		$_SESSION['selected_address']['address_line_1'] 	= $this->input->post('address_line_1');
		$_SESSION['selected_address']['address_line_2'] 	= $this->input->post('address_line_2');
		$_SESSION['selected_address']['address_city'] 		= $this->input->post('address_city');
		$_SESSION['selected_address']['address_state'] 		= $this->input->post('address_state');
		$_SESSION['selected_address']['address_zipcode'] 	= $this->input->post('address_zipcode');
		$_SESSION['selected_address']['address_mobile'] 	= $this->input->post('address_mobile');

		$order = $this->order($params);

		$this->load->view('frontend/common/header', $data);
		$this->load->view('frontend/cart/cart-checkout');
		$this->load->view('frontend/common/footer');
	}

	public function add(){

		$time=time();
		$created = date ("Y-m-d H:i:s", $time);

		$varDetails = $this->Cart_model->getVarDetails($this->input->post('data[0]'));
		if($this->input->post('data') != '') {
			if (is_null(get_cookie('pretmode_cart'))) {

				$cookie= array(
					'name'   => 'pretmode_cart',
					'value'  => 'ABCD',
					'expire' => '86500',
				);
				$this->input->set_cookie($cookie);


				$cart_data = array(
					'cart_uid' => ($this->session->userdata('usr_id') != "") ? $this->session->userdata('usr_id') : 0,
					'cart_cookie_key' => 'ABCD',
					'cart_prod_vars' => json_encode($this->input->post('data')),
					'cart_total' => $varDetails[0]['sell_price'],
					'cart_user_ip' => $this->get_client_ip(),
					'cart_created_on' => $created
				);
				$cart_id = $this->Cart_model->insert($cart_data);
				if($cart_id) {
					$_SESSION['cart'] = $cart_id;
					$respData = array('status' => 1, 'msg' => "Cart updated successfully", 'product' => $varDetails[0]);
					echo json_encode($respData);	
				} else {
					$respData = array('status' => 0, 'msg' => "Error when creating the cart");
					echo json_encode($respData);
				}
			} else {
				$cart_data = array(
					'cart_cookie_key' => 'ABCD',
					'cart_prod_vars' => json_encode($this->input->post('data')),
					'cart_total' => $varDetails[0]['sell_price'],
					'cart_user_ip' => $this->get_client_ip(),
					'cart_created_on' => $created
				);

				if($this->Cart_model->checkVarExists($cart_data) == false){
					$respData = array('status' => 0, 'msg' => "Product already added");
					echo json_encode($respData);
				} else {
					if($this->Cart_model->update($cart_data) == false) {
						$respData = array('status' => 0, 'msg' => "Could not update the cart");
						echo json_encode($respData);
					} else {
						$varDetails = $this->Cart_model->getVarDetails($this->input->post('data[0]'));
						$respData = array('status' => 1, 'msg' => "Cart updated successfully", 'product' => $varDetails[0]);
						echo json_encode($respData);								
					}
				}
			}
		} else {
			echo 'No Products';
			redirect('cart');
		}
	}

	public function remove(){

		$data = $this->input->post('data');
		$session = $this->session->userdata;
		$data['cart_id'] = $session['cart'];

		if($this->Cart_model->remove($data) == true) {


			$cart = $this->Cart_model->cart_details($data['cart_id'], 'cart_id');

			if($cart['details']->cart_coupon_applied != ""){
				$params = array(
					'code' => $cart['details']->cart_coupon_code,
					'cart_id' => $data['cart_id'],
				);

				$checkCoupon = $this->checkCouponCart($params);

				if($checkCoupon->status == 2) {
					if($this->Cart_model->removeCoupon($data['cart_id']) == true) {
            			$retData = array('status' => 2, 'msg' => 'Product and Coupon removed');
            			echo json_encode($retData);
					}
				} else {
		            $retData = array('status' => 1, 'msg' => 'Product removed');
		            echo json_encode($retData);					
				}
			} else {
	            $retData = array('status' => 1, 'msg' => 'Product removed');
	            echo json_encode($retData);					
			}
		} else {
            $retData = array('status' => 0, 'msg' => "Could not remove item");
            echo json_encode($retData);
		}
	}

	public function coupon(){
		$data = $this->input->post('data');

		$coupon = $this->Cart_model->getCouponByCode($data['code']);

		if($coupon != "") {
			$cart = $this->Cart_model->cart_details($data['cart_id'], 'cart_id');

			$total = "";
			foreach ($cart['products'] as $cartPrd) {
				$total += $cartPrd['sell_price'];
			}

			$params = array(
				'coupon_id' => 1,
				'order_total' => $total,
			);

			$tData = json_decode($this->Cart_model->checkCouponIfApplicable($params));
			if($tData->status == 1){
				$params = array(
					'cart_id' => $data['cart_id'],
					'cart_coupon_applied' => 1,
					'cart_coupon_code' => $data['code'],
				);
				if($this->Cart_model->addCouponToCart($params) ==  true){
					echo json_encode($tData);
				} else {
					$data = array('status' => 0, 'msg' => "Please try again");
					echo json_encode($data);
				}
			} else {
				echo json_encode($tData);				
			}
			exit();
		} else {
			$data = array('status' => 0, 'msg' => "Invalid Code");
			echo json_encode($data);
		}
	}

	public function checkCouponCart($data){

		$coupon = $this->Cart_model->getCouponByCode($data['code']);

		if($coupon != "") {
			$cart = $this->Cart_model->cart_details($data['cart_id'], 'cart_id');

			$total = "";
			foreach ($cart['products'] as $cartPrd) {
				$total += $cartPrd['sell_price'];
			}

			$params = array(
				'coupon_id' => $coupon->cp_id,
				'order_total' => $total,
			);

			$tData = json_decode($this->Cart_model->checkCouponIfApplicable($params));

			return $tData;

		} else {
			$data = array('status' => 0, 'msg' => "Invalid Code");
			echo json_encode($data);
		}
	}	

	public function order($params){

		$time = time();
		$created_on = 	date("Y-m-d H:i:s", $time);
		$user_id 		= (isset($params['user_id'])) ? $params['user_id'] : '';
		$products_id 	= (isset($params['order_products'])) ? $params['order_products'] : '';
		$order_id 		= (isset($params['order_id'])) ? $params['order_id'] : '';
		
		$address1 		= (isset($params['address_line_1'])) ? $params['address_line_1'] : '';
		$address2 		= (isset($params['address_line_2'])) ? $params['address_line_2'] : '';
		$firstname 		= (isset($params['address_name'])) ? $params['address_name'] : '';
		$city 			= (isset($params['address_city'])) ? $params['address_city'] : '';
		$state 			= (isset($params['address_state'])) ? $params['address_state'] : '';
		$zip 			= (isset($params['address_zipcode'])) ? $params['address_zipcode'] : '';
		$mobile 		= (isset($params['address_mobile'])) ? $params['address_mobile'] : '';
		$mail 			= (isset($params['order_mail'])) ? $params['order_mail'] : '';
		$points 		= (isset($params['points'])) ? $params['points'] : '';
		$payment_method = (isset($params['payment_method'])) ? $params['payment_method'] : '';
		$order_total 	= (isset($params['order_total'])) ? $params['order_total'] : '';

		// if ($user_id == "")		{	$user_id 	= '';	}
		// if ($order_id == "")	{	$order_id 	= '';	}
		// if ($address1 == "")	{	$address1 	= '';	}
		// if ($address2 == "")	{	$address2 	= '';	}
		// if ($firstname == "")	{	$firstname 	= '';	}
		// if ($city == "")		{	$city 		= '';	}
		// if ($state == "")		{	$state 		= '';	}
		// if ($zip == "") 		{	$zip 		= '';	}
		// if ($mobile == "") 		{	$mobile 	= '';	}
		// if ($coupon == "") 		{	$coupon 	= '';	}
		// if ($mail == "") 		{	$mail 		= '';	}
		// if ($points == "") 		{	$points 	= '';	}
		// if ($payment_method == "") 	{	$payment_method = '';	}
		// if ($coupon_type == "") 	{	$coupon_type 	= '';	}
		// if ($coupon_id == "") 		{	$coupon_id 		= '';	}
		// if ($coupon_amount == "")	{	$coupon_amount 	= '';	}
		// if ($order_total == "") 	{	$order_total 	= '';	}
		
		$data['products_id'] 		=	$products_id;
		$product_count		 		=	explode(",", $data['products_id']);

		if(!empty($params['coupon'])) {
			$data['coupon'] = $params['coupon'];
			$order_coupon_total = $order_total - $data['coupon']['coupon_amount'];
		} else {
			$data['coupon'] = [];
			$order_coupon_total = $order_total;
		}
		
		$data['product_data']  		= 	array(	'uid'					=>	$user_id,
												'order_id'				=>	$order_id,
												'order_status'			=>	'in_checkout',
												'order_total'			=>	$order_coupon_total,
												'order_product_total'	=>	$order_total,
												'product_count'			=>	sizeof($product_count),
												'primary_email'			=>	$mail,
												'delivery_first_name'	=>	$firstname,
												'delivery_phone'		=>	$mobile,
												'delivery_company'		=>	'',
												'delivery_street1'		=>	$address1,
												'delivery_street2'		=>	$address2,
												'delivery_city'			=>	$city,
												'delivery_state'		=> 	$state,
												'delivery_postal_code'	=>	$zip,	
												'delivery_country'		=>	'India',
												'payment_method'		=> 	$payment_method,
												'created'				=> 	$created_on,
												'modified'				=>	$created_on,
												'currency'				=>	'INR');

		$data['points'] = array('points' =>	$points);

		$this->load->model('Web_api_model');
								  	
		$response_data 	=	$this->Web_api_model->create_order($data);
		if($response_data['status'] >= 1) {
		   $data = array('status' => 1, 'message' => "Success", 'order_id'=> $response_data['order_id']);
		} else {
		   $data = array('status' => 0, 'message' => "Fail" ,'data' => null);
		}
		return $data;
	}

	public function removecoupon() {
		$cart_id = $this->input->post('data');
		$resp = $this->Cart_model->removeCoupon($cart_id);

		if($resp == true){
			$retData = array('status' => 1, 'msg' => 'Coupon removed');
			echo json_encode($retData);
		}
	}

}