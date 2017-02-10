<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signature extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>');
		$this->load->model('Signature_model');
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
			$header['page_title'] = "Video List";
			$page = 1;		
			$id = 1;
			$videos = $this->Signature_model->getAllVideo($id);

			// Create the data array to pass to view
			$menu_details['session'] = $this->session->userdata;

			$data['videos'] = $videos;

			$data['message'] = $this->session->flashdata('message');

			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $menu_details);
			$this->load->view('admin/signature_video/list', $data);
			$this->load->view('admin/common/footer');
		} else {
			redirect('admin/login');
		}
	}

	public function shirt_list() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set Page Title
			$header['page_title'] = "Destination List";
			$page = 1;		
			$id = 2;
			$videos = $this->Signature_model->getShirtVideo($id);

			// Create the data array to pass to view
			$menu_details['session'] = $this->session->userdata;

			$data['videos'] = $videos;

			$data['message'] = $this->session->flashdata('message');

			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $menu_details);
			$this->load->view('admin/signature_video/shirt_list', $data);
			$this->load->view('admin/common/footer');
		} else {
			redirect('admin/login');
		}
	}

	public function tshirt_list() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set Page Title
			$header['page_title'] = "Destination List";
			$page = 1;		
			$id = 3;
			$videos = $this->Signature_model->getTshirtVideo($id);

			// Create the data array to pass to view
			$menu_details['session'] = $this->session->userdata;

			$data['videos'] = $videos;

			$data['message'] = $this->session->flashdata('message');

			$this->load->view('admin/common/header', $header);
			$this->load->view('admin/common/left_menu', $menu_details);
			$this->load->view('admin/signature_video/tshirt_list', $data);
			$this->load->view('admin/common/footer');
		} else {
			redirect('admin/login');
		}
	}



	public function add_denim_video() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set validation rules for view filters

		if(!empty($_FILES['denim_signature_video']['name'])) {

			if(!empty($_FILES['denim_signature_video']['name'])){
           
                $uploadPath = 'upload/signature/denim';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'mp4';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('denim_signature_video')){
                    $fileData = $this->upload->data();
                }
            }

				$time=time();
				$created = date ("Y-m-d H:i:s", $time);				

				if(!empty($_FILES['denim_signature_video']['name'])) {
						$addData = array(
							'category_id' => 1,
							'video' => $_FILES['denim_signature_video']['name'],
							'active' => ($this->input->post('active') == "on") ? 1 : 0,
							'modify' => $created
						);
					} else {
						$addData = [];
					}
					
					$id = $this->Signature_model->addDenimVideo($addData);

					$this->session->set_flashdata('message', 'Denim signature video has been added');

					redirect('admin/signature');				
				
			} else {
				// Create the data array to pass to view
				$menu_details['session'] = $this->session->userdata;

				// Set Page Title
				$header['page_title'] = "Add Signature Video";

				$data['roles'] = $this->Signature_model->getRoles();

				$this->load->view('admin/common/header', $header);
				$this->load->view('admin/common/left_menu', $menu_details);
				$this->load->view('admin/signature_video/add', $data);
				$this->load->view('admin/common/footer');
			}
		} else {
			redirect('admin/login');
		}
	}	


	public function add_shirt_video() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set validation rules for view filters

		if(!empty($_FILES['shirt_signature_video']['name'])) {

			if(!empty($_FILES['shirt_signature_video']['name'])){
           
                $uploadPath = 'upload/signature/shirt';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'mp4';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('shirt_signature_video')){
                    $fileData = $this->upload->data();
                }
            }

				$time=time();
				$created = date ("Y-m-d H:i:s", $time);				

				if(!empty($_FILES['shirt_signature_video']['name'])) {
						$addData = array(
							'category_id' => 2,
							'video' => $_FILES['shirt_signature_video']['name'],
							'active' => ($this->input->post('active') == "on") ? 1 : 0,
							'modify' => $created
						);
					} else {
						$addData = [];
					}
					
					$id = $this->Signature_model->addShirtVideo($addData);

					$this->session->set_flashdata('message', 'Shirt signature video has been added');

					redirect('admin/signature/shirt_list');				
				
			} else {
				// Create the data array to pass to view
				$menu_details['session'] = $this->session->userdata;

				// Set Page Title
				$header['page_title'] = "Add Signature Video";

				$data['roles'] = $this->Signature_model->getRoles();

				$this->load->view('admin/common/header', $header);
				$this->load->view('admin/common/left_menu', $menu_details);
				$this->load->view('admin/signature_video/shirt_add', $data);
				$this->load->view('admin/common/footer');
			}
		} else {
			redirect('admin/login');
		}
	}	


	public function add_tshirt_video() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
			// Set validation rules for view filters

		if(!empty($_FILES['tshirt_signature_video']['name'])) {

			if(!empty($_FILES['tshirt_signature_video']['name'])){
           
                $uploadPath = 'upload/signature/tshirt';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'mp4';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('tshirt_signature_video')){
                    $fileData = $this->upload->data();
                }
            }

				$time=time();
				$created = date ("Y-m-d H:i:s", $time);				

				if(!empty($_FILES['tshirt_signature_video']['name'])) {
						$addData = array(
							'category_id' => 3,
							'video' => $_FILES['tshirt_signature_video']['name'],
							'active' => ($this->input->post('active') == "on") ? 1 : 0,
							'modify' => $created
						);
					} else {
						$addData = [];
					}
					
					$id = $this->Signature_model->addTshirtVideo($addData);

					$this->session->set_flashdata('message', 'Tshirt signature video has been added');

					redirect('admin/signature/tshirt_list');				
				
			} else {
				// Create the data array to pass to view
				$menu_details['session'] = $this->session->userdata;

				// Set Page Title
				$header['page_title'] = "Add Signature Video";

				$data['roles'] = $this->Signature_model->getRoles();

				$this->load->view('admin/common/header', $header);
				$this->load->view('admin/common/left_menu', $menu_details);
				$this->load->view('admin/signature_video/tshirt_add', $data);
				$this->load->view('admin/common/footer');
			}
		} else {
			redirect('admin/login');
		}
	}	

	public function edit() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {

			$did = trim($this->uri->segment(4));

			$this->form_validation->set_rules('active', "Status field is required", 'required');
			//$this->form_validation->set_rules('destination_state', $this->lang->line('signin_email'), 'required');

			$this->form_validation->set_error_delimiters('<p class="alert alert-danger"><a class="close" data-dismiss="alert" href="#">&times;</a>', '</p>');
			$time=time();
			$created = date ("Y-m-d H:i:s", $time);	
			if($this->form_validation->run() == TRUE) {

				if(!empty($_FILES['denim_signature_video']['name'])){
           
                $uploadPath = 'upload/signature/denim';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'mp4';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('denim_signature_video')){
                    $fileData = $this->upload->data();
                }
            }

				$data = array(
					'Id' => $did,
					'category_id' => 1,
					'video' => $_FILES['denim_signature_video']['name'],
					'active' => ($this->input->post('active') == "on") ? 1 : 0,
					'modify' => $created
				);

				$this->Signature_model->updateSignatureVideo($data);

				$this->session->set_flashdata('message', 'Video has been updated');

				redirect('admin/signature');

			} else {
				if(is_numeric($did)) {
				
					$signatureVideo = $this->Signature_model->checkVideo($did);
					if($signatureVideo->num_rows() == 1) {
						// Create the data array to pass to view
						$menu_details['session'] = $this->session->userdata;

						// Set Page Title
						$header['page_title'] = "Edit denim signature video";				

						foreach ($signatureVideo->result() as $row) {
							$data['signature'] = array(
								'id' => $row->Id,
								'category_id' => $row->category_id,
								'video' => $row->video,
								'active' => $row->active,

							);		
						}

						$this->load->view('admin/common/header', $header);
						$this->load->view('admin/common/left_menu', $menu_details);
						$this->load->view('admin/signature_video/edit', $data);
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

	public function shirt_edit() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {

			$did = trim($this->uri->segment(4));

			$this->form_validation->set_rules('active', "Status field is required", 'required');
			//$this->form_validation->set_rules('destination_state', $this->lang->line('signin_email'), 'required');

			$this->form_validation->set_error_delimiters('<p class="alert alert-danger"><a class="close" data-dismiss="alert" href="#">&times;</a>', '</p>');
			$time=time();
			$created = date ("Y-m-d H:i:s", $time);	
			if($this->form_validation->run() == TRUE) {

				if(!empty($_FILES['shirt_signature_video']['name'])){
           
                $uploadPath = 'upload/signature/shirt';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'mp4';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('shirt_signature_video')){
                    $fileData = $this->upload->data();
                }
            }

				$data = array(
					'Id' => $did,
					'category_id' => 2,
					'video' => $_FILES['shirt_signature_video']['name'],
					'active' => ($this->input->post('active') == "on") ? 1 : 0,
					'modify' => $created
				);

				$this->Signature_model->updateSignatureVideo($data);

				$this->session->set_flashdata('message', 'Video has been updated');

				redirect('admin/signature/shirt_list');

			} else {
				if(is_numeric($did)) {
				
					$signatureVideo = $this->Signature_model->checkVideo($did);
					if($signatureVideo->num_rows() == 1) {
						// Create the data array to pass to view
						$menu_details['session'] = $this->session->userdata;

						// Set Page Title
						$header['page_title'] = "Edit shirt signature video";				

						foreach ($signatureVideo->result() as $row) {
							$data['signature'] = array(
								'id' => $row->Id,
								'category_id' => $row->category_id,
								'video' => $row->video,
								'active' => $row->active,

							);		
						}

						$this->load->view('admin/common/header', $header);
						$this->load->view('admin/common/left_menu', $menu_details);
						$this->load->view('admin/signature_video/shirt_edit', $data);
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

	public function tshirt_edit() {
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {

			$did = trim($this->uri->segment(4));

			$this->form_validation->set_rules('active', "Status field is required", 'required');
			//$this->form_validation->set_rules('destination_state', $this->lang->line('signin_email'), 'required');

			$this->form_validation->set_error_delimiters('<p class="alert alert-danger"><a class="close" data-dismiss="alert" href="#">&times;</a>', '</p>');
			$time=time();
			$created = date ("Y-m-d H:i:s", $time);	
			if($this->form_validation->run() == TRUE) {

				if(!empty($_FILES['tshirt_signature_video']['name'])){
           
                $uploadPath = 'upload/signature/tshirt';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'mp4';
                
                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if($this->upload->do_upload('tshirt_signature_video')){
                    $fileData = $this->upload->data();
                }
            }

				$data = array(
					'Id' => $did,
					'category_id' => 3,
					'video' => $_FILES['tshirt_signature_video']['name'],
					'active' => ($this->input->post('active') == "on") ? 1 : 0,
					'modify' => $created
				);

				$this->Signature_model->updateSignatureVideo($data);

				$this->session->set_flashdata('message', 'Video has been updated');

				redirect('admin/signature/tshirt_list');

			} else {
				if(is_numeric($did)) {
				
					$signatureVideo = $this->Signature_model->checkVideo($did);
					if($signatureVideo->num_rows() == 1) {
						// Create the data array to pass to view
						$menu_details['session'] = $this->session->userdata;

						// Set Page Title
						$header['page_title'] = "Edit Tshirt signature video";				

						foreach ($signatureVideo->result() as $row) {
							$data['signature'] = array(
								'id' => $row->Id,
								'category_id' => $row->category_id,
								'video' => $row->video,
								'active' => $row->active,

							);		
						}

						$this->load->view('admin/common/header', $header);
						$this->load->view('admin/common/left_menu', $menu_details);
						$this->load->view('admin/signature_video/tshirt_edit', $data);
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
	public function delete_video()
	{	
		switch ($this->input->post('action'))
        {
            case "denim":

            $data = array(
			'id' => $this->input->post('id'),
			'action' => $this->input->post('action'));
			$path = 'upload/signature/denim/'.$this->input->post('image');
					$this->Signature_model->removeVideo($data);
					unlink($path);

            break;

            case "shirt":

            $data = array(
			'id' => $this->input->post('id'),
			'action' => $this->input->post('action'));
			$path = 'upload/signature/shirt/'.$this->input->post('image');
					$this->Signature_model->removeVideo($data);
					unlink($path);

            break;

            case "t-shirt":

            $data = array(
			'id' => $this->input->post('id'),
			'action' => $this->input->post('action'));
			$path = 'upload/signature/tshirt/'.$this->input->post('image');
					$this->Signature_model->removeVideo($data);
					unlink($path);

            break;

            default:

   			echo "Error";
        }
		
	}


}
