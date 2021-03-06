<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class listvideo extends MY_Controller {

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
			$type = trim($this->uri->segment(3));
			$data['type']=$type;		

			$listvideolist = $this->listvideo_model->getlistvideolist($data);
			
			// Create the data array to pass to view
			$menu_details['session'] = $this->session->userdata;
			$data['tab'] = $type;
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
				$this->load->view('admin/listvideo/add', $data);
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
		$flag=0;	
		$type = trim($this->uri->segment(4));
		$uploadPath = "upload/listvideo/$type";
		
				if(!empty($_FILES['topBarImage']['name']))
				{
					$_FILES['topBarImage']['name']=$this->generateRandomNumber().$_FILES['topBarImage']['name'];
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
					$_FILES['BackbuttonImage']['name']=$this->generateRandomNumber().$_FILES['BackbuttonImage']['name'];
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
					$_FILES['homebuttonImage']['name']=$this->generateRandomNumber().$_FILES['homebuttonImage']['name'];		
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
					$_FILES['myntralogoImage']['name']=$this->generateRandomNumber().$_FILES['myntralogoImage']['name'];
		
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
					$_FILES['sortBtnImage']['name']=$this->generateRandomNumber().$_FILES['sortBtnImage']['name'];
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
					$_FILES['sortRollBtnImage']['name']=$this->generateRandomNumber().$_FILES['sortRollBtnImage']['name'];
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
					$_FILES['filterBtnImage']['name']=$this->generateRandomNumber().$_FILES['filterBtnImage']['name'];
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
					$_FILES['filterRollBtnImage']['name']=$this->generateRandomNumber().$_FILES['filterRollBtnImage']['name'];
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
					$_FILES['blackbgImage']['name']=$this->generateRandomNumber().$_FILES['blackbgImage']['name'];
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
				//$data ['id'] = 1;
				$data['type']=$type;
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
					redirect("admin/listvideo/$type");				
				
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
			$checklistvideo = $this->listvideo_model->checklistvideoinfo($did);
			$type=$checklistvideo->result()['0']->type;
		    $uploadPath = "upload/listvideo/$type/";


				if(!empty($_FILES['topBarImage']['name']))
				{
					$_FILES['topBarImage']['name']=$this->generateRandomNumber().$_FILES['topBarImage']['name'];
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('topBarImage'))
					{
						$fileData = $this->upload->data();
						$old_topBarImage=$checklistvideo->result()['0']->topBarImage;
						$old_topBarImage_path=$uploadPath.$old_topBarImage;
						unlink($old_topBarImage_path);
					}
					$flag=1;
				}
				if(!empty($_FILES['BackbuttonImage']['name']))
				{    
					$_FILES['BackbuttonImage']['name']=$this->generateRandomNumber().$_FILES['BackbuttonImage']['name'];
					
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('BackbuttonImage'))
					{
						$fileData = $this->upload->data();
						$old_BackbuttonImage=$checklistvideo->result()['0']->BackbuttonImage;
						$old_BackbuttonImage_path=$uploadPath.$old_BackbuttonImage;
						unlink($old_BackbuttonImage_path);
					}
					$flag=1;
				}
				if(!empty($_FILES['homebuttonImage']['name']))
				{    
					$_FILES['homebuttonImage']['name']=$this->generateRandomNumber().$_FILES['homebuttonImage']['name'];			
					
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('homebuttonImage'))
					{
						$fileData = $this->upload->data();
						$old_homebuttonImage=$checklistvideo->result()['0']->homebuttonImage;
						$old_homebuttonImage_path=$uploadPath.$old_homebuttonImage;
						unlink($old_homebuttonImage_path);
					}
					$flag=1;
				}
				if(!empty($_FILES['myntralogoImage']['name']))
				{       
					$_FILES['myntralogoImage']['name']=$this->generateRandomNumber().$_FILES['myntralogoImage']['name'];
					
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('myntralogoImage'))
					{
						$fileData = $this->upload->data();
						$old_myntralogoImage=$checklistvideo->result()['0']->myntralogoImage;
						$old_myntralogoImage_path=$uploadPath.$old_myntralogoImage;
						unlink($old_myntralogoImage_path);
					}
					$flag=1;
				}
				if(!empty($_FILES['sortBtnImage']['name']))
				{   
					$_FILES['sortBtnImage']['name']=$this->generateRandomNumber().$_FILES['sortBtnImage']['name'];
					
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('sortBtnImage'))
					{
						$fileData = $this->upload->data();
						$old_sortBtnImage=$checklistvideo->result()['0']->sortBtnImage;
						$old_sortBtnImage_path=$uploadPath.$old_sortBtnImage;
						unlink($old_sortBtnImage_path);
					}
					$flag=1;
				}
				if(!empty($_FILES['sortRollBtnImage']['name']))
				{   
					$_FILES['sortRollBtnImage']['name']=$this->generateRandomNumber().$_FILES['sortRollBtnImage']['name'];
					
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('sortRollBtnImage'))
					{
						$fileData = $this->upload->data();
						$old_sortRollBtnImage=$checklistvideo->result()['0']->sortRollBtnImage;
						$old_sortRollBtnImage_path=$uploadPath.$old_sortRollBtnImage;
						unlink($old_sortRollBtnImage_path);
					}
					$flag=1;
				}
				if(!empty($_FILES['filterBtnImage']['name']))
				{   
					$_FILES['filterBtnImage']['name']=$this->generateRandomNumber().$_FILES['filterBtnImage']['name'];
					
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('filterBtnImage'))
					{
						$fileData = $this->upload->data();
						$old_filterBtnImage=$checklistvideo->result()['0']->filterBtnImage;
						$old_filterBtnImage_path=$uploadPath.$old_filterBtnImage;
						unlink($old_filterBtnImage_path);
					}
					$flag=1;
				}
				if(!empty($_FILES['filterRollBtnImage']['name']))
				{   
					$_FILES['filterRollBtnImage']['name']=$this->generateRandomNumber().$_FILES['filterRollBtnImage']['name'];
					
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('filterRollBtnImage'))
					{
						$fileData = $this->upload->data();
						$old_filterRollBtnImage=$checklistvideo->result()['0']->filterRollBtnImage;
						$old_filterRollBtnImage_path=$uploadPath.$old_filterRollBtnImage;
						unlink($old_filterRollBtnImage_path);
					}
					$flag=1;
				}
				if(!empty($_FILES['blackbgImage']['name']))
				{   
					$_FILES['blackbgImage']['name']=$this->generateRandomNumber().$_FILES['blackbgImage']['name'];
					
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('blackbgImage'))
					{
						$fileData = $this->upload->data();
						$old_blackbgImage=$checklistvideo->result()['0']->blackbgImage;
						$old_blackbgImage_path=$uploadPath.$old_blackbgImage;
						unlink($old_blackbgImage_path);
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
				
				redirect("admin/listvideo/$type");				
			} 
			else {
				if(is_numeric($did)) {
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
								'imageGalleryPos' => $row->imageGalleryPos,
								'type'=>$row->type,
								);
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
