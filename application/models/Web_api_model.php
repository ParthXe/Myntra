<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Web_api_model extends MY_model {
    function __construct() {
        parent::__construct();
    }

    public function insertReturnProducts($data){
    	
        $ret = $this->db->insert('request_return',$data);
		return $ret;
    }

    public function user_login($data){
    
       	//check if  user  mail id exist
       	$exist  	=	$this->verify_user($data['mail']);
       	//if  return value is 1 user exist
       	if ($exist==1) {
       		//verify user by mail id and password
       		$this->db->where('mail', $data['mail'])->where('pass', sha1($data['password']));


            
        	$query = $this->db->get('users');
        	//if  return value is greater than 0 user exist
	        if ($query->num_rows() > 0) {
	        	//fetch user information
	            foreach ($query->result() as $row) {
	            	$userdata = array(
	            						'uid'		=>	$row->uid,
	            						'mail'		=>	$row->mail,
	            						'first_name'=>	$row->fname,
	            						'last_name'	=>	$row->lname,
	            						'points' 	=>	$this->get_user_points($row->uid),
	            						'address' 	=>	$this->get_user_address($row->uid));
	            }
	        }else{
	        	//if user not exist
	            $userdata = [];
	        }
	        return $userdata;
	    }else{
	    	//if user not exist
       	}
    }
 	

	public function user_registeration($data){
    
       	 	//check if  user  mail id exist
       	$exist =	$this->verify_user($data['mail']);
       	//if  return value is 1 user exist
       	if ($exist == 1) {
       		//if exist mail is registered and set value is 2;
			$user_mail	= array('status' => 2);
    	}else{
    		//if user is new a record will be inserted and return value is 1
    		$user_mail = $this->db->insert('users',$data);

    		$user = $this->user_load($this->db->insert_id());

    		$user_mail	= array('status' => 1, 'data' => $user);
    	}
    	return $user_mail;
    }
	

	public function verify_user($data){
    
       	//$this->db->select('users.*');
        $this->db->where('mail', $data);
        $query = $this->db->get('users');
        if ($query->num_rows() > 0) {
            $user_exists	=	1;
        }else{
            $user_exists 	= 	0;
        }
        return $user_exists;
    }


 	
    public function get_category() {
    	$cat=$this->get_main_category();
       
    
        $prices_data=  array("100-500",
                              "501-1000",
                              "1001-1500",
                              "1501-2000",
                              "2001-4000",
                              "4001-6000",
                              "6001-8000",
                              "8001-10000",
                              "10001 & above" );
    	
        $categories = [];
    	foreach ($cat as $key => $value) {
           $type_data = $this->get_subcategory($value->cat_id);
        //echo            $this->db->last_query();
      		$categories[]	=	array(
                                            'parent_tid'	=> $value->cat_id,
                                            'parent_name'	=> $value->cat_name,
                                            'type'		    => $type_data,
                                            'size'          => $this->get_sizes($value->cat_id),
                                        );
        }            



        $conditions_data  =   $this->getAllConditions();
        foreach ( $conditions_data as $key => $value) {
            $cond[]  = $value->cond_name;
        }

        $colors_data      = $this->getAllColors();
        foreach ( $colors_data as $key => $value) {
            $col_data[]  = array('child_tid'=>$value->color_id,
                               'color' =>$value->color_name);
        }
        $brand_data      = $this->getAllBrands();
        foreach ( $brand_data as $key => $value) {
                $b_data[]  = array('child_tid'=>$value->brand_id,
                                'brand_name' =>$value->brand_name);

        }
      
        $data  = array(
                    'categories'    =>  $categories,
                    'color'         =>  $col_data,
                    'brand'         =>  $b_data,
                    'conditions'    =>  $cond,
                    'price'         =>  $prices_data
                );
        
        return $data;
    }



    public function get_main_category(){
        $this->db->select('cat_name,cat_id');
        $this->db->where('cat_parent_id',1);
       
        $query=  $this->db->get('categories');
        //  echo $this->db->last_query();
        // exit();
        if ($query->num_rows() > 0) {
          foreach ($query->result() as $row) {
                $return_data []   = $row; 
                }
            }else{
                $return_data=[];   
            }
//            print_r($return_data);
    return $return_data;
    }



    public function get_subcategory($cat_id) {

    	$this->db->where('cat_parent_id', $cat_id);
 		$query = $this->db->get('categories');
 		  	if ($query->num_rows() > 0) {
            	foreach ($query->result() as $row) {
            		$data[]	=	array(	'child_tid'		=>$row->cat_id,
            							'child_name'	=>$row->cat_name);
            }

         
        }else{
            $data = [];
        }
        return $data;
    }


    public function get_sizes($cat_id) {
     
//        $this->db->select('filter_vals.ftv_id','filter_vals.ftv_name');
        $this->db->join('cat_filters_vals', ' filter_vals.ftv_id = cat_filters_vals.ctf_filter_val_id', 'left'); 
        $this->db->where('ctf_cat_id', $cat_id);
        $this->db->group_by('filter_vals.ftv_name');
        $query = $this->db->get('filter_vals');
            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[]   =   array(  'child_tid'=>$row->ftv_id,
                                        'sizes'    =>$row->ftv_name);
            }
         
        }else{
            $data = null;
        }
        return $data;
    }


    public function get_user_points($user_id){
        
        $this->db->where('uid', $user_id);
        $query = $this->db->get('userpoints');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $pointsdata =   $row->points;
            }
        }else{
            $pointsdata = 0;
        }    
        return $pointsdata;
    }   


    public function get_user_address($user_id){ 
        $this->db->where('ua_uid', $user_id);
        $query = $this->db->get('users_addresses');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $address[]  =   array(  'address1'  =>$row->ua_address_1,
                                        'address2'  =>$row->ua_address_2,
                                        'city'      =>$row->ua_city,
                                        'zipcode'   =>$row->ua_pincode,
                                        'state'     =>$row->ua_state,
                                        'mobile'    =>$row->ua_mobile);
            }
        }else{
            $address = null;
        }
        return $address;
    }  



    public function add_address($data) {
 		$insert_catch	=	$this->db->insert('users_addresses',$data);
 		if ($insert_catch>=1) {
 			$status=1;
 		}else{
            $status = 0;
        }
        return $status;
    }  

    public function product_details($data) {
 	 	//$this->db->select('product_vars.*', 'conditions.cond_name');
        $this->db->join('products', 'product_vars.pvar_prod_id = products.prod_id', 'left');
        $this->db->join('conditions', 'product_vars.pvar_condition = conditions.cond_id', 'left');
        $this->db->join('filter_vals', 'product_vars.pvar_size = filter_vals.ftv_id', 'left');
        $this->db->join('colors', 'product_vars.pvar_color = colors.color_id', 'left');
        $this->db->join('brands', 'products.prod_brand = brands.brand_id', 'left');
        $this->db->where('pvar_prod_id', $data['pvar_prod_id']);
     	$query = $this->db->get('product_vars');
	   	$images = [
        "http://pretmode.com/pretmode_live/sites/default/files/styles/product_mobile/public/Sherry%20Catalogue%20%2822nd%20December%202015%297191.jpg?itok=tGq5uo5y",
        "http://pretmode.com/pretmode_live/sites/default/files/styles/product_mobile/public/Sherry%20Catalogue%20%2822nd%20December%202015%297199%201.jpg?itok=rXVyRQ8G",
        "http://pretmode.com/pretmode_live/sites/default/files/styles/product_mobile/public/Sherry%20Catalogue%20%2822nd%20December%202015%297209%201.jpg?itok=eh1lthLa",
        "http://pretmode.com/pretmode_live/sites/default/files/styles/product_mobile/public/Sherry%20Catalogue%20%2822nd%20December%202015%297211.jpg?itok=J-c3_Nig",
        "http://pretmode.com/pretmode_live/sites/default/files/styles/product_mobile/public/Sherry%20Catalogue%20%2822nd%20December%202015%297214%201.jpg?itok=rKHuUy7q"
      ];

    	    $products = [];
	        foreach ($query->result() as $row) {
	        	$discount	=	round(($row->pvar_list_price-$row->pvar_sell_price)/$row->pvar_list_price*100);
                $color_data=[];

                $color_exploded =explode(",", $row->pvar_color);
                foreach ($color_exploded as $key => $value) {
                    $this->db->where('color_id', $value);
                    $color_query = $this->db->get('colors');
                    //if  return value is greater than 0 user exist
                    if ($color_query->num_rows() > 0) {
                        //fetch user information
                        foreach ($color_query->result() as $row_color) {
                           $color_data[] =array( 'tid'   =>  $row_color->color_id,
                                            'name'  =>  $row_color->color_name,
                                            'hex'   =>  $row_color->color_hexcode) ;
                        }
                    }
                }           
          
                $products[] = array(
	            	'product_id'	=>$row->pvar_prod_id,
	            	'title'			=>$row->prod_title,
	            	'condition'		=>$row->cond_name,
	            	'category_tid'	=>$row->prod_cat_id,
	            	'list_price'	=>$row->pvar_list_price,
	            	'sell_price'	=>$row->pvar_sell_price,
	            	'stock'			=>$row->pvar_stock,
	            	'size'			=>$row->ftv_name,
	            	'discount'		=>$discount,
	            	'color'			=>$color_data,
	            	'brand'			=>$row->brand_name,
	            	'discription'	=>$row->pvar_desc,
	            	'materials'		=>$row->pvar_measurments,
	            	'measurements'	=>$row->pvar_materials,
	            	'images'		=>  $images,
                    
	            	);
	       ///	 $data	=	array('category_tid'=>$row->prod_parent_cat_id,'product_id'	=> $row->prod_id,'size'=>$row->pvar_size);
    	        
	        }
	 	  
			//$this->similar_products($data);
	    if(!empty($products)) {
            $data1 = array('status' => 1, 'message' => "Success", 'data' => $products);
        } else {
            $data1 = array('status' => 0, 'message' => "Fail" ,'data' => null);
        }
        return $data1; 
    }

 	public function similar_products($data) {
 		
	 	$this->db->join('products', 'product_vars.pvar_prod_id = products.prod_id', 'left');
        $this->db->where('pvar_prod_id', $data['pvar_prod_id']);
     	$query = $this->db->get('product_vars');
/*	    $products['similar'] = array(
	           	'product_id'	=> ,
	         	'title' 		=> ,
	            'condition' 	=> ,
	            'sell_price' 	=> ,
	            'discount' 		=> ,
	            'color' 		=> ,
	            	   	 );*/
	}


	public function stock_validate($data) {
		$this->db->where('pvar_prod_id', $data['pvar_prod_id']);
     	$query = $this->db->get('product_vars');
	}

    public function verify_stock($variant_id){
   
        $product_id = explode(",", $variant_id['pvar_prod_id']);
        foreach ($product_id as $key => $value) {
            $this->db->where('pvar_id', $value)->where('pvar_stock = 0');
            $query = $this->db->get('product_vars');
            // echo $this->db->last_query();
                 foreach ($query->result() as $row) {
                    $stock_available[] = array(   'nid'           =>  $row->pvar_id,
                                                'pvar_title'    =>  $row->pvar_title);
                }

        }
       if (!empty($stock_available)) {
            $resp = array('status' => 0, 'message' => 'Fail','data'=>$stock_available);
        }
        else{
               $resp = array('status' => 1, 'message' => 'Success','data'=>null);
        }
        return $resp; 
    }


    public function retrive_points($data){
    
        //check if  user  mail id exist
        $exist      =   $this->verify_user($data['mail']);
        //if  return value is 1 user exist
        if ($exist==1) {
            //verify user by mail id and password
            $this->db->where('mail', $data['mail']);
            $query = $this->db->get('users');
            //if  return value is greater than 0 user exist
            if ($query->num_rows() > 0) {
                //fetch user information
                foreach ($query->result() as $row) {
                    $userdata = array(
                                        'uid'       =>  $row->uid,
                                        'mail'      =>  $row->mail,
                                        'first_name'=>  $row->fname,
                                        'last_name' =>  $row->lname,
                                        'points'    =>  $this->get_user_points($row->uid),
                                        'address'   =>  $this->get_user_address($row->uid));
                }
            }else{
                //if user not exist
                $userdata = [];
            }
            return $userdata;
        }else{
            //if user not exist
             $userdata = [];
             return $userdata;
        }
    }


    public function coupons($data){
   
       $coupon_valid=[];
        foreach ($data as $key => $value){
            $this->db->where('cp_code', $value);
            $query = $this->db->get('coupons');
            // echo $this->db->last_query();
                 foreach ($query->result() as $row) {
                    $coupon_valid = array(  'coupon_id'     =>  $row->cp_id,
                                            'discount'      =>  $row->cp_value,
                                            'discount_type' =>  $row->cp_type,
                                            'cashback'      =>  $row->cp_cashback_value,
                                            'cashback_type' =>  $row->cp_cashback_type);
                }

        }
        return $coupon_valid;
    }

    public function get_state(){
            $this->db->where('country_name', 'India');
            $this->db->order_by("state_name", "asc");
            $query = $this->db->get('country_states');
            $state_data[]=array( 'state_id'=>'',
                                'state_name'=> '-- Any --');
            foreach ($query->result() as $row) {
                    $state_data[] = array(  'state_id'      =>  $row->state_2_code,
                                            'state_name'    =>  $row->state_name);
            }

        
        return $state_data;
    }

  
    
    public function getProductId($slug) {
        $this->db->where('pvar_slugs', $slug);
        $query = $this->db->get('product_vars');
    }


    public function product_list($data){
       /* print_r($data);
        exit();*/
       // $this->db->from('');   
         $this->db->select('products.*,product_vars.pvar_desc,product_vars.pvar_measurments,product_vars.pvar_materials,product_vars.pvar_slugs,product_vars.pvar_list_price,product_vars.pvar_sell_price,product_vars.pvar_stock,product_vars.pvar_stock,product_vars.pvar_color,filter_vals.ftv_name,brands.brand_name,conditions.cond_name, filter_vals.ftv_id');   

/*SELECT filter_vals.ftv_id, filter_vals.ftv_name FROM cat_filters_vals LEFT JOIN  filter_vals on  filter_vals.ftv_id = cat_filters_vals.ctf_filter_val_id WHERE ctf_cat_id = 4 GROUP BY filter_vals.ftv_name
*/
       // / $this->db->where('prod_cat_id',$data['parent_id']);
/*        $this->db->join('product_vars', 'products.prod_id = product_vars.pvar_prod_id', 'left'); 
       // $this->db->join('products', 'product_vars.pvar_prod_id = products.prod_id', 'left');
        $this->db->join('conditions', 'product_vars.pvar_condition = conditions.cond_id', 'left');
        $this->db->join('cat_filters_vals', ' filter_vals.ftv_id = cat_filters_vals.ctf_filter_val_id', 'left');
        $this->db->join('filter_vals', 'product_vars.pvar_size = filter_vals.ftv_id', 'left');
        $this->db->join('colors', 'product_vars.pvar_color = colors.color_id', 'left');
        $this->db->join('brands', 'brands.brand_id = products.prod_brand', 'left');   

*/

        $this->db->join('product_vars', 'products.prod_id = product_vars.pvar_prod_id', 'left'); 
       // $this->db->join('categories', 'categories.cat_id = products.prod_parent_cat_id', 'left');
        $this->db->join('conditions', 'product_vars.pvar_condition = conditions.cond_id', 'left');
        $this->db->join('filter_vals', 'product_vars.pvar_size = filter_vals.ftv_id', 'left');
        $this->db->join('cat_filters_vals', ' filter_vals.ftv_id = cat_filters_vals.ctf_filter_val_id', 'left');
        $this->db->join('colors', 'product_vars.pvar_color = colors.color_id', 'left');
        $this->db->join('brands', 'brands.brand_id = products.prod_brand', 'left'); 
        if("" != trim($data['child_id'])){
            $this->db->where('cat_id',$data['child_id']);
        }else {
            $this->db->where('cat_parent_id',$data['parent_id']);
            $this->db->join('categories', 'categories.cat_id = products.prod_cat_id', 'left');
        }

        if (trim($data['from_price']) !="" && trim($data['to_price']) !="") {
            $from_price =   $data['from_price'];
            $to_price   =   $data['to_price'];
            $this->db->where('pvar_sell_price BETWEEN '.$from_price.' AND '.$to_price );    
        }

        if (trim($data['color'])!="") {

            $this->db->where_in('pvar_color', array_map("intval", explode(",", $data['color'])));
        }

        if (trim($data['brand']) !="" || $data['brand'] != null) {
            $this->db->where_in('prod_brand',array_map("intval", explode(",", $data['brand'])));
        }

        if (trim($data['size']) != "" || $data['size'] != null ) {
            $this->db->where_in('ftv_id',array_map("intval", explode(",",$data['size'])));

        }

        if (trim($data['condition']) !="") {
            $this->db->where_in('pvar_condition',$data['condition']);
        }

        if (trim($data['sort']) != "") {
            $this->db->order_by('pvar_sell_price',$data['sort']);
        }
        
        if (trim($data['sort_price']) != "") {
            $this->db->where('prod_cat_id',$data['sort_price']);   
        }

        $query=$this->db->get('products');

      /*  echo $this->db->last_query();
        exit();
*/

        $product_data   =   [];
        if ($query->num_rows() > 0) {
            $counter=   $query->num_rows();
        
            foreach ($query->result() as $row) {
               // / echo $row->pvar_list_price." ".$row->pvar_sell_price;
                $discount  =  10;// round(($row->pvar_list_price-$row->pvar_sell_price)/$row->pvar_list_price*100);
                $color_data=[];

                $color_exploded =explode(",", $row->pvar_color);
                foreach ($color_exploded as $key => $value) {
                    $this->db->where('color_id', $value);
                    $color_query = $this->db->get('colors');
                    //if  return value is greater than 0 user exist
                    if ($color_query->num_rows() > 0) {
                        //fetch user information
                        foreach ($color_query->result() as $row1) {
                           $color_data[] =array( 'tid'   =>  $row1->color_id,
                                            'name'  =>  $row1->color_name,
                                            'hex'   =>  $row1->color_hexcode) ;
                        }
                    }
                }               

                $product_data['details'][] = array(
                                        'product_id'    =>  $row->prod_id,
                                        'title'         =>  $row->prod_title,
                                        'condition'     =>  $row->cond_name,
                                        'prod_desc'     =>  $row->prod_desc,
                                        'category_tid'  =>  $row->prod_cat_id,
                                        'list_price'    =>  $row->pvar_list_price,
                                        'sell_price'    =>  $row->pvar_sell_price,
                                        'stock'         =>  $row->pvar_stock,
                                        'size'          =>  $row->ftv_name,
                                        'discount'      =>  $discount,
                                        'color'         =>  $color_data,
                                        'brand'         =>  $row->brand_name,
                                        'discription'   =>  $row->pvar_desc,
                                        'materials'     =>  null,
                                        'measurements'  =>  null,
                                        'url'        =>  'http://pretmode.com/pretmode_live/sites/default/files/styles/product_listing/public/JQ0A7762.jpg?itok=9XWIP6Ft'
                                        
                                        );
                $product_data['counts'] = $counter;
            }
        }else{
             $product_data  =   [];
            }
       return $product_data;
    }




    public function create_order($data){
         
            $order_id = $data['product_data']['order_id'] ;  

            // If order id not found insert the order or else update
            if (trim($order_id) == "" ) {
                $insert_product = $this->db->insert('orders',$data['product_data']);
                $order_id = $this->db->insert_id();
            } else {
                unset($data['product_data']['created']);
                // at the end update user information is given in post
                $this->db->where('order_id', $order_id);
                $updated = $this->db->update('orders', $data['product_data']);
            }

            // Update the products for the order

            // Delete the existing order products
            $this->db->where('order_id', $order_id);
            $this->db->delete('ordered_products'); 

            $product_id_explode = explode(",", $data['products_id']);
            $prod_id_data =[];

            foreach ($product_id_explode as $key => $value) {
                $this->db->from('products p');
                $this->db->where('p.prod_id = pp.pvar_prod_id')->where('pvar_id',$value); 
                $query=$this->db->get('product_vars pp'); 
                if ($query->num_rows()>0) {
                   foreach ($query->result() as $row_prod){ 
                        $prod_id_data   = array(
                                            'product_id'    =>  $row_prod->prod_id,
                                            'product_var_id'=>  $row_prod->pvar_prod_id,
                                            'order_id'      =>  $order_id,
                                            'title'         =>  $row_prod->pvar_title,
                                            'model'         =>  $row_prod->pvar_sku,
                                            'qty'           =>  1,
                                            'cost'          =>  $row_prod->pvar_list_price,
                                            'price'         =>  $row_prod->pvar_sell_price,
                                            'commission'    =>  $row_prod->pvar_comm,
                                            'status'        =>  'IN PROCESS',
                                        );
                       $inserted = $this->db->insert('ordered_products',$prod_id_data);
                    } 
                }
            }

            // apply coupon if applicable else remove
            if(!empty($data['coupon'])) {

                $temp_coupon   = array(
                    'oc_cid'=> $data['coupon']['coupon_id'],
                    'oc_value'=> $data['coupon']['coupon_amount'],
                    'oc_code'=> $data['coupon']['coupon'],
                );

                //check ordercoupon table if exist
                $this->db->where('oc_oid',$order_id);
                $query=$this->db->get('orders_coupons'); 
                //if found any row update coupons
                if ($query->num_rows() >0) {
                    $this->db->where('oc_oid',$order_id);
                    $update_coupons= $this->db->update('orders_coupons',$temp_coupon);
                }else{
                    //else insert in orer table
                    $temp_coupon['oc_oid'] = $order_id ;
                    $this->db->insert('orders_coupons',$temp_coupon);
                }
            } else {
                $this->db->where('oc_oid', $order_id);
                $this->db->delete('orders_coupons');
            }

            // $payment_type = $data['product_data']['payment_method'];

            $response = array(
                'status' => 1,
                'order_id' => $order_id
            );
            
            return $response;

          //  return $catch_row;
    }

    public function coupon_valid($coupon_name){
        $this->db->where('cp_code',$coupon_name)->where('cp_is_active',1);
        $query=$this->db->get('coupons');
        $coupon_row_data=[];
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $coupon_row){ 
               $coupon_row_data = array('oc_cid' =>$coupon_row->cp_id , 'oc_value' =>$coupon_row->cp_value,'cp_type' => $coupon_row->cp_type);
            }

        }else{
            $coupon_row_data = [];
        }
        return $coupon_row_data;
    }

    public function api_order_success($data){
        $this->db->select('orders.order_product_total,orders.order_status,orders.order_id,orders.product_count,orders.created,product_vars.pvar_title,product_vars.pvar_sell_price, product_vars.pvar_sku,filter_vals.ftv_name,colors.color_name,colors.color_id,product_vars.pvar_color,colors.color_hexcode,brands.brand_name');
        //
        $this->db->join('product_vars', 'ordered_products.product_var_id = product_vars.pvar_prod_id', 'left');
        $this->db->join('orders'      , 'orders.order_id = ordered_products.order_id', 'left');
        $this->db->join('filter_vals', 'product_vars.pvar_size = filter_vals.ftv_id', 'left'); 
        $this->db->join('colors'    ,   'product_vars.pvar_color = colors.color_id', 'left');
        $this->db->join('products', 'products.prod_id = product_vars.pvar_prod_id', 'left'); 
        $this->db->join('brands'    ,   'brands.brand_id = products.prod_brand', 'left');
        $this->db->where('orders.order_id',  $data['order_id'],FALSE);

        $query=$this->db->get('ordered_products');
        $throw_row=[];
        $color_data=[];

        if ($query->num_rows()>0) {
            foreach ($query->result() as $order_row){
                $color_exploded =explode(",", $order_row->pvar_color);
                    foreach ($color_exploded as $key => $value) {
                        $this->db->where('color_id', $value);
                        $color_query = $this->db->get('colors');
                                //if  return value is greater than 0 user exist
                        if ($color_query->num_rows() > 0) {
                                    //fetch user information
                            foreach ($color_query->result() as $row_color) {
                                $color_data[] =array(   'tid'   =>  $row_color->color_id,
                                                        'name'  =>  $row_color->color_name,
                                                        'hex'   =>  $row_color->color_hexcode) ;               
                        }
                    }
                }    

                $prod_details = array('title' => $order_row->pvar_title, 
                                                                'sell_price'=>$order_row->pvar_sell_price,
                                                                'product_dode'=>$order_row->pvar_sku,
                                                                'size'  =>$order_row->ftv_name,
                                                                'brand'=>$order_row->brand_name,
                                                                'color'=>$color_data);

                $throw_row[] = array('order_total'  => $order_row->order_product_total, 
                                    'order_status'  => $order_row->order_status,
                                    'order_id'      =>$order_row->order_id,
                                    'product_count' =>$order_row->product_count,
                                    'date'          =>date("d/m/Y", strtotime($order_row->created)),
                                    'product_details'=>  $prod_details,
                                    'images'        =>null );
            }
            
        }else{
            $throw_row=[];
        }

        return $throw_row;
    }



  public function my_order_history($data){
        $this->db->where('orders.uid', $data['user_id'], FALSE);
        $query=$this->db->get('orders');
        $throw_row=[];
        $color_data=[];

        if ($query->num_rows()>0) {
            foreach ($query->result() as $order_row){
                $this->db->select('product_vars.pvar_title, product_vars.pvar_id, products.prod_slug, product_vars.pvar_sell_price, product_vars.pvar_sku, product_vars.pvar_color,filter_vals.ftv_name, brands.brand_name');
                //, product_images.prd_img_uri                
                $this->db->join('product_vars', 'ordered_products.product_var_id = product_vars.pvar_prod_id', 'left');
                $this->db->join('filter_vals', 'product_vars.pvar_size = filter_vals.ftv_id', 'left'); 
                $this->db->join('products', 'products.prod_id = product_vars.pvar_prod_id', 'left'); 
                $this->db->join('brands',   'brands.brand_id = products.prod_brand', 'left');
                //$this->db->join('product_images',   'product_images.prd_img_prd_var_id = product_vars.pvar_id', 'left');
                $this->db->where('order_id', $order_row->order_id);
                $orderPrdQuery = $this->db->get('ordered_products');
                echo $this->db->last_query();
                exit();
                $orderPrd=[];$temp_orderPrd=[];
                if($orderPrdQuery->num_rows() > 0){
                    foreach ($orderPrdQuery->result() as $orderPrd) {
                        $color_exploded =explode(",", $orderPrd->pvar_color);
                        foreach ($color_exploded as $key => $value) {
                                $this->db->where('color_id', $value);
                                $color_query = $this->db->get('colors');
                                        //if  return value is greater than 0 user exist
                                if ($color_query->num_rows() > 0) {
                                            //fetch user information
                                    foreach ($color_query->result() as $row_color) {
                                        $color_data[] = array(
                                                        'tid'   =>  $row_color->color_id,
                                                        'name'  =>  $row_color->color_name,
                                                        'hex'   =>  $row_color->color_hexcode);
                                }
                            }
                        }

                        $orderPrd = (array) $orderPrd;

                        $orderPrd['colors'] = $color_data;

                        $order_row->products[] = $orderPrd;
                        $temp_orderPrd[]= array('title'        => $orderPrd['pvar_title'],
                                                'sell_price'    => $orderPrd['pvar_sell_price'],
                                                'product_code'  => $orderPrd['pvar_sku'],
                                                'size'          => $orderPrd['ftv_name'],
                                                'brand'         => $orderPrd['brand_name'],
                                                'colors'        =>$orderPrd['colors']);

                    }                    
                } else {
                    $order_row->products = [];
                }


                $throw_row[] =array('order_id'      =>$order_row->order_id,
                                    'order_total'   =>$order_row->order_total,
                                    'order_status'  =>$order_row->order_status,
                                    'product_count' =>$order_row->product_count,
                                    'date'          =>date("d/m/Y", strtotime($order_row->created)),
                                    'product_details'=>$temp_orderPrd);


                //array_push($throw_row, $order_row);
                // $throw_row[]= array('order_total'  => $order_row['order_total'], 
                //                     'order_status'  =>$order_row['order_status'],
                //                     'order_id'      =>$order_row['order_id'],
                //                     'product_count' =>$order_row['product_count'],
                //                     'date'          =>date("d/m/Y", strtotime($order_row['created'])),
                //                     'product_details'=>  $order_row,
                //                     'images'        =>null );
            }  
        }
        return $throw_row;
    }


      public function web_my_order_history($uid){
     
        $this->db->where('orders.uid', $uid, FALSE);
        $this->db->where('orders.order_status', 'completed');
        $query=$this->db->get('orders');
        $throw_row=[];
        $color_data=[];

        if ($query->num_rows()>0) {
            foreach ($query->result() as $order_row){
                $this->db->select('product_vars.pvar_title, product_vars.pvar_id, products.prod_slug, product_vars.pvar_sell_price, product_vars.pvar_sku, product_vars.pvar_color,filter_vals.ftv_name, brands.brand_name, product_images.prd_img_uri');                
                $this->db->join('product_vars', 'ordered_products.product_var_id = product_vars.pvar_prod_id', 'left');
                $this->db->join('filter_vals', 'product_vars.pvar_size = filter_vals.ftv_id', 'left'); 
                $this->db->join('products', 'products.prod_id = product_vars.pvar_prod_id', 'left'); 
                $this->db->join('brands',   'brands.brand_id = products.prod_brand', 'left');
                $this->db->join('product_images',   'product_images.prd_img_prd_var_id = product_vars.pvar_id', 'left');
                $this->db->where('order_id', $order_row->order_id);
                $this->db->group_by('product_vars.pvar_id');
                $orderPrdQuery = $this->db->get('ordered_products');

                if($orderPrdQuery->num_rows() > 0){
                    foreach ($orderPrdQuery->result() as $orderPrd) {
                        $color_exploded =explode(",", $orderPrd->pvar_color);
                        foreach ($color_exploded as $key => $value) {
                                $this->db->where('color_id', $value);
                                $color_query = $this->db->get('colors');
                                        //if  return value is greater than 0 user exist
                                if ($color_query->num_rows() > 0) {
                                            //fetch user information
                                    foreach ($color_query->result() as $row_color) {
                                        $color_data[] = array(
                                                        'name'  =>  $row_color->color_name,
                                                        'hex'   =>  $row_color->color_hexcode
                                                    );
                                }
                            }
                        }

                        $orderPrd = (array) $orderPrd;
                        $orderPrd['colors'] = $color_data;
                        $order_row->products[] = $orderPrd;
                    }                    
                } else {
                    $order_row->products = [];
                }
                
                array_push($throw_row, $order_row);
            }  
        }
        return $throw_row;
    }

    public function user_cart($data){
        $this->db->select('cart_id');
        $this->db->where('cart_uid',$data);
        $query = $this->db->get('cart');

        if($query->num_rows() > 0){
            foreach ($query->result() as $row) {
                $cart = $row;
            }

            return $cart->cart_id;
        } else {
            return false;
        }
    }

    public function home_api(){
        $this->db->select('cat_name,cat_id');
        $this->db->where('cat_parent_id',1);
        $query = $this->db->get('categories');
        foreach ($query->result() as $row) {
            $prod_var['category_images'] [] = array('category_tid'   =>  $row->cat_id,
                                'category_name' =>  $row->cat_name,
                                'imgUrl'        =>  'https://www.pretmode.com/sites/default/files/api-icon/top-wear.png>');
        }

        $prod_var['offer_banners'][]  =  array(  'title'     =>  '499 Store',
                                                'xl_image'  =>'https://www.pretmode.com/sites/default/files/app_home/img1_3.jpg',
                                                'l_image'  =>'https://www.pretmode.com/sites/default/files/app_home/img1_4.jpg',
                                                'm_image'  =>'https://www.pretmode.com/sites/default/files/app_home/img1_5.jpg',
                                                's_image'=> 'https://www.pretmode.com/sites/default/files/app_home/img1_6.jpg');

        return  $prod_var ;
    }

    public function cod_validate($zip){
            $this->db->where('zip_code',$zip);
        $query = $this->db->get('zipcodes');
        if ($query->num_rows()>0) {
            $status=1;
        }else{
            $status=0;
        }
        return  $status ;
    }

    public function social_login($data){
        $this->db->where('mail',$data['mail']);
        $query = $this->db->get('users');
        if ($query->num_rows()>0) {
            $status=2;
            $this->db->where('mail', $data['mail']);
            $this->db->set('name',$data['name']);
            $this->db->set('pass',$data['pass']);
            $this->db->set('fname',$data['fname']);
            $this->db->set('lname',$data['lname']);
            $this->db->set('login_type',$data['login_type']);
            $this->db->set('identity_key',$data['identity_key']);
            $this->db->set('last_login',$data['last_login']);
//            $this->db->last_query();
            $updated   =   $this->db->update('users');
            /*if ($updated>=1) {
                $status=1;   
            }else{
                $status=0;
            }*/

            foreach ($query->result() as $row_login) {
                    $userdata = array(
                                        'uid'       =>  $row_login->uid,
                                        'mail'      =>  $row_login->mail,
                                        'first_name'=>  $row_login->fname,
                                        'last_name' =>  $row_login->lname,
                                        'points'    =>  $this->get_user_points($row_login->uid),
                                        'address'   =>  $this->get_user_address($row_login->uid));
             
                }
            }else{
                $catch_insert=$this->db->insert('users',$data);
                $this->db->where('uid',$this->db->insert_id());
                $query = $this->db->get('users');
                if ($query->num_rows()>0) {
                    foreach ($query->result() as $row_login) {
                        $userdata = array(
                                            'uid'       =>  $row_login->uid,
                                            'mail'      =>  $row_login->mail,
                                            'first_name'=>  $row_login->fname,
                                            'last_name' =>  $row_login->lname,
                                            'points'    =>  $this->get_user_points($row_login->uid),
                                            'address'   =>  $this->get_user_address($row_login->uid));
                    }
                }else{
                    //if user not exist
                    $userdata = [];
                }
                
        }
        return  $userdata ;
    }
}