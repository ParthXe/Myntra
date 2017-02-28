<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Destination_model extends MY_Model {
    function __construct() {
        parent::__construct();
    } 

    public function getAllDestination($page) {
        $destination = [];
        $query = $this->db->get('destination');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $destination[] = $row;
        }
        return $destination;
    } 

    public function checkDestination($did) {
        $this->db->where('Id', $did);
        $query = $this->db->get('destination');
        return $query;        
    }

    public function addDestination($addData) {

        $this->db->insert('destination',$addData);
        $user_id = $this->db->insert_id();

        return $user_id;
    }

    public function updateDestination($data) {
    $this->db->select('destination_bg_image,destination_images,destination_matching_male_img,destination_matching_female_img'); 
    $this->db->from('destination');   
    $this->db->where('Id', $data['Id']);
    $images_name = $this->db->get()->result();

    $prev_image = array();
    if(!empty($images_name[0]->destination_images)){
        $prev_image = explode(",", $images_name[0]->destination_images);
    }

    $image_select=array();
    if(!empty($data['destination_images']))
    {
        $image_select[] = $data['destination_images'];
        $new_image =  array_merge($image_select,$prev_image);
        $imagesNew = implode(",",$new_image);  
        $data['destination_images'] = $imagesNew;  
    }
    else
    {
        $data['destination_images'] = $images_name[0]->destination_images;
    }

    if (!empty($data['destination_bg_image'])) {
        $data['destination_bg_image'];
    }
    else{
        $data['destination_bg_image'] = $images_name[0]->destination_bg_image;
    }

    if (!empty($data['destination_matching_male_img'])) {
        $data['destination_matching_male_img'];
    }
    else{
        $data['destination_matching_male_img'] = $images_name[0]->destination_matching_male_img;
    }

    if (!empty($data['destination_matching_female_img'])) {
        $data['destination_matching_female_img'];
    }
    else{
        $data['destination_matching_female_img'] = $images_name[0]->destination_matching_female_img;
    }

        $this->db->where('Id',$data['Id']);
        $this->db->update('destination',$data);
    }

    public function removeImage($data){
    $this->db->select('destination_images'); 
    $this->db->from('destination');   
    $this->db->where('Id', $data['id']);
    $image_delete = $data['image'];
        // $this->output->enable_profiler(TRUE);
        $images_name = $this->db->get()->result();
        $test = $images_name[0]->destination_images;
        $test1 = explode(",", $test);
       // print_r($test1);
       // echo $image_delete;
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
        $this->db->set('destination_images',$imagesNew);
        $this->db->update('destination');

    }


 public function removeSingleImage($data){
        switch ($data["action"])
        {
            case "bg-image":

            $this->db->where('Id',$data['id']);
            $this->db->set('destination_bg_image',"");
            $this->db->update('destination');

            break;

            case "matching-male":

            $this->db->where('Id',$data['id']);
            $this->db->set('destination_matching_male_img',"");
            $this->db->update('destination');

            break;

            case "matching-female":

            $this->db->where('Id',$data['id']);
            $this->db->set('destination_matching_female_img',"");
            $this->db->update('destination');

            break;

            default:

            echo "Error";

        }
        
    }

    public function update_order($data)
    {
        $this->db->where('Id',$data['Id']);
        $this->db->set('destination_images',$data['destination_images']);
        $this->db->update('destination');


    }
}