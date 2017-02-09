<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class collectionvideo extends MY_Controller {
	
	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		$this->load->model('collectionvideo_model');
	}	

	
	public function index() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set Page Title
			$header['page_title'] = "Configure Collection Video";
			$page = 1;		

			$collectionvideolist = $this->collectionvideo_model->getcollectionvideolist($page);
			
			// Create the data array to pass to view
			$menu_details['session'] = $this->session->userdata;

			$data['collectionvideolist'] = $collectionvideolist;
			$data['message'] = $this->session->flashdata('message');
			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $menu_details);
			if(count($collectionvideolist)>0)
			{ 
				$this->load->view('admin/collectionVideo/list', $data);	
			}
			else
			{
				$this->load->view('admin/collectionVideo/add');
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
		$uploadPath = 'upload/collectionvideo/';
		
			if(!empty($_FILES['bgPath']['name']))
				{
					$_FILES['bgPath']['name']=$this->$this->generateRandomNumber().$_FILES['bgPath']['name'];
					
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('bgPath'))
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
				if(!empty($_FILES['motoGpvideo']['name']))
				{       
					$_FILES['motoGpvideo']['name']=$this->generateRandomNumber().$_FILES['motoGpvideo']['name'];
					
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'mp4|mpg|avi|wmv|mov';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('motoGpvideo'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(!empty($_FILES['outLandervideo']['name']))
				{           
			        $_FILES['outLandervideo']['name']=$this->generateRandomNumber().$_FILES['outLandervideo']['name'];
					
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'mp4|mpg|avi|wmv|mov';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('outLandervideo'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(!empty($_FILES['buttonImage']['name']))
				{      
					$_FILES['buttonImage']['name']=$this->generateRandomNumber().$_FILES['buttonImage']['name'];
					
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('buttonImage'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(!empty($_FILES['closeImageButton']['name']))
				{      
					$_FILES['closeImageButton']['name']=$this->generateRandomNumber().$_FILES['closeImageButton']['name'];
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('closeImageButton'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(isset($_REQUEST['scrtext'])|| isset($_REQUEST['insttext']))
				{
					$flag=1;
				}
			if($flag == 1) {
				$data ['id'] = 1;
				if(!empty($_FILES['bgPath']['name']))
				{
					$data ['bgPath'] = $_FILES['bgPath']['name'];
				}
				if(!empty($_FILES['homebuttonImage']['name']))
				{
					$data ['homebuttonImage'] = $_FILES['homebuttonImage']['name'];
				}
				$data ['scrtext'] = $_REQUEST['scrtext'];
				$data ['insttext'] = $_REQUEST['insttext'];
				if(!empty($_FILES['motoGpvideo']['name']))
				{
					$data ['motoGpvideo'] = $_FILES['motoGpvideo']['name'];
				}
				if(!empty($_FILES['outLandervideo']['name']))
				{
					$data ['outLandervideo'] = $_FILES['outLandervideo']['name'];
				}
				if(!empty($_FILES['buttonImage']['name']))
				{
					$data ['buttonImage'] = $_FILES['buttonImage']['name'];
				}
				if(!empty($_FILES['closeImageButton']['name']))
				{
					$data ['closeImageButton'] = $_FILES['closeImageButton']['name'];
				}
				$data ['create_date'] = $created;
						
						$id = $this->collectionvideo_model->addcollectionvideoinfo($data);
						$this->session->set_flashdata('message', 'Settings saved successfully..');
				} 
				
					redirect('admin/collectionvideo');				
				
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
			$uploadPath = 'upload/collectionvideo/';
			$checkcollectionvideo = $this->collectionvideo_model->checkcollectionvideoinfo($did);
		
			 	
				if(!empty($_FILES['bgPath']['name']))
				{
					$_FILES['bgPath']['name']=$this->generateRandomNumber().$_FILES['bgPath']['name'];
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('bgPath'))
					{
						$fileData = $this->upload->data();
						$old_bgPathfile=$checkcollectionvideo->result()['0']->bgPath;
						$old_bgPathfile_path=$uploadPath.$old_bgPathfile;
						unlink($old_bgPathfile_path);
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
						$old_homebuttonImage=$checkcollectionvideo->result()['0']->homebuttonImage;
						$old_homebuttonImage_path=$uploadPath.$old_homebuttonImage;
						unlink($old_homebuttonImage_path);
					}
					$flag=1;
				}
				if(!empty($_FILES['motoGpvideo']['name']))
				{       
					$_FILES['motoGpvideo']['name']=$this->generateRandomNumber().$_FILES['motoGpvideo']['name'];
					
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'mp4|mpg|avi|wmv|mov';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('motoGpvideo'))
					{
						$fileData = $this->upload->data();
						$old_motoGpvideo=$checkcollectionvideo->result()['0']->motoGpvideo;
						$old_motoGpvideo_path=$uploadPath.$old_motoGpvideo;
						unlink($old_motoGpvideo_path);
					}
					$flag=1;
				}
				if(!empty($_FILES['outLandervideo']['name']))
				{           
			        $_FILES['outLandervideo']['name']=$this->generateRandomNumber().$_FILES['outLandervideo']['name'];
					
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'mp4|mpg|avi|wmv|mov';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('outLandervideo'))
					{
						$fileData = $this->upload->data();
						$old_outLandervideo=$checkcollectionvideo->result()['0']->outLandervideo;
						$old_outLandervideo_path=$uploadPath.$old_outLandervideo;
						unlink($old_outLandervideo_path);
					}
					$flag=1;
				}
				if(!empty($_FILES['buttonImage']['name']))
				{      
					$_FILES['buttonImage']['name']=$this->generateRandomNumber().$_FILES['buttonImage']['name'];
					
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('buttonImage'))
					{
						$fileData = $this->upload->data();
						$old_buttonImage=$checkcollectionvideo->result()['0']->buttonImage;
						$old_buttonImage_path=$uploadPath.$old_buttonImage;
						unlink($old_buttonImage_path);
					}
					$flag=1;
				}
				if(!empty($_FILES['closeImageButton']['name']))
				{      
					$_FILES['closeImageButton']['name']=$this->generateRandomNumber().$_FILES['closeImageButton']['name'];
					
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('closeImageButton'))
					{
						$fileData = $this->upload->data();
						$old_closeImageButton=$checkcollectionvideo->result()['0']->closeImageButton;
						$old_closeImageButton_path=$uploadPath.$old_closeImageButton;
						unlink($old_closeImageButton_path);
					}
					$flag=1;
				}
				if(isset($_REQUEST['scrtext']) || isset($_REQUEST['insttext']))
				{
					$flag=1;
				}
			if($flag == 1) {
				$data ['id'] = $did;
				if(!empty($_FILES['bgPath']['name']))
				{
					$data ['bgPath'] = $_FILES['bgPath']['name'];
				}
				if(!empty($_FILES['homebuttonImage']['name']))
				{
					$data ['homebuttonImage'] = $_FILES['homebuttonImage']['name'];
				}
				$data ['scrtext'] = $_REQUEST['scrtext'];
				$data ['insttext'] = $_REQUEST['insttext'];
				if(!empty($_FILES['motoGpvideo']['name']))
				{
					$data ['motoGpvideo'] = $_FILES['motoGpvideo']['name'];
				}
				if(!empty($_FILES['outLandervideo']['name']))
				{
					$data ['outLandervideo'] = $_FILES['outLandervideo']['name'];
				}
				if(!empty($_FILES['buttonImage']['name']))
				{
					$data ['buttonImage'] = $_FILES['buttonImage']['name'];
				}
				if(!empty($_FILES['closeImageButton']['name']))
				{
					$data ['closeImageButton'] = $_FILES['closeImageButton']['name'];
				}
				$data ['create_date'] = $created;

				$this->collectionvideo_model->updatecollectionvideoinfo($data);

				$this->session->set_flashdata('message', 'Setting has been saved');

				redirect('admin/collectionvideo');
			} 
			else {
				if(is_numeric($did)) {
					if($checkcollectionvideo->num_rows() == 1) {
						// Create the data array to pass to view
						$menu_details['session'] = $this->session->userdata;

						// Set Page Title
						$header['page_title'] = "Edit collectionvideo";				

						foreach ($checkcollectionvideo->result() as $row) {
							$data['collectionvideoinfo'] = array(
								'bgPath' => $row->bgPath,
								'homebuttonImage' =>$row->homebuttonImage,
								'scrtext' => $row->scrtext,
								'insttext' => $row->insttext,
								'motoGpvideo' => $row->motoGpvideo,
								'outLandervideo' => $row->outLandervideo,
								'buttonImage' => $row->buttonImage,
								'closeImageButton' => $row->closeImageButton,
							);		
						}
						$this->load->view('admin/common/header', $header);
						$this->load->view('admin/common/left_menu', $menu_details);
						$this->load->view('admin/collectionvideo/edit', $data);
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
