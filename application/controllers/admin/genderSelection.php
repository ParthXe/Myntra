<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class genderSelection extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		$this->load->model('genderSelection_model');
	}	
	/* Done */
	public function index() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set Page Title
			$header['page_title'] = "Configure Gender Selection";
			$page = 1;		
			$type = trim($this->uri->segment(3));
			$data['type']=$type;
			$genderSelectList = $this->genderSelection_model->getGenderSelectList($data);
			// Create the data array to pass to view
			$menu_details['session'] = $this->session->userdata;

			$data['genderSelectList'] = $genderSelectList;
			$data['message'] = $this->session->flashdata('message');
			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $menu_details);
			if(count($genderSelectList)>0)
			{
				$this->load->view("admin/genderSelect/list",$data);	
			}
			else
			{
				$this->load->view("admin/genderSelect/add",$data);
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
			$type = trim($this->uri->segment(4));	
			$uploadPath = "upload/genderSelection/$type";
		
				if(!empty($_FILES['image1']['name']))
				{
					$_FILES['image1']['name'] = $this->generateRandomNumber().$_FILES['image1']['name'];
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('image1'))
					{
						$fileData = $this->upload->data();
					}
				}
				if(!empty($_FILES['image2']['name']))
				{
					$_FILES['image2']['name'] = $this->generateRandomNumber().$_FILES['image2']['name'];
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('image2'))
					{
						$fileData = $this->upload->data();
					}
				}
				if(!empty($_FILES['image1Disabled']['name']))
				{   
					$_FILES['image1Disabled']['name'] = $this->generateRandomNumber().$_FILES['image1Disabled']['name'];
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('image1Disabled'))
					{
						$fileData = $this->upload->data();
					}
				}
				if(!empty($_FILES['image2Disabled']['name']))
				{   
					$_FILES['image2Disabled']['name'] = $this->generateRandomNumber().$_FILES['image2Disabled']['name'];
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('image2Disabled'))
					{
						$fileData = $this->upload->data();
					}
				}
				if(!empty($_FILES['thunderImage']['name']))
				{       
					$_FILES['thunderImage']['name'] = $this->generateRandomNumber().$_FILES['thunderImage']['name'];
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('thunderImage'))
					{
						$fileData = $this->upload->data();
					}
				}
				if(!empty($_FILES['image1']['name']) && !empty($_FILES['image2']['name']) && !empty($_FILES['image1Disabled']['name']) 
					&& !empty($_FILES['image2Disabled']['name']) && !empty($_FILES['thunderImage']['name'])) 
				{
						$addData = array(
							'image1' => $_FILES['image1']['name'],
							'image2' => $_FILES['image2']['name'],
							'image1Disabled' => $_FILES['image1Disabled']['name'],
							'image2Disabled' => $_FILES['image2Disabled']['name'],
							'thunderImage' => $_FILES['thunderImage']['name'],
							'type' => $type,
							'create_date' => $created
						);
						$id = $this->genderSelection_model->addGenderSelectInfo($addData);
						$this->session->set_flashdata('message', 'Data Saved successfully!!!');
				}
				else
				{
						$this->session->set_flashdata('message', 'Problem Adding Data!!!');
				}

					redirect("admin/genderSelection/$type");				
				
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
			$checkGenderSelect = $this->genderSelection_model->checkGenderSelectInfo($did);
			$type=$checkGenderSelect->result()['0']->type;
		    $uploadPath = "upload/genderSelection/$type/";
			if(!empty($_FILES['image1']['name'])){
				
				$_FILES['image1']['name'] = $this->generateRandomNumber().$_FILES['image1']['name'];
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('image1')){
						$fileData = $this->upload->data();
						$old_image1=$checkGenderSelect->result()['0']->image1;
						$old_image1_path=$uploadPath.$old_image1;
						unlink($old_image1_path);
                }
				$flag = 1;

            } 
			if(!empty($_FILES['image2']['name'])){
				
				$_FILES['image2']['name'] = $this->generateRandomNumber().$_FILES['image2']['name'];
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('image2')){
						$fileData = $this->upload->data();
						$old_image2=$checkGenderSelect->result()['0']->image2;
						$old_image2_path=$uploadPath.$old_image2;
						unlink($old_image2_path);
                }
				$flag = 1;
            } 
			if(!empty($_FILES['image1Disabled']['name'])){
				
				$_FILES['image1Disabled']['name'] = $this->generateRandomNumber().$_FILES['image1Disabled']['name'];
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('image1Disabled')){
                   		$fileData = $this->upload->data();
						$old_image1Disabled=$checkGenderSelect->result()['0']->image1Disabled;
						$old_image1Disabled_path=$uploadPath.$old_image1Disabled;
						unlink($old_image1Disabled_path);
                }
				$flag = 1;
            } 
			if(!empty($_FILES['image2Disabled']['name'])){
				
				$_FILES['image2Disabled']['name'] = $this->generateRandomNumber().$_FILES['image2Disabled']['name'];
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('image2Disabled')){
                    	$fileData = $this->upload->data();
						$old_image2Disabled=$checkGenderSelect->result()['0']->image2Disabled;
						$old_image2Disabled_path=$uploadPath.$old_image2Disabled;
						unlink($old_image2Disabled_path);
                }
				$flag = 1;
            }
			if(!empty($_FILES['thunderImage']['name'])){
				
				$_FILES['thunderImage']['name'] = $this->generateRandomNumber().$_FILES['thunderImage']['name'];
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
				if($this->upload->do_upload('thunderImage')){
                   		$fileData = $this->upload->data();
						$old_thunderImage=$checkGenderSelect->result()['0']->thunderImage;
						$old_thunderImage_path=$uploadPath.$old_thunderImage;
						unlink($old_thunderImage_path);
                }
				$flag = 1;
            }
			if(isset($_FILES['image1']['name'])){
				$flag = 1;
			}
			if($flag == 1) {
				
				$data ['id'] = $did;
				if(!empty($_FILES['image1']['name']))
				{
					$data ['image1'] = $_FILES['image1']['name'];
				}
				if(!empty($_FILES['image2']['name']))
				{
					$data ['image2'] = $_FILES['image2']['name'];
				}
				if(!empty($_FILES['image1Disabled']['name']))
				{
					$data ['image1Disabled'] = $_FILES['image1Disabled']['name'];
				}
				if(!empty($_FILES['image2Disabled']['name']))
				{
					$data ['image2Disabled'] = $_FILES['image2Disabled']['name'];
				}
				if(!empty($_FILES['thunderImage']['name']))
				{
					$data ['thunderImage'] = $_FILES['thunderImage']['name'];
				}
				$data ['create_date'] = $created;
				$this->genderSelection_model->updateGenderSelectInfo($data);

				$this->session->set_flashdata('message', 'Setting has been saved');

				redirect("admin/genderSelection/$type");
				
			} 
			else {
				if(is_numeric($did)) {
					if($checkGenderSelect->num_rows() == 1) {
						// Create the data array to pass to view
						$menu_details['session'] = $this->session->userdata;

						// Set Page Title
						$header['page_title'] = "Edit Screensaver";				

						foreach ($checkGenderSelect->result() as $row) {
							$data['genderSelectList'] = array(
								'image1' => $row->image1,
								'image2' => $row->image2,
								'image1Disabled' => $row->image1Disabled,
								'image2Disabled' => $row->image2Disabled,
								'thunderImage' => $row->thunderImage,
								'type' => $row->type,
								'create_date'=>$created,
							);		
						}
						
						$this->load->view('admin/common/header', $header);
						$this->load->view('admin/common/left_menu', $menu_details);
						$this->load->view('admin/genderSelect/edit', $data);
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
}
