<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class screensaver extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		$this->load->model('screensaver_model');
	}	

	public function index() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set Page Title
			$header['page_title'] = "Screensaver Configuration";
			$type = trim($this->uri->segment(3));
			$data{'type'}=$type;		
			$screensaverlist = $this->screensaver_model->getscreensaverlist($data);
			
			// Create the data array to pass to view
			$menu_details['session'] = $this->session->userdata;
			$data['tab'] = $type;
			$data['screensaverlist'] = $screensaverlist;
			$data['message'] = $this->session->flashdata('message');
			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $menu_details);
			if(count($screensaverlist)>0)
			{
				$this->load->view("admin/screensaver/list", $data);	
			}
			else
			{
				$this->load->view("admin/screensaver/add",$data);
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
			
			
				if(!empty($_FILES['bgPath']['name']))
				{
					$_FILES['bgPath']['name']=$this->generateRandomNumber().$_FILES['bgPath']['name'];
					$uploadPath = 'upload/screensaver/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'mp4|mpg|avi|wmv|mov';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('bgPath'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(!empty($_FILES['exploreBtnPath']['name']))
				{    
					$_FILES['exploreBtnPath']['name']=$this->generateRandomNumber().$_FILES['exploreBtnPath']['name'];			
					$uploadPath = 'upload/screensaver/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('exploreBtnPath'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if($flag == 1) {
				$data['type']=$type;	
				//$data ['id'] = 1;
				if(!empty($_FILES['bgPath']['name'])){
					$data ['bgPath'] = $_FILES['bgPath']['name'];
				}
				if(!empty($_FILES['exploreBtnPath']['name'])){
					$data ['exploreBtnPath'] = $_FILES['exploreBtnPath']['name'];
				}
				$data ['create_date'] = $created;
				//print_r($data);		
				$id = $this->screensaver_model->addscreensaverinfo($data);
				$this->session->set_flashdata('message', 'Settings saved successfully..');
			} 
				redirect("admin/screensaver/$type");				
				
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
			$checkscreensaver = $this->screensaver_model->checkscreensaverinfo($did);
			$type=$checkscreensaver->result()['0']->type;
		    $uploadPath = 'upload/screensaver/';

			  if(!empty($_FILES['bgPath']['name'])){
				$_FILES['bgPath']['name']=$this->generateRandomNumber().$_FILES['bgPath']['name'];
             
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'mp4|mpg|avi|wmv|mov';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('bgPath')){
					
						$fileData = $this->upload->data();
						$old_bgPath=$checkscreensaver->result()['0']->bgPath;
						$old_bgPath_path=$uploadPath.$old_bgPath;
						unlink($old_bgPath_path);
                }
				$flag=1;

            } 
			  if(!empty($_FILES['exploreBtnPath']['name'])){
				$_FILES['exploreBtnPath']['name']=$this->generateRandomNumber().$_FILES['exploreBtnPath']['name'];
                
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('exploreBtnPath')){
					
						$fileData = $this->upload->data();
						$old_exploreBtnPath=$checkscreensaver->result()['0']->exploreBtnPath;
						$old_exploreBtnPath_path=$uploadPath.$old_exploreBtnPath;
						unlink($old_exploreBtnPath_path);
                }
				$flag=1;
            } 
			if(isset($_FILES['exploreBtnPath']['name'])){
				$flag = 1;
			}
			if($flag == 1) {
				$data ['id'] = $did;
				if(!empty($_FILES['bgPath']['name']))
				{
					$data ['bgPath'] = $_FILES['bgPath']['name'];
				}
				if(!empty($_FILES['exploreBtnPath']['name']))
				{
					$data ['exploreBtnPath'] = $_FILES['exploreBtnPath']['name'];
				}
				$data ['create_date'] = $created;
				
				//print_r($data);
				//exit;
		
				$this->screensaver_model->updatescreensaverinfo($data);

				$this->session->set_flashdata('message', 'Setting has been saved');

				redirect("admin/screensaver/$type");

			} 
			else {
				if(is_numeric($did)) {
					if($checkscreensaver->num_rows() == 1) {
						// Create the data array to pass to view
						$menu_details['session'] = $this->session->userdata;

						// Set Page Title
						$header['page_title'] = "Edit Screensaver";				

						foreach ($checkscreensaver->result() as $row) {
							$data['screensaverinfo'] = array(
								'bgPath' => $row->bgPath,
								'exploreBtnPath' => $row->exploreBtnPath,
								'create_date'=>$created,
								'type'=>$row->type,
							);		
						}
						$this->load->view('admin/common/header', $header);
						$this->load->view('admin/common/left_menu', $menu_details);
						$this->load->view("admin/screensaver/edit", $data);
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
