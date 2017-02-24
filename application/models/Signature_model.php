<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signature_model extends MY_Model {
    function __construct() {
        parent::__construct();
    } 

    public function getAllVideo($id) {
        $video = [];
        $this->db->where('category_id', $id);
        $query = $this->db->get('signature_video');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $video[] = $row;
        }
        return $video;
    } 

    public function getShirtVideo($id) {
        $video = [];
        $this->db->where('category_id', $id);
        $query = $this->db->get('signature_video');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $video[] = $row;
        }
        return $video;
    }

    public function getTshirtVideo($id) {
        $video = [];
        $this->db->where('category_id', $id);
        $query = $this->db->get('signature_video');
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
            $video[] = $row;
        }
        return $video;
    }

    public function checkVideo($did) {
        $this->db->where('Id', $did);
        $query = $this->db->get('signature_video');
        return $query;        
    }

    public function addDenimVideo($addData) {

        $this->db->insert('signature_video',$addData);
        $user_id = $this->db->insert_id();

        return $user_id;
    }

    public function addShirtVideo($addData) {

        $this->db->insert('signature_video',$addData);
        $user_id = $this->db->insert_id();

        return $user_id;
    }

    public function addTshirtVideo($addData) {

        $this->db->insert('signature_video',$addData);
        $user_id = $this->db->insert_id();

        return $user_id;
    }


    public function updateSignatureVideo($data) {
        $this->db->select('thumbnail,video'); 
        $this->db->from('signature_video');   
        $this->db->where('Id', $data['Id']);
        $images_name = $this->db->get()->result();
        if (!empty($data['thumbnail'])) {
            $data['thumbnail'];
        }
        else{
            $data['thumbnail'] = $images_name[0]->thumbnail;
        }

        if (!empty($data['video'])) {
            $data['video'];
        }
        else{
            $data['video'] = $images_name[0]->video;
        }


        $this->db->where('Id',$data['Id']);
        $this->db->update('signature_video',$data);
    }

     public function removeVideo($data){
        switch ($data["action"])
        {
            case "denim":

            $this->db->where('Id',$data['id']);
            $this->db->set('thumbnail',"");
            $this->db->set('video',"");
            $this->db->update('signature_video');

            break;

            case "shirt":

            $this->db->where('Id',$data['id']);
            $this->db->set('thumbnail',"");
            $this->db->set('video',"");
            $this->db->update('signature_video');

            break;

            case "t-shirt":

            $this->db->where('Id',$data['id']);
            $this->db->set('thumbnail',"");
            $this->db->set('video',"");
            $this->db->update('signature_video');

            break;

            default:

            echo "Error";

        }
        
    }

}