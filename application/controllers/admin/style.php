<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Style extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		$this->load->model('style_model');
	}	
	/* Done */
	public function index() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set Page Title
			$header['page_title'] = "Style Images";
			$page = 1;	
			
			$styleList = $this->style_model->getStyleList($page);
			// Create the data array to pass to view
			$menu_details['session'] = $this->session->userdata;

			$data['styleList'] = $styleList;
			$data['message'] = $this->session->flashdata('message');
			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $menu_details);
			$this->load->view('admin/style/list', $data);
			$this->load->view('admin/common/footer');
		} else {
			redirect('admin/login');
		}
	}
	public function add_style() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set Page Title
			$header['page_title'] = "Style Images";
			$page = 1;
			$carousel_id = trim($this->uri->segment(4));
			$data['carousel_id'] = $carousel_id;	
			// Create the data array to pass to view
			$menu_details['session'] = $this->session->userdata;
			$data['message'] = $this->session->flashdata('message');
			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $menu_details);
			$this->load->view('admin/style/add',$data);
			$this->load->view('admin/common/footer');
		} else {
			redirect('admin/login');
		}
	}

	public function add() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) 
		{
			
			$time=time();
			$created = date ("Y-m-d H:i:s", $time);
			if(isset($_REQUEST['active']))
			{
				$status = "1";
			}
			else
			{
				$status = "0";
			}
				
				if(	!empty($this->input->post('style_id')) && !empty($this->input->post('title')) && !empty($this->input->post('carousel_id')) ) 
				{
					$addData = array(
						'title' => $this->input->post('title'),
						'style_id' => $this->input->post('style_id'),
						'status' => $status,
						'carousel_id' => $this->input->post('carousel_id'),
						'create_date' => $created
					);
						$id = $this->style_model->addStyleInfo($addData);
						$this->session->set_flashdata('message', 'Data Saved successfully!!!');
				}
				else
				{
						$this->session->set_flashdata('message', 'Problem Adding Data!!!');
				}

					redirect('admin/style');				
				
			} 
			else 
			{
					redirect('admin/login');
			}
	}	
	public function edit() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			
			$did = trim($this->uri->segment(4));
			$time=time();
			$created = date ("Y-m-d H:i:s", $time);
			$flag = 0;
			
			
			if(	isset($_REQUEST['title']) || isset($_REQUEST['style_id']))
			{
				$flag = 1;	
			}
			if(isset($_REQUEST['active']))
			{
				$status = "1";
			}
			else
			{
				$status = "0";
			}
			if($flag == 1) {
				$data['id'] = $did;
				$data['title'] = $this->input->post('title');
				$data['style_id'] = $this->input->post('style_id');
				$data['carousel_id'] = $this->input->post('carousel_id');
				$data['status'] = $status;
				$data['create_date'] = $created;
				$this->style_model->updateStyleInfo($data);

				$this->session->set_flashdata('message', 'Setting has been saved');

				redirect('admin/style');
				
			} 
			else {
				$checkStyle = $this->style_model->checkStyleInfo($did);
				if(is_numeric($did)) {
					if($checkStyle->num_rows() == 1) {
						// Create the data array to pass to view
						$menu_details['session'] = $this->session->userdata;

						// Set Page Title
						$header['page_title'] = "Edit Sort By";				

						foreach ($checkStyle->result() as $row) {
							$data['styleList'] = array(
								'title' => $row->title,
								'carousel_id' => $row->carousel_id,
								'imagePath' => $row->imagePath,
								'style_id' => $row->style_id,
								'status' => $row->status,
								'create_date' => $created, 
							);		
						}
						$this->load->view('admin/common/header', $header);
						$this->load->view('admin/common/left_menu', $menu_details);
						$this->load->view('admin/style/edit', $data);
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
	public function delete() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set Page Title
			$header['page_title'] = "Style Images";
			$page = 1;	
			$style_id = trim($this->uri->segment(4));
			$data['id'] = $style_id;
			$this->style_model->deleteStyleInfo($data);
			redirect('admin/style');
		} else {
			redirect('admin/login');
		}
	}	

	/* Done */
	
}
