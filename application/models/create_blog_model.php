<?php

Class Create_blog_model extends CI_Model
{
    public function getCat()
    {
        $query= $this->db->get('categories');
        if($query->num_rows()>0){
            return $query->result();
        }
    }
    
    public function getTag()
    {
        $query= $this->db->get('tags');
        if($query->num_rows()>0){
            return $query->result();
        }
    }
    
    public function insert_data($data)
    {
        $this->db->insert("posts",$data);
    }
}