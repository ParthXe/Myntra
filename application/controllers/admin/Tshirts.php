<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tshirts extends MY_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		$this->load->model('Tshirts_model');
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
			$header['page_title'] = "Tshirts Male Products";
			$page = 1;		

			$tshirts_male = $this->Tshirts_model->getAllTshirtMale($page);

			// Create the data array to pass to view
			$menu_details['session'] = $this->session->userdata;

			$data['tshirts_male'] = $tshirts_male;
			$data['message'] = $this->session->flashdata('message');

			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $menu_details);
			$this->load->view('admin/tshirts/male/list', $data);
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
              //  $_FILES['userFiles']['name'][$i] = $this->generateRandomNumber().$_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

                $uploadPath = 'myntra/section_products/pro_tshirts/anatomy_3d_models';
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
              //  $_FILES['championsProductsImages']['name'][$j] = $this->generateRandomNumber().$_FILES['championsProductsImages']['name'][$j];
                $_FILES['championsProductsImage']['name'] = $_FILES['championsProductsImages']['name'][$j];
                $_FILES['championsProductsImage']['type'] = $_FILES['championsProductsImages']['type'][$j];
                $_FILES['championsProductsImage']['tmp_name'] = $_FILES['championsProductsImages']['tmp_name'][$j];
                $_FILES['championsProductsImage']['error'] = $_FILES['championsProductsImages']['error'][$j];
                $_FILES['championsProductsImage']['size'] = $_FILES['championsProductsImages']['size'][$j];

                $uploadPath = 'myntra/section_products/pro_tshirts/champion_product_images';
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
              //  $_FILES['trendsImages']['name'][$i] = $this->generateRandomNumber().$_FILES['trendsImages']['name'][$i];
                $_FILES['trendsImage']['name'] = $_FILES['trendsImages']['name'][$i];
                $_FILES['trendsImage']['type'] = $_FILES['trendsImages']['type'][$i];
                $_FILES['trendsImage']['tmp_name'] = $_FILES['trendsImages']['tmp_name'][$i];
                $_FILES['trendsImage']['error'] = $_FILES['trendsImages']['error'][$i];
                $_FILES['trendsImage']['size'] = $_FILES['trendsImages']['size'][$i];

                $uploadPath = 'myntra/section_products/pro_tshirts/trends_images';
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
               // $_FILES['vintageImage']['name'][$i] = $this->generateRandomNumber().$_FILES['vintageImage']['name'][$i];
                $_FILES['vintageImages']['name'] = $_FILES['vintageImage']['name'][$i];
                $_FILES['vintageImages']['type'] = $_FILES['vintageImage']['type'][$i];
                $_FILES['vintageImages']['tmp_name'] = $_FILES['vintageImage']['tmp_name'][$i];
                $_FILES['vintageImages']['error'] = $_FILES['vintageImage']['error'][$i];
                $_FILES['vintageImages']['size'] = $_FILES['vintageImage']['size'][$i];

                $uploadPath = 'myntra/section_products/pro_tshirts/process_video_and_tumbnails';
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
            $filesCount4 = count($_FILES['vintageVideo']['name']);
            for($i = 0; $i < $filesCount4; $i++){
              //  $_FILES['vintageImage']['name'][$i] = $this->generateRandomNumber().$_FILES['vintageImage']['name'][$i];
                $_FILES['vintageVideos']['name'] = $_FILES['vintageVideo']['name'][$i];
                $_FILES['vintageVideos']['type'] = $_FILES['vintageVideo']['type'][$i];
                $_FILES['vintageVideos']['tmp_name'] = $_FILES['vintageVideo']['tmp_name'][$i];
                $_FILES['vintageVideos']['error'] = $_FILES['vintageVideo']['error'][$i];
                $_FILES['vintageVideos']['size'] = $_FILES['vintageVideo']['size'][$i];

                $uploadPath = 'myntra/section_products/pro_tshirts/process_video_and_tumbnails';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'mp4';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('vintageVideos')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                }
            }
            }

        $image_array = implode(",",$_FILES['userFiles']['name']);
       	$championsproducts_array = implode(",",$_FILES['championsProductsImages']['name']);
       	$trendsImages_array = implode(",",$_FILES['trendsImages']['name']);
       	$vintageImage_array = implode(",",$_FILES['vintageImage']['name']);
		$vintageVideo_array = implode(",",$_FILES['vintageVideo']['name']);
				$time=time();
				$created = date ("Y-m-d H:i:s", $time);				

				if(!empty($this->input->post('champions_products_title'))) {
						$addData = array(
							'anatomy' => $image_array,
							'champion_products_title' => $this->input->post('champions_products_title'),
							'champion_products_desc' => $this->input->post('champions_products_desc'),
							'champion_products_images' => $championsproducts_array,
							'trends_launch_date' => $this->input->post('trends_launch_date'),
							'trends_title' => $this->input->post('trends_title'),
							'trends_images' => $trendsImages_array,
							'vintage_images' => $vintageImage_array,
							'vintage_video' => $vintageVideo_array,
							'vintage_title' => $this->input->post('vintage_title'),
							'vintage_desc' => $this->input->post('vintage_description'),
							'active' => ($this->input->post('active') == "on") ? 1 : 0,
							'modify' => date("Y-m-d H:i:s")
						);
					} else {
						$addData = [];
					}

					$id = $this->Tshirts_model->addTshirtMale($addData);
				//	echo $id;
					$this->session->set_flashdata('message', 'Shirt has been added');

					redirect('admin/tshirts');				
				
			} else {
				// Create the data array to pass to view
				$menu_details['session'] = $this->session->userdata;

				// Set Page Title
				$header['page_title'] = "Add User";

				$data['roles'] = $this->Tshirts_model->getRoles();

				$this->load->view('admin/common/header', $header);
				$this->load->view('admin/common/left_menu', $menu_details);
				$this->load->view('admin/tshirts/male/add', $data);
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
                if(empty($_FILES['championsProductsImages']['name'][$j]))
                {
                    continue;
                }
                //$_FILES['championsProductsImages']['name'][$j] = $this->generateRandomNumber().$_FILES['championsProductsImages']['name'][$j];
                $_FILES['championsProductsImage']['name'] = $_FILES['championsProductsImages']['name'][$j];
                $_FILES['championsProductsImage']['type'] = $_FILES['championsProductsImages']['type'][$j];
                $_FILES['championsProductsImage']['tmp_name'] = $_FILES['championsProductsImages']['tmp_name'][$j];
                $_FILES['championsProductsImage']['error'] = $_FILES['championsProductsImages']['error'][$j];
                $_FILES['championsProductsImage']['size'] = $_FILES['championsProductsImages']['size'][$j];

                $uploadPath = 'myntra/section_products/pro_tshirts/champion_product_images';
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
                if(empty($_FILES['trendsImages']['name'][$i]))
                {
                    continue;
                }
               // $_FILES['trendsImages']['name'][$i] = $this->generateRandomNumber().$_FILES['trendsImages']['name'][$i];
                $_FILES['trendsImage']['name'] = $_FILES['trendsImages']['name'][$i];
                $_FILES['trendsImage']['type'] = $_FILES['trendsImages']['type'][$i];
                $_FILES['trendsImage']['tmp_name'] = $_FILES['trendsImages']['tmp_name'][$i];
                $_FILES['trendsImage']['error'] = $_FILES['trendsImages']['error'][$i];
                $_FILES['trendsImage']['size'] = $_FILES['trendsImages']['size'][$i];

                $uploadPath = 'myntra/section_products/pro_tshirts/trends_images';
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
                if(empty($_FILES['vintageImage']['name'][$i]))
                {
                    continue;
                } 
               // $_FILES['vintageImage']['name'][$i] = $this->generateRandomNumber().$_FILES['vintageImage']['name'][$i];
                $_FILES['vintageImages']['name'] = $_FILES['vintageImage']['name'][$i];
                $_FILES['vintageImages']['type'] = $_FILES['vintageImage']['type'][$i];
                $_FILES['vintageImages']['tmp_name'] = $_FILES['vintageImage']['tmp_name'][$i];
                $_FILES['vintageImages']['error'] = $_FILES['vintageImage']['error'][$i];
                $_FILES['vintageImages']['size'] = $_FILES['vintageImage']['size'][$i];

                $uploadPath = 'myntra/section_products/pro_tshirts/process_video_and_tumbnails';
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
           
            $filesCount4 = count($_FILES['vintageVideo']['name']);
            for($i = 0; $i < $filesCount4; $i++){
              //  $_FILES['vintageImage']['name'][$i] = $this->generateRandomNumber().$_FILES['vintageImage']['name'][$i];
                $_FILES['vintageVideos']['name'] = $_FILES['vintageVideo']['name'][$i];
                $_FILES['vintageVideos']['type'] = $_FILES['vintageVideo']['type'][$i];
                $_FILES['vintageVideos']['tmp_name'] = $_FILES['vintageVideo']['tmp_name'][$i];
                $_FILES['vintageVideos']['error'] = $_FILES['vintageVideo']['error'][$i];
                $_FILES['vintageVideos']['size'] = $_FILES['vintageVideo']['size'][$i];

                $uploadPath = 'myntra/section_products/pro_tshirts/process_video_and_tumbnails';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'mp4';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('vintageVideos')){
                    $fileData = $this->upload->data();
                    $uploadData[$i]['file_name'] = $fileData['file_name'];
                    $uploadData[$i]['created'] = date("Y-m-d H:i:s");
                    $uploadData[$i]['modified'] = date("Y-m-d H:i:s");
                }
            }
            }

        //$image_array = implode(",",$_FILES['userFiles']['name']);
       	$championsproducts_array = implode(",",$_FILES['championsProductsImages']['name']);
       	$trendsImages_array = implode(",",$_FILES['trendsImages']['name']);
       	$vintageImage_array = implode(",",$_FILES['vintageImage']['name']);
        $vintageVideo_array = implode(",",$_FILES['vintageVideo']['name']);
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
						'vintage_video' => $vintageVideo_array,
						'vintage_title' => $this->input->post('vintage_title'),
						'vintage_desc' => $this->input->post('vintage_description'),
						'active' => ($this->input->post('active') == "on") ? 1 : 0,
						'modify' => date("Y-m-d H:i:s")
				);

				$this->Tshirts_model->updateTshirtMale($data);

				$this->session->set_flashdata('message', 'T-shirt has been updated');

				redirect('admin/tshirts');

			} else {
				if(is_numeric($did)) {
				
					$checkTshirt = $this->Tshirts_model->checkTshirtMale($did);
					if($checkTshirt->num_rows() == 1) {
						// Create the data array to pass to view
						$menu_details['session'] = $this->session->userdata;

						// Set Page Title
						$header['page_title'] = "Edit T-shirts Products";				

						foreach ($checkTshirt->result() as $row) {
							$data['tshirts_male'] = array(
								'id' => $row->Id,
								'champion_products_title' => $row->champion_products_title,
								'champion_products_desc' => $row->champion_products_desc,
								'champion_products_images' => $row->champion_products_images,
								'trends_launch_date' => $row->trends_launch_date,
								'trends_title' => $row->trends_title,
								'trends_images' => $row->trends_images,
								'vintage_images' => $row->vintage_images,
                                'vintage_video' => $row->vintage_video,
								'vintage_title' => $row->vintage_title,
								'vintage_desc' => $row->vintage_desc,
								'active' => $row->active,

							);		
						}

						$this->load->view('admin/common/header', $header);
						$this->load->view('admin/common/left_menu', $menu_details);
						$this->load->view('admin/tshirts/male/edit', $data);
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
			$header['page_title'] = "T-shirt Female Products";
			$page = 1;		

			$tshirts_female = $this->Tshirts_model->getAllTshirtFemale($page);

			// Create the data array to pass to view
			$menu_details['session'] = $this->session->userdata;

			$data['tshirts_female'] = $tshirts_female;
			$data['message'] = $this->session->flashdata('message');

			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $menu_details);
			$this->load->view('admin/tshirts/female/list', $data);
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
                if(empty($_FILES['userFiles']['name'][$j]))
                {
                    continue;
                }
                $_FILES['userFiles']['name'][$i] = $this->generateRandomNumber().$_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

                $uploadPath = 'upload/t-shirts/female/anatomy';
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
                if(empty($_FILES['championsProductsImages']['name'][$j]))
                {
                    continue;
                } 
                $_FILES['championsProductsImages']['name'][$j] = $this->generateRandomNumber().$_FILES['championsProductsImages']['name'][$j];
                $_FILES['championsProductsImage']['name'] = $_FILES['championsProductsImages']['name'][$j];
                $_FILES['championsProductsImage']['type'] = $_FILES['championsProductsImages']['type'][$j];
                $_FILES['championsProductsImage']['tmp_name'] = $_FILES['championsProductsImages']['tmp_name'][$j];
                $_FILES['championsProductsImage']['error'] = $_FILES['championsProductsImages']['error'][$j];
                $_FILES['championsProductsImage']['size'] = $_FILES['championsProductsImages']['size'][$j];

                $uploadPath = 'upload/t-shirts/female/champion_products';
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
                if(empty($_FILES['trendsImages']['name'][$j]))
                {
                    continue;
                } 
                $_FILES['trendsImages']['name'][$i] = $this->generateRandomNumber().$_FILES['trendsImages']['name'][$i];
                $_FILES['trendsImage']['name'] = $_FILES['trendsImages']['name'][$i];
                $_FILES['trendsImage']['type'] = $_FILES['trendsImages']['type'][$i];
                $_FILES['trendsImage']['tmp_name'] = $_FILES['trendsImages']['tmp_name'][$i];
                $_FILES['trendsImage']['error'] = $_FILES['trendsImages']['error'][$i];
                $_FILES['trendsImage']['size'] = $_FILES['trendsImages']['size'][$i];

                $uploadPath = 'upload/t-shirts/female/trend_images';
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
                if(empty($_FILES['vintageImage']['name'][$j]))
                {
                    continue;
                } 
                $_FILES['vintageImage']['name'][$i] = $this->generateRandomNumber().$_FILES['vintageImage']['name'][$i];
                $_FILES['vintageImages']['name'] = $_FILES['vintageImage']['name'][$i];
                $_FILES['vintageImages']['type'] = $_FILES['vintageImage']['type'][$i];
                $_FILES['vintageImages']['tmp_name'] = $_FILES['vintageImage']['tmp_name'][$i];
                $_FILES['vintageImages']['error'] = $_FILES['vintageImage']['error'][$i];
                $_FILES['vintageImages']['size'] = $_FILES['vintageImage']['size'][$i];

                $uploadPath = 'upload/t-shirts/female/vintage_images';
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
           

                $uploadPath = 'upload/t-shirts/female/vintage_video';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'mp4';
                
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


					$id = $this->Tshirts_model->addTshirtFemale($addData);

					$this->session->set_flashdata('message', 'Shirt has been added');

					redirect('admin/tshirts/female_list');				
				
			} else {
				// Create the data array to pass to view
				$menu_details['session'] = $this->session->userdata;

				// Set Page Title
				$header['page_title'] = "Add T-shirts";

				$data['roles'] = $this->Tshirts_model->getRoles();

				$this->load->view('admin/common/header', $header);
				$this->load->view('admin/common/left_menu', $menu_details);
				$this->load->view('admin/tshirts/female/add', $data);
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

			// $this->form_validation->set_error_delimiters('<p class="alert alert-danger"><a class="close" data-dismiss="alert" href="#">&times;</a>', '</p>');

			if(!empty($this->input->post('champions_products_title1'))) {

				if(!empty($_FILES['championsProductsImages']['name'])){
            $filesCount1 = count($_FILES['championsProductsImages']['name']);
            for($j = 0; $j < $filesCount1; $j++){
                if(empty($_FILES['championsProductsImages']['name'][$j]))
                {
                    continue;
                } 
                $_FILES['championsProductsImages']['name'][$j] = $this->generateRandomNumber().$_FILES['championsProductsImages']['name'][$j];
                $_FILES['championsProductsImage']['name'] = $_FILES['championsProductsImages']['name'][$j];
                $_FILES['championsProductsImage']['type'] = $_FILES['championsProductsImages']['type'][$j];
                $_FILES['championsProductsImage']['tmp_name'] = $_FILES['championsProductsImages']['tmp_name'][$j];
                $_FILES['championsProductsImage']['error'] = $_FILES['championsProductsImages']['error'][$j];
                $_FILES['championsProductsImage']['size'] = $_FILES['championsProductsImages']['size'][$j];

                $uploadPath = 'upload/t-shirts/female/champion_products';
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
                if(empty($_FILES['trendsImages']['name'][$i]))
                {
                    continue;
                }  
                $_FILES['trendsImages']['name'][$i] = $this->generateRandomNumber().$_FILES['trendsImages']['name'][$i];
                $_FILES['trendsImage']['name'] = $_FILES['trendsImages']['name'][$i];
                $_FILES['trendsImage']['type'] = $_FILES['trendsImages']['type'][$i];
                $_FILES['trendsImage']['tmp_name'] = $_FILES['trendsImages']['tmp_name'][$i];
                $_FILES['trendsImage']['error'] = $_FILES['trendsImages']['error'][$i];
                $_FILES['trendsImage']['size'] = $_FILES['trendsImages']['size'][$i];

                $uploadPath = 'upload/t-shirts/female/trend_images';
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
                if(empty($_FILES['vintageImage']['name'][$i]))
                {
                    continue;
                } 
                $_FILES['vintageImage']['name'][$i] = $this->generateRandomNumber().$_FILES['vintageImage']['name'][$i];
                $_FILES['vintageImages']['name'] = $_FILES['vintageImage']['name'][$i];
                $_FILES['vintageImages']['type'] = $_FILES['vintageImage']['type'][$i];
                $_FILES['vintageImages']['tmp_name'] = $_FILES['vintageImage']['tmp_name'][$i];
                $_FILES['vintageImages']['error'] = $_FILES['vintageImage']['error'][$i];
                $_FILES['vintageImages']['size'] = $_FILES['vintageImage']['size'][$i];

                $uploadPath = 'upload/t-shirts/female/vintage_images';
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
           

                $uploadPath = 'upload/t-shirts/female/vintage_video';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'mp4';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('vintageVideo')){
                    $fileData = $this->upload->data();
                }
            }

        //$image_array = implode(",",$_FILES['userFiles']['name']);
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
						'vintage_video' => $_FILES['vintageVideo']['name'],
						'vintage_title' => $this->input->post('vintage_title'),
						'vintage_desc' => $this->input->post('vintage_description'),
						'active' => ($this->input->post('active') == "on") ? 1 : 0,
						'modify' => date("Y-m-d H:i:s")
				);

				$this->Tshirts_model->updateTshirtFemale($data);

				$this->session->set_flashdata('message', 'Shirt has been updated');

				redirect('admin/tshirts/female_list');

			} else {
				if(is_numeric($did)) {
				
					$checkTshirtFemale = $this->Tshirts_model->checkTshirtFemale($did);
					if($checkTshirtFemale->num_rows() == 1) {
						// Create the data array to pass to view
						$menu_details['session'] = $this->session->userdata;

						// Set Page Title
						$header['page_title'] = "Edit Shirts Products";				

						foreach ($checkTshirtFemale->result() as $row) {
							$data['tshirts_female'] = array(
								'id' => $row->Id,
								'champion_products_title' => $row->champion_products_title,
								'champion_products_desc' => $row->champion_products_desc,
								'champion_products_images' => $row->champion_products_images,
								'trends_launch_date' => $row->trends_launch_date,
								'trends_title' => $row->trends_title,
								'trends_images' => $row->trends_images,
								'vintage_images' => $row->vintage_images,
                                'vintage_video' => $row->vintage_video,
								'vintage_title' => $row->vintage_title,
								'vintage_desc' => $row->vintage_desc,
								'active' => $row->active,

							);		
						}

						$this->load->view('admin/common/header', $header);
						$this->load->view('admin/common/left_menu', $menu_details);
						$this->load->view('admin/tshirts/female/edit', $data);
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
			$path = 'upload/t-shirts/male/champion_products/'.$this->input->post('image');
			$this->Tshirts_model->removeMaleImage($data);
			unlink($path);

            break;

            case "trends_img":

    		$data = array(
			'id' => $this->input->post('id'),
			'action' => $this->input->post('action'),
			'image' => $this->input->post('image')
			);
			$path = 'upload/t-shirts/male/trend_images/'.$this->input->post('image');
			$this->Tshirts_model->removeMaleImage($data);
			unlink($path);

            break;

            case "vintage_img":

    		$data = array(
			'id' => $this->input->post('id'),
			'action' => $this->input->post('action'),
			'image' => $this->input->post('image')
			);
			$path = 'upload/t-shirts/male/vintage_images/'.$this->input->post('image');
			$this->Tshirts_model->removeMaleImage($data);
			unlink($path);

            break;

            case "vintage_video":

            $data = array(
            'id' => $this->input->post('id'),
            'action' => $this->input->post('action'),
            'image' => $this->input->post('image')
            );
            $path = 'upload/t-shirts/male/vintage_video/'.$this->input->post('image');
            $this->Tshirts_model->removeMaleImage($data);
            unlink($path);

            break;

            default:
            echo "Error";
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
			$path = 'upload/t-shirts/female/champion_products/'.$this->input->post('image');
			$this->Tshirts_model->removeFemaleImage($data);
			unlink($path);

            break;

            case "trends_img":

    		$data = array(
			'id' => $this->input->post('id'),
			'action' => $this->input->post('action'),
			'image' => $this->input->post('image')
			);
			$path = 'upload/t-shirts/female/trend_images/'.$this->input->post('image');
			$this->Tshirts_model->removeFemaleImage($data);
			unlink($path);

            break;

            case "vintage_img":

    		$data = array(
			'id' => $this->input->post('id'),
			'action' => $this->input->post('action'),
			'image' => $this->input->post('image')
			);
			$path = 'upload/t-shirts/female/vintage_images/'.$this->input->post('image');
			$this->Tshirts_model->removeFemaleImage($data);
			unlink($path);

            break;

            case "vintage_video":

            $data = array(
            'id' => $this->input->post('id'),
            'action' => $this->input->post('action'),
            'image' => $this->input->post('image')
            );
            $path = 'upload/t-shirts/female/vintage_video/'.$this->input->post('image');
            $this->Tshirts_model->removeFemaleImage($data);
            unlink($path);

            break;

            default:
            echo "Error";
        }
		
	}

public function reorder() {
    if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
                // Set Page Title
                $header['page_title'] = "Reorder Images";
                $page = 1;      
                $did = trim($this->uri->segment(4));
                        $checkTshirt = $this->Tshirts_model->checkTshirtMale($did);
                        if($checkTshirt->num_rows() == 1) {
                            // Create the data array to pass to view
                            $menu_details['session'] = $this->session->userdata;

                            // Set Page Title
                            $header['page_title'] = "Edit Denim";             

                            foreach ($checkTshirt->result() as $row) {
                                $data['tshirt_male'] = array(
                                'id' => $row->Id,
                                'champion_products_title' => $row->champion_products_title,
                                'champion_products_images' => $row->champion_products_images,
                                );      
                            }


                $data['message'] = $this->session->flashdata('message');

                $this->load->view('admin/common/header', $header);
                $this->load->view('admin/common/left_menu', $menu_details);
                $this->load->view('admin/tshirts/male/reorder_champion', $data);
                //$this->load->view('admin/common/footer');
                } else {
                redirect('admin/login');
                }
            }
    }

    public function reorder_trend_images() {
    if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
                // Set Page Title
                $header['page_title'] = "Reorder Images";
                $page = 1;      
                $did = trim($this->uri->segment(4));
                        $checkTshirt = $this->Tshirts_model->checkTshirtMale($did);
                        if($checkTshirt->num_rows() == 1) {
                            // Create the data array to pass to view
                            $menu_details['session'] = $this->session->userdata;

                            // Set Page Title
                            $header['page_title'] = "Edit Tshirts";             

                            foreach ($checkTshirt->result() as $row) {
                                $data['tshirt_male'] = array(
                                'id' => $row->Id,
                                'champion_products_title' => $row->champion_products_title,
                                'champion_products_images' => $row->champion_products_images,
                                'trends_images' => $row->trends_images,                        
                                );      
                            }


                $data['message'] = $this->session->flashdata('message');

                $this->load->view('admin/common/header', $header);
                $this->load->view('admin/common/left_menu', $menu_details);
                $this->load->view('admin/tshirts/male/reorder_trends', $data);
                //$this->load->view('admin/common/footer');
                } else {
                redirect('admin/login');
                }
            }
    }

    public function reorder_images()
    {
        $data = array(
            'Id' => $this->input->post('testimonial_id'));

        $update_order = $this->Tshirts_model->checkTshirtMale($data['Id']);
        $images = $update_order->result()[0]->champion_products_images;
        $final = explode(",", $images);
        $list_order = $this->input->post('list_order');
        $list_arr = explode(',' , $list_order);
        $temp_arr = array();
        for($nn=0;$nn<count($final);$nn++){
            $temp_arr[] = $final[$list_arr[$nn]];
        }
        $imagePathNew = implode(",",$temp_arr); 
        $data['champion_products_images'] = $imagePathNew;
        $update_order = $this->Tshirts_model->update_order($data);
    }

    public function reorder_trends()
    {
        $data = array(
            'Id' => $this->input->post('testimonial_id')
            );

        $update_order =  $this->Tshirts_model->checkTshirtMale($data['Id']);
        $images = $update_order->result()[0]->trends_images;
        $final = explode(",", $images);
        $list_order = $this->input->post('list_order');
        $list_arr = explode(',' , $list_order);
        $temp_arr = array();
        for($nn=0;$nn<count($final);$nn++){
            $temp_arr[] = $final[$list_arr[$nn]];
        }
        $imagePathNew = implode(",",$temp_arr); 
        $data['trends_images'] = $imagePathNew;
        $update_order = $this->Tshirts_model->update_order_trends($data);
    }

}
