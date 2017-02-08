<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class listvideo extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		$this->load->model('listvideo_model');
	}	

	public function index() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set Page Title
			$header['page_title'] = "Configure Product Description";
			$page = 1;		

			$listvideolist = $this->listvideo_model->getlistvideolist($page);
			
			// Create the data array to pass to view
			$menu_details['session'] = $this->session->userdata;

			$data['listvideolist'] = $listvideolist;
			$data['message'] = $this->session->flashdata('message');
			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $menu_details);
			if(count($listvideolist)>0)
			{ 
				$this->load->view('admin/listvideo/list', $data);	
			}
			else
			{
				$this->load->view('admin/listvideo/add');
			}
			$this->load->view('admin/common/footer');
		} else {
			redirect('admin/login');
		}
	}
	
	public function add() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) 
		{
			// Set validation rules for view filters
			//$this->form_validation->set_rules('destination_name', "Name field is required", 'required');
			///$this->form_validation->set_rules('destination_state', $this->lang->line('signin_email'), 'required');

			//$this->form_validation->set_error_delimiters('<p class="alert alert-danger"><a class="close" data-dismiss="alert" href="#">&times;</a>', '</p>');
		$time=time();
		$created = date ("Y-m-d H:i:s", $time);	
		$flag=0;	
				
				if(!empty($_FILES['topBarImage']['name']))
				{
					$_FILES['topBarImage']['name']=generateRandomNumber().$_FILES['topBarImage']['name'];
					$uploadPath = 'upload/listvideo/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('topBarImage'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(!empty($_FILES['BackbuttonImage']['name']))
				{    
					$_FILES['BackbuttonImage']['name']=generateRandomNumber().$_FILES['BackbuttonImage']['name'];
					$uploadPath = 'upload/listvideo/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('BackbuttonImage'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(!empty($_FILES['homebuttonImage']['name']))
				{    
					$_FILES['homebuttonImage']['name']=generateRandomNumber().$_FILES['homebuttonImage']['name'];			
					$uploadPath = 'upload/listvideo/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('homebuttonImage'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(!empty($_FILES['myntralogoImage']['name']))
				{       
					$_FILES['myntralogoImage']['name']=generateRandomNumber().$_FILES['myntralogoImage']['name'];
					$uploadPath = 'upload/listvideo/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('myntralogoImage'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(!empty($_FILES['sortBtnImage']['name']))
				{   
					$_FILES['sortBtnImage']['name']=generateRandomNumber().$_FILES['sortBtnImage']['name'];
					$uploadPath = 'upload/listvideo/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('sortBtnImage'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(!empty($_FILES['sortRollBtnImage']['name']))
				{   
					$_FILES['sortRollBtnImage']['name']=generateRandomNumber().$_FILES['sortRollBtnImage']['name'];
					$uploadPath = 'upload/listvideo/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('sortRollBtnImage'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(!empty($_FILES['filterBtnImage']['name']))
				{   
					$_FILES['filterBtnImage']['name']=generateRandomNumber().$_FILES['filterBtnImage']['name'];
					$uploadPath = 'upload/listvideo/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('filterBtnImage'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(!empty($_FILES['filterRollBtnImage']['name']))
				{   
					$_FILES['filterRollBtnImage']['name']=generateRandomNumber().$_FILES['filterRollBtnImage']['name'];
					$uploadPath = 'upload/listvideo/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('filterRollBtnImage'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(!empty($_FILES['blackbgImage']['name']))
				{   
					$_FILES['blackbgImage']['name']=generateRandomNumber().$_FILES['blackbgImage']['name'];
					$uploadPath = 'upload/listvideo/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('blackbgImage'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
			if(isset($_REQUEST['headingTxt'])|| isset($_REQUEST[imageGalleryPos]))
			{
				$flag=1;
			}
			
			if($flag == 1) {
				$data ['id'] = 1;
				if(!empty($_FILES['topBarImage']['name']))
				{
					$data ['topBarImage'] = $_FILES['topBarImage']['name'];
				}
				$data ['headingTxt'] = $_REQUEST['headingTxt'];
				if(!empty($_FILES['BackbuttonImage']['name']))
				{
					$data ['BackbuttonImage'] = $_FILES['BackbuttonImage']['name'];
				}
				if(!empty($_FILES['homebuttonImage']['name']))
				{
					$data ['homebuttonImage'] = $_FILES['homebuttonImage']['name'];
				}
				if(!empty($_FILES['sortBtnImage']['name']))
				{
					$data ['sortBtnImage'] = $_FILES['sortBtnImage']['name'];
				}
				if(!empty($_FILES['sortRollBtnImage']['name']))
				{
					$data ['sortRollBtnImage'] = $_FILES['sortRollBtnImage']['name'];
				}
				if(!empty($_FILES['filterBtnImage']['name']))
				{
					$data ['filterBtnImage'] = $_FILES['filterBtnImage']['name'];
				}
				if(!empty($_FILES['filterRollBtnImage']['name']))
				{
					$data ['filterRollBtnImage'] = $_FILES['filterRollBtnImage']['name'];
				}
				if(!empty($_FILES['myntralogoImage']['name']))
				{
					$data ['myntralogoImage'] = $_FILES['myntralogoImage']['name'];
				}
				if(!empty($_FILES['blackbgImage']['name']))
				{
					$data ['blackbgImage'] = $_FILES['blackbgImage']['name'];
				}
				$data ['imageGalleryPos'] = $_REQUEST['imageGalleryPos'];
				
				$data ['create_date'] = $created;
					
						$id = $this->listvideo_model->addlistvideoinfo($data);

						$this->session->set_flashdata('message', 'Settings saved successfully..');
				} 
					redirect('admin/listvideo');				
				
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
			$flag=0;		

				if(!empty($_FILES['topBarImage']['name']))
				{
					$_FILES['topBarImage']['name']=generateRandomNumber().$_FILES['topBarImage']['name'];
					$uploadPath = 'upload/listvideo/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('topBarImage'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(!empty($_FILES['BackbuttonImage']['name']))
				{    
					$_FILES['BackbuttonImage']['name']=generateRandomNumber().$_FILES['BackbuttonImage']['name'];
					$uploadPath = 'upload/listvideo/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('BackbuttonImage'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(!empty($_FILES['homebuttonImage']['name']))
				{    
					$_FILES['homebuttonImage']['name']=generateRandomNumber().$_FILES['homebuttonImage']['name'];			
					$uploadPath = 'upload/listvideo/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('homebuttonImage'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(!empty($_FILES['myntralogoImage']['name']))
				{       
					$_FILES['myntralogoImage']['name']=generateRandomNumber().$_FILES['myntralogoImage']['name'];
					$uploadPath = 'upload/listvideo/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('myntralogoImage'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(!empty($_FILES['sortBtnImage']['name']))
				{   
					$_FILES['sortBtnImage']['name']=generateRandomNumber().$_FILES['sortBtnImage']['name'];
					$uploadPath = 'upload/listvideo/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('sortBtnImage'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(!empty($_FILES['sortRollBtnImage']['name']))
				{   
					$_FILES['sortRollBtnImage']['name']=generateRandomNumber().$_FILES['sortRollBtnImage']['name'];
					$uploadPath = 'upload/listvideo/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('sortRollBtnImage'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(!empty($_FILES['filterBtnImage']['name']))
				{   
					$_FILES['filterBtnImage']['name']=generateRandomNumber().$_FILES['filterBtnImage']['name'];
					$uploadPath = 'upload/listvideo/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('filterBtnImage'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(!empty($_FILES['filterRollBtnImage']['name']))
				{   
					$_FILES['filterRollBtnImage']['name']=generateRandomNumber().$_FILES['filterRollBtnImage']['name'];
					$uploadPath = 'upload/listvideo/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('filterRollBtnImage'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(!empty($_FILES['blackbgImage']['name']))
				{   
					$_FILES['blackbgImage']['name']=generateRandomNumber().$_FILES['blackbgImage']['name'];
					$uploadPath = 'upload/listvideo/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('blackbgImage'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
			if(isset($_REQUEST['headingTxt'])|| isset($_REQUEST['imageGalleryPos']))
			{
				$flag=1;
			}
			
			if($flag == 1) {
				$data ['id'] = $did;
				if(!empty($_FILES['topBarImage']['name']))
				{
					$data ['topBarImage'] = $_FILES['topBarImage']['name'];
				}
				$data ['headingTxt'] = $_REQUEST['headingTxt'];
				if(!empty($_FILES['BackbuttonImage']['name']))
				{
					$data ['BackbuttonImage'] = $_FILES['BackbuttonImage']['name'];
				}
				if(!empty($_FILES['homebuttonImage']['name']))
				{
					$data ['homebuttonImage'] = $_FILES['homebuttonImage']['name'];
				}
				if(!empty($_FILES['sortBtnImage']['name']))
				{
					$data ['sortBtnImage'] = $_FILES['sortBtnImage']['name'];
				}
				if(!empty($_FILES['sortRollBtnImage']['name']))
				{
					$data ['sortRollBtnImage'] = $_FILES['sortRollBtnImage']['name'];
				}
				if(!empty($_FILES['filterBtnImage']['name']))
				{
					$data ['filterBtnImage'] = $_FILES['filterBtnImage']['name'];
				}
				if(!empty($_FILES['filterRollBtnImage']['name']))
				{
					$data ['filterRollBtnImage'] = $_FILES['filterRollBtnImage']['name'];
				}
				if(!empty($_FILES['myntralogoImage']['name']))
				{
					$data ['myntralogoImage'] = $_FILES['myntralogoImage']['name'];
				}
				if(!empty($_FILES['blackbgImage']['name']))
				{
					$data ['blackbgImage'] = $_FILES['blackbgImage']['name'];
				}
				$data ['imageGalleryPos'] = $_REQUEST['imageGalleryPos'];
				
				$data ['create_date'] = $created;
						
				$id = $this->listvideo_model->updatelistvideoinfo($data);

				$this->session->set_flashdata('message', 'Settings saved successfully..');
				
				redirect('admin/listvideo');				
			} 
			else {
				if(is_numeric($did)) {
				
					$checklistvideo = $this->listvideo_model->checklistvideoinfo($did);
					if($checklistvideo->num_rows() == 1) {
						// Create the data array to pass to view
						$menu_details['session'] = $this->session->userdata;

						// Set Page Title
						$header['page_title'] = "Edit listvideo";				

						foreach ($checklistvideo->result() as $row) {
							$data['listvideoinfo'] = array(
								'topBarImage' => $row->topBarImage,
								'headingTxt' =>$row->headingTxt,
								'BackbuttonImage' => $row->BackbuttonImage,
								'homebuttonImage' => $row->homebuttonImage,
								'sortBtnImage' => $row->sortBtnImage,
								'sortRollBtnImage' => $row->sortRollBtnImage,
								'filterBtnImage' => $row->filterBtnImage,
								'filterRollBtnImage' => $row->filterRollBtnImage,
								'myntralogoImage' =>$row->myntralogoImage,
								'blackbgImage' => $row->blackbgImage,
								'imageGalleryPos' => $row->imageGalleryPos,);
						}
						$this->load->view('admin/common/header', $header);
						$this->load->view('admin/common/left_menu', $menu_details);
						$this->load->view('admin/listvideo/edit', $data);
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
