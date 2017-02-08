<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destination extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		$this->load->model('Destination_model');
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
			$header['page_title'] = "Destination List";
			$page = 1;		

			$destination = $this->Destination_model->getAllDestination($page);

			// Create the data array to pass to view
			$menu_details['session'] = $this->session->userdata;

			$data['destinations'] = $destination;
			$data['message'] = $this->session->flashdata('message');

			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $menu_details);
			$this->load->view('admin/destination/list', $data);
			$this->load->view('admin/common/footer');
		} else {
			redirect('admin/login');
		}
	}

	public function add() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set validation rules for view filters
			$this->form_validation->set_rules('destination_name', "Name field is required", 'required');
			$this->form_validation->set_rules('destination_state', $this->lang->line('signin_email'), 'required');

			$this->form_validation->set_error_delimiters('<p class="alert alert-danger"><a class="close" data-dismiss="alert" href="#">&times;</a>', '</p>');

		if($this->form_validation->run() == TRUE) {

			//$data = array();
        if(!empty($_FILES['userFiles']['name'])){
            $filesCount = count($_FILES['userFiles']['name']);
            for($i = 0; $i < $filesCount; $i++){
                $_FILES['userFile']['name'] = $_FILES['userFiles']['name'][$i];
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

                $uploadPath = 'upload/destination/destination_images';
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

        if(!empty($_FILES['destination_bg_img']['name'])){
           
                $uploadPath = 'upload/destination/destination_bg';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('destination_bg_img')){
                    $fileData = $this->upload->data();
                }
            }

        if(!empty($_FILES['destination_matching_male']['name'])){
           
                $uploadPath1 = 'upload/destination/male';
                $config['upload_path'] = $uploadPath1;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('destination_matching_male')){
                    $fileData = $this->upload->data();
                }
            } 

          if(!empty($_FILES['destination_matching_female']['name'])){
           
                $uploadPath2 = 'upload/destination/female';
                $config['upload_path'] = $uploadPath2;
                $config['allowed_types'] = 'gif|jpg|png';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('destination_matching_female')){
                    $fileData = $this->upload->data();
                }
            }    
        
        $image_array[] = implode(",",$_FILES['userFiles']['name']);
       
       
		
				$time=time();
				$created = date ("Y-m-d H:i:s", $time);				

				if(!empty($this->input->post('destination_name'))) {
						$addData = array(
							'destination_name' => $this->input->post('destination_name'),
							'destination_state' => $this->input->post('destination_state'),
							'destination_desc' => $this->input->post('destination_desc'),
							'why_go_there' => $this->input->post('why_go'),
							'how_far' => $this->input->post('how_far'),
							'best_time_visit' => $this->input->post('best_time_visit'),
							'destination_bg_image' => $_FILES['destination_bg_img']['name'],
							'destination_images' => json_encode($image_array, true),
							'destination_matching_male_img' => $_FILES['destination_matching_male']['name'],
							'destination_matching_male_info' => $this->input->post('destination_info_male'),
							'destination_matching_female_img' => $_FILES['destination_matching_female']['name'],
							'destination_matching_female_info' => $this->input->post('destination_info_female'),
							'active' => ($this->input->post('active') == "on") ? 1 : 0,
							'created' => $created,
						);
					} else {
						$addData = [];
					}
					
					$id = $this->Destination_model->addDestination($addData);

					$this->session->set_flashdata('message', 'Destination has been added');

					redirect('admin/destination');				
				
			} else {
				// Create the data array to pass to view
				$menu_details['session'] = $this->session->userdata;

				// Set Page Title
				$header['page_title'] = "Add User";

				$data['roles'] = $this->Destination_model->getRoles();

				$this->load->view('admin/common/header', $header);
				$this->load->view('admin/common/left_menu', $menu_details);
				$this->load->view('admin/destination/add', $data);
				$this->load->view('admin/common/footer');
			}
		} else {
			redirect('admin/login');
		}
	}	

	public function edit() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {

			$did = trim($this->uri->segment(4));

			$this->form_validation->set_rules('destination_name', "Name field is required", 'required');
			$this->form_validation->set_rules('destination_state', $this->lang->line('signin_email'), 'required');

			$this->form_validation->set_error_delimiters('<p class="alert alert-danger"><a class="close" data-dismiss="alert" href="#">&times;</a>', '</p>');

			if($this->form_validation->run() == TRUE) {
				$data = array(
					'Id' => $did,
					'destination_name' => $this->input->post('destination_name'),
					'destination_state' => $this->input->post('destination_state'),
					'destination_desc' => $this->input->post('destination_desc'),
					'why_go_there' => $this->input->post('why_go'),
					'how_far' => $this->input->post('how_far'),
					'best_time_visit' => $this->input->post('best_time_visit'),
					//'destination_bg_image' => $_FILES['destination_bg_img']['name'],
					//'destination_images' => json_encode($image_array, true),
					//'destination_matching_male_img' => $_FILES['destination_matching_male']['name'],
					'destination_matching_male_info' => $this->input->post('destination_info_male'),
					//'destination_matching_female_img' => $_FILES['destination_matching_female']['name'],
					'destination_matching_female_info' => $this->input->post('destination_info_female'),
					'active' => ($this->input->post('active') == "on") ? 1 : 0,
				);

				$this->Destination_model->updateDestination($data);

				$this->session->set_flashdata('message', 'User has been updated');

				redirect('admin/destination');

			} else {
				if(is_numeric($did)) {
				
					$checkDestination = $this->Destination_model->checkDestination($did);
					if($checkDestination->num_rows() == 1) {
						// Create the data array to pass to view
						$menu_details['session'] = $this->session->userdata;

						// Set Page Title
						$header['page_title'] = "Edit Destination";				

						foreach ($checkDestination->result() as $row) {
							$data['destination'] = array(
								'id' => $row->Id,
								'destination_name' => $row->destination_name,
								'destination_state' => $row->destination_state,
								'destination_desc' => $row->destination_desc,
								'why_go_there' => $row->why_go_there,
								'how_far' => $row->how_far,
								'best_time_visit' => $row->best_time_visit,
								'destination_matching_male_info' => $row->destination_matching_male_info,
								'destination_matching_female_info' => $row->destination_matching_female_info,
								'active' => $row->active,

							);		
						}

						$this->load->view('admin/common/header', $header);
						$this->load->view('admin/common/left_menu', $menu_details);
						$this->load->view('admin/destination/edit', $data);
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
