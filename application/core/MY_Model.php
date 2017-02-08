<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_model extends CI_Model {
    function __construct() {
        parent::__construct();
    }

    public function getAllCategories($page) {
        $this->db->select('categories.*, parent.cat_name as parent_name');
        $this->db->join('categories parent', 'parent.cat_id = categories.cat_parent_id', 'left');
        $query = $this->db->get('categories');

        $categories = [];
        foreach ($query->result() as $row) {
            $categories[] = $row;
        }

        return $categories;
    }

    public function getCategories(){
        $this->db->select('cat_id, cat_name');
        $this->db->where('cat_parent_id', 0);
        $query = $this->db->get('categories');

        $tempArr = [];
        foreach ($query->result() as $row) {
            // SELECT * FROM categories as c1 LEFT JOIN categories as c2 on c2.cat_parent_id = c1.cat_id WHERE c1.cat_id = 1

            $this->db->select('c2.cat_id, c2.cat_name');
            $this->db->join('categories c2', 'c2.cat_parent_id = categories.cat_id', 'left');
            $this->db->where('categories.cat_id', $row->cat_id);
            $this->db->where('c2.cat_parent_id IS NOT NULL', null, false);
            $query1 = $this->db->get('categories');     

            if($query1->num_rows() > 0)  {
                foreach ($query1->result() as $row2) {
                    $row->children[] = $row2;

                    $this->db->select('c2.cat_id, c2.cat_name');
                    $this->db->join('categories c2', 'c2.cat_parent_id = categories.cat_id', 'left');
                    $this->db->where('categories.cat_id', $row2->cat_id);
                    $this->db->where('c2.cat_parent_id IS NOT NULL', null, false);
                    $query2 = $this->db->get('categories');

                    foreach ($query2->result() as $row3) {
                        $row2->children[] = $row3;               
                    }                            
                }
            } else {
                $row->children = [];
            }

            $tempArr[] = $row;
        }
        return $tempArr;
    }


    public function getParentCategories($depth){
        $this->db->select('categories.cat_id, categories.cat_name');
        $this->db->where('cat_parent_id', $depth);
        $this->db->where('cat_is_active', 1);
        $query = $this->db->get('categories');
        // echo $this->db->last_query();
        $categories = [];
        foreach ($query->result() as $row) {
            $categories[] = $row;
        }
        return $categories;
    }

    public function getChildCategories($cid){
        $this->db->select('categories.cat_id, categories.cat_name, categories.cat_slug');
        $this->db->where('cat_parent_id', $cid);
        $this->db->where('cat_is_active', 1);
        $query = $this->db->get('categories');
        // echo $this->db->last_query();
        $categories = [];
        foreach ($query->result() as $row) {
            $categories[] = $row;
        }
        return $categories;
	}

    public function getUser($uid) {
        $query = $this->db->get('users');
        // echo $this->db->last_query();
        $users = "";
        foreach ($query->result() as $row) {
            $users = $row;
        }
        return $users;
    }
    public function getParentByID($catId){
        $this->db->select('categories.cat_id, categories.cat_name');
        $this->db->where('cat_parent_id', $catId);
        $this->db->where('cat_is_active', 1);
        $query = $this->db->get('categories');
        // echo $this->db->last_query();
        $pcategories = [];
        foreach ($query->result() as $row) {
            $pcategories[] = $row;
        }
        return $pcategories;
    }

    public function getUserDetailsAddress($uid) {
        $this->db->select('ua.*');
        $this->db->join('users_addresses ua', 'users.uid = ua.ua_uid', 'left');
        $this->db->where('uid', $uid);
        $this->db->where('is_active', 1);
        $this->db->order_by('ua.ua_id', 'desc');
        $this->db->limit(1);
        $query = $this->db->get('users');
        // echo $this->db->last_query();
        $users = "";
        foreach ($query->result() as $row) {
            $users = $row;
        }
        return $users;
    }

    public function getOrders($params){

        // Only if searched by order ID
        if(isset($params['order_id'])) {
            $this->db->where('order_id', $params['order_id']);
        }

        // Only if searched by order email
        if(isset($params['order_email'])) {
            $this->db->like('primary_email', $params['order_email']);
        }        
        $this->db->order_by('order_id', 'desc');
        $query = $this->db->get('orders');
        // $this->output->enable_profiler(TRUE);
        $orders = [];
        foreach ($query->result() as $row) {
            $orders[] = $row;
        }
        return $orders;
    }

    public function getAllBrandsList($page) {
        $query = $this->db->get('brands');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $brands[] = $row;
        }
        return $brands;
    }


    public function getAllBrands() {
        $this->db->where('brand_is_active', 1);
        $query = $this->db->get('brands');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $brands[] = $row;
        }
        return $brands;
    }

    public function getAllColors() {
        $this->db->where('col_is_active', 1);
        $query = $this->db->get('colors');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $colors[] = $row;
        }
        return $colors;
    }

    public function getAllConditions() {
        $this->db->where('cond_is_active', 1);
        $query = $this->db->get('conditions');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $conditions[] = $row;
        }
        return $conditions;
    }

    public function getVariantDetails($pvid){
        $this->db->select('*');
        $this->db->where('pvar_id', $pvid);
        $query = $this->db->get('product_vars');
        // echo $this->db->last_query();
        $variant = "";
        foreach ($query->result() as $row) {
            $variant = $row;
        }
        return $variant;
    }

    public function getCoupon($cid){
        $this->db->where('cp_id', $cid);
        $query = $this->db->get('coupons');
        // echo $this->db->last_query();
        $coupon = "";
        foreach ($query->result() as $row) {
            $coupon = $row;
        }
        return $coupon;
    }

    public function getCouponByCode($code){
        $this->db->where('cp_code', $code);
        $query = $this->db->get('coupons');
        // echo $this->db->last_query();
        $coupon = "";
        foreach ($query->result() as $row) {
            $coupon = $row;
        }
        return $coupon;
    }


    public function getStates($country){
        $this->db->select('state_name, state_2_code');
        $this->db->where('country_name', $country);
        $query = $this->db->get('country_states');
        // echo $this->db->last_query();
        $coupon = [];
        foreach ($query->result() as $row) {
            $coupon[] = $row;
        }
        return $coupon;
    }

    public function user_load($uid) {

        //verify user by mail id and password
        $this->db->where('uid', $uid);
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
                'mobile'    =>  $row->mobile,
                'points'    =>  $this->get_user_points($row->uid),
                'address'   =>  $this->get_user_address($row->uid));
            }
        }else{
            //if user not exist
            $userdata = [];
        }
        return $userdata;
    }

    public function user_load_mail($mail) {

        //verify user by mail id and password
        $this->db->where('mail', $mail);
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
    }    


    public function getSelectedCategories($depth){
        $this->db->select('categories.cat_id,categories.cat_name, categories.cat_parent_id');
        $this->db->where('cat_id', $depth);
        $this->db->where('cat_is_active', 1);
        $query = $this->db->get('categories');
        // echo $this->db->last_query();
        $categories = [];
        foreach ($query->result() as $row) {
            $categories['parent'] = array('parent_id' => $row->cat_parent_id);
            $this->db->select('categories.cat_id, categories.cat_name,categories.cat_parent_id');
            $this->db->where('cat_id', $row->cat_parent_id);
            $this->db->where('cat_is_active', 1);
            $query1 = $this->db->get('categories');
            foreach ($query1->result() as $row) {
                $categories['main'] = array('main_id' => $row->cat_parent_id);

             }

        }
        return $categories;
    }

    public function getIdbySlug($slug, $table, $column){

       // $this->db->select($table.$column);
        $this->db->where( $column, $slug);
        $query = $this->db->get($table);
        foreach ($query->result() as $row) {
            return $row;
        }
    }



    public function get_user_points($user_id){
        
        $this->db->where('uid', $user_id);
        $query = $this->db->get('userpoints');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $pointsdata =   $row->points;
            }
        } else {
            $pointsdata = 0;
        }
        return $pointsdata;
    }


    public function get_user_address($user_id){ 
        $this->db->where('ua_uid', $user_id);
        $query = $this->db->get('users_addresses');
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $address[]  =   array(  'id'        =>$row->ua_id,
                                        'name'      =>$row->ua_name,
                                        'address1'  =>$row->ua_address_1,
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

    public function cart_details($key, $column){

        // $this->db->select('cart.cart_prod_vars, cart.');
        $this->db->where($column, $key);
        $cartQuery = $this->db->get('cart')->row();

        $cart = [];
        if($cartQuery != "") {
            $cart['details'] = $cartQuery;

            foreach (json_decode($cartQuery->cart_prod_vars) as $varId) {
                $this->db->join('products', 'product_vars.pvar_prod_id = products.prod_id', 'left');
                $this->db->join('conditions', 'product_vars.pvar_condition = conditions.cond_id', 'left');
                $this->db->join('filter_vals', 'product_vars.pvar_size = filter_vals.ftv_id', 'left');
                $this->db->join('colors', 'product_vars.pvar_color = colors.color_id', 'left');
                $this->db->join('brands', 'products.prod_brand = brands.brand_id', 'left');
                $this->db->where('product_vars.pvar_id', $varId);
                $query = $this->db->get('product_vars');
                
                if ($query->num_rows() > 0) {
                    foreach ($query->result() as $row) {
                        $discount   =   round(($row->pvar_list_price-$row->pvar_sell_price)/$row->pvar_list_price*100);
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

                        $this->db->select('product_images.prd_img_uri');
                        $this->db->where('product_images.prd_img_prd_var_id', $row->prod_id);
                        $imgCartQuery = $this->db->get('product_images')->row();

                        $cart['products'][] = array(
                            'product_id'    => $row->prod_id,
                            'product_slug'  => $row->prod_slug,
                            'pvar_id'       => $row->pvar_id,
                            'title'         => $row->pvar_title,
                            'condition'     => $row->cond_name,
                            'list_price'    => round($row->pvar_list_price),
                            'sell_price'    => round($row->pvar_sell_price),
                            'size'          => $row->ftv_name,
                            'discount'      => $discount,
                            'color'         => $color_data,
                            'brand'         => $row->brand_name,
                            'product_code'  => $row->pvar_sku,  
                            'images'        => $imgCartQuery->prd_img_uri
                        );  
                    }
                }
            }

            if($cartQuery->cart_coupon_applied != "") {
                $cart['coupon'] = $this->getCouponByCode($cartQuery->cart_coupon_code);
            }            
        } 
        return $cart;
    }

    public function getVarDetails($varId){
        $this->db->join('products', 'product_vars.pvar_prod_id = products.prod_id', 'left');
        $this->db->join('conditions', 'product_vars.pvar_condition = conditions.cond_id', 'left');
        $this->db->join('filter_vals', 'product_vars.pvar_size = filter_vals.ftv_id', 'left');
        $this->db->join('colors', 'product_vars.pvar_color = colors.color_id', 'left');
        $this->db->join('brands', 'products.prod_brand = brands.brand_id', 'left');
        $this->db->where('product_vars.pvar_id', $varId);
        $query = $this->db->get('product_vars');
        
        $products = [];
        if ($query->num_rows() > 0) {
           
            foreach ($query->result() as $row) {
                $discount   =   round(($row->pvar_list_price-$row->pvar_sell_price)/$row->pvar_list_price*100);
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
                $products[] = array(
                    'product_id'    =>$row->prod_id,
                    'pvar_id'       =>$row->pvar_id,
                    'title'         =>$row->pvar_title,
                    'condition'     =>$row->cond_name,
                    'list_price'    =>round($row->pvar_list_price),
                    'sell_price'    =>round($row->pvar_sell_price),
                    'size'          =>$row->ftv_name,
                    'discount'      =>$discount,
                    'color'         =>$color_data,
                    'brand'         =>$row->brand_name,
                    'product_code'  =>$row->pvar_sku,  
                    'images'        =>'https://www.pretmode.com/sites/default/files/styles/product_detail/public/644_5.jpg?itok=ov0AywOo'
                );  
            }
        }
        return $products;
    }

    public function checkCouponExists($code) {
        $this->db->where('cp_code', $code);
        $query = $this->db->get('coupons');
        if($query->num_rows() > 0) {
            return false;
        } else {
            return true;
        }
    }

    public function checkCouponIfApplicable($data) {

        $coupon = $this->getCoupon($data['coupon_id']);

        $returnData = [];
        // Check if this is the order total coupon
        if(isset($coupon->cp_min_order) && $data['order_total'] < $coupon->cp_min_order) {
            $returnData = array('status' => 2, 'msg' => "Coupon applicable only above ".$coupon->cp_min_order);
            return json_encode($returnData);
        } elseif(!empty(json_decode($coupon->cp_applicable_products)) && sizeof(array_intersect(json_decode($data['var_id']), json_decode($coupon->cp_applicable_products))) == 0 ) {
            $returnData = array('status' => 2, 'msg' => $coupon->cp_desc);
            return json_encode($returnData);
        } else {
            $returnData = array('status' => 1, 'msg' => "SUCCESS", 'amt' => $coupon->cp_value, 'type' => $coupon->cp_type);
            return json_encode($returnData);
        }
    }

    public function featured_products(){
       /* print_r($data);
        exit();*/
       // $this->db->from('');   
       $this->db->select('products.*,product_vars.pvar_discount,
                        product_vars.pvar_list_price,product_vars.pvar_sell_price,product_vars.pvar_stock,product_vars.pvar_stock,filter_vals.ftv_name,brands.brand_name,conditions.cond_name,
                        filter_vals.ftv_id,
                        product_images.prd_img_uri as img');    
        
        $this->db->join('product_vars', 'products.prod_id = product_vars.pvar_prod_id', 'left'); 
        $this->db->join('product_images', 'product_images.prd_img_prd_id = products.prod_id', 'left'); 
       // $this->db->join('categories', 'categories.cat_id = products.prod_parent_cat_id', 'left');
        $this->db->join('conditions', 'product_vars.pvar_condition = conditions.cond_id', 'left');
        $this->db->join('filter_vals', 'product_vars.pvar_size = filter_vals.ftv_id', 'left');
        $this->db->join('cat_filters_vals', ' filter_vals.ftv_id = cat_filters_vals.ctf_filter_val_id', 'left');
        $this->db->join('colors', 'product_vars.pvar_color = colors.color_id', 'left');
        $this->db->join('brands', 'brands.brand_id = products.prod_brand', 'left');
        $this->db->where('products.prod_featured', 1);
        $this->db->group_by('products.prod_id');
        $this->db->limit(4);

        $query=$this->db->get('products');
        $count = $query->num_rows();
        $data = [];
        $product_data = [];

        if ($query->num_rows() > 0) {
        
            foreach ($query->result() as $row) {
               // / echo $row->pvar_list_price." ".$row->pvar_sell_price;             

                $product_data[] = array('product_id'    =>  $row->prod_id,
                                        'product_slug'  =>  $row->prod_slug,
                                        'prod_title'    =>  $row->prod_title,
                                        'condition'     =>  $row->cond_name,
                                        'list_price'    =>  round($row->pvar_list_price),
                                        'sell_price'    =>  round($row->pvar_sell_price),
                                        'size'          =>  $row->ftv_name,
                                        'discount'      =>  $row->pvar_discount,
                                        'brand'         =>  $row->brand_name,
                                        'images'        =>  $row->img
                                    );
            }
        }else {
            $product_data=[];
        }
        $data['products'] = $product_data;
        return $product_data;
    }  

    public function getCartTotal($vars) {
        $sell_price = 0;
        foreach ($vars as $key => $value) {
            $this->db->where('pvar_id', $value);
            $query = $this->db->get('product_vars')->row();

            $sell_price += round($query->pvar_sell_price);
        }

        return $sell_price;
    }

    public function getCouponAmt($cartTotal, $code) {
        $this->db->where('cp_code', $code);
        $coupon = $this->db->get('coupons')->row();

        if($coupon->cp_value != ""){
            if($coupon->cp_type == "percentage"){
                $discount = $cartTotal * $coupon->cp_value / 100;
            }
        }

        return $discount;
    }

    public function getRoles(){
        $query = $this->db->get('role');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $roles[] = $row;
        }
        return $roles;
    }

    public function getUserRoles($uid) {
        $this->db->select('role.r_name, role.rid');
        $this->db->join('role', 'role.rid = users_roles.ur_rid', 'left');
        $this->db->where('ur_uid', $uid);
        $query = $this->db->get('users_roles');
        $roles = [];
        foreach ($query->result() as $row) {
            $roles[] = $row;
        }
        return $roles;
    }

}