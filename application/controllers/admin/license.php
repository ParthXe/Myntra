<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class License extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		$this->load->model('license_model');
	}	
	/* Done */
	public function index() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set Page Title
			$header['page_title'] = "Configure License";
			$page = 1;		

			//$screensaverlist = $this->screensaver_model->getscreensaverlist($page);
			$licenseList = $this->license_model->getLicenseList($page);
			// Create the data array to pass to view
			$menu_details['session'] = $this->session->userdata;

			$data['licenseList'] = $licenseList;
			$data['message'] = $this->session->flashdata('message');
			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $menu_details);
			if(count($licenseList)>0)
			{
				$this->load->view('admin/license/list', $data);	
			}
			else
			{
				$this->load->view('admin/license/add');
			}
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
				if(!empty($_FILES['topBarImage']['name']))
				{
					$_FILES['topBarImage']['name'] = $this->generateRandomNumber().$_FILES['topBarImage']['name'];
					$uploadPath = 'upload/license/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('topBarImage'))
					{
						$fileData = $this->upload->data();
					}
				}
				if(!empty($_FILES['BackbuttonImage']['name']))
				{
					$_FILES['BackbuttonImage']['name'] = $this->generateRandomNumber().$_FILES['BackbuttonImage']['name'];
					$uploadPath = 'upload/license/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('BackbuttonImage'))
					{
						$fileData = $this->upload->data();
					}
				}
				if(!empty($_FILES['BackbuttonImage']['name']) && !empty($_FILES['topBarImage']['name'])) 
				{
						$addData = array(
							'id' => 1,
							'headingTxt' => $this->input->post('headingTxt'),
							'BackbuttonImage' => $_FILES['BackbuttonImage']['name'],
							'topBarImage' => $_FILES['topBarImage']['name'],
							'tab1' => $this->input->post('tab1'),
							'tab2' => $this->input->post('tab2'),
							'tab3' => $this->input->post('tab3'),
							'create_date' => $created
						);
						$id = $this->license_model->addLicenseInfo($addData);
						$this->session->set_flashdata('message', 'Data Saved successfully!!!');
				}
				else
				{
						$this->session->set_flashdata('message', 'Problem Adding Data!!!');
				}

					redirect('admin/license');				
				
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
			
			if(!empty($_FILES['topBarImage']['name']))
			{	
				$_FILES['topBarImage']['name'] = $this->generateRandomNumber().$_FILES['topBarImage']['name'];
                $uploadPath1 = 'upload/license/';
                $config['upload_path'] = $uploadPath1;
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('topBarImage')){
                    $fileData = $this->upload->data();
                }
				$flag = 1;
            }
			if(!empty($_FILES['BackbuttonImage']['name']))
			{	
				$_FILES['BackbuttonImage']['name'] = $this->generateRandomNumber().$_FILES['BackbuttonImage']['name'];
                $uploadPath1 = 'upload/license/';
                $config['upload_path'] = $uploadPath1;
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('BackbuttonImage')){
                    $fileData = $this->upload->data();
                }
				$flag = 1;
            }
			if(isset($_REQUEST['headingTxt']) || isset($_REQUEST['bodyTxt']) || isset($_REQUEST['button1']) || isset($_REQUEST['button2']))
			{
				$flag = 1;	
			}
			if($flag == 1) {
				
				if(!empty($_FILES['topBarImage']['name']))
				{
					$data ['topBarImage'] = $_FILES['topBarImage']['name'];
				}
				if(!empty($_FILES['BackbuttonImage']['name']))
				{
					$data ['BackbuttonImage'] = $_FILES['BackbuttonImage']['name'];
				}	
				$data['id'] = $did;
				$data['headingTxt'] = $this->input->post('headingTxt');
				$data['tab1'] = $this->input->post('tab1');
				$data['tab2'] = $this->input->post('tab2');
				$data['tab3'] = $this->input->post('tab3');
				$data['create_date'] = $created;
				$this->license_model->updateLicenseInfo($data);

				$this->session->set_flashdata('message', 'Setting has been saved');

				redirect('admin/license');
				
			} 
			else {
				if(is_numeric($did)) {
				
					$checkLicense = $this->license_model->checkLicenseInfo($did);
					if($checkLicense->num_rows() == 1) {
						// Create the data array to pass to view
						$menu_details['session'] = $this->session->userdata;

						// Set Page Title
						$header['page_title'] = "Edit Screensaver";				

						foreach ($checkLicense->result() as $row) {
							$data['licenseList'] = array(
								'topBarImage' => $row->topBarImage,
								'headingTxt' => $row->headingTxt,
								'BackbuttonImage' => $row->BackbuttonImage,
								'tab1' => $row->tab1,
								'tab2' => $row->tab2,
								'tab3' => $row->tab3,
								'create_date'=>$created, 
							);		
						}
						
						$this->load->view('admin/common/header', $header);
						$this->load->view('admin/common/left_menu', $menu_details);
						$this->load->view('admin/license/edit', $data);
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
