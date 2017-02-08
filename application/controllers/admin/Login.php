<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->load->helper('security');
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>'); 

		$this->load->model('Web_api_model');
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
		$header['page_title'] = "Login";

		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
		  	redirect('admin/dashboard');
		} else {
			// Set validation rules for view filters
			$this->form_validation->set_rules('usr_email', $this->lang->line('signin_email'), 'required|valid_email|min_length[5]|max_length[125]');
			$this->form_validation->set_rules('usr_password', $this->lang->line('signin_password'), 'required|min_length[5]|max_length[30]');

			if ($this->form_validation->run() == FALSE) {
				$this->load->view('admin/common/header', $header);
				$this->load->view('admin/login');
				$this->load->view('admin/common/footer');
			} else {
				$usr_email = $this->input->post('usr_email');
				$password = $this->input->post('usr_password');

				$this->load->model('Signin_model');
				$query = $this->Signin_model->does_user_exist($usr_email);


				if ($query->num_rows() == 1) { // One matching row found
				  	foreach ($query->result() as $row) {
						// Generate hash from a their password
						$hash = sha1($password);

						if ($row->is_active != 0) { // See if the user is active or not
							// Compare the generated hash with that in the database
							if ($hash != $row->pass) {
								// Didn't match so send back to login
								$data['error'] = "login_fail_password";
								$this->load->view('admin/common/header');
								$this->load->view('admin/login', $data);
								$this->load->view('admin/common/footer'); 
							} elseif($row->ur_rid == 1) {
								$data = array(
								    'usr_id' => $row->uid,
								    'usr_name' => $row->name,
								    'usr_fname' => $row->fname,
								    'usr_email' => $row->mail,
								    'rid' => $row->ur_rid,
								    'logged_in' => TRUE
								);
								// Save data to session
								$this->session->set_userdata($data);
								redirect('admin/dashboard');
							} else {
								// Dont allow any users to login in dashboard unless admin
								$data['error'] = "login_fail_no_access";
								$this->load->view('admin/common/header');
								$this->load->view('admin/login', $data);
								$this->load->view('admin/common/footer');		
							}
						} else {
							// User currently inactive
							$data['error'] = "login_fail_no_user";
							$this->load->view('admin/common/header');
							$this->load->view('admin/login', $data);
							$this->load->view('admin/common/footer');
						}
					}
				} else {
					$data['error'] = "login_fail_no_user";
					$this->load->view('admin/common/header');
					$this->load->view('admin/login', $data);
					$this->load->view('admin/common/footer');
				}
			}
		}
	}

	public function logout() {
		$this->session->sess_destroy();
		redirect ('admin/login');
	}

	public function web_login(){
		$data   	= 	array('mail'	=>$this->input->post('mail'),
							  'password'=>$this->input->post('password'));
		$response_data	=	$this->Web_api_model->user_login($data);

		if (sizeof($response_data) >0) {
			// Merge carts when log in
			$this->load->model('Cart_model');

			$this->Cart_model->mergeCart($response_data['uid'], $this->get_client_ip());

			$cart = $this->Web_api_model->user_cart($response_data['uid']);

			$data = array(
			    'usr_id' => $response_data['uid'],
			    'usr_fname' => $response_data['first_name'],
			    'usr_email' => $response_data['mail'],
			    'rid' => 1,
			    'logged_in' => TRUE,
			    'cart' => json_decode($cart)
			);
			// Save data to session
			$this->session->set_userdata($data);

			$resp = array('status' => 1, 'message' => 'Success','data'=>$response_data);
		}else{

			$resp = array('status' => 0, 'message' => 'Fail');
		}
		echo json_encode($resp);
	}

	public function web_user_registration(){

		$time = time();
		$created_on = 	date("Y-m-d H:i:s", $time);
		$data   	= 	array(	'name'		=>$this->input->post('mail'),
								'fname'		=>$this->input->post('firstname'),
								'lname'		=>$this->input->post('lastname'),
								'mail'		=>$this->input->post('mail'),
								'mobile'	=>$this->input->post('mobile'),
							  	'pass'		=>sha1($this->input->post('password')),
							  	'is_active'	=> 1,
							  	'created_on'=>$created_on
							  	);
		$response_data	=	$this->Web_api_model->user_registeration($data);
		
		switch ($response_data['status']) {
			case 1:

				// Merge carts when log in
				$this->load->model('Cart_model');

				$this->Cart_model->mergeCart($response_data['data']['uid'], $this->get_client_ip());

				$cart = $this->Web_api_model->user_cart($response_data['data']['uid']);			

				$data = array(
					'usr_id' => $response_data['data']['uid'],
					'usr_fname' => $response_data['data']['first_name'],
					'usr_email' => $response_data['data']['mail'],
					'rid' => 1,
					'logged_in' => TRUE,
					'cart' => json_decode($cart)
				);
				// Save data to session
				$this->session->set_userdata($data);

				$resp = array('status' => 1, 'message' => 'Success');
				echo json_encode($resp);
				break;
			case 2:
				$resp = array('status' => 2, 'message' => 'User already register', 'data' => null );
				echo json_encode($resp);
				break;
			default:
				$resp = array('status' => 0, 'message' => 'Fail', 'data' => null );
				echo json_encode($resp);
				break;
		}
	}	
}
