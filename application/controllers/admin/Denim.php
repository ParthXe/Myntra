<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Denim extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		$this->load->model('Denim_model');
	}	

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set Page Title
			$header['page_title'] = "Denium Male Products";
			$page = 1;		

			$denim_male = $this->Denim_model->getAllDenimMale($page);

			// Create the data array to pass to view
			$menu_details['session'] = $this->session->userdata;

			$data['denim_male'] = $denim_male;
			$data['message'] = $this->session->flashdata('message');

			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $menu_details);
			$this->load->view('admin/denim/male/list', $data);
			$this->load->view('admin/common/footer');
		} else {
			redirect('admin/login');
		}
	}

	public function male_add() {
	if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set validation rules for view filters
			//$this->form_validation->set_rules('destination_name', "Name field is required", 'required');
			//$this->form_validation->set_rules('destination_state', $this->lang->line('signin_email'), 'required');

			$this->form_validation->set_error_delimiters('<p class="alert alert-danger"><a class="close" data-dismiss="alert" href="#">&times;</a>', '</p>');

		if(!empty($this->input->post('champions_products_title'))) {

			//$data = array();
        if(!empty($_FILES['userFiles']['name'])){
            $filesCount = count($_FILES['userFiles']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

                $uploadPath = 'upload/denim/male/anatomy';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                }
            }
        }

        if(!empty($_FILES['championsProductsImages']['name'])){
            $filesCount1 = count($_FILES['championsProductsImages']['name']);
            for($j = 0; $j < $filesCount1; $j++){

                $_FILES['championsProductsImage']['name'] = $_FILES['championsProductsImages']['name'][$j];
                $_FILES['championsProductsImage']['type'] = $_FILES['championsProductsImages']['type'][$j];
                $_FILES['championsProductsImage']['tmp_name'] = $_FILES['championsProductsImages']['tmp_name'][$j];
                $_FILES['championsProductsImage']['error'] = $_FILES['championsProductsImages']['error'][$j];
                $_FILES['championsProductsImage']['size'] = $_FILES['championsProductsImages']['size'][$j];

                $uploadPath = 'upload/denim/male/champion_products';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('championsProductsImage')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                }
            }
        }


        if(!empty($_FILES['trendsImages']['name'])){
            $filesCount2 = count($_FILES['trendsImages']['name']);
            for($i = 0; $i < $filesCount2; $i++){
            	
                $_FILES['trendsImage']['name'] = $_FILES['trendsImages']['name'][$i];
                $_FILES['trendsImage']['type'] = $_FILES['trendsImages']['type'][$i];
                $_FILES['trendsImage']['tmp_name'] = $_FILES['trendsImages']['tmp_name'][$i];
                $_FILES['trendsImage']['error'] = $_FILES['trendsImages']['error'][$i];
                $_FILES['trendsImage']['size'] = $_FILES['trendsImages']['size'][$i];

                $uploadPath = 'upload/denim/male/trend_images';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('trendsImage')){
                	
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                }
            }
        }


        if(!empty($_FILES['vintageImage']['name'])){
            $filesCount3 = count($_FILES['vintageImage']['name']);
            for($i = 0; $i < $filesCount3; $i++){
                $_FILES['vintageImages']['name'] = $_FILES['vintageImage']['name'][$i];
                $_FILES['vintageImages']['type'] = $_FILES['vintageImage']['type'][$i];
                $_FILES['vintageImages']['tmp_name'] = $_FILES['vintageImage']['tmp_name'][$i];
                $_FILES['vintageImages']['error'] = $_FILES['vintageImage']['error'][$i];
                $_FILES['vintageImages']['size'] = $_FILES['vintageImage']['size'][$i];

                $uploadPath = 'upload/denim/male/vintage_images';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('vintageImages')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                }
            }
        }
        if(!empty($_FILES['vintageVideo']['name'])){
           

                $uploadPath = 'upload/denim/male/vintage_video';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('vintageVideo')){
                    $fileData = $this->upload->data();
                }
            }

        $image_array = implode(",",$_FILES['userFiles']['name']);
       	$championsproducts_array = implode(",",$_FILES['championsProductsImages']['name']);
       	$trendsImages_array = implode(",",$_FILES['trendsImages']['name']);
       	$vintageImage_array = implode(",",$_FILES['vintageImage']['name']);
		
				$time=time();
				$created = date ("Y-m-d H:i:s", $time);				

				if(!empty($this->input->post('champions_products_title'))) {
						$addData = array(
							'anatomy' => json_encode($image_array, true),
							'champion_products_title' => $this->input->post('champions_products_title'),
							'champion_products_desc' => $this->input->post('champions_products_desc'),
							'champion_products_images' => $championsproducts_array,
							'trends_launch_date' => $this->input->post('trends_launch_date'),
							'trends_title' => $this->input->post('trends_title'),
							'trends_images' => $trendsImages_array,
							'vintage_images' => $vintageImage_array,
							'vintage_video' => $_FILES['vintageVideo']['name'],
							'vintage_title' => $this->input->post('vintage_title'),
							'vintage_desc' => $this->input->post('vintage_description'),
							'active' => ($this->input->post('active') == "on") ? 1 : 0,
							'modify' => date("Y-m-d H:i:s")
						);
					} else {
						$addData = [];
					}


					$id = $this->Denim_model->addDenimMale($addData);

					$this->session->set_flashdata('message', 'Denim has been added');

					redirect('admin/denim');				
				
			} else {
				// Create the data array to pass to view
				$menu_details['session'] = $this->session->userdata;

				// Set Page Title
				$header['page_title'] = "Add User";

				$data['roles'] = $this->Denim_model->getRoles();

				$this->load->view('admin/common/header', $header);
				$this->load->view('admin/common/left_menu', $menu_details);
				$this->load->view('admin/denim/male/add', $data);
				$this->load->view('admin/common/footer');
			}
		} else {
			redirect('admin/login');
		}
	}	

	public function male_edit() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {

			$did = trim($this->uri->segment(4));

			// $this->form_validation->set_rules('destination_name', "Name field is required", 'required');
			// $this->form_validation->set_rules('destination_state', $this->lang->line('signin_email'), 'required');

			// $this->form_validation->set_error_delimiters('<p class="alert alert-danger"><a class="close" data-dismiss="alert" href="#">&times;</a>', '</p>');

			if(!empty($this->input->post('champions_products_title'))) {

			 if(!empty($_FILES['championsProductsImages']['name'])){
            $filesCount1 = count($_FILES['championsProductsImages']['name']);
            for($j = 0; $j < $filesCount1; $j++){

                $_FILES['championsProductsImage']['name'] = $_FILES['championsProductsImages']['name'][$j];
                $_FILES['championsProductsImage']['type'] = $_FILES['championsProductsImages']['type'][$j];
                $_FILES['championsProductsImage']['tmp_name'] = $_FILES['championsProductsImages']['tmp_name'][$j];
                $_FILES['championsProductsImage']['error'] = $_FILES['championsProductsImages']['error'][$j];
                $_FILES['championsProductsImage']['size'] = $_FILES['championsProductsImages']['size'][$j];

                $uploadPath = 'upload/denim/male/champion_products';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('championsProductsImage')){
                    $fileData = $this->upload->data();
                    $uploadData[$j]['file_name'] = $fileData['file_name'];
                    $uploadData[$j]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$j]['modified'] = date("Y-m-d H:i:s");
                }
            }
        }

        if(!empty($_FILES['trendsImages']['name'])){
            $filesCount2 = count($_FILES['trendsImages']['name']);
            for($i = 0; $i < $filesCount2; $i++){
            	
                $_FILES['trendsImage']['name'] = $_FILES['trendsImages']['name'][$i];
                $_FILES['trendsImage']['type'] = $_FILES['trendsImages']['type'][$i];
                $_FILES['trendsImage']['tmp_name'] = $_FILES['trendsImages']['tmp_name'][$i];
                $_FILES['trendsImage']['error'] = $_FILES['trendsImages']['error'][$i];
                $_FILES['trendsImage']['size'] = $_FILES['trendsImages']['size'][$i];

                $uploadPath = 'upload/denim/male/trend_images';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('trendsImage')){
                	
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                }
            }
        }


        if(!empty($_FILES['vintageImage']['name'])){
            $filesCount3 = count($_FILES['vintageImage']['name']);
            for($i = 0; $i < $filesCount3; $i++){
                $_FILES['vintageImages']['name'] = $_FILES['vintageImage']['name'][$i];
                $_FILES['vintageImages']['type'] = $_FILES['vintageImage']['type'][$i];
                $_FILES['vintageImages']['tmp_name'] = $_FILES['vintageImage']['tmp_name'][$i];
                $_FILES['vintageImages']['error'] = $_FILES['vintageImage']['error'][$i];
                $_FILES['vintageImages']['size'] = $_FILES['vintageImage']['size'][$i];

                $uploadPath = 'upload/denim/male/vintage_images';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('vintageImages')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                }
            }
        }
        	$championsproducts_array = implode(",",$_FILES['championsProductsImages']['name']);
        	$trendsImages_array = implode(",",$_FILES['trendsImages']['name']);
       	    $vintageImage_array = implode(",",$_FILES['vintageImage']['name']);
				$data = array(
						'Id' => $did,
						//'anatomy' => json_encode($image_array, true),
						'champion_products_title' => $this->input->post('champions_products_title'),
						'champion_products_desc' => $this->input->post('champions_products_desc'),
						'champion_products_images' => $championsproducts_array,
						'trends_launch_date' => $this->input->post('trends_launch_date'),
						'trends_title' => $this->input->post('trends_title'),
						'trends_images' => $trendsImages_array,
						'vintage_images' => $vintageImage_array,
						//'vintage_video' => $_FILES['vintageVideo']['name'],
						'vintage_title' => $this->input->post('vintage_title'),
						'vintage_desc' => $this->input->post('vintage_description'),
						'active' => ($this->input->post('active') == "on") ? 1 : 0,
						'modify' => date("Y-m-d H:i:s")
				);

				$this->Denim_model->updateDenimMale($data);

				$this->session->set_flashdata('message', 'User has been updated');

				redirect('admin/denim');

			} else {
				if(is_numeric($did)) {
				
					$checkDestination = $this->Denim_model->checkDenimMale($did);
					if($checkDestination->num_rows() == 1) {
						// Create the data array to pass to view
						$menu_details['session'] = $this->session->userdata;

						// Set Page Title
						$header['page_title'] = "Edit Denim Products";				

						foreach ($checkDestination->result() as $row) {
							$data['denim_male'] = array(
								'id' => $row->Id,
								'champion_products_title' => $row->champion_products_title,
								'champion_products_desc' => $row->champion_products_desc,
								'champion_products_images' => $row->champion_products_images,
								'anatomy' => $row->anatomy,
								'trends_launch_date' => $row->trends_launch_date,
								'trends_title' => $row->trends_title,
								'trends_images' => $row->trends_images,
								'vintage_title' => $row->vintage_title,
								'vintage_images' => $row->vintage_images,
								'vintage_desc' => $row->vintage_desc,
								'active' => $row->active,

							);		
						}

						$this->load->view('admin/common/header', $header);
						$this->load->view('admin/common/left_menu', $menu_details);
						$this->load->view('admin/denim/male/edit', $data);
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

	public function female_list() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set Page Title
			$header['page_title'] = "Denium Female Products";
			$page = 1;		

			$denim_female = $this->Denim_model->getAllDenimFemale($page);

			// Create the data array to pass to view
			$menu_details['session'] = $this->session->userdata;

			$data['denim_female'] = $denim_female;
			$data['message'] = $this->session->flashdata('message');

			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $menu_details);
			$this->load->view('admin/denim/female/list', $data);
			$this->load->view('admin/common/footer');
		} else {
			redirect('admin/login');
		}
	}

	public function female_add() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set validation rules for view filters
			//$this->form_validation->set_rules('destination_name', "Name field is required", 'required');
			//$this->form_validation->set_rules('destination_state', $this->lang->line('signin_email'), 'required');

			$this->form_validation->set_error_delimiters('<p class="alert alert-danger"><a class="close" data-dismiss="alert" href="#">&times;</a>', '</p>');

		if(!empty($this->input->post('champions_products_title1'))) {

			//$data = array();
        if(!empty($_FILES['userFiles']['name'])){
            $filesCount = count($_FILES['userFiles']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

                $uploadPath = 'upload/denim/female/anatomy';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('userFile')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                }
            }
        }

        if(!empty($_FILES['championsProductsImages']['name'])){
            $filesCount1 = count($_FILES['championsProductsImages']['name']);
            for($j = 0; $j < $filesCount1; $j++){

                $_FILES['championsProductsImage']['name'] = $_FILES['championsProductsImages']['name'][$j];
                $_FILES['championsProductsImage']['type'] = $_FILES['championsProductsImages']['type'][$j];
                $_FILES['championsProductsImage']['tmp_name'] = $_FILES['championsProductsImages']['tmp_name'][$j];
                $_FILES['championsProductsImage']['error'] = $_FILES['championsProductsImages']['error'][$j];
                $_FILES['championsProductsImage']['size'] = $_FILES['championsProductsImages']['size'][$j];

                $uploadPath = 'upload/denim/female/champion_products';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('championsProductsImage')){
                    $fileData = $this->upload->data();
                    $uploadData[$j]['file_name'] = $fileData['file_name'];
                    $uploadData[$j]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$j]['modified'] = date("Y-m-d H:i:s");
                }
            }
        }


        if(!empty($_FILES['trendsImages']['name'])){
            $filesCount2 = count($_FILES['trendsImages']['name']);
            for($i = 0; $i < $filesCount2; $i++){
            	
                $_FILES['trendsImage']['name'] = $_FILES['trendsImages']['name'][$i];
                $_FILES['trendsImage']['type'] = $_FILES['trendsImages']['type'][$i];
                $_FILES['trendsImage']['tmp_name'] = $_FILES['trendsImages']['tmp_name'][$i];
                $_FILES['trendsImage']['error'] = $_FILES['trendsImages']['error'][$i];
                $_FILES['trendsImage']['size'] = $_FILES['trendsImages']['size'][$i];

                $uploadPath = 'upload/denim/female/trend_images';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('trendsImage')){
                	
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                }
            }
        }


        if(!empty($_FILES['vintageImage']['name'])){
            $filesCount3 = count($_FILES['vintageImage']['name']);
            for($i = 0; $i < $filesCount3; $i++){
                $_FILES['vintageImages']['name'] = $_FILES['vintageImage']['name'][$i];
                $_FILES['vintageImages']['type'] = $_FILES['vintageImage']['type'][$i];
                $_FILES['vintageImages']['tmp_name'] = $_FILES['vintageImage']['tmp_name'][$i];
                $_FILES['vintageImages']['error'] = $_FILES['vintageImage']['error'][$i];
                $_FILES['vintageImages']['size'] = $_FILES['vintageImage']['size'][$i];

                $uploadPath = 'upload/denim/female/vintage_images';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('vintageImages')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                }
            }
        }
        if(!empty($_FILES['vintageVideo']['name'])){
           

                $uploadPath = 'upload/denim/female/vintage_video';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('vintageVideo')){
                    $fileData = $this->upload->data();
                }
            }

        $image_array = implode(",",$_FILES['userFiles']['name']);
       	$championsproducts_array = implode(",",$_FILES['championsProductsImages']['name']);
       	$trendsImages_array = implode(",",$_FILES['trendsImages']['name']);
       	$vintageImage_array = implode(",",$_FILES['vintageImage']['name']);
		
				$time=time();
				$created = date ("Y-m-d H:i:s", $time);				

				if(!empty($this->input->post('champions_products_title1'))) {
						$addData = array(
							'anatomy' => $image_array,
							'champion_products_title' => $this->input->post('champions_products_title1'),
							'champion_products_desc' => $this->input->post('champions_products_desc'),
							'champion_products_images' => $championsproducts_array,
							'trends_launch_date' => $this->input->post('trends_launch_date'),
							'trends_title' => $this->input->post('trends_title'),
							'trends_images' => $trendsImages_array,
							'vintage_images' => $vintageImage_array,
							'vintage_video' => $_FILES['vintageVideo']['name'],
							'vintage_title' => $this->input->post('vintage_title'),
							'vintage_desc' => $this->input->post('vintage_description'),
							'active' => ($this->input->post('active') == "on") ? 1 : 0,
							'modify' => date("Y-m-d H:i:s")
						);
					} else {
						$addData = [];
					}


					$id = $this->Denim_model->addDenimFemale($addData);

					$this->session->set_flashdata('message', 'Denim has been added');

					redirect('admin/denim/female_list');				
				
			} else {
				// Create the data array to pass to view
				$menu_details['session'] = $this->session->userdata;

				// Set Page Title
				$header['page_title'] = "Add User";

				$data['roles'] = $this->Denim_model->getRoles();

				$this->load->view('admin/common/header', $header);
				$this->load->view('admin/common/left_menu', $menu_details);
				$this->load->view('admin/denim/female/add', $data);
				$this->load->view('admin/common/footer');
			}
		} else {
			redirect('admin/login');
		}
	}	

	public function female_edit() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {

			$did = trim($this->uri->segment(4));

			// $this->form_validation->set_rules('destination_name', "Name field is required", 'required');
			// $this->form_validation->set_rules('destination_state', $this->lang->line('signin_email'), 'required');

			// $this->form_validation->set_error_delimiters('<p class="alert alert-dang	er"><a class="close" data-dismiss="alert" href="#">&times;</a>', '</p>');



			if(!empty($this->input->post('champions_products_title1'))) {

			if(!empty($_FILES['championsProductsImages']['name'])){
            $filesCount1 = count($_FILES['championsProductsImages']['name']);
            for($j = 0; $j < $filesCount1; $j++){

                $_FILES['championsProductsImage']['name'] = $_FILES['championsProductsImages']['name'][$j];
                $_FILES['championsProductsImage']['type'] = $_FILES['championsProductsImages']['type'][$j];
                $_FILES['championsProductsImage']['tmp_name'] = $_FILES['championsProductsImages']['tmp_name'][$j];
                $_FILES['championsProductsImage']['error'] = $_FILES['championsProductsImages']['error'][$j];
                $_FILES['championsProductsImage']['size'] = $_FILES['championsProductsImages']['size'][$j];

                $uploadPath = 'upload/denim/female/champion_products';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('championsProductsImage')){
                    $fileData = $this->upload->data();
                    $uploadData[$j]['file_name'] = $fileData['file_name'];
                    $uploadData[$j]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$j]['modified'] = date("Y-m-d H:i:s");
                }
            }
        }

        if(!empty($_FILES['trendsImages']['name'])){
            $filesCount2 = count($_FILES['trendsImages']['name']);
            for($i = 0; $i < $filesCount2; $i++){
            	
                $_FILES['trendsImage']['name'] = $_FILES['trendsImages']['name'][$i];
                $_FILES['trendsImage']['type'] = $_FILES['trendsImages']['type'][$i];
                $_FILES['trendsImage']['tmp_name'] = $_FILES['trendsImages']['tmp_name'][$i];
                $_FILES['trendsImage']['error'] = $_FILES['trendsImages']['error'][$i];
                $_FILES['trendsImage']['size'] = $_FILES['trendsImages']['size'][$i];

                $uploadPath = 'upload/denim/female/trend_images';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('trendsImage')){
                	
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                }
            }
        }
        if(!empty($_FILES['vintageImage']['name'])){
            $filesCount3 = count($_FILES['vintageImage']['name']);
            for($i = 0; $i < $filesCount3; $i++){
                $_FILES['vintageImages']['name'] = $_FILES['vintageImage']['name'][$i];
                $_FILES['vintageImages']['type'] = $_FILES['vintageImage']['type'][$i];
                $_FILES['vintageImages']['tmp_name'] = $_FILES['vintageImage']['tmp_name'][$i];
                $_FILES['vintageImages']['error'] = $_FILES['vintageImage']['error'][$i];
                $_FILES['vintageImages']['size'] = $_FILES['vintageImage']['size'][$i];

                $uploadPath = 'upload/denim/female/vintage_images';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('vintageImages')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                }
            }
        }


        $championsproducts_array = implode(",",$_FILES['championsProductsImages']['name']);
        $trendsImages_array = implode(",",$_FILES['trendsImages']['name']);
        $vintageImage_array = implode(",",$_FILES['vintageImage']['name']);
        
				$data = array(
						'Id' => $did,
						//'anatomy' => json_encode($image_array, true),
						'champion_products_title' => $this->input->post('champions_products_title1'),
						'champion_products_desc' => $this->input->post('champions_products_desc'),
						'champion_products_images' => $championsproducts_array,
						'trends_launch_date' => $this->input->post('trends_launch_date'),
						'trends_title' => $this->input->post('trends_title'),
						'trends_images' => $trendsImages_array,
						'vintage_images' => $vintageImage_array,
						//'vintage_video' => $_FILES['vintageVideo']['name'],
						'vintage_title' => $this->input->post('vintage_title'),
						'vintage_desc' => $this->input->post('vintage_description'),
						'active' => ($this->input->post('active') == "on") ? 1 : 0,
						'modify' => date("Y-m-d H:i:s")
				);

				$this->Denim_model->updateDenimFemale($data);

				$this->session->set_flashdata('message', 'User has been updated');

				redirect('admin/denim/female_list');

			} else {
				if(is_numeric($did)) {
				
					$checkDestination = $this->Denim_model->checkDenimFemale($did);
					if($checkDestination->num_rows() == 1) {
						// Create the data array to pass to view
						$menu_details['session'] = $this->session->userdata;

						// Set Page Title
						$header['page_title'] = "Edit Denim Products";				

						foreach ($checkDestination->result() as $row) {
							$data['denim_female'] = array(
								'id' => $row->Id,
								'champion_products_title' => $row->champion_products_title,
								'champion_products_desc' => $row->champion_products_desc,
								'champion_products_images' => $row->champion_products_images,
								'trends_launch_date' => $row->trends_launch_date,
								'trends_title' => $row->trends_title,
								'trends_images' => $row->trends_images,
								'vintage_title' => $row->vintage_title,
								'vintage_images' => $row->vintage_images,
								'vintage_desc' => $row->vintage_desc,
								'active' => $row->active,

							);		
						}

						$this->load->view('admin/common/header', $header);
						$this->load->view('admin/common/left_menu', $menu_details);
						$this->load->view('admin/denim/female/edit', $data);
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

	public function remove_maleimage()
	{	

		switch ($this->input->post('action'))
        {
            case "champion-image":

    		$data = array(
			'id' => $this->input->post('id'),
			'action' => $this->input->post('action'),
			'image' => $this->input->post('image')
			);
			$path = 'upload/denim/male/champion_products/'.$this->input->post('image');
			$this->Denim_model->removeMaleImage($data);
			unlink($path);

            break;

            case "trends_img":

    		$data = array(
			'id' => $this->input->post('id'),
			'action' => $this->input->post('action'),
			'image' => $this->input->post('image')
			);
			$path = 'upload/denim/male/trend_images/'.$this->input->post('image');
			$this->Denim_model->removeMaleImage($data);
			unlink($path);

            break;

            case "vintage_img":

    		$data = array(
			'id' => $this->input->post('id'),
			'action' => $this->input->post('action'),
			'image' => $this->input->post('image')
			);
			$path = 'upload/denim/male/vintage_images/'.$this->input->post('image');
			$this->Denim_model->removeMaleImage($data);
			unlink($path);

            break;

            default:
            echo "Erro";
        }
		
	}

	public function remove_femaleimage()
	{	

		switch ($this->input->post('action'))
        {
            case "champion-image":

    		$data = array(
			'id' => $this->input->post('id'),
			'action' => $this->input->post('action'),
			'image' => $this->input->post('image')
			);
			$path = 'upload/denim/female/champion_products/'.$this->input->post('image');
			$this->Denim_model->removeFemaleImage($data);
			unlink($path);

            break;

            case "trends_img":

    		$data = array(
			'id' => $this->input->post('id'),
			'action' => $this->input->post('action'),
			'image' => $this->input->post('image')
			);
			$path = 'upload/denim/female/trend_images/'.$this->input->post('image');
			$this->Denim_model->removeFemaleImage($data);
			unlink($path);

            break;

            case "vintage_img":

    		$data = array(
			'id' => $this->input->post('id'),
			'action' => $this->input->post('action'),
			'image' => $this->input->post('image')
			);
			$path = 'upload/denim/female/vintage_images/'.$this->input->post('image');
			$this->Denim_model->removeFemaleImage($data);
			unlink($path);

            break;

            default:
            echo "Erro";
        }
		
	}


}
