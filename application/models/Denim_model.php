<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Denim_model extends MY_Model {
    function __construct() {
        parent::__construct();
    } 

    public function getAllDenimMale($page) {
        $denim_male = [];
        $query = $this->db->get('denim_male');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $denim_male[] = $row;
        }
        return $denim_male;
    } 

    public function getAllDenimFemale($page) {
        $denim_female = [];
        $query = $this->db->get('denim_female');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $denim_female[] = $row;
        }
        return $denim_female;
    } 

    public function checkDenimMale($did) {
        $this->db->where('Id', $did);
        $query = $this->db->get('denim_male');
        return $query;        
    }

    public function checkDenimFemale($did) {
        $this->db->where('Id', $did);
        $query = $this->db->get('denim_female');
        return $query;        
    }

    public function addDenimMale($addData) {

        $this->db->insert('denim_male',$addData);
        $user_id = $this->db->insert_id();
        return $user_id;
    }

    public function addDenimFemale($addData) {

        $this->db->insert('denim_female',$addData);
        $user_id = $this->db->insert_id();
        return $user_id;
    }

    public function updateDenimMale($data) {
    $this->db->select('champion_products_images, trends_images, vintage_images'); 
    $this->db->from('denim_male');   
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

        $this->db->where('Id',$data['Id']);
        $this->db->update('denim_male',$data);
    }

    public function updateDenimFemale($data) {
    $this->db->select('champion_products_images, trends_images, vintage_images'); 
    $this->db->from('denim_female');   
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

        $this->db->where('Id',$data['Id']);
        $this->db->update('denim_female',$data);
    }

    public function removeMaleImage($data){
    $this->db->select('champion_products_images,trends_images,vintage_images'); 
    $this->db->from('denim_male');   
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
            $this->db->update('denim_male');
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
            $this->db->update('denim_male');
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
            $this->db->update('denim_male');
        }



    } 

   public function removeFemaleImage($data){
    $this->db->select('champion_products_images,trends_images,vintage_images'); 
    $this->db->from('denim_female');   
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
            $this->db->update('denim_female');
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
            $this->db->update('denim_female');
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
            $this->db->update('denim_female');
        }



    }

}