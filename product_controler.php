<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends MY_Controller {
	function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->helper('form');
		$this->load->helper('url');
		$this->lang->load('en_admin', 'english');
		//$this->form_validation->set_error_delimiters('<div class="alert alert-warning" role="alert">', '</div>'); 
		$this->load->model('Product_model');
	}

	public function index(){
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {
		$error['error']='';
		
		$header['page_title'] = "Product List";

 		$page = 1;		

		$products = $this->Product_model->getAllProducts($page);

		// Create the data array to pass to view
		$data['session'] = $this->session->userdata;
		$data['products'] = $products;
		$this->load->view('common/header', $header);
		$this->load->view('common/left_menu', $data);
		$this->load->view('products/products_list', $data);
		$this->load->view('common/footer');
		}
		else
		{
			redirect('login');
		}
	}
	public function upload(){
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {	
			$this->load->helper(array('form', 'file', 'url'));
	  
			$this->load->library('form_validation');
			$this->form_validation->set_rules('category','category','trim|required');
			$config_image = array();
			$config_image['upload_path'] = './image';
			$config_image['allowed_types'] = 'jpg|png|gif';
			$config_image['max_size'] = '1024';

	     	$this->form_validation->set_rules('product_name', "Name field is", 'required');
			$this->form_validation->set_rules('description', "Description field is required", 'required');

		$this->load->library('upload',$config_image);
		if($this->form_validation->run()==false and empty($_FILES['userfile']['name'][0])){
			$error = array(
				'error_image' => 'Please choose image to upload',
				'error_name' => 'Please complete name'
				);

			$header['page_title'] = "Product Add";

			// Create the data array to pass to view
			$data['session'] = $this->session->userdata;
	        $product_data['categories'] = $this->Product_model->getParentCategories();
	        $product_data['brands'] = $this->Product_model->getAllBrands();
	        $product_data['colors'] = $this->Product_model->getAllColors();
	        $product_data['conditions'] = $this->Product_model->getAllConditions();  
			$this->load->view('common/header', $header);
			$this->load->view('common/left_menu', $data);
			$this->load->view('products/product_upload', $product_data);
			$this->load->view('common/footer');		
		}

		elseif ($this->form_validation->run() == TRUE) {

		$this->upload->do_upload();
		$data = array('upload_data' => $this->upload->data());
    	$this->image_resize($data['upload_data']['full_path'], $data['upload_data']['file_name']);
	    		$product_info = array(
	    		  'prod_uid' => $this->session->userdata('usr_id'),
		          'prod_title' => $this->input->post('product_name'),
		          'prod_desc' => $this->input->post('description'),
		          'prod_cat_id' => $this->input->post('child_cat'),
		          'prod_parent_cat_id' => $this->input->post('category'),
		          'prod_brand' => $this->input->post('brand'),
		          'prod_is_active' => 1,
		          'prod_seller_id' => $this->input->post('customer_email')
				);	
	    		$product_id = $this->Product_model->insert($product_info);
				$count = $this->input->post('count');

				for ($i=1; $i <= $count ; $i++) {
				 $color_array = implode(',', $this->input->post('color_'.$i)); 
					 $varient_info = array(
		    		  'pvar_prod_id' => $product_id,
			          'pvar_title' => $this->input->post('pvar_title_'.$i),
			          'pvar_desc' => $this->input->post('pvar_desc_'.$i),
			          'pvar_sku' => 2134,
			          'pvar_size' => $this->input->post('size_'.$i),
			          'pvar_color' => $color_array,
			          'pvar_condition' => $this->input->post('condition_'.$i),
			          'pvar_list_price' => $this->input->post('pvar_list_price_'.$i),
			          'pvar_sell_price' => $this->input->post('pvar_sell_price_'.$i),
			          'pvar_comm' => $this->input->post('pvar_comm_'.$i),
			          'pvar_min_price' => $this->input->post('pvar_min_price_'.$i),
			          'pvar_max_price' => $this->input->post('pvar_max_price_'.$i),
			          'pvar_is_active' => 1
					);
					   $this->Product_model->insertProductVar($varient_info);
				}
				
		        redirect('products');
			}
		}
		else
		{
			redirect('login');
		}
	}
	public function image_resize($path,$file){
		$config_resize = array();
		$config_resize['image_library'] = 'gd2';
		$config_resize['source_image'] = $path;
		$config_resize['maintian_ratio'] = TRUE;
        $config_resize['width'] = 75;
        $config_resize['height'] = 50;
        $config_resize['new_image'] = './image/thumb/'.$file;
        $this->load->library('image_lib',$config_resize);
        $this->image_lib->resize();
	}
	public	function ajax_call(){
		//check to see people wont go directly
		if (isset($_POST) && isset($_POST['category'])) 
		{
			$mainArr = [];
		    $cid = $_POST['category'];
		    $ciudad = $this->Product_model->getChildCategories($cid);
		    $child_category = [];
		    // $ciudadfinal = array("--Any--");
		    // array_push($child_category, $ciudadfinal);

		    array_push($mainArr, $this->Product_model->getSizesForCat($cid));

		    foreach ($ciudad as $c)
		    {
		        $ciudadfinal[$c->cat_id] = $c->cat_name;
		    }

		    array_push($mainArr, $ciudadfinal);

		    echo json_encode($mainArr);
		}
		else 
		{
		    redirect('index');
		}
	}

     public function product_edit(){
		if ($this->session->userdata('logged_in') == TRUE && $this->session->userdata('rid') == 1 ) {	
     	$product_id = trim($this->uri->segment(3));
     	$this->form_validation->set_rules('product_name', "Name field is required", 'required');
		$this->form_validation->set_rules('category', "Email field is required", 'required');

		$this->form_validation->set_error_delimiters('<p class="alert alert-danger"><a class="close" data-dismiss="alert" href="#">&times;</a>', '</p>');

		if($this->form_validation->run() == TRUE) {
				$data['products'] = array(
						'prod_id' => $product_id,	
						'prod_title' => $this->input->post('product_name'),
						'prod_desc' => $this->input->post('description'),
						'prod_cat_id' => $this->input->post('child_cat'),
						'prod_parent_cat_id' => $this->input->post('category'),
						'prod_brand' => $this->input->post('brand'),
						'prod_seller_id' => $this->input->post('seller')
				);


				$this->Product_model->updateProduct($data['products']);
				$count = $this->input->post('count');
				for ($i=1; $i <= $count ; $i++) {

					if($this->input->post('check_update_'.$i) == 'Edit' )
					{
						
						$color_array = implode(',', $this->input->post('color_'.$i));
						$data['product_vars'] = array(
						'pvar_prod_id' => $product_id,	
						'pvar_id' => $this->input->post('varient_id_'.$i),
						'pvar_title' => $this->input->post('pvar_title_'.$i),
						'pvar_desc' => $this->input->post('pvar_desc_'.$i),
						'pvar_sku' => 2341,
						'pvar_size' => $this->input->post('size_'.$i),
						'pvar_color' => $color_array,
						'pvar_condition' => $this->input->post('condition_'.$i),
						'pvar_list_price' => $this->input->post('pvar_list_price_'.$i),
						'pvar_sell_price' => $this->input->post('pvar_sell_price_'.$i),
						'pvar_min_price' => $this->input->post('pvar_min_price_'.$i),
						'pvar_max_price' => $this->input->post('pvar_max_price_'.$i),
						'pvar_is_active' => 1
						);
						
						$this->Product_model->updateProductVar($data['product_vars']);	
						// echo "<pre>";
						// print_r($data['product_vars']);
						// echo "</pre>";
					}
					elseif($this->input->post('check_update_'.$i) == 'Add')
					{
						
					 $color_array = implode(',', $this->input->post('color_'.$i)); 
					 $varient_info = array(
		    		  'pvar_prod_id' => $product_id,
			          'pvar_title' => $this->input->post('pvar_title_'.$i),
			          'pvar_desc' => $this->input->post('pvar_desc_'.$i),
			          'pvar_sku' => 2134,
			          'pvar_size' => $this->input->post('size_'.$i),
			          'pvar_color' => $color_array,
			          'pvar_condition' => $this->input->post('condition_'.$i),
			          'pvar_list_price' => $this->input->post('pvar_list_price_'.$i),
			          'pvar_sell_price' => $this->input->post('pvar_sell_price_'.$i),
			          'pvar_comm' => $this->input->post('pvar_comm_'.$i),
			          'pvar_min_price' => $this->input->post('pvar_min_price_'.$i),
			          'pvar_max_price' => $this->input->post('pvar_max_price_'.$i),
			          'pvar_is_active' => 1
					);
					  $this->Product_model->insertProductVar($varient_info);
					}
						

					// echo "<pre>";
					// print_r($varient_info);
					// echo "</pre>";

					
								
				}
				   //exit();

				$this->session->set_flashdata('message', 'Product has been updated');

				redirect('products');

			} else {
			     	if(is_numeric($product_id)) {
								$checkProduct = $this->Product_model->checkProduct($product_id);
								if($checkProduct->num_rows() == 1) {
									// Create the data array to pass to view
									$menu_details['session'] = $this->session->userdata;

									// Set Page Title
									$header['page_title'] = "Edit Product";				

									foreach ($checkProduct->result() as $row) {

										$cid = $row->prod_parent_cat_id;
										$data['product'] = array(
											'product_name' => $row->prod_title,
											'description' => $row->prod_desc,
											'parent_category' => $row->prod_parent_cat_id,
											'category' => $row->prod_cat_id,
											'brand' => $row->prod_brand,
											'seller' => $row->mail
										);
		
									}

			    				 }

			    				 $data['product_vars'] = [];
			    				 $checkProductVar = $this->Product_model->checkProductVar($product_id);
			    				 	foreach ($checkProductVar->result() as $row) {

										$tempVars = array(
											'pvar_id' => $row->pvar_id,
											'pvar_prod_id' => $row->pvar_prod_id,
											'pvar_title' => $row->pvar_title,
											'pvar_desc' => $row->pvar_desc,
											'pvar_sku' => $row->pvar_sku,
											'pvar_size' => $row->pvar_size,
											'pvar_color' => explode(",", $row->pvar_color),
											'pvar_condition' => $row->pvar_condition,
											'pvar_list_price' => $row->pvar_list_price,
											'pvar_sell_price' => $row->pvar_sell_price,
											'pvar_min_price' => $row->pvar_min_price,
											'pvar_max_price' => $row->pvar_max_price
										);	

										
										array_push($data['product_vars'], $tempVars);
									}
									$data['prevcount'] = $checkProductVar->num_rows();
									$data['conditions'] = $this->Product_model->getAllConditions();
									$data['brands'] = $this->Product_model->getAllBrands();
									$data['categories'] = $this->Product_model->getParentCategories();
									$data['child_categories'] = $this->Product_model->getChildCategories($cid);
									$data['colors'] = $this->Product_model->getAllColors();
									$data['sizes'] = $this->Product_model->getSizesForCat($cid);
									// echo "<pre>";
									// print_r($data['sizes']);
									// echo "</pre>";
									// exit();
			    				 	$this->load->view('common/header', $header);
									$this->load->view('common/left_menu', $menu_details);
									$this->load->view('products/product_edit', $data);
									$this->load->view('common/footer'); 
						}
					}
		}
		else
		{
			redirect('login');
		}
	}

		
}

?>