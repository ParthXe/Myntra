<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LooksJSON_model extends MY_Model {
    function __construct() {
        parent::__construct();
    }
    public function getJSON($data) {
        $JSONData = [];
		//$this->db->order_by('gender','DESC');
		$this->db->select('id,imagePath');
		$this->db->from('carousel_data');
		$this->db->where('type',$data['type']);
		$this->db->where('gender',$data['gender']);
        $query = $this->db->get();
        // $this->output->enable_profiler(TRUE);
        foreach ($query->result() as $row) {
			$asset_path = "http://".$_SERVER['HTTP_HOST']."/myntra/upload/carousel/";
			$row->imagePath = $asset_path.$row->imagePath;
            $JSONData[] = $row;
        }
		return $JSONData;
    }
	public function getStyles($carousel_id)
	{
		
		$StyleData = [];
		$this->db->select('style_id');
		$this->db->from('styles_data');
		$this->db->where('carousel_id',$carousel_id);
		$query = $this->db->get();
		foreach ($query->result() as $row) {
            $StyleData[] = $row;
        }
		return $StyleData;
	}
}