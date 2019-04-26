<?php

class Images extends CI_Model{
	public function display_image(){
		$this->db->select('id, imagepath')->from('gallery');

		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query;
		}
	}

	public function admin_preview(){
		$this->db->select('imagepath')->from('gallery')->where('id', $this->input->post('imageList'));
		$query = $this->db->get();

		if($query->num_rows() > 0){
			return $query->result();
		}
	}

	public function delete(){
		$this->db->where('id', $this->input->post('imageList'))->delete('gallery');
		

		if($this->db->affected_rows() == 1){
			return true;
		}
	}

	public function update(){
		$this->db->select()->from()->where();
	}

	public function add(){
		$this->db->select()->from()->where();
	}
}