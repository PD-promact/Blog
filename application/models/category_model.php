<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Category_model extends CI_Model
{
    public function all()
    {
        return $this->db->get('categories')->result();
    }
    
    public function delete($category_id)
    {
        $this->db->where('category_id',$category_id);
        $this->db->delete('categories');
    }
    
     public function insert($data)
    {
        $this->db->insert('categories',$data);
    }
    
      public function update($category_id,$data)
    {
        $this->db->where('category_id',$category_id);  
        $this->db->update('categories',$data);
    }
    
      public function find($category_id)
    {
        $this->db->where('category_id',$category_id);  
       return $this->db->get('categories')->row();
    }
}

