<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class Tag_model extends CI_Model
{
    public function all()
    {
        return $this->db->get('tags')->result();
    }
	      
     public function insert($data)
    {
        $this->db->insert('tags',$data);
    }
    
      public function update($tag_id,$data)
    {
        $this->db->where('tag_id',$tag_id);  
        $this->db->update('tags',$data);
    }
	
    public function delete($tag_id)
   {
	$this->db->where('tag_id',$tag_id);
        $this->db->delete('tags');
   }
   
      public function find($tag_id)
    {
        $this->db->where('tag_id',$tag_id);  
       return $this->db->get('tags')->row();
    }
}

