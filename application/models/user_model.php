<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class User_model extends CI_Model
{
    public function all()
    {
        return $this->db->get('users')->result();
    }
       
     public function insert($data)
    {
        $this->db->insert('users',$data);
    }
    
      public function update($user_id,$data)
    {
        $this->db->where('user_id',$user_id);  
        $this->db->update('users',$data);
    }
    
      public function find($user_id)
    {
        $this->db->where('user_id',$user_id);  
       return $this->db->get('users')->row();
    }
}

