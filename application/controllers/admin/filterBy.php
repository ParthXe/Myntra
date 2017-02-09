<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FilterBy extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		$this->load->model('filterBy_model');
	}	
	/* Done */
	public function index() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set Page Title
			$header['page_title'] = "Configure Filters";
			$page = 1;		

			//$screensaverlist = $this->screensaver_model->getscreensaverlist($page);
			$filterByList = $this->filterBy_model->getFilterByList($page);
			// Create the data array to pass to view
			$menu_details['session'] = $this->session->userdata;

			$data['filterByList'] = $filterByList;
			$data['message'] = $this->session->flashdata('message');
			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $menu_details);
			if(count($filterByList)>0)
			{
				$this->load->view('admin/filterBy/list', $data);	
			}
			else
			{
				$this->load->view('admin/filterBy/add');
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
					$_FILES['closeImageButton']['name'] = $this->generateRandomNumber().$_FILES['closeImageButton']['name'];
					$uploadPath = 'upload/filterBy/';
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
							'clearButton' => $this->input->post('clearButton'),
							'applyButton' => $this->input->post('applyButton'),
							'option1' => $this->input->post('option1'),
							'option2' => $this->input->post('option2'),
							'option3' => $this->input->post('option3'),
							'option4' => $this->input->post('option4'),
							'create_date' => $created
						);
						$id = $this->filterBy_model->addFilterByInfo($addData);
						$this->session->set_flashdata('message', 'Data Saved successfully!!!');
				}
				else
				{
						$this->session->set_flashdata('message', 'Problem Adding Data!!!');
				}

					redirect('admin/filterBy');				
				
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
			$checkFilterBy = $this->filterBy_model->checkFilterByInfo($did);
			$uploadPath = 'upload/filterBy/';
			
			if(!empty($_FILES['closeImageButton']['name']))
			{	
				$_FILES['closeImageButton']['name'] = $this->generateRandomNumber().$_FILES['closeImageButton']['name'];
                $uploadPath = 'upload/filterBy/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('closeImageButton')){
						$fileData = $this->upload->data();
						$old_closeImageButton=$checkFilterBy->result()['0']->closeImageButton;
						$old_closeImageButton_path=$uploadPath.$old_closeImageButton;
						unlink($old_closeImageButton_path);
                }
				$flag = 1;
            }
			if(isset($_REQUEST['headingTxt']) || isset($_REQUEST['clearButton']) || isset($_REQUEST['applyButton']) || isset($_REQUEST['option1']) || isset($_REQUEST['option2']) || isset($_REQUEST['option3']) || isset($_REQUEST['option4']))
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
				$data['clearButton'] = $this->input->post('clearButton');
				$data['applyButton'] = $this->input->post('applyButton');
				$data['option1'] = $this->input->post('option1');
				$data['option2'] = $this->input->post('option2');
				$data['option3'] = $this->input->post('option3');
				$data['option4'] = $this->input->post('option4');
				$data['create_date'] = $created;
				$this->filterBy_model->updateFilterByInfo($data);

				$this->session->set_flashdata('message', 'Setting has been saved');

				redirect('admin/filterBy');
				
			} 
			else {
				if(is_numeric($did)) {
				
					if($checkFilterBy->num_rows() == 1) {
						// Create the data array to pass to view
						$menu_details['session'] = $this->session->userdata;

						// Set Page Title
						$header['page_title'] = "Edit Filter By";				

						foreach ($checkFilterBy->result() as $row) {
							$data['filterByList'] = array(
								'headingTxt' => $row->headingTxt,
								'closeImageButton' => $row->closeImageButton,
								'clearButton' => $row->clearButton,
								'applyButton' => $row->applyButton,
								'option1' => $row->option1,
								'option2' => $row->option2,
								'option3' => $row->option3,
								'option4' => $row->option4,
								'create_date'=>$created, 
							);		
						}
						
						$this->load->view('admin/common/header', $header);
						$this->load->view('admin/common/left_menu', $menu_details);
						$this->load->view('admin/filterBy/edit', $data);
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
