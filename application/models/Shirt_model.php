<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shirt_model extends MY_Model {
    function __construct() {
        parent::__construct();
    } 

    public function getAllShirtMale($page) {
        $shirts_male = [];
        $query = $this->db->get('shirts_male');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $shirts_male[] = $row;
        }
        return $shirts_male;
    } 

    public function getAllShirtFemale($page) {
        $shirts_female = [];
        $query = $this->db->get('shirts_female');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $shirts_female[] = $row;
        }
        return $shirts_female;
    } 

    public function checkShirtMale($did) {
        $this->db->where('Id', $did);
        $query = $this->db->get('shirts_male');
        return $query;        
    }

    public function checkShirtFemale($did) {
        $this->db->where('Id', $did);
        $query = $this->db->get('shirts_female');
        return $query;        
    }

    public function addShirtMale($addData) {

        $this->db->insert('shirts_male',$addData);
        $user_id = $this->db->insert_id();
        return $user_id;
    }

    public function addShirtFemale($addData) {

        $this->db->insert('shirts_female',$addData);
        $user_id = $this->db->insert_id();
        return $user_id;
    }

    public function updateShirtMale($data) {
    $this->db->select('champion_products_images, trends_images, vintage_images'); 
    $this->db->from('shirts_male');   
    $this->db->where('Id', $data['Id']);
    $images_name = $this->db->get()->result();

    $prev_image = explode(",", $images_name[0]->champion_products_images);

    $image_select=array();
    if(!empty($data['champion_products_images']))
    {
        $image_select[] = $data['champion_products_images'];
        $new_image =  array_merge($image_select,$prev_image);
        $imagesNew = implode(",",$new_image);  
        $data['champion_products_images'] = $imagesNew;  
    }
    else
    {
        $data['champion_products_images'] = $images_name[0]->champion_products_images;
    }

    $prev_trendimage = explode(",", $images_name[0]->trends_images);

    $image_trendselect=array();
    if(!empty($data['trends_images']))
    {
        $image_trendselect[] = $data['trends_images'];
        $new_trendimage =  array_merge($image_trendselect,$prev_trendimage);
        $imagesTrendNew = implode(",",$new_trendimage);  
        $data['trends_images'] = $imagesTrendNew;  
    }
    else
    {
        $data['trends_images'] = $images_name[0]->trends_images;
    }

    $prev_vintageimage = explode(",", $images_name[0]->vintage_images);

    $image_vintageselect=array();
    if(!empty($data['vintage_images']))
    {
        $image_vintageselect[] = $data['vintage_images'];
        $new_vintageimage =  array_merge($image_vintageselect,$prev_vintageimage);
        $imagesVintageNew = implode(",",$new_vintageimage);  
        $data['vintage_images'] = $imagesVintageNew;  
    }
    else
    {
        $data['vintage_images'] = $images_name[0]->vintage_images;
    }


    if (!empty($data['vintage_video'])) {
        $data['vintage_video'];
    }
    else{
        $data['vintage_video'] = $images_name[0]->vintage_video;
    }


        $this->db->where('Id',$data['Id']);
        $this->db->update('shirts_male',$data);
    }

    public function updateShirtFemale($data) {
    $this->db->select('champion_products_images, trends_images, vintage_images'); 
    $this->db->from('shirts_female');   
    $this->db->where('Id', $data['Id']);
    $images_name = $this->db->get()->result();

    $prev_image = explode(",", $images_name[0]->champion_products_images);

    $image_select=array();
    if(!empty($data['champion_products_images']))
    {
        $image_select[] = $data['champion_products_images'];
        $new_image =  array_merge($image_select,$prev_image);
        $imagesNew = implode(",",$new_image);  
        $data['champion_products_images'] = $imagesNew;  
    }
    else
    {
        $data['champion_products_images'] = $images_name[0]->champion_products_images;
    }

    $prev_trendimage = explode(",", $images_name[0]->trends_images);

    $image_trendselect=array();
    if(!empty($data['trends_images']))
    {
        $image_trendselect[] = $data['trends_images'];
        $new_trendimage =  array_merge($image_trendselect,$prev_trendimage);
        $imagesTrendNew = implode(",",$new_trendimage);  
        $data['trends_images'] = $imagesTrendNew;  
    }
    else
    {
        $data['trends_images'] = $images_name[0]->trends_images;
    }

    $prev_vintageimage = explode(",", $images_name[0]->vintage_images);

    $image_vintageselect=array();
    if(!empty($data['vintage_images']))
    {
        $image_vintageselect[] = $data['vintage_images'];
        $new_vintageimage =  array_merge($image_vintageselect,$prev_vintageimage);
        $imagesVintageNew = implode(",",$new_vintageimage);  
        $data['vintage_images'] = $imagesVintageNew;  
    }
    else
    {
        $data['vintage_images'] = $images_name[0]->vintage_images;
    }

    if (!empty($data['vintage_video'])) {
        $data['vintage_video'];
    }
    else{
        $data['vintage_video'] = $images_name[0]->vintage_video;
    }

        $this->db->where('Id',$data['Id']);
        $this->db->update('shirts_female',$data);
    }

    public function removeMaleImage($data){
    $this->db->select('champion_products_images,trends_images,vintage_images'); 
    $this->db->from('shirts_male');   
    $this->db->where('Id', $data['id']);
    $image_delete = $data['image'];
        // $this->output->enable_profiler(TRUE);
        $images_name = $this->db->get()->result();
        if($data['action']=='champion-image')
        {
            $test = $images_name[0]->champion_products_images;
            $test1 = explode(",", $test);
            // print_r($test1);
            // echo $image_delete;
            // exit();
            $imagesNew = "";
            if(count($test1)>1){
            $temp_arr = array();
            for($nn=0;$nn<count($test1);$nn++)
            {
                if($test1[$nn] != $image_delete)
                {
                    $temp_arr[] = $test1[$nn];
                }
            }
             $imagesNew = implode(",",$temp_arr);
            }

            $this->db->where('Id',$data['id']);
            $this->db->set('champion_products_images',$imagesNew);
            $this->db->update('shirts_male');
        }

        if($data['action']=='trends_img')
        {
            $test = $images_name[0]->trends_images;
            $test1 = explode(",", $test);
            // print_r($test1);
            // echo $image_delete;
            // exit();
            $imagesNew = "";
            if(count($test1)>1){
            $temp_arr = array();
            for($nn=0;$nn<count($test1);$nn++)
            {
                if($test1[$nn] != $image_delete)
                {
                    $temp_arr[] = $test1[$nn];
                }
            }
             $imagesNew = implode(",",$temp_arr);
            }
            $this->db->where('Id',$data['id']);
            $this->db->set('trends_images',$imagesNew);
            $this->db->update('shirts_male');
        }

        if($data['action']=='vintage_img')
        {
            $test = $images_name[0]->vintage_images;
            $test1 = explode(",", $test);
            // print_r($test1);
            // echo $image_delete;
            // exit();
            $imagesNew = "";
            if(count($test1)>1){
            $temp_arr = array();
            for($nn=0;$nn<count($test1);$nn++)
            {
                if($test1[$nn] != $image_delete)
                {
                    $temp_arr[] = $test1[$nn];
                }
            }
             $imagesNew = implode(",",$temp_arr);
            }
            $this->db->where('Id',$data['id']);
            $this->db->set('vintage_images',$imagesNew);
            $this->db->update('shirts_male');
        }

        if($data['action']=='vintage_video')
        {
            $this->db->where('Id',$data['id']);
            $this->db->set('vintage_video',"");
            $this->db->update('shirts_male');
        }



    }


    public function removeFemaleImage($data){
    $this->db->select('champion_products_images,trends_images,vintage_images'); 
    $this->db->from('shirts_female');   
    $this->db->where('Id', $data['id']);
    $image_delete = $data['image'];
        // $this->output->enable_profiler(TRUE);
        $images_name = $this->db->get()->result();
        if($data['action']=='champion-image')
        {
            $test = $images_name[0]->champion_products_images;
            $test1 = explode(",", $test);
            // print_r($test1);
            // echo $image_delete;
            // exit();
            $imagesNew = "";
            if(count($test1)>1){
            $temp_arr = array();
            for($nn=0;$nn<count($test1);$nn++)
            {
                if($test1[$nn] != $image_delete)
                {
                    $temp_arr[] = $test1[$nn];
                }
            }
             $imagesNew = implode(",",$temp_arr);
            }

            $this->db->where('Id',$data['id']);
            $this->db->set('champion_products_images',$imagesNew);
            $this->db->update('shirts_female');
        }

        if($data['action']=='trends_img')
        {
            $test = $images_name[0]->trends_images;
            $test1 = explode(",", $test);
            // print_r($test1);
            // echo $image_delete;
            // exit();
            $imagesNew = "";
            if(count($test1)>1){
            $temp_arr = array();
            for($nn=0;$nn<count($test1);$nn++)
            {
                if($test1[$nn] != $image_delete)
                {
                    $temp_arr[] = $test1[$nn];
                }
            }
             $imagesNew = implode(",",$temp_arr);
            }
            $this->db->where('Id',$data['id']);
            $this->db->set('trends_images',$imagesNew);
            $this->db->update('shirts_female');
        }

        if($data['action']=='vintage_img')
        {
            $test = $images_name[0]->vintage_images;
            $test1 = explode(",", $test);
            // print_r($test1);
            // echo $image_delete;
            // exit();
            $imagesNew = "";
            if(count($test1)>1){
            $temp_arr = array();
            for($nn=0;$nn<count($test1);$nn++)
            {
                if($test1[$nn] != $image_delete)
                {
                    $temp_arr[] = $test1[$nn];
                }
            }
             $imagesNew = implode(",",$temp_arr);
            }
            $this->db->where('Id',$data['id']);
            $this->db->set('vintage_images',$imagesNew);
            $this->db->update('shirts_female');
        }


       if($data['action']=='vintage_video')
        {
            $this->db->where('Id',$data['id']);
            $this->db->set('vintage_video',"");
            $this->db->update('shirts_female');
        }



    }

    public function update_order($data)
    {
        $this->db->where('Id',$data['Id']);
        $this->db->set('champion_products_images',$data['champion_products_images']);
        $this->db->update('shirts_male');


    }

   public function update_order_trends($data)
    {
        $this->db->where('Id',$data['Id']);
        $this->db->set('trends_images',$data['trends_images']);
        $this->db->update('shirts_male');


    }

}