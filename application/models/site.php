<?php
class Site extends CI_Model{
	
	public function getProduct($id = ''){
		$this->db->select('*');
		$this->db->from('products');
		if($id != ''){
			$this->db->where('id',$id);
		}
		return $this->db->get()->result_array();
	}
}
?>