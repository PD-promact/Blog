<?php

class Users_model extends CI_Model
{
	public function __construct(){
		$this->load->database();
	}
	
	public function login($user_name,$password){
		
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('user_name',$user_name);
		$query=$this->db->get();
			if($query->num_rows()==1){
				$result=$query->result();
				return $result[0]->user_id;
			}
			return false;
	}
}