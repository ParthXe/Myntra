<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carousel extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		$this->load->model('carousel_model');
	}	
	/* Done */
	public function index() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set Page Title
			$header['page_title'] = "Carousel Images";
			$page = 1;	
			
			$carouselList = $this->carousel_model->getCarouselList($page);
			// Create the data array to pass to view
			$menu_details['session'] = $this->session->userdata;

			$data['carouselList'] = $carouselList;
			$data['message'] = $this->session->flashdata('message');
			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $menu_details);
			$this->load->view('admin/carousel/list', $data);
			$this->load->view('admin/common/footer');
		} else {
			redirect('admin/login');
		}
	}
	public function add_image() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set Page Title
			$header['page_title'] = "Carousel Images";
			$page = 1;		

			
			// Create the data array to pass to view
			$menu_details['session'] = $this->session->userdata;
			$data['message'] = $this->session->flashdata('message');
			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $menu_details);
			$this->load->view('admin/carousel/add');
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
				if(!empty($_FILES['imagePath']['name']))
				{
						$_FILES['imagePath']['name'] = $this->generateRandomNumber().$_FILES['imagePath']['name'];
						$uploadPath = 'upload/carousel/';
						$config['upload_path'] = $uploadPath;
						$config['allowed_types'] = 'gif|jpg|png';
						$this->load->library('upload', $config);
						$this->upload->initialize($config);
						if($this->upload->do_upload('imagePath'))
						{
							$fileData = $this->upload->data();
						}
				}
				
				if(	!empty($_FILES['imagePath']['name'])) 
				{
					$addData = array(
						'id' => 1,
						'imagePath' => $_FILES['imagePath']['name'],
						'title' => $this->input->post('title'),
						'status' => $status,
						'gender' => $this->input->post('gender'),
						'create_date' => $created
					);
						$id = $this->carousel_model->addcarouselInfo($addData);
						$this->session->set_flashdata('message', 'Data Saved successfully!!!');
				}
				else
				{
						$this->session->set_flashdata('message', 'Problem Adding Data!!!');
				}

					redirect('admin/carousel');				
				
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
			
			
			if(!empty($_FILES['imagePath']['name']))
			{	
				$_FILES['imagePath']['name'] = $this->generateRandomNumber().$_FILES['imagePath']['name'];
                $uploadPath1 = 'upload/carousel/';
                $config['upload_path'] = $uploadPath1;
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('imagePath')){
                    $fileData = $this->upload->data();
                }
				$flag = 1;
            }
			
			if(	isset($_REQUEST['title']) || isset($_REQUEST['gender']))
			{
				$flag = 1;	
			}
			if($flag == 1) {
				
				if(!empty($_FILES['imagePath']['name']))
				{
					$data['imagePath'] = $_FILES['imagePath']['name'];
				}
				$data['id'] = $did;
				$data['title'] = $this->input->post('title');
				$data['gender'] = $this->input->post('gender');
				$data['create_date'] = $created;
				$this->carousel_model->updatecarouselInfo($data);

				$this->session->set_flashdata('message', 'Setting has been saved');

				redirect('admin/carousel');
				
			} 
			else {
				if(is_numeric($did)) {
				
					$checkcarousel = $this->carousel_model->checkcarouselInfo($did);
					if($checkcarousel->num_rows() == 1) {
						// Create the data array to pass to view
						$menu_details['session'] = $this->session->userdata;

						// Set Page Title
						$header['page_title'] = "Edit Sort By";				

						foreach ($checkcarousel->result() as $row) {
							$data['carouselList'] = array(
								'title' => $row->title,
								'imagePath' => $row->imagePath,
								'gender' => $row->gender,
								'create_date'=>$created, 
							);		
						}
						
						$this->load->view('admin/common/header', $header);
						$this->load->view('admin/common/left_menu', $menu_details);
						$this->load->view('admin/carousel/edit', $data);
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
		/* Done */
	public function generateRandomNumber($length = 10) 
	{
			$number = '1234567890';
			$numberLength = strlen($number);
			$randomNumber = '';
			for ($i = 0; $i < $length; $i++) {
				$randomNumber .= $number[rand(0, $numberLength - 1)];
			}
			return $randomNumber;
	}
	
}
