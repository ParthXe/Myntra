<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SortBy extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		$this->load->model('sortBy_model');
	}	
	/* Done */
	public function index() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set Page Title
			$header['page_title'] = "Configure Sort By";
			$type = trim($this->uri->segment(3));
			$data['type']=$type;
			$sortByList = $this->sortBy_model->getSortByList($data);
			$menu_details['session'] = $this->session->userdata;
			$data['sortByList'] = $sortByList;
			$data['message'] = $this->session->flashdata('message');
			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $menu_details);
			if(count($sortByList)>0)
			{
				$this->load->view('admin/sortBy/list',$data);	
			}
			else
			{
				$this->load->view('admin/sortBy/add',$data);
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
			$uploadPath = "upload/sortBy/$type";	
				if(!empty($_FILES['closeImageButton']['name']))
				{
					$_FILES['closeImageButton']['name'] = $this->generateRandomNumber().$_FILES['closeImageButton']['name'];
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
							'headingTxt' => $this->input->post('headingTxt'),
							'closeImageButton' => $_FILES['closeImageButton']['name'],
							'option1' => $this->input->post('option1'),
							'option2' => $this->input->post('option2'),
							'option3' => $this->input->post('option3'),
							'option4' => $this->input->post('option4'),
							'type' => $type,
							'create_date' => $created
						);
						$id = $this->sortBy_model->addSortByInfo($addData);
						$this->session->set_flashdata('message', 'Data Saved successfully!!!');
				}
				else
				{
						$this->session->set_flashdata('message', 'Problem Adding Data!!!');
				}

					redirect("admin/sortBy/$type");				
				
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
			$checkSortBy = $this->sortBy_model->checkSortByInfo($did);
			$type = $checkSortBy->result()['0']->type;
			
			$uploadPath = "upload/sortBy/$type/";
			
			if(!empty($_FILES['closeImageButton']['name']))
			{	
				$_FILES['closeImageButton']['name'] = $this->generateRandomNumber().$_FILES['closeImageButton']['name'];
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('closeImageButton')){
                    
						$fileData = $this->upload->data();
						$old_closeImageButton=$checkSortBy->result()['0']->closeImageButton;
						$old_closeImageButton_path=$uploadPath.$old_closeImageButton;
						unlink($old_closeImageButton_path);
                }
				$flag = 1;
            }
			if(isset($_REQUEST['headingTxt']) || isset($_REQUEST['option1']) || isset($_REQUEST['option2']) || isset($_REQUEST['option3']) || isset($_REQUEST['option4']))
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
				$data['option1'] = $this->input->post('option1');
				$data['option2'] = $this->input->post('option2');
				$data['option3'] = $this->input->post('option3');
				$data['option4'] = $this->input->post('option4');
				$data['create_date'] = $created;
				$this->sortBy_model->updateSortByInfo($data);

				$this->session->set_flashdata('message', 'Setting has been saved');

				redirect("admin/sortBy/$type");
				
			} 
			else {
				if(is_numeric($did)) {
				
					if($checkSortBy->num_rows() == 1) {
						// Create the data array to pass to view
						$menu_details['session'] = $this->session->userdata;

						// Set Page Title
						$header['page_title'] = "Edit Sort By";				

						foreach ($checkSortBy->result() as $row) {
							$data['sortByList'] = array(
								'headingTxt' => $row->headingTxt,
								'closeImageButton' => $row->closeImageButton,
								'option1' => $row->option1,
								'option2' => $row->option2,
								'option3' => $row->option3,
								'option4' => $row->option4,
								'type' => $row->type,
								'create_date'=>$created, 
							);		
						}
						
						$this->load->view('admin/common/header', $header);
						$this->load->view('admin/common/left_menu', $menu_details);
						$this->load->view('admin/sortBy/edit', $data);
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
