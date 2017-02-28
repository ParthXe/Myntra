<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ConfURL extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		$this->load->model('confURL_model');
	}	
	/* Done */
	public function index() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set Page Title
			$header['page_title'] = "Configure URL";
			$type = trim($this->uri->segment(3));
			$data['type']=$type;
			$confURLList = $this->confURL_model->getConfURLList($data);
			$menu_details['session'] = $this->session->userdata;
			$data['confURLList'] = $confURLList;
			$data['message'] = $this->session->flashdata('message');
			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $menu_details);
			if(count($confURLList)>0)
			{
				$this->load->view('admin/confURL/list',$data);	
			}
			else
			{
				$this->load->view('admin/confURL/add',$data);
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
				if(!empty($this->input->post('jsonProdFilters'))) 
				{
						$addData = array(
							'jsonProdFilters' => $this->input->post('jsonProdFilters'),
							'rowCounts' => $this->input->post('rowCounts'),
							'timeOutSec' => $this->input->post('timeOutSec'),
							'productType' => $this->input->post('productType'),
							'type' => $type,
							'create_date' => $created
						);
					if(!empty($this->input->post('jsonProdLooks'))) {
						$addData['jsonProdLooks'] = $this->input->post('jsonProdLooks'); 
					}		
						$id = $this->confURL_model->addConfURLInfo($addData);
						$this->session->set_flashdata('message', 'Data Saved successfully!!!');
				}
				else
				{
						$this->session->set_flashdata('message', 'Problem Adding Data!!!');
				}

					redirect("admin/confURL/$type");				
				
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
			$checkConfURL = $this->confURL_model->checkConfURLInfo($did);
			$type = $checkConfURL->result()['0']->type;
			$uploadPath = "upload/confURL/$type/";
			if(isset($_REQUEST['jsonProdLooks']) || isset($_REQUEST['rowCounts']) || isset($_REQUEST['timeOutSec']))
			{
				$flag = 1;	
			}
			if($flag == 1) {
				
				$data['id'] = $did;
				$data['jsonProdFilters'] = $this->input->post('jsonProdFilters');
				if(isset($_REQUEST['jsonProdLooks'])){
					$data['jsonProdLooks'] = $this->input->post('jsonProdLooks');	
				}
				$data['rowCounts'] = $this->input->post('rowCounts');
				$data['timeOutSec'] = $this->input->post('timeOutSec');
				$data['productType'] = $this->input->post('productType');
				$data['create_date'] = $created;
				$this->confURL_model->updateConfURLInfo($data);
				$this->session->set_flashdata('message', 'Setting has been saved');

				redirect("admin/confURL/$type");
				
			} 
			else {
				if(is_numeric($did)) {

					if($checkConfURL->num_rows() == 1) {
						$menu_details['session'] = $this->session->userdata;
						$header['page_title'] = "Edit Send SMS";
						foreach ($checkConfURL->result() as $row) {
							$data['confURLList'] = array(
								'jsonProdFilters' => $row->jsonProdFilters,
								'jsonProdLooks' => $row->jsonProdLooks,
								'rowCounts' => $row->rowCounts,
								'timeOutSec' => $row->timeOutSec,
								'productType' => $row->productType,
								'type' => $row->type,
								'create_date'=>$created, 
							);		
						}
						
						$this->load->view('admin/common/header', $header);
						$this->load->view('admin/common/left_menu', $menu_details);
						$this->load->view('admin/confURL/edit', $data);
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
