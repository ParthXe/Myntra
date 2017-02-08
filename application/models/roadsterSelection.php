<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RoadsterSelection extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		$this->load->model('roadsterSelection_model');
	}	
	/* Done */
	public function index() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set Page Title
			$header['page_title'] = "Configure License";
			$page = 1;		

			//$screensaverlist = $this->screensaver_model->getscreensaverlist($page);
			$roadsterSelectionList = $this->roadsterSelection_model->getRoadsterSelectionList($page);
			// Create the data array to pass to view
			$menu_details['session'] = $this->session->userdata;

			$data['roadsterSelectionList'] = $roadsterSelectionList;
			$data['message'] = $this->session->flashdata('message');
			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $menu_details);
			if(count($roadsterSelectionList)>0)
			{
				$this->load->view('admin/roadsterSelection/list', $data);	
			}
			else
			{
				$this->load->view('admin/roadsterSelection/add');
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
					$uploadPath = 'upload/roadsterSelection/';
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
					$uploadPath = 'upload/roadsterSelection/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('BackbuttonImage'))
					{
						$fileData = $this->upload->data();
					}
				}
				if(!empty($_FILES['collectionMenImage']['name']))
				{
					$_FILES['collectionMenImage']['name'] = $this->generateRandomNumber().$_FILES['collectionMenImage']['name'];
					$uploadPath = 'upload/roadsterSelection/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('collectionMenImage'))
					{
						$fileData = $this->upload->data();
					}
				}
				if(!empty($_FILES['catalogueMenImage']['name']))
				{
					$_FILES['catalogueMenImage']['name'] = $this->generateRandomNumber().$_FILES['catalogueMenImage']['name'];
					$uploadPath = 'upload/roadsterSelection/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('catalogueMenImage'))
					{
						$fileData = $this->upload->data();
					}
				}
				if(!empty($_FILES['collectionWomenImage']['name']))
				{
					$_FILES['collectionWomenImage']['name'] = $this->generateRandomNumber().$_FILES['collectionWomenImage']['name'];
					$uploadPath = 'upload/roadsterSelection/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('collectionWomenImage'))
					{
						$fileData = $this->upload->data();
					}
				}
				if(!empty($_FILES['catalogueWomenImage']['name']))
				{
					$_FILES['catalogueWomenImage']['name'] = $this->generateRandomNumber().$_FILES['catalogueWomenImage']['name'];
					$uploadPath = 'upload/roadsterSelection/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('catalogueWomenImage'))
					{
						$fileData = $this->upload->data();
					}
				}
				if(!empty($_FILES['collectionBtnImage']['name']))
				{
					$_FILES['collectionBtnImage']['name'] = $this->generateRandomNumber().$_FILES['collectionBtnImage']['name'];
					$uploadPath = 'upload/roadsterSelection/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('collectionBtnImage'))
					{
						$fileData = $this->upload->data();
					}
				}
				if(!empty($_FILES['catalogueBtnImage']['name']))
				{
					$_FILES['catalogueBtnImage']['name'] = $this->generateRandomNumber().$_FILES['catalogueBtnImage']['name'];
					$uploadPath = 'upload/roadsterSelection/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('catalogueBtnImage'))
					{
						$fileData = $this->upload->data();
					}
				}
				if(	!empty($_FILES['topBarImage']['name']) && !empty($_FILES['BackbuttonImage']['name']) && 
					!empty($_FILES['collectionMenImage']['name']) && !empty($_FILES['catalogueMenImage']['name']) && 
					!empty($_FILES['collectionWomenImage']['name']) && !empty($_FILES['catalogueWomenImage']['name']) && 
					!empty($_FILES['collectionBtnImage']['name']) && !empty($_FILES['catalogueBtnImage']['name'])
				   ) 
				{
						$addData = array(
							'id' => 1,
							'topBarImage' => $_FILES['topBarImage']['name'],
							'BackbuttonImage' => $_FILES['BackbuttonImage']['name'],
							'collectionMenImage' => $_FILES['collectionMenImage']['name'],
							'catalogueMenImage' => $_FILES['catalogueMenImage']['name'],
							'collectionWomenImage' => $_FILES['collectionWomenImage']['name'],
							'catalogueWomenImage' => $_FILES['catalogueWomenImage']['name'],
							'collectionHeadingTxt' => $this->input->post('collectionHeadingTxt'),
							'collectionTxt' => $this->input->post('collectionTxt'),
							'collectionBtnImage' => $_FILES['collectionBtnImage']['name'],
							'catalogueHeadingTxt' => $this->input->post('catalogueHeadingTxt'),
							'catalogueTxt' => $this->input->post('catalogueTxt'),
							'catalogueBtnImage' => $_FILES['catalogueBtnImage']['name'],
							'create_date' => $created
						);
						$id = $this->roadsterSelection_model->addRoadsterSelectionInfo($addData);
						$this->session->set_flashdata('message', 'Data Saved successfully!!!');
				}
				else
				{
						$this->session->set_flashdata('message', 'Problem Adding Data!!!');
				}

					redirect('admin/roadsterSelection');				
				
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
                $uploadPath1 = 'upload/roadsterSelection/';
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
                $uploadPath1 = 'upload/roadsterSelection/';
                $config['upload_path'] = $uploadPath1;
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('BackbuttonImage')){
                    $fileData = $this->upload->data();
                }
				$flag = 1;
            }
			if(!empty($_FILES['collectionMenImage']['name']))
			{	
				$_FILES['collectionMenImage']['name'] = $this->generateRandomNumber().$_FILES['collectionMenImage']['name'];
                $uploadPath1 = 'upload/roadsterSelection/';
                $config['upload_path'] = $uploadPath1;
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('collectionMenImage')){
                    $fileData = $this->upload->data();
                }
				$flag = 1;
            }
			if(!empty($_FILES['catalogueMenImage']['name']))
			{	
				$_FILES['catalogueMenImage']['name'] = $this->generateRandomNumber().$_FILES['catalogueMenImage']['name'];
                $uploadPath1 = 'upload/roadsterSelection/';
                $config['upload_path'] = $uploadPath1;
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('catalogueMenImage')){
                    $fileData = $this->upload->data();
                }
				$flag = 1;
            }
			if(!empty($_FILES['collectionWomenImage']['name']))
			{	
				$_FILES['collectionWomenImage']['name'] = $this->generateRandomNumber().$_FILES['collectionWomenImage']['name'];
                $uploadPath1 = 'upload/roadsterSelection/';
                $config['upload_path'] = $uploadPath1;
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('collectionWomenImage')){
                    $fileData = $this->upload->data();
                }
				$flag = 1;
            }
			if(!empty($_FILES['catalogueWomenImage']['name']))
			{	
				$_FILES['catalogueWomenImage']['name'] = $this->generateRandomNumber().$_FILES['catalogueWomenImage']['name'];
                $uploadPath1 = 'upload/roadsterSelection/';
                $config['upload_path'] = $uploadPath1;
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('catalogueWomenImage')){
                    $fileData = $this->upload->data();
                }
				$flag = 1;
            }
			if(!empty($_FILES['collectionBtnImage']['name']))
			{	
				$_FILES['collectionBtnImage']['name'] = $this->generateRandomNumber().$_FILES['collectionBtnImage']['name'];
                $uploadPath1 = 'upload/roadsterSelection/';
                $config['upload_path'] = $uploadPath1;
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('collectionBtnImage')){
                    $fileData = $this->upload->data();
                }
				$flag = 1;
            }
			if(!empty($_FILES['catalogueBtnImage']['name']))
			{	
				$_FILES['catalogueBtnImage']['name'] = $this->generateRandomNumber().$_FILES['catalogueBtnImage']['name'];
                $uploadPath1 = 'upload/roadsterSelection/';
                $config['upload_path'] = $uploadPath1;
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('catalogueBtnImage')){
                    $fileData = $this->upload->data();
                }
				$flag = 1;
            }
			if(	isset($_REQUEST['collectionHeadingTxt']) || isset($_REQUEST['collectionTxt']) || isset($_REQUEST['catalogueHeadingTxt']) || isset($_REQUEST['catalogueTxt']))
			{
				$flag = 1;	
			}
			if($flag == 1) {
				
				if(!empty($_FILES['topBarImage']['name']))
				{
					$data['topBarImage'] = $_FILES['topBarImage']['name'];
				}
				if(!empty($_FILES['BackbuttonImage']['name']))
				{
					$data['BackbuttonImage'] = $_FILES['BackbuttonImage']['name'];
				}
				if(!empty($_FILES['collectionMenImage']['name']))
				{
					$data['collectionMenImage'] = $_FILES['collectionMenImage']['name'];
				}
				if(!empty($_FILES['catalogueMenImage']['name']))
				{
					$data['catalogueMenImage'] = $_FILES['catalogueMenImage']['name'];
				}
				if(!empty($_FILES['collectionWomenImage']['name']))
				{
					$data['collectionWomenImage'] = $_FILES['collectionWomenImage']['name'];
				}
				if(!empty($_FILES['catalogueWomenImage']['name']))
				{
					$data['catalogueWomenImage'] = $_FILES['catalogueWomenImage']['name'];
				}
				if(!empty($_FILES['collectionBtnImage']['name']))
				{
					$data['collectionBtnImage'] = $_FILES['collectionBtnImage']['name'];
				}
				if(!empty($_FILES['catalogueBtnImage']['name']))
				{
					$data['catalogueBtnImage'] = $_FILES['catalogueBtnImage']['name'];
				}
				$data['id'] = $did;
				$data['collectionHeadingTxt'] = $this->input->post('collectionHeadingTxt');
				$data['collectionTxt'] = $this->input->post('collectionTxt');
				$data['catalogueHeadingTxt'] = $this->input->post('catalogueHeadingTxt');
				$data['catalogueTxt'] = $this->input->post('catalogueTxt');
				$data['create_date'] = $created;
				$this->roadsterSelection_model->updateRoadsterSelectionInfo($data);

				$this->session->set_flashdata('message', 'Setting has been saved');

				redirect('admin/roadsterSelection');
				
			} 
			else {
				if(is_numeric($did)) {
				
					$checkRoadsterSelection = $this->roadsterSelection_model->checkRoadsterSelectionInfo($did);
					if($checkRoadsterSelection->num_rows() == 1) {
						// Create the data array to pass to view
						$menu_details['session'] = $this->session->userdata;

						// Set Page Title
						$header['page_title'] = "Edit Sort By";				

						foreach ($checkRoadsterSelection->result() as $row) {
							$data['roadsterSelectionList'] = array(
								'topBarImage' => $row->topBarImage,
								'BackbuttonImage' => $row->BackbuttonImage,
								'collectionMenImage' => $row->collectionMenImage,
								'catalogueMenImage' => $row->catalogueMenImage,
								'collectionWomenImage' => $row->collectionWomenImage,
								'catalogueWomenImage' => $row->catalogueWomenImage,
								'collectionHeadingTxt' => $row->collectionHeadingTxt,
								'collectionTxt' => $row->collectionTxt,
								'collectionBtnImage' => $row->collectionBtnImage,
								'catalogueHeadingTxt' => $row->catalogueHeadingTxt,
								'catalogueTxt' => $row->catalogueTxt,
								'catalogueBtnImage' => $row->catalogueBtnImage,
								'create_date'=>$created, 
							);		
						}
						
						$this->load->view('admin/common/header', $header);
						$this->load->view('admin/common/left_menu', $menu_details);
						$this->load->view('admin/roadsterSelection/edit', $data);
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
