<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productdesc extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		$this->load->model('productdesc_model');
	}	

	public function index() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set Page Title
			$header['page_title'] = "Configure Product Description";
			$page = 1;		

			$productdesclist = $this->productdesc_model->getproductdesclist($page);
			
			// Create the data array to pass to view
			$menu_details['session'] = $this->session->userdata;

			$data['productdesclist'] = $productdesclist;
			$data['message'] = $this->session->flashdata('message');
			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $menu_details);
			if(count($productdesclist)>0)
			{ 
				$this->load->view('admin/productdesc/list', $data);	
			}
			else
			{
				$this->load->view('admin/productdesc/add');
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
					$uploadPath = 'upload/productdesc/';
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
					$uploadPath = 'upload/productdesc/';
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
					$uploadPath = 'upload/productdesc/';
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
					$uploadPath = 'upload/productdesc/';
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
				if(!empty($_FILES['getProdBtn']['name']))
				{   
					$_FILES['getProdBtn']['name']=generateRandomNumber().$_FILES['getProdBtn']['name'];
					$uploadPath = 'upload/productdesc/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('getProdBtn'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(!empty($_FILES['closeImageButton']['name']))
				{   
					$_FILES['closeImageButton']['name']=generateRandomNumber().$_FILES['closeImageButton']['name'];
					$uploadPath = 'upload/productdesc/';
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
				if(!empty($_FILES['nextbuttonImage']['name']))
				{    
					$_FILES['nextbuttonImage']['name']=generateRandomNumber().$_FILES['nextbuttonImage']['name'];
					$uploadPath = 'upload/productdesc/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('nextbuttonImage'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(!empty($_FILES['backbtnImage']['name']))
				{        
					$_FILES['backbtnImage']['name']=generateRandomNumber().$_FILES['backbtnImage']['name'];
					$uploadPath = 'upload/productdesc/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('backbtnImage'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
			if(isset($_REQUEST['relatedProdHeadingTxt'])|| isset($_REQUEST['descTxtHeading']) || isset($_REQUEST['colorSelectionHeading']) || isset($_REQUEST['sizeSelectionHeading']) || isset($_REQUEST['notsureHeading']) || isset($_REQUEST['sizePopupHeadingTxt']) || isset($_REQUEST['sizePopupFirstTabTxt']) || isset($_REQUEST['prodUrl']) ||isset($_REQUEST['sizeUrl']) )
			{
				$flag=1;
			}
			
			if($flag == 1) {
				$data ['id'] = 1;
				if(!empty($_FILES['topBarImage']['name']))
				{
					$data ['topBarImage'] = $_FILES['topBarImage']['name'];
				}
				if(!empty($_FILES['BackbuttonImage']['name']))
				{
					$data ['BackbuttonImage'] = $_FILES['BackbuttonImage']['name'];
				}
				if(!empty($_FILES['homebuttonImage']['name']))
				{
					$data ['homebuttonImage'] = $_FILES['homebuttonImage']['name'];
				}
				if(!empty($_FILES['myntralogoImage']['name']))
				{
					$data ['myntralogoImage'] = $_FILES['myntralogoImage']['name'];
				}
				if(!empty($_FILES['getProdBtn']['name']))
				{
					$data ['getProdBtn'] = $_FILES['getProdBtn']['name'];
				}
				if(!empty($_FILES['closeImageButton']['name']))
				{
					$data ['closeImageButton'] = $_FILES['closeImageButton']['name'];
				}
				if(!empty($_FILES['nextbuttonImage']['name']))
				{
					$data ['nextbuttonImage'] = $_FILES['nextbuttonImage']['name'];
				}
				if(!empty($_FILES['backbtnImage']['name']))
				{
					$data ['backbtnImage'] = $_FILES['backbtnImage']['name'];
				}
				$data ['relatedProdHeadingTxt'] = $_REQUEST['relatedProdHeadingTxt'];
				$data ['descTxtHeading'] = $_REQUEST['descTxtHeading'];
				$data ['colorSelectionHeading'] = $_REQUEST['colorSelectionHeading'];
				$data ['sizeSelectionHeading'] = $_REQUEST['sizeSelectionHeading'];
				$data ['notsureHeading'] = $_REQUEST['notsureHeading'];
				$data ['sizePopupHeadingTxt'] = $_REQUEST['sizePopupHeadingTxt'];
				$data ['sizePopupFirstTabTxt'] = $_REQUEST['sizePopupFirstTabTxt'];
				$data ['prodUrl'] = $_REQUEST['prodUrl'];
				$data ['sizeUrl'] = $_REQUEST['sizeUrl'];
				
				$data ['create_date'] = $created;
					
						$id = $this->productdesc_model->addproductdescinfo($data);

						$this->session->set_flashdata('message', 'Settings saved successfully..');
				} 
					redirect('admin/productdesc');				
				
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
					$uploadPath = 'upload/productdesc/';
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
					$uploadPath = 'upload/productdesc/';
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
					$uploadPath = 'upload/productdesc/';
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
					$uploadPath = 'upload/productdesc/';
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
				if(!empty($_FILES['getProdBtn']['name']))
				{   
					$_FILES['getProdBtn']['name']=generateRandomNumber().$_FILES['getProdBtn']['name'];
					$uploadPath = 'upload/productdesc/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('getProdBtn'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(!empty($_FILES['closeImageButton']['name']))
				{   
					$_FILES['closeImageButton']['name']=generateRandomNumber().$_FILES['closeImageButton']['name'];
					$uploadPath = 'upload/productdesc/';
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
				if(!empty($_FILES['nextbuttonImage']['name']))
				{    
					$_FILES['nextbuttonImage']['name']=generateRandomNumber().$_FILES['nextbuttonImage']['name'];
					$uploadPath = 'upload/productdesc/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('nextbuttonImage'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
				if(!empty($_FILES['backbtnImage']['name']))
				{        
					$_FILES['backbtnImage']['name']=generateRandomNumber().$_FILES['backbtnImage']['name'];
					$uploadPath = 'upload/productdesc/';
					$config['upload_path'] = $uploadPath;
					$config['allowed_types'] = 'gif|jpg|png';
					
					$this->load->library('upload', $config);
					$this->upload->initialize($config);
					if($this->upload->do_upload('backbtnImage'))
					{
						$fileData = $this->upload->data();
					}
					$flag=1;
				}
			if(isset($_REQUEST['relatedProdHeadingTxt'])|| isset($_REQUEST['descTxtHeading']) || isset($_REQUEST['colorSelectionHeading']) || isset($_REQUEST['sizeSelectionHeading']) || isset($_REQUEST['notsureHeading']) || isset($_REQUEST['sizePopupHeadingTxt']) || isset($_REQUEST['sizePopupFirstTabTxt']) || isset($_REQUEST['prodUrl']) ||isset($_REQUEST['sizeUrl']) )
			{
				$flag=1;
			}
			
			if($flag == 1) {
				$data ['id'] = $did;
				if(!empty($_FILES['topBarImage']['name']))
				{
					$data ['topBarImage'] = $_FILES['topBarImage']['name'];
				}
				if(!empty($_FILES['BackbuttonImage']['name']))
				{
					$data ['BackbuttonImage'] = $_FILES['BackbuttonImage']['name'];
				}
				if(!empty($_FILES['homebuttonImage']['name']))
				{
					$data ['homebuttonImage'] = $_FILES['homebuttonImage']['name'];
				}
				if(!empty($_FILES['myntralogoImage']['name']))
				{
					$data ['myntralogoImage'] = $_FILES['myntralogoImage']['name'];
				}
				if(!empty($_FILES['getProdBtn']['name']))
				{
					$data ['getProdBtn'] = $_FILES['getProdBtn']['name'];
				}
				if(!empty($_FILES['closeImageButton']['name']))
				{
					$data ['closeImageButton'] = $_FILES['closeImageButton']['name'];
				}
				if(!empty($_FILES['nextbuttonImage']['name']))
				{
					$data ['nextbuttonImage'] = $_FILES['nextbuttonImage']['name'];
				}
				if(!empty($_FILES['backbtnImage']['name']))
				{
					$data ['backbtnImage'] = $_FILES['backbtnImage']['name'];
				}
				$data ['relatedProdHeadingTxt'] = $_REQUEST['relatedProdHeadingTxt'];
				$data ['descTxtHeading'] = $_REQUEST['descTxtHeading'];
				$data ['colorSelectionHeading'] = $_REQUEST['colorSelectionHeading'];
				$data ['sizeSelectionHeading'] = $_REQUEST['sizeSelectionHeading'];
				$data ['notsureHeading'] = $_REQUEST['notsureHeading'];
				$data ['sizePopupHeadingTxt'] = $_REQUEST['sizePopupHeadingTxt'];
				$data ['sizePopupFirstTabTxt'] = $_REQUEST['sizePopupFirstTabTxt'];
				$data ['prodUrl'] = $_REQUEST['prodUrl'];
				$data ['sizeUrl'] = $_REQUEST['sizeUrl'];
				
				$data ['create_date'] = $created;
						
				$id = $this->productdesc_model->updateproductdescinfo($data);

				$this->session->set_flashdata('message', 'Settings saved successfully..');
				
				redirect('admin/productdesc');				
			} 
			else {
				if(is_numeric($did)) {
				
					$checkproductdesc = $this->productdesc_model->checkproductdescinfo($did);
					if($checkproductdesc->num_rows() == 1) {
						// Create the data array to pass to view
						$menu_details['session'] = $this->session->userdata;

						// Set Page Title
						$header['page_title'] = "Edit productdesc";				

						foreach ($checkproductdesc->result() as $row) {
							$data['productdescinfo'] = array(
								'topBarImage' => $row->topBarImage,
								'BackbuttonImage' =>$row->BackbuttonImage,
								'homebuttonImage' => $row->homebuttonImage,
								'myntralogoImage' => $row->myntralogoImage,
								'getProdBtn' => $row->getProdBtn,
								'relatedProdHeadingTxt' => $row->relatedProdHeadingTxt,
								'descTxtHeading' => $row->descTxtHeading,
								'colorSelectionHeading' => $row->colorSelectionHeading,
								'sizeSelectionHeading' =>$row->sizeSelectionHeading,
								'notsureHeading' => $row->notsureHeading,
								'closeImageButton' => $row->closeImageButton,
								'sizePopupHeadingTxt' => $row->sizePopupHeadingTxt,
								'sizePopupFirstTabTxt' => $row->sizePopupFirstTabTxt,
								'prodUrl' => $row->prodUrl,
								'sizeUrl' => $row->sizeUrl,
								'nextbuttonImage' => $row->nextbuttonImage,
								'backbtnImage' => $row->backbtnImage,
							);		
						}
						$this->load->view('admin/common/header', $header);
						$this->load->view('admin/common/left_menu', $menu_details);
						$this->load->view('admin/productdesc/edit', $data);
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
