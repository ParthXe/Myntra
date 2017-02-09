<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SendSMS extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		$this->load->model('sendSMS_model');
	}	
	/* Done */
	public function index() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set Page Title
			$header['page_title'] = "Configure Send SMS";
			$page = 1;		

			//$screensaverlist = $this->screensaver_model->getscreensaverlist($page);
			$sendSMSList = $this->sendSMS_model->getSendSMSList($page);
			// Create the data array to pass to view
			$menu_details['session'] = $this->session->userdata;

			$data['sendSMSList'] = $sendSMSList;
			$data['message'] = $this->session->flashdata('message');
			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $menu_details);
			if(count($sendSMSList)>0)
			{
				$this->load->view('admin/sendSMS/list', $data);	
			}
			else
			{
				$this->load->view('admin/sendSMS/add');
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
				if(!empty($_FILES['closeImageButton']['name']))
				{
					$_FILES['closeImageButton']['name'] = $this->$this->generateRandomNumber().$_FILES['closeImageButton']['name'];
					$uploadPath = 'upload/sendSMS/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('closeImageButton'))
					{
						$fileData = $this->upload->data();
					}
				}
				if(!empty($_FILES['closeImageButton']['name'])) 
				{
						$addData = array(
							'id' => 1,
							'headingTxt' => $this->input->post('headingTxt'),
							'closeImageButton' => $_FILES['closeImageButton']['name'],
							'bodyTxt' => $this->input->post('bodyTxt'),
							'button1' => $this->input->post('button1'),
							'button2' => $this->input->post('button2'),
							'create_date' => $created
						);
						$id = $this->sendSMS_model->addSendSMSInfo($addData);
						$this->session->set_flashdata('message', 'Data Saved successfully!!!');
				}
				else
				{
						$this->session->set_flashdata('message', 'Problem Adding Data!!!');
				}

					redirect('admin/sendSMS');				
				
	} 
	else 
	{
			redirect('admin/login');
	}
}	
	/* Done */
	public function edit() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			
			$did = trim($this->uri->segment(4));
			$time=time();
			$created = date ("Y-m-d H:i:s", $time);
			$flag = 0;
			$checksendSMS = $this->sendSMS_model->checkSendSMSInfo($did);
			$uploadPath = 'upload/sendSMS/';
			  
			if(!empty($_FILES['closeImageButton']['name']))
			{	
				$_FILES['closeImageButton']['name'] = $this->generateRandomNumber().$_FILES['closeImageButton']['name'];
              
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('closeImageButton')){
						$fileData = $this->upload->data();
						$old_closeImageButton=$checksendSMS->result()['0']->closeImageButton;
						$old_closeImageButton_path=$uploadPath.$old_closeImageButton;
						unlink($old_closeImageButton_path);
                }
				$flag = 1;

            }
			if(isset($_REQUEST['headingTxt']) || isset($_REQUEST['bodyTxt']) || isset($_REQUEST['button1']) || isset($_REQUEST['button2']))
			{
				$flag = 1;	
			}
			if($flag == 1) {
				
				if(!empty($_FILES['closeImageButton']['name']))
				{
					$data ['closeImageButton'] = $_FILES['closeImageButton']['name'];
				}		
				$data['id'] = $did;
				$data['headingTxt'] = $this->input->post('headingTxt');
				$data['bodyTxt'] = $this->input->post('bodyTxt');
				$data['button1'] = $this->input->post('button1');
				$data['button2'] = $this->input->post('button2');
				$data['create_date'] = $created;
				$this->sendSMS_model->updateSendSMSInfo($data);

				$this->session->set_flashdata('message', 'Setting has been saved');

				redirect('admin/sendSMS');
				
			} 
			else {
				if(is_numeric($did)) {

					if($checksendSMS->num_rows() == 1) {
						// Create the data array to pass to view
						$menu_details['session'] = $this->session->userdata;

						// Set Page Title
						$header['page_title'] = "Edit Screensaver";				

						foreach ($checksendSMS->result() as $row) {
							$data['sendSMSList'] = array(
								'headingTxt' => $row->headingTxt,
								'closeImageButton' => $row->closeImageButton,
								'bodyTxt' => $row->bodyTxt,
								'button1' => $row->button1,
								'button2' => $row->button2,
								'create_date'=>$created, 
							);		
						}
						
						$this->load->view('admin/common/header', $header);
						$this->load->view('admin/common/left_menu', $menu_details);
						$this->load->view('admin/sendSMS/edit', $data);
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
