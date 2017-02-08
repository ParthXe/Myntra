<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
			$header['page_title'] = "Users List";
			$page = 1;		

			$users = $this->User_model->getAllUsers($page);

			foreach ($users as $key => $value) {
				$roles = $this->User_model->getUserRoles($value->uid);
				$value->roles = $roles;
			}

			// Create the data array to pass to view
			$menu_details['session'] = $this->session->userdata;

			$data['users'] = $users;
			$data['message'] = $this->session->flashdata('message');

			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $menu_details);
			$this->load->view('admin/users/list', $data);
			$this->load->view('admin/common/footer');
		} else {
			redirect('admin/login');
		}
	}

	public function add() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set validation rules for view filters
			$this->form_validation->set_rules('name', "Name field is required", 'required');
			$this->form_validation->set_rules('email', $this->lang->line('signin_email'), 'required');

			$this->form_validation->set_error_delimiters('<p class="alert alert-danger"><a class="close" data-dismiss="alert" href="#">&times;</a>', '</p>');

			if($this->form_validation->run() == TRUE) {

		
		
				$time=time();
				$created = date ("Y-m-d H:i:s", $time);				

				$checkUser = $this->User_model->checkUserByMail($this->input->post('email'));

				if($checkUser->num_rows() > 0) {
					$this->session->set_flashdata('message', 'Email already registered');
					redirect('admin/users/add');
				} else {
					$data = array(
						'name' => $this->input->post('name'),
						'mail' => $this->input->post('email'),
						'fname' => $this->input->post('fname'),
						'lname' => $this->input->post('lname'),
						'mobile' => $this->input->post('mobile'),
						'is_active' => ($this->input->post('active') == "on") ? 1 : 0,
					);

					$roleData = array(
						'roles' => $this->input->post('role'),
					);			

					if($this->input->post('password') != null) {
						$data['pass'] = sha1($this->input->post('password'));
					}


					$this->User_model->addUser($data, $roleData);

					$this->session->set_flashdata('message', 'User has been added');

					redirect('admin/users');				
				}
			} else {
				// Create the data array to pass to view
				$menu_details['session'] = $this->session->userdata;

				// Set Page Title
				$header['page_title'] = "Add User";

				$data['roles'] = $this->User_model->getRoles();


				$this->load->view('admin/common/header', $header);
				$this->load->view('admin/common/left_menu', $menu_details);
				$this->load->view('admin/users/add', $data);
				$this->load->view('admin/common/footer');
			}
		} else {
			redirect('admin/login');
		}
	}	

	public function edit() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {

			$uid = trim($this->uri->segment(4));

			// Set validation rules for view filters
			$this->form_validation->set_rules('name', "Name field is required", 'required');
			$this->form_validation->set_rules('email', "Email field is required", 'required');

			$this->form_validation->set_error_delimiters('<p class="alert alert-danger"><a class="close" data-dismiss="alert" href="#">&times;</a>', '</p>');

			if($this->form_validation->run() == TRUE) {
				$data = array(
					'uid' => $uid,
					'name' => $this->input->post('name'),
					'mail' => $this->input->post('email'),
					'fname' => $this->input->post('fname'),
					'lname' => $this->input->post('lname'),
					'mobile' => $this->input->post('mobile'),
					'is_active' => ($this->input->post('active') == "on") ? 1 : 0,
				);

				if($this->input->post('password') != null) {
					$data['pass'] = sha1($this->input->post('password'));
				}

				$roleData = array(
					'roles' => $this->input->post('role'),
				);				

				$this->User_model->updateUser($data, $roleData);

				$this->session->set_flashdata('message', 'User has been updated');

				redirect('admin/users');

			} else {
				if(is_numeric($uid)) {
					$this->load->model('User_model');
					$checkUser = $this->User_model->checkUser($uid);
					if($checkUser->num_rows() == 1) {
						// Create the data array to pass to view
						$menu_details['session'] = $this->session->userdata;

						// Set Page Title
						$header['page_title'] = "Edit User";				

						foreach ($checkUser->result() as $row) {
							$data['user'] = array(
								'uid' => $row->uid,
								'name' => $row->name,
								'mail' => $row->mail,
								'fname' => $row->fname,
								'lname' => $row->lname,
								'mobile' => $row->mobile,
								'is_active' => $row->is_active,
							);		
						}

						$userRoles = [];
						foreach ($this->User_model->getUserRoles($uid) as $key => $value) {
							array_push($userRoles, $value->rid);
						}

						$data['user']['roles'] = $userRoles;

						
						$data['roles'] = $this->User_model->getRoles();
						

						$this->load->view('admin/common/header', $header);
						$this->load->view('admin/common/left_menu', $menu_details);
						$this->load->view('admin/users/edit', $data);
						$this->load->view('admin/common/footer');
					} else {
						$this->session->set_flashdata('message', 'User not found');
						redirect('admin/users');
					}
				} else {
					$this->session->set_flashdata('message', 'User not found');
					redirect('admin/users');
				}
			}

		} else {
			redirect('admin/login');
		}
	}

	
}
