<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Post_model extends CI_Model
{
    public function all()
    {
        return $this->db->get('posts')->result();
    }
    
    public function delete($post_id)
    {
        $this->db->where('post_id',$post_id);
        $this->db->delete('posts');
    }
    
     public function insert($data)
    {
        $this->db->insert('posts',$data);
    }
    
      public function update($post_id,$data)
    {
        $this->db->where('post_id',$post_id);  
        $this->db->update('posts',$data);
    }
    
      public function find($post_id)
    {
        $this->db->where('post_id',$post_id);  
       return $this->db->get('posts')->row();
    }
}

