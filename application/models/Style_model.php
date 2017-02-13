<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Style_model extends MY_Model {
    function __construct() {
        parent::__construct();
    } 
	/*Done*/
	public function addStyleInfo($addData) {
        $this->db->insert('styles_data',$addData);
        return $user_id;
    }
	
    public function getStyleList($page) {
        $sendStyleList = [];
		$this->db->order_by("carousel_id","ASC");
		$this->db->order_by("title","ASC");
        $query = $this->db->get('styles_data');
        foreach ($query->result() as $row) {
			$this->db->select('imagePath');
			$this->db->from('carousel_data');
			$this->db->where('id', $row->carousel_id);
			$query1 = $this->db->get();
			if(count($query1->result()))
			{
				$row->imagePath = $query1->result()[0]->imagePath;
			}
            $sendStyleList[] = $row;
        }
		return $sendStyleList;
    } 
	
    public function checkStyleInfo($did) {
        $this->db->where('a.id', $did);
		$this->db->select('a.*,b.imagePath'); 
		$this->db->from('styles_data a');
		$this->db->join('carousel_data b', 'b.id = a.carousel_id', 'inner');
        $query = $this->db->get();
        return $query;        
    }

    public function updateStyleInfo($data) {
        $this->db->where('id',$data['id']);
        $this->db->update('styles_data',$data);
		
		return $user_id;
    }
	
	public function deleteStyleInfo($data) {
        $this->db->where('id',$data['id']);
        $this->db->delete('styles_data');
    }
	/*Done*/
}